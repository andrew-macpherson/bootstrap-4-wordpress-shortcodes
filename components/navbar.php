<?php 

function navbar($atts,$content){
	extract( shortcode_atts( array(
        'class' 		=> '',
        'brand_name'    => '',
        'brand_image'   => '',
        'brand_url'   => '',
        'id'            => 'navbarSupportedContent'
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<nav class="navbar navbar-toggleable-md navbar-light bg-faded '.$class.'">';
        
        //RESPONSIVE BUTTON
        $return .= '<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#'.$id.'" aria-controls="'.$id.'" aria-expanded="false" aria-label="Toggle navigation">';
            $return .= '<span class="navbar-toggler-icon"></span>';
        $return .= '</button>';

        //BRANDING
        if($brand_name != ''){
            $return .= '<a class="navbar-brand" href="'.$brand_url.'" title="'.$brand_name.'">';
                if($brand_image != '')
                    $return .= '<img src="'.$brand_image.'" alt="'.$brand_name.'" />';
                else
                    $return .= $brand_name;
            $return .= '</a>';
        }

        $return .= '<div class="collapse navbar-collapse" id="'.$id.'">';

            $return .= $content;
        $return .= '</div>';
    $return .= '</nav>';

	return $return;
}
add_shortcode('navbar','navbar');


function navbar_nav($atts,$content){
    extract( shortcode_atts( array(
        'class'         => '',
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<ul class="navbar-nav mr-auto">';
        $return .= $content;
    $return .= '</ul>';

    return $return;
}
add_shortcode('navbar_nav','navbar_nav');


function navbar_nav_item($atts,$content){
    extract( shortcode_atts( array(
        'class'             => '',
        'parent_class'      => '',
        'link'              => ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<li class="nav-item '.$parent_class.'">';
        $return .= '<a class="nav-link '.$class.'" href="'.$link.'">'.$content.'</a>';
    $return .= '</li>';

    return $return;
}
add_shortcode('navbar_nav_item','navbar_nav_item');