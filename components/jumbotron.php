<?php 

function jumbotron($atts,$content){
	extract( shortcode_atts( array(
        'class' 		=> ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
	$return .= '<div class="jumbotron '.$class.'">';
        $return .= $content;
    $return .= '</div>';

	return $return;
}
add_shortcode('jumbotron','jumbotron');