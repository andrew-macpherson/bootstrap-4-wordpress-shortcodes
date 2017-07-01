<?php 
//Badge
function card($atts,$content){
	extract( shortcode_atts( array(
        'class' 		=> '',
        'title' 		=> '',
        'subtitle'		=> '',
        'image_url'		=> '',
        'image_alt'		=> ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<div class="card">';
    	if($image_url != '')
    		$return .= '<img class="card-img-top" src="'.$image_url.'" alt="'.$image_alt.'">';
    	$return .= '<div class="card-block">';

    		if($title != '')
    			$return .= '<h4 class="card-title">'.$title.'</h4>';

    		if($subtitle != '')
    			$return .= '<h6 class="card-subtitle mb-2 text-muted">'.$subtitle.'</h6>';

			$return .= $content;

    	$return .= '</div>';
    $return .= '</div>';

	return $return;
}
add_shortcode('card','card');