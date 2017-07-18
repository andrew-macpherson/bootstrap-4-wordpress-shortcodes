<?php

function modal($atts,$content){
	extract( shortcode_atts( array(
        'class' 		=> '',
        'id'            => '',
        'size'          => ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
	$return .= '<div class="modal fade '.$class.'" id="'.$id.'" role="dialog" tabindex="-1" aria-labelledby="'.$id.'Label" aria-hidden="true">';
        $return .= '<div class="modal-dialog '. (!empty($size) ? 'modal-' . $size : '' ) . '" role="document">';
            $return .= '<div class="modal-content">';
              $return .= $content;
            $return .= '</div>';
        $return .= '</div>';
    $return .= '</div>';

	return $return;
}
add_shortcode('modal','modal');





//MODAL HEADER
function modal_header($atts,$content){
    extract( shortcode_atts( array(
        'class'         => '',
        'close'         => 'true',
        'selector'      => 'h5'
    ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);


    $return = '';
    $return .= '<div class="modal-header">';
        $return .= '<'.$selector.' class="modal-title">'.$content.'</'.$selector.'>';
        if($close == 'true'){
            $return .= '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                $return .= '<span aria-hidden="true">&times;</span>';
            $return .= '</button>';
        }
    $return .= '</div>';

    return $return;

}
add_shortcode('modal_header','modal_header');



//MODAL BODY
function modal_body($atts,$content){
    extract( shortcode_atts( array(
        'class'         => ''
    ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<div class="modal-body">';
        $return .= $content;
    $return .= '</div>';

    return $return;

}
add_shortcode('modal_body','modal_body');




//MODAL FOOTER
function modal_footer($atts,$content){
    extract( shortcode_atts( array(
        'class'         => ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<div class="modal-footer '.$class.'">';
        $return .= $content;
    $return .= '</div>';

    return $return;

}
add_shortcode('modal_footer','modal_footer');
