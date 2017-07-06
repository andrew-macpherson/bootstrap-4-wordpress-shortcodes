<?php 

function progress($atts,$content){
    extract( shortcode_atts( array(
        'class'             => ''
    ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<div class="progress '.$class.'">';
        $return .= $content;
    $return .= '</div>';

    return $return;

}
add_shortcode('progress','progress');


function progress_bar($atts,$content){
    extract( shortcode_atts( array(
        'class'             => '',
        'percent'           => 25,
        'style'             => 'success'
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<div class="progress-bar bg-'.$style.' '.$class.'" role="progressbar" style="width: '.$percent.'%" aria-valuenow="'.$percent.'" aria-valuemin="0" aria-valuemax="100"></div>';

    return $return;
}
add_shortcode('progress_bar','progress_bar');