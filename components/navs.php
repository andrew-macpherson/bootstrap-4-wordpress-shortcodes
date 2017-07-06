<?php 

function nav($atts,$content){
	extract( shortcode_atts( array(
        'class' 		=> ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<ul class="nav '.$class.'">';
        $return .= $content;
    $return .= '</ul>';

	return $return;
}
add_shortcode('nav','nav');


function nav_item($atts,$content){
    extract( shortcode_atts( array(
        'class'         => '',
        'parent_class'    => '',
        'title'         => '',
        'link'          => '',
        'toggle'        => ''
    ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<li class="nav-item '.$parent_class.'">';
        $return .= '<a class="nav-link '.$class.'" href="'.$link.'" '.(($toggle != '')?"data-toggle='".$toggle."'" : "").'>'.$title.'</a>';
        $return .= $content;
    $return .= '</li>';

    return $return;
}
add_shortcode('nav_item','nav_item');