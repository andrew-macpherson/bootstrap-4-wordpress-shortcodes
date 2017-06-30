<?php 
//Badge
function badge($atts,$content){
	extract( shortcode_atts( array(
        'class' => '',
        'title' => '',
        'type'  => 'default',
        'pill'	=> 'false'
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<span class="badge badge-'.$type.' '.$class.' '.(($pill == 'true')?"badge-pill":"").'">'.force_balance_tags($content).'</span>';

	return $return;
}
add_shortcode('badge','badge');