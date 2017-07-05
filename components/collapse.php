<?php 

function collapse($atts,$content){
	extract( shortcode_atts( array(
        'class' 		=> '',
        'id'            => ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

	$return .= '<div class="collapse" id="'.$id.'">'.$content.'</div>';

	return $return;
}
add_shortcode('collapse','collapse');


