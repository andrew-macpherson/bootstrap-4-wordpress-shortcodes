<?php 

function button($atts,$content){
	extract( shortcode_atts( array(
        'class' 		=> '',
        'style'			=> 'primary',
        'link'			=> ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

	$return .= '<a href="'.$link.'" type="button" class="btn btn-'.$style.'" role="button">'.$content.'</a>';

	return $return;
}
add_shortcode('button','button');