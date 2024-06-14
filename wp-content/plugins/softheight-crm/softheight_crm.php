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
function custom_crm_enqueue_styles() {
  // Enqueue custom CRM styles
  wp_enqueue_style('softheight_crm_style', softheight_crm_url . 'assets/css/crm-style.css', array(), 'softheight_crm_verision');

  // Enqueue Bootstrap CSS
  wp_enqueue_style('bootstrap-styles', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.0.0');

  // Enqueue jQuery (Bootstrap requires jQuery)
  wp_enqueue_script('jquery');
  //Enqueue  JavaScript
  wp_enqueue_script('jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array('jquery'), '3.6.0', true);
  // Enqueue Popper.js (Bootstrap 4 dependency)
  wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), '1.12.9', true);
  // Enqueue Bootstrap JavaScript
  wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery', 'popper-js'), '4.0.0', true);

  wp_enqueue_script('softheight_crm_script', plugin_dir_url(__FILE__) . 'assets/js/crm_jquery.js', array('jquery'), '1.0.0', true);


}
add_action('admin_enqueue_scripts', 'custom_crm_enqueue_styles');

