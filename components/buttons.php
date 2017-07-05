<?php 

function button($atts,$content){
	extract( shortcode_atts( array(
        'class' 		=> '',
        'style'			=> 'primary',
        'link'			=> '',
        'toggle'        => ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

	$return .= '<a href="'.$link.'" type="button" class="btn btn-'.$style.'" role="button" '.(($toggle != '')?"data-toggle='".$toggle."'" : "").'>'.$content.'</a>';

	return $return;
}
add_shortcode('button','button');




function button_group($atts,$content){
    extract( shortcode_atts( array(
        'class'         => '',
        'vertical'      => 'false'
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<div class="btn-group'.(($vertical == 'true')?"-vertical":"").' '.$class.'" role="group">'.$content.'</button>';

    return $return;
}
add_shortcode('button_group','button_group');

function button_toolbar($atts,$content){
    extract( shortcode_atts( array(
        'class'         => ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<div class="btn-toolbar '.$class.'" role="toolbar">'.$content.'</button>';

    return $return;
}
add_shortcode('button_toolbar','button_toolbar');