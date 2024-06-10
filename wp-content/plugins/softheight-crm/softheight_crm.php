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

function custom_plugin_enqueue_styles() {
  // Get the URL to the plugin's assets folder
  $plugin_assets_url = plugin_dir_url( __FILE__ ) . 'assets/css/';

  // Enqueue styles.css file
  wp_enqueue_style( 'custom-plugin-styles', $plugin_assets_url . 'crm-style.css', array(), '1.0' );
}
add_action( 'admin_enqueue_scripts', 'custom_plugin_enqueue_styles' );
