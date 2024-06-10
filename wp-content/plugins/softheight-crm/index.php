<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Hook to add admin menu items
add_action( 'admin_menu', 'wc_to_checkoutchamp_admin_menu' );

function wc_to_checkoutchamp_admin_menu() {
    add_menu_page(
        'Softheight CRM',             // Page title
        'Softheight CRM',             // Menu title
        'manage_options',             // Capability
        'wc-to-checkoutchamp',        // Menu slug
        'wc_to_checkoutchamp_dashboard_page', // Function to display the Dashboard page
        'dashicons-admin-generic',    // Icon URL (Dashicon class here)
        6                             // Position
    );

    add_submenu_page(
        'wc-to-checkoutchamp',        // Parent slug
        'Dashboard',                  // Page title
        'Dashboard',                  // Menu title
        'manage_options',             // Capability
        'wc-to-checkoutchamp',        // Menu slug (same as parent to override)
        'wc_to_checkoutchamp_dashboard_page' // Function to display the Dashboard page
    );

    add_submenu_page(
        'wc-to-checkoutchamp',        // Parent slug
        'Integration',                // Page title
        'Integration',                // Menu title
        'manage_options',             // Capability
        'wc-to-checkoutchamp-integration',  // Menu slug
        'wc_to_checkoutchamp_integration_page' // Function to display the Integration page
    );

    add_submenu_page(
        'wc-to-checkoutchamp',        // Parent slug
        'Tools',                      // Page title
        'Tools',                      // Menu title
        'manage_options',             // Capability
        'wc-to-checkoutchamp-tools',  // Menu slug
        'wc_to_checkoutchamp_tools_page' // Function to display the Tools page
    );

    add_submenu_page(
        'wc-to-checkoutchamp',        // Parent slug
        'Settings',                   // Page title
        'Settings',                   // Menu title
        'manage_options',             // Capability
        'wc-to-checkoutchamp-settings', // Menu slug
        'wc_to_checkoutchamp_settings_page' // Function to display the Settings page
    );

    add_submenu_page(
        'wc-to-checkoutchamp',        // Parent slug
        'Upgrade to Pro',             // Page title
        'Upgrade to Pro',             // Menu title
        'manage_options',             // Capability
        'wc-to-checkoutchamp-upgrade', // Menu slug
        'wc_to_checkoutchamp_upgrade_page' // Function to display the Upgrade page
    );
}

// Display callback functions for each page
function wc_to_checkoutchamp_dashboard_page() {
    // Fetch WooCommerce products
    $products_count = wp_count_posts('product')->publish;
    
    // Fetch total integrations (example logic, customize as needed)
    // You would need to replace this with actual logic to fetch integrated products from CheckoutChamp
    $total_integrations = get_option('checkoutchamp_total_integrations', 0);

    // Fetch today's completed orders
    $today = date('Y-m-d');
    $args = array(
        'status' => 'completed',
        'date_created' => $today
    );
    $orders = wc_get_orders($args);
    $orders_count = count($orders);
    require_once plugin_dir_path( __FILE__ ) . 'actions/dashboard_crm.php';
  }

function wc_to_checkoutchamp_integration_page() {
    ?>
    <div class="wrap">
        <h1>Integration</h1>
        <p>Integration settings and options go here.</p>
    </div>
    <?php
}

function wc_to_checkoutchamp_tools_page() {
    ?>
    <div class="wrap">
        <h1>Tools</h1>
        <p>Tools and utilities go here.</p>
    </div>
    <?php
}

function wc_to_checkoutchamp_settings_page() {
    ?>
    <div class="wrap">
        <h1>Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields( 'wc_to_checkoutchamp_options_group' );
            do_settings_sections( 'wc-to-checkoutchamp' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function wc_to_checkoutchamp_upgrade_page() {
    ?>
    <div class="wrap">
        <h1>Upgrade to Pro</h1>
        <p>Information about upgrading to the Pro version goes here.</p>
    </div>
    <?php
}

// Register and add settings
add_action( 'admin_init', 'wc_to_checkoutchamp_settings' );

function wc_to_checkoutchamp_settings() {
    register_setting( 'wc_to_checkoutchamp_options_group', 'checkoutchamp_url', 'sanitize_text_field' );

    add_settings_section(
        'wc_to_checkoutchamp_settings_section', // ID
        'Settings',                             // Title
        'wc_to_checkoutchamp_section_info',     // Callback
        'wc-to-checkoutchamp'                   // Page
    );

    add_settings_field(
        'checkoutchamp_url',                    // ID
        'CheckoutChamp URL',                    // Title
        'checkoutchamp_url_callback',           // Callback
        'wc-to-checkoutchamp',                  // Page
        'wc_to_checkoutchamp_settings_section'  // Section
    );
}

function wc_to_checkoutchamp_section_info() {
    echo 'Enter your settings below:';
}

function checkoutchamp_url_callback() {
    $checkoutchamp_url = esc_attr( get_option( 'checkoutchamp_url' ) );
    echo '<input type="text" name="checkoutchamp_url" value="' . $checkoutchamp_url . '" class="regular-text" />';
}
?>