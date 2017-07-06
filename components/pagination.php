<?php 

function pagination($atts,$content){
	extract( shortcode_atts( array(
        'class' 		          => '',
        'previous_disabled'     => 'false',
        'next_disabled'         => 'false',
        'icons'                 => 'false'
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<nav class="'.$class.'">';
        $return .= '<ul class="pagination">';
            $return .= '<li class="page-item '.(($previous_disabled == 'true') ? "disabled":"").'">';
                $return .= '<a class="page-link" href="#">';
                    if($icons == 'true'){
                        $return .= '<span aria-hidden="true">&laquo;</span>';
                        $return .= '<span class="sr-only">Previous</span>';
                    }else{
                        $return .= 'Previous';
                    }
                $return .= '</a>';
            $return .= '</li>';

            $return .= $content;

            $return .= '<li class="page-item" '.(($next_disabled == 'true') ? "disabled":"").'">';
                $return .= '<a class="page-link" href="#">';
                    if($icons == 'true'){
                        $return .= '<span aria-hidden="true">&raquo;</span>';
                        $return .= '<span class="sr-only">Next</span>';
                    }else{
                        $return .= 'Next';
                    }
                $return .= '</a>';
                $return .= '</li>';
        $return .= '</ul>';
    $return .= '</nav>';

	return $return;
}
add_shortcode('pagination','pagination');


function pagination_link($atts,$content){
    extract( shortcode_atts( array(
        'class'         => '',
        'link'          => '',
        'text'          => ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<li class="page-item '.$class.'"><a class="page-link" href="'.$link.'">'.$text.'</a></li>';

    return $return;

}
add_shortcode('pagination_link','pagination_link');