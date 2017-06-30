<?php 
//Alert
function alert($atts,$content){
	extract( shortcode_atts( array(
        'class' => '',
        'title' => '',
        'type'  => 'success'
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<div class="alert alert-'.$type.'" role="alert">
				  '.(($title != '')? "<strong>".$title."</strong>":"").' '.force_balance_tags($content).'
				</div>';

	return $return;
}
add_shortcode('alert','alert');