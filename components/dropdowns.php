<?php 

function dropdown($atts,$content){
	extract( shortcode_atts( array(
        'class' 		=> '',
        'id'            => 'dropdownMenuButton',
        'style'         => 'secondary'
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
	$return .= '<div class="dropdown">';
        $return .= '<button class="btn btn-'.$style.' dropdown-toggle '.$class.'" type="button" id="'.$id.'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
            $return .= 'Dropdown button';
        $return .= '</button>';

        $return .= '<div class="dropdown-menu" aria-labelledby="'.$id.'">';
            $return .= $content;
        $return .= '</div>';
    $return .= '</div>';

	return $return;
}
add_shortcode('dropdown','dropdown');

function dropdown_menu($atts,$content){
    extract( shortcode_atts( array(
        'class'         => '',
        'id'            => 'dropdownMenuButton'
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<div class="dropdown-menu" aria-labelledby="'.$id.'">';
        $return .= $content;
    $return .= '</div>';

    return $return;
}
add_shortcode('dropdown_menu','dropdown_menu');


function dropdown_item($atts,$content){
    extract( shortcode_atts( array(
        'class'         => '',
        'link'          => '#',
        'title'         => ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<a href="'.$link.'" class="dropdown-item '.$class.'">'.$title.'</a>';

    return $return;
}
add_shortcode('dropdown_item','dropdown_item');


