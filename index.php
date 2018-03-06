<?php
/**
 * Plugin Name:       Custom Google Maps
 * Description:       A simple worpdress plugin that allows you to create google map markers and save custom maps
 * Version:           1.0
 * Author:            Adam Champagne
 * Author URI:        http://adamchampagne.com/
 * Text Domain:       acgmaps
 */

 // Make sure we don't expose any info if called directly
if(!function_exists('add_action')){
  die( 'Hi there!  I\'m just a plugin, not much I can do when called directly.' );
}


// Setup
define( 'MAP_PLUGIN_URL', __FILE__ );


// Includes
include('includes/activate.php'); 
include('includes/init.php'); 
include('includes/admin/init.php');




//Hooks
register_activation_hook( __FILE__, 'acgmap_activate_plugin' );
add_action( 'init', 'acgmap_init' );
add_action( 'admin_init', 'acgmap_admin_init' );


// Shortcodes