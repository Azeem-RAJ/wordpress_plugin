<?php
/*
Plugin Name: Softheight CRM
Plugin URI: http://example.com/Softheight-CRM
Description: Redirects WooCommerce products sync to CheckoutChamp for checkout.
Version: 1.0
Author: Softheight Developers
Author URI: http://example.com
License: GPL2
*/

require_once plugin_dir_path(__FILE__) . 'index.php';

if (!defined('ABSPATH')){
  exit;
};

if (!class_exists('softheight_crm')){
  class softheight_crm{
    function __construct(){
      $this->define_constants();
    }
    public function define_constants(){
      define ('softheight_crm_path', plugin_dir_path( __FILE__ ));
      define ('softheight_crm_url', plugin_dir_url( __FILE__ ));
      define ('softheight_crm_verision', '1.0,0');

    }
  }
}
if ((class_exists('softheight_crm'))){
  $softheight_crm = new softheight_crm();
}
/**
 * Enqueue styles for the plugin only on its pages
 */
function softheight_crm_enqueue_styles($hook) {
  $current_screen = get_current_screen();
  // Check if the current page is one of the plugin's pages
  if (strpos($current_screen->base, 'wc-to-checkoutchamp') !== false) {
      // Enqueue custom CRM styles
      wp_enqueue_style('softheight_crm_style', plugin_dir_url(__FILE__) . 'assets/css/crm-style.css', array(), 'softheight_crm_version');

      // Enqueue Bootstrap CSS
      wp_enqueue_style('bootstrap-styles', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1');

      // Enqueue jQuery (Bootstrap requires jQuery)
      wp_enqueue_script('jquery');

      // Enqueue custom JavaScript
      wp_enqueue_script('softheight-crm', plugin_dir_url(__FILE__) . 'assets/js/crm_jquery.js', array('jquery'), null, true);

      // Enqueue Popper.js (Bootstrap 4 dependency)
      wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), '1.12.9', true);

      // Enqueue Bootstrap JavaScript
      wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery', 'popper-js'), '4.0.0', true);


  }
}
add_action('admin_enqueue_scripts', 'softheight_crm_enqueue_styles');


/**
 * Check if WooCommerce is active
 */
function cpf_check_for_woocommerce() {
  if ( class_exists( 'WooCommerce' ) ) {
      // WooCommerce is active, include the file if it exists
      $index_file = plugin_dir_path( __FILE__ ) . 'index.php';
      if ( file_exists( $index_file ) ) {
          require_once $index_file;
      } else {
          // Handle case where index.php does not exist
          // You can log an error or take other appropriate action
      }
  } else {
      // WooCommerce is not active, add admin notice and deactivate this plugin
      add_action( 'admin_notices', 'cpf_woocommerce_required_notice' );
      add_action( 'admin_init', 'cpf_deactivate_plugin' );
  }
}
add_action( 'plugins_loaded', 'cpf_check_for_woocommerce' );

/**
 * Deactivate the plugin if WooCommerce is not active
 */
function cpf_deactivate_plugin() {
  if ( ! class_exists( 'WooCommerce' ) ) {
      deactivate_plugins( plugin_basename( __FILE__ ) );
  }
}

/**
* Admin notice for WooCommerce requirement
*/
function cpf_woocommerce_required_notice() {
  ?>
  <div class="notice notice-error">
      <p>
          <?php _e( 'Softheight CRM requires ', 'Softheight CRM' ); ?>
          <a href="https://wordpress.org/plugins/woocommerce/" target="_blank"><?php _e( 'WooCommerce', 'Softheight CRM' ); ?></a>
          <?php _e( ' to be installed and active.', 'Softheight CRM' ); ?>
      </p>
  </div>
  <?php
}

/**
 * Add custom content to the WordPress admin footer on plugin pages
 */
function softheight_custom_admin_footer() {
  $current_screen = get_current_screen();
  // Check if the current page is one of the plugin's pages
  if ( strpos($current_screen->base, 'wc-to-checkoutchamp') !== false ) {
      ?>
      <script>
          document.addEventListener('DOMContentLoaded', function() {
              var footerContent = document.getElementById('wpfooter');
              if (footerContent) {
                  var customContent = '<p style="text-align: center;">Created With <img draggable="false" role="img" class="emoji" alt="❤" src="https://s.w.org/images/core/emoji/15.0.3/svg/2764.svg"> by <a href="https://softheight.com/" target="_blank">Softheight</a> Team</p>';
                  footerContent.innerHTML = customContent + footerContent.innerHTML;
              }
          });
      </script>
      <?php
  }
}
add_action( 'admin_footer', 'softheight_custom_admin_footer' );

/**
 * Add a unique class to the body tag on your plugin's admin pages
 */
function softheight_crm_admin_body_class($classes) {
  $current_screen = get_current_screen();
  // Check if the current page is one of the plugin's pages
  if (strpos($current_screen->base, 'wc-to-checkoutchamp') !== false) {
      $classes .= ' softheight-crm-admin-page';
  }
  return $classes;
}
add_filter('admin_body_class', 'softheight_crm_admin_body_class');


function add_custom_validation_script() {
  ?>
  <script type="text/javascript">
      jQuery(document).ready(function($) {
          $('#my-plugin-form').submit(function(event) {
              var isValid = true;

              if ($('#crm').val() === '' || $('#api_username').val() === '' || $('#password').val() === '') {
                  isValid = false;
                  alert('Please fill out all required API Credentials fields.');
              }

              if (!isValid) {
                  event.preventDefault();
              }
          });
      });
  </script>
  <?php
}
add_action('wp_footer', 'add_custom_validation_script');

add_action('admin_post_my_form_submit', 'handle_my_form_submit');

add_action('admin_post_my_form_submit', 'handle_my_form_submit');

add_action('admin_post_my_form_submit', 'handle_my_form_submit');

function handle_my_form_submit() {
    global $wpdb;

    if (isset($_POST['username']) && isset($_POST['crm']) && isset($_POST['api_username']) && isset($_POST['password'])) {
        $username = sanitize_text_field($_POST['username']);
        $campaign_id = sanitize_text_field($_POST['campaign_id']);
        $default_shipping_id = sanitize_text_field($_POST['default_shipping_id']);
        $crm = sanitize_text_field($_POST['crm']);
        $api_username = sanitize_text_field($_POST['api_username']);
        $password = sanitize_text_field($_POST['password']);

        // Create a new table if not exists
        $table_name = $wpdb->prefix . "crm_connection";
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            username varchar(255) NOT NULL,
            campaign_id varchar(255) NOT NULL,
            default_shipping_id varchar(255) NOT NULL,
            crm varchar(255) NOT NULL,
            api_username varchar(255) NOT NULL,
            password varchar(255) NOT NULL,
            user_url varchar(255) NOT NULL,
            PRIMARY KEY (id)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);

        // Get user URL from wp_user table
        $current_user = wp_get_current_user();
        $user_url = $current_user->user_url;

        // Insert form data into the table
        $wpdb->insert(
            $table_name,
            array(
                'username' => $username,
                'campaign_id' => $campaign_id,
                'default_shipping_id' => $default_shipping_id,
                'crm' => $crm,
                'api_username' => $api_username,
                'password' => $password,
                'user_url' => $user_url
            )
        );

        // Redirect back to the form page with a success parameter
        $redirect_url = add_query_arg('form_status', 'success', wp_get_referer());
        wp_redirect($redirect_url);
        exit;
    }
}














