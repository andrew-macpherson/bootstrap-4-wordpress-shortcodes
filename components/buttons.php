<?php

function button($atts,$content){
	extract( shortcode_atts( array(
        'class' 		=> '',
        'style'			=> 'primary',
        'link'			=> '',
        'toggle'        => '',
        'target'        => '',
        'selector'      => 'a'
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<'.$selector.' '.(($link != '')?"href='".$link."'" : "").' '.(($selector == 'button')?"type=\"button\"":"").' class="btn btn-'.$style.' '.$class.'" role="button" '.(($toggle != '')?"data-toggle='".$toggle."'" : "").' '.(($target != '')?"data-target='".$target."'" : ""). ' ' . ($dismiss_modal ? 'data-dismiss="modal"' : "") .'>'.$content.'</'.$selector.'>';

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
