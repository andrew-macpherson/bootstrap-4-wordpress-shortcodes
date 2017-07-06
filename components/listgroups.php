<?php 

function list_group($atts,$content){
	extract( shortcode_atts( array(
        'class' 		=> ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
	$return .= '<ul class="list-group '.$class.'">';
        $return .= $content;
    $return .= '</ul>';

	return $return;
}
add_shortcode('list_group','list_group');



function list_group_item($atts,$content){
    extract( shortcode_atts( array(
        'class'         => '',
        'link'          => ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);


    $return = '';
    if($link == '')
        $return .= '<li class="list-group-item '.$class.'">';
    else
        $return .= '<a class="list-group-item list-group-item-action '.$class.'" href="'.$link.'">';
    
        $return .= $content;
    
    if($link == '')
        $return .= '</li>';
    else
        $return .= '</a>';


    return $return;
}
add_shortcode('list_group_item','list_group_item');