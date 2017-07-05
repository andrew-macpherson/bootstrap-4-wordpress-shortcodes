<?php 

function carousel($atts,$content){
    extract( shortcode_atts( array(
        'id'            => 'carouselControls',
        'class'         => '',
        'controls'      => 'true',
        'indicators'    => 'false'
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<div id="'.$id.'" class="carousel slide '.$class.'" data-ride="carousel">';

        if($indicators != 'false'){
            $return .= '<ol class="carousel-indicators">';
                for($i = 0; $i < $indicators; $i++){
                    $return .= '<li data-target="#'.$id.'" data-slide-to="'.$i.'"></li>';
                }
            $return .= '</ol>';
        }

        $return .= '<div class="carousel-inner" role="listbox">';
            $return .= $content;
        $return .= '</div>';

        if($controls == 'true'){
            $return .= '<a class="carousel-control-prev" href="#'.$id.'" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#'.$id.'" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>';
        }

    $return .= '</div>';

    return $return;
}
add_shortcode('carousel','carousel');


function carousel_item($atts,$content){
    extract( shortcode_atts( array(
        'class'         => '',
        'image_url'     => '',
        'image_alt'     => ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return .= '<div class="carousel-item '.$class.'">';
        $return .= '<img class="d-block img-fluid" src="'.$image_url.'" alt="'.$image_alt.'">';
    $return .= '</div>';

    return $return;

}
add_shortcode('carousel_item','carousel_item');