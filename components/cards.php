<?php
/** CARDS **/
function card($atts,$content){
    extract( shortcode_atts( array(
        'class'         => ''
    ), $atts ) );

        $content = do_shortcode( shortcode_unautop( $content ) );
        $content = stripParagraphs($content);

    $return = '';

    $return .= '<div class="card ' . (( $class != '') ? $class : "" ) . '">';
        $return .= force_balance_tags($content);
    $return .= '</div>';

    return $return;
}
add_shortcode('card','card');

// Card img
function card_img($atts){
    extract( shortcode_atts( array(
        'class'         => '',
                'position'  => 'top',
                'url'       => '',
                'link'      => '',
                'target'    => '_self',
                'alt'       => ''
    ), $atts ) );

        // $content = do_shortcode( shortcode_unautop( $content ) );
        // $content = stripParagraphs($content);

        $return = '<img src="' . $url . '" class="card-img-' . $position . ' ' . (( $class != '') ? $class : "" ) . '" alt="' . $alt . '">';
        if( !empty($link) ) {
            $return = '<a href="' . $link . '" target="' . $target . '">' . $return . '</a>';
        }

    return $return;
}
add_shortcode('card_img','card_img');

// Card header
function card_header($atts,$content){
    extract( shortcode_atts( array(
        'class'         => ''
    ), $atts ) );

        $content = do_shortcode( shortcode_unautop( $content ) );
        $content = stripParagraphs($content);

    $return = '';

    $return .= '<div class="card-header ' . (( $class != '') ? $class : "" ) . '">';
        $return .= force_balance_tags($content);
    $return .= '</div>';

    return $return;
}
add_shortcode('card_header','card_header');


// Card block
function card_block($atts,$content) {
    extract( shortcode_atts( array(
        'class' => ''
      ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<div class="card-block ' . (( $class != '') ? $class : "" ) . '">';
        $return .= force_balance_tags($content);
    $return .= '</div>';

    return $return;
}
add_shortcode('card_block','card_block');


// Card title
function card_title($atts,$content) {
    extract( shortcode_atts( array(
        'class' => ''
      ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<h4 class="card-title ' . (( $class != '') ? $class : "" ) . '">';
        $return .= force_balance_tags($content);
    $return .= '</h4>';

    return $return;
}
add_shortcode('card_title','card_title');

// Card subtitle
function card_subtitle($atts,$content) {
    extract( shortcode_atts( array(
        'class' => ''
      ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<h6 class="card-subtitle mb-2 text-muted ' . (( $class != '') ? $class : "" ) . '">';
        $return .= force_balance_tags($content);
    $return .= '</h6>';

    return $return;
}
add_shortcode('card_subtitle','card_subtitle');

// Card text
function card_text($atts,$content) {
    extract( shortcode_atts( array(
        'class' => ''
      ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<div class="card-text ' . (( $class != '') ? $class : "" ) . '">';
        $return .= force_balance_tags($content);
    $return .= '</div>';

    return $return;
}
add_shortcode('card_text','card_text');


// Card footer - good for inserting links/buttons that will line up vertically
function card_footer($atts,$content) {
    extract( shortcode_atts( array(
        'class' => ''
      ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<div class="card-footer ' . (( $class != '') ? $class : "" ) . '">';
        $return .= force_balance_tags($content);
    $return .= '</div>';

    return $return;
}
add_shortcode('card_footer','card_footer');





// Original version - keep it around for now
function card_simple($atts,$content){
    extract( shortcode_atts( array(
        'header'        => '',
        'class'         => '',
        'title'         => '',
        'subtitle'      => '',
        'image_url'     => '',
        'image_alt'     => ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<div class="card ' . (( $class != '') ? $class : "" ) . '">';
        if($header != '')
            $return .= '<div class="card-header">'.$header.'</div>';

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
add_shortcode('card_simple','card_simple');
