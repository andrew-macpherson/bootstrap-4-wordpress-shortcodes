<?php

function collapse($atts,$content){
	extract( shortcode_atts( array(
        'class' 		=> 'btn btn-primary',
        'id'        => '',
				'href'			=> '',
				'expanded'  => 'false',
				'content'   => $content,
				'linktext' 	=> ''
     ), $atts ) );


    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
		$return .= '<p>
		  <a class="'.$class.'" data-toggle="collapse" href="#'.$href.'" aria-expanded="'.$expanded.'" aria-controls="'.$href.'">';
		 $return .= $linktext;
		$return .= '</a>
		</p>
		<div class="collapse" id="'.$href.'">
		  <div class="card card-block">';
		  $return .=  $content;
		$return .= '</div></div>';

		return $return;
}
add_shortcode('collapse','collapse');
