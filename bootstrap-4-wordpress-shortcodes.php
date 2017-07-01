<?php
/*
Plugin Name: Bootstrap 4 WordPress ShortCodes
Plugin URI: #
Description: A set of Bootstrap 4 ShortCodes
Version: 0.1
Author: Andrew MacPherson
Author URI: http://andrewmacpherson.ca
License: GPL2
*/

//Load bootstrap
function bootstrap_4_wordpress_shortcodes_enqueue_style() {
	wp_enqueue_style( 'core', plugins_url().'/bootstrap-4-wordpress-shortcodes/libraries/bootstrap-4.0.0/css/bootstrap.min.css', false ); 
}

function bootstrap_4_wordpress_shortcodes_enqueue_script() {
	wp_enqueue_script( 'my-js', plugins_url().'/bootstrap-4-wordpress-shortcodes/libraries/bootstrap-4.0.0/js/bootstrap.min.js', false );
}

add_action( 'wp_enqueue_scripts', 'bootstrap_4_wordpress_shortcodes_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'bootstrap_4_wordpress_shortcodes_enqueue_script' );


//Remove empty paragraphs
function stripParagraphs($content){
	if ( '</p>' == substr( $content, 0, 4 ) && '<p>' == substr( $content, strlen( $content ) - 3 ) ){
        $content = substr( $content, 4, strlen( $content ) - 7 );
	}

	return $content;
}


include( plugin_dir_path( __FILE__ ) . 'components/grid.php');
include( plugin_dir_path( __FILE__ ) . 'components/alert.php');
include( plugin_dir_path( __FILE__ ) . 'components/badge.php');
include( plugin_dir_path( __FILE__ ) . 'components/cards.php');
