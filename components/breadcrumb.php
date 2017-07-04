<?php 

function breadcrumbs($atts,$content){
	extract( shortcode_atts( array(
        'class' 		=> ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

	$return .= '<ol class="breadcrumb '.$class.'">';
		$return .= $content;
	$return .= '</ol>';

	return $return;
}
add_shortcode('breadcrumbs','breadcrumbs');




function breadcrumb($atts,$content){
	extract( shortcode_atts( array(
        'class' 		=> '',
        'active'		=> '',
        'link_url'		=> '',
        'link_title'	=> ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

	$return .= '<li class="breadcrumb-item '.(($active == 'true') ? "active" : "").' '.$class.'"><a href="'.$link_url.'">'.$link_title.'</a></li>';

	return $return;
}
add_shortcode('breadcrumb','breadcrumb');