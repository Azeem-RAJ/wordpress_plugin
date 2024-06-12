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

// function custom_plugin_enqueue_styles() {

//   wp_enqueue_style( 'custom-plugin-styles', softheight_crm_url. 'assets/css/crm-style.css', array(), 'softheight_crm_verision' );
//   wp_enqueue_style( 'bootstrap-styles', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0');
// }
// add_action( 'admin_enqueue_scripts', 'custom_plugin_enqueue_styles' );


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

function custom_crm_enqueue_styles(){
  wp_enqueue_style('softheight_crm_style', softheight_crm_url . 'assets/css/crm-style.css', 'softheight_crm_verision');
  wp_enqueue_style('bootstrap-styles', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', '4.0.0');
}
add_action('admin_enqueue_scripts','custom_crm_enqueue_styles');
