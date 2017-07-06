<?php 

function popover($atts,$content){
    extract( shortcode_atts( array(
        'class'             => '',
        'style'             => 'secondary',
        'container'         => 'body',
        'toggle'            => 'popover',
        'placement'         => 'top',
        'popover_content'   => '',
        'popover_title'   => ''
    ), $atts ) );

    wp_enqueue_script( 'bootstrap-popover', plugins_url().'/bootstrap-4-wordpress-shortcodes/js/bootstrap-popover.js', array('jquery','tether') );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<button type="button" class="btn btn-'.$style.' '.$class.'" data-container="'.$container.'" data-toggle="'.$toggle.'" data-placement="'.$placement.'" title="'.$popover_title.'" data-content="'.$popover_content.'">';
        $return .= $content;
    $return .= '</button>';

    return $return;

}
add_shortcode('popover','popover');