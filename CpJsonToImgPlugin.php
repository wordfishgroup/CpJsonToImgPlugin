<?php
/**
 * Plugin Name: CpJsonToImgPlugin
 * Plugin URI: https://github.com/wordfishgroup/CpJsonToImgPlugin
 * Description: This plugin will convert a json file to an image
 * Version: 1.0
 * Author: Wordfish Group
 * Author URI: https://github.com/wordfishgroup
 * License: GPL2
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

// include the class
require_once( plugin_dir_path( __FILE__ ) . 'class-cpjsontopngplugin.php' );

// register the activation and deactivation hooks
register_activation_hook( __FILE__, array( 'CpJsonToImgPlugin', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'CpJsonToImgPlugin', 'deactivate' ) );

// instantiate the plugin class
$cpjsontopngplugin = new CpJsonToImgPlugin();

// add the plugin to the wordpress admin menu
add_action( 'admin_menu', array( $cpjsontopngplugin, 'add_plugin_page' ) );

// add the plugin to the wordpress admin menu
add_action( 'admin_init', array( $cpjsontopngplugin, 'page_init' ) );

// add the plugin to the wordpress admin menu
add_action( 'admin_enqueue_scripts', array( $cpjsontopngplugin, 'enqueue_scripts' ) );

// add the plugin
