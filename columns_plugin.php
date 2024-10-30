<?php
/**
 * Plugin Name: Columns Plugin
 * Plugin URI: http://wpsites.net/
 * Description: <a href="http://wpsites.net/columns/">Simply Copy & Paste This HTML</a> Into Your WordPress Editor To Create Columns.
 * Author: Brad Dalton
 * Author URI: http://wpsites.net/columns/
 * License: GPLv2 or later
 * Version: 1.0.0
 */

// Register & Add Style Sheet.
add_action( 'wp_enqueue_scripts', 'add_columns_plugin_styles' );

function add_columns_plugin_styles() {
	wp_register_style( 'columns-plugin', plugins_url( 'columns-plugin/plugin-style.css' ) );
	wp_enqueue_style( 'columns-plugin' );
}