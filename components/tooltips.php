<?php 

function tooltip($atts,$content){
    extract( shortcode_atts( array(
        'class'             => '',
        'style'             => 'secondary',
        'toggle'            => 'tooltip',
        'placement'         => 'top',
        'tooltip_title'   => ''
    ), $atts ) );

    wp_enqueue_script( 'bootstrap-tooltip', plugins_url().'/bootstrap-4-wordpress-shortcodes/js/bootstrap-tooltip.js', array('jquery','tether') );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<button type="button" class="btn btn-'.$style.' '.$class.'" data-toggle="'.$toggle.'" data-placement="'.$placement.'" title="'.$tooltip_title.'">';
        $return .= $content;
    $return .= '</button>';

    return $return;

}
add_shortcode('tooltip','tooltip');