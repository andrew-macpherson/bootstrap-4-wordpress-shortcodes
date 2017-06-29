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
	if ( '</p>' == substr( $content, 0, 4 )and '<p>' == substr( $content, strlen( $content ) - 3 ) )
        $content = substr( $content, 4, strlen( $content ) - 7 );

	return $content;
}


//Containers
function container($atts,$content){
	extract( shortcode_atts( array(
        'class' => '',
        'fluid' => 'false'
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<div class="container'.(($fluid == 'true')? '-fluid ':'').' '.(( $class != '')? $class : "" ).'">'.force_balance_tags($content).'</div>';

	return $return;
}
add_shortcode('container','container');


//Rows
function row($atts,$content){
	extract( shortcode_atts( array(
        'class' 	=> '',
        'gutters' 	=> 'true'
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<div class="row'.(($gutters == 'true')? '':' no-gutters ').' '.(( $class != '')? $class : "" ).'">'.force_balance_tags($content).'</div>';

	return $return;
}
add_shortcode('row','row');


//Columns
function col($atts,$content){
	extract( shortcode_atts( array(
        'class' 	=> '',
        'size'		=> '12'
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<div class="col'.(($size != '')? '-'.$size : ' ').' '.(( $class != '')? $class : "" ).'">'.force_balance_tags($content).'</div>';

	return $return;
}
add_shortcode('col','col');
