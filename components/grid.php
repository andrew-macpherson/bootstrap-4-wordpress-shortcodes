<?php 
//Containers
function container($atts,$content){
	extract( shortcode_atts( array(
        'class' => '',
        'inner_class' => '',
        'fluid' => 'false',
        'background_color' => '',
        'background_image' => '',
        'padding' => '',
        'margin' => ''
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

     if($background_color != '' || $background_image != ''  || $padding != ''  || $margin != ''){
        $openStyle = true;
    }else{
        $openStyle = false;
    }

    $return = '';
    $return .= '<div class="container'.(($fluid == 'true')? '-fluid ':'').' '.(( $class != '')? $class : "" ).'" '.(($openStyle) ? 'style="':'').' '.(($background_image != '') ? 'background-image: url('.$background_image.'); ':'').' '.(($background_color != '') ? 'background-color: '.$background_color.'; ':'').' '.(($padding != '') ? 'padding: '.$padding.'; ':'').' '.(($margin != '') ? 'margin: '.$margin.'; ':'').'><div class="'.$inner_class.'">'.force_balance_tags($content).'</div></div>';

	return $return;
}
add_shortcode('container','container');


//Rows
function row($atts,$content){
	extract( shortcode_atts( array(
        'class' 	=> '',
        'gutters' 	=> 'true'
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<div class="row'.(($gutters == 'true')? '':' no-gutters ').' '.(( $class != '')? $class : "" ).'">'.force_balance_tags($content).'</div>';

	return $return;
}
add_shortcode('row','row');


//Columns
function col($atts,$content){
	extract( shortcode_atts( array(
        'class' 	=> '',
        'size'		=> '12'
    ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<div class="col'.(($size != '')? '-'.$size : ' ').' '.(( $class != '')? $class : "" ).'">'.force_balance_tags($content).'</div>';

	return $return;
}
add_shortcode('col','col');

