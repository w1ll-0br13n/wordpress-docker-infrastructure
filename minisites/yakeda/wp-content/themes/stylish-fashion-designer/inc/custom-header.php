<?php
/**
 * @package Stylish Fashion Designer
 * @subpackage stylish-fashion-designer
 * @since stylish-fashion-designer 1.0
 * Setup the WordPress core custom header feature.
 * @uses stylish_fashion_designer_header_style()
*/

function stylish_fashion_designer_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'stylish_fashion_designer_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1400,
		'height'                 => 70,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'stylish_fashion_designer_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'stylish_fashion_designer_custom_header_setup' );

if ( ! function_exists( 'stylish_fashion_designer_header_style' ) ) :

add_action( 'wp_enqueue_scripts', 'stylish_fashion_designer_header_style' );
function stylish_fashion_designer_header_style() {
	if ( get_header_image() ) :
	$stylish_fashion_designer_custom_css = "
        .top-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size: cover;
		}";
	   	wp_add_inline_style( 'stylish-fashion-designer-basic-style', $stylish_fashion_designer_custom_css );
	endif;
}
endif;