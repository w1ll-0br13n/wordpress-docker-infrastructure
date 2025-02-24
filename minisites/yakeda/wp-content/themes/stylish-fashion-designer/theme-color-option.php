<?php

	$stylish_fashion_designer_first_color = get_theme_mod('stylish_fashion_designer_first_color');
	$stylish_fashion_designer_custom_css ='';

	/*------------------ Global First Color -----------*/

	if ($stylish_fashion_designer_first_color) {
		$stylish_fashion_designer_custom_css .= ':root {';
		$stylish_fashion_designer_custom_css .= '--first-theme-color: ' . esc_attr($stylish_fashion_designer_first_color) . ' !important;';
		$stylish_fashion_designer_custom_css .= '} ';
	}

	/*---------------------------Width Layout -------------------*/
	$stylish_fashion_designer_theme_lay = get_theme_mod( 'stylish_fashion_designer_width_layout_options','Default');
    if($stylish_fashion_designer_theme_lay == 'Default'){
		$stylish_fashion_designer_custom_css .='body{';
			$stylish_fashion_designer_custom_css .='max-width: 100%;';
		$stylish_fashion_designer_custom_css .='}';
	}else if($stylish_fashion_designer_theme_lay == 'Container Layout'){
		$stylish_fashion_designer_custom_css .='body{';
			$stylish_fashion_designer_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$stylish_fashion_designer_custom_css .='}';
		$stylish_fashion_designer_custom_css .='.page-template-home-page #header{';
			$stylish_fashion_designer_custom_css .='position: static; background-color: #000;';
		$stylish_fashion_designer_custom_css .='}';
	}else if($stylish_fashion_designer_theme_lay == 'Box Layout'){
		$stylish_fashion_designer_custom_css .='body{';
			$stylish_fashion_designer_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$stylish_fashion_designer_custom_css .='}';
		$stylish_fashion_designer_custom_css .='.page-template-home-page #header{';
			$stylish_fashion_designer_custom_css .='position: static; background-color: #000;';
		$stylish_fashion_designer_custom_css .='}';
	}

	/*-------------- Footer Text -------------------*/
	$stylish_fashion_designer_footer_text_align = get_theme_mod('stylish_fashion_designer_footer_text_align');
	$stylish_fashion_designer_custom_css .='.copyright-wrapper{';
		$stylish_fashion_designer_custom_css .='text-align: '.esc_attr($stylish_fashion_designer_footer_text_align).';';
	$stylish_fashion_designer_custom_css .='}';
	$stylish_fashion_designer_custom_css .='
	@media screen and (max-width:575px) {
		.copyright-wrapper{';
			$stylish_fashion_designer_custom_css .='text-align: center;'.esc_attr($stylish_fashion_designer_footer_text_align).'';
	$stylish_fashion_designer_custom_css .='} }';

	$stylish_fashion_designer_footer_text_padding = get_theme_mod('stylish_fashion_designer_footer_text_padding');
	$stylish_fashion_designer_custom_css .='.copyright-wrapper{';
		$stylish_fashion_designer_custom_css .='padding-top: '.esc_attr($stylish_fashion_designer_footer_text_padding).'px !important; padding-bottom: '.esc_attr($stylish_fashion_designer_footer_text_padding).'px !important;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_footer_bg_color = get_theme_mod('stylish_fashion_designer_footer_bg_color');
	$stylish_fashion_designer_custom_css .='.footer-wp{';
		$stylish_fashion_designer_custom_css .='background-color: '.esc_attr($stylish_fashion_designer_footer_bg_color).';';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_footer_bg_image = get_theme_mod('stylish_fashion_designer_footer_bg_image');
	if($stylish_fashion_designer_footer_bg_image != false){
		$stylish_fashion_designer_custom_css .='.footer-wp{';
			$stylish_fashion_designer_custom_css .='background: url('.esc_attr($stylish_fashion_designer_footer_bg_image).'); background-size: cover;';
		$stylish_fashion_designer_custom_css .='}';
	}

	//footer heading letter spacing
	$stylish_fashion_designer_footer_heading_letter_spacing = get_theme_mod('stylish_fashion_designer_footer_heading_letter_spacing',1);
	$stylish_fashion_designer_custom_css .='.footer-wp h3 {';
		$stylish_fashion_designer_custom_css .='letter-spacing: '.esc_attr($stylish_fashion_designer_footer_heading_letter_spacing).'px;';
	$stylish_fashion_designer_custom_css .='}';
	
    // footer image position
	$stylish_fashion_designer_footer_img_position = get_theme_mod('stylish_fashion_designer_footer_img_position','center center');
	if($stylish_fashion_designer_footer_img_position != false){
		$stylish_fashion_designer_custom_css .='.footer-wp{';
			$stylish_fashion_designer_custom_css .='background-position: '.esc_attr($stylish_fashion_designer_footer_img_position).'!important;';
		$stylish_fashion_designer_custom_css .='}';
	}		

	// Footer Attatchment
	$stylish_fashion_designer_theme_lay = get_theme_mod( 'stylish_fashion_designer_footer_attatchment','scroll');
	if($stylish_fashion_designer_theme_lay == 'fixed'){
		$stylish_fashion_designer_custom_css .='.footer-wp{';
			$stylish_fashion_designer_custom_css .='background-attachment: fixed;';
		$stylish_fashion_designer_custom_css .='}';
	}elseif ($stylish_fashion_designer_theme_lay == 'scroll'){
		$stylish_fashion_designer_custom_css .='.footer-wp{';
			$stylish_fashion_designer_custom_css .='background-attachment: scroll;';
		$stylish_fashion_designer_custom_css .='}';
	}

	$stylish_fashion_designer_copyright_text_font_size = get_theme_mod('stylish_fashion_designer_copyright_text_font_size', 15);
	$stylish_fashion_designer_custom_css .='.copyright-wrapper p, .copyright-wrapper a{';
		$stylish_fashion_designer_custom_css .='font-size: '.esc_attr($stylish_fashion_designer_copyright_text_font_size).'px;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_footer_heading_font_size = get_theme_mod('stylish_fashion_designer_footer_heading_font_size');
	$stylish_fashion_designer_custom_css .='.footer-wp h3{';
		$stylish_fashion_designer_custom_css .='font-size: '.esc_attr($stylish_fashion_designer_footer_heading_font_size).'px;';
	$stylish_fashion_designer_custom_css .='}';

	// footer padding
	$stylish_fashion_designer_footer_padding = get_theme_mod('stylish_fashion_designer_footer_padding');
	$stylish_fashion_designer_custom_css .='.footer-wp{';
		$stylish_fashion_designer_custom_css .='padding: '.esc_attr($stylish_fashion_designer_footer_padding).'px;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_footer_heading = get_theme_mod( 'stylish_fashion_designer_footer_heading','Left');
    if($stylish_fashion_designer_footer_heading == 'Left'){
		$stylish_fashion_designer_custom_css .='.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
		$stylish_fashion_designer_custom_css .='text-align: left;';
		$stylish_fashion_designer_custom_css .='}';
	}else if($stylish_fashion_designer_footer_heading == 'Center'){
		$stylish_fashion_designer_custom_css .='.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
			$stylish_fashion_designer_custom_css .='text-align: center;';
		$stylish_fashion_designer_custom_css .='}';
		$stylish_fashion_designer_custom_css .='.footer-wp h3:after, .footer-wp .wp-block-heading:after{';
			$stylish_fashion_designer_custom_css .='margin: 7px auto;';
		$stylish_fashion_designer_custom_css .='}';
		$stylish_fashion_designer_custom_css .='
		@media screen and (max-width:767px) {
			.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
				$stylish_fashion_designer_custom_css .='text-align: left;';
				$stylish_fashion_designer_custom_css .='}
			.footer-wp h3:after, .footer-wp .wp-block-heading:after{';
				$stylish_fashion_designer_custom_css .='margin: 7px 0 0;';
				$stylish_fashion_designer_custom_css .='}
		}';
	}else if($stylish_fashion_designer_footer_heading == 'Right'){
		$stylish_fashion_designer_custom_css .='.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
			$stylish_fashion_designer_custom_css .='text-align: right; padding-bottom: 25px;';
		$stylish_fashion_designer_custom_css .='}';
		$stylish_fashion_designer_custom_css .='.footer-wp .widget, .footer-wp aside{';
			$stylish_fashion_designer_custom_css .='position: relative;';
		$stylish_fashion_designer_custom_css .='}';
		$stylish_fashion_designer_custom_css .='.footer-wp h3:after, .footer-wp .wp-block-heading:after{';
			$stylish_fashion_designer_custom_css .='position: absolute; right: 0;';
		$stylish_fashion_designer_custom_css .='}';
		$stylish_fashion_designer_custom_css .='
		@media screen and (max-width:767px) {
			.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
				$stylish_fashion_designer_custom_css .='text-align: left;';
				$stylish_fashion_designer_custom_css .='}
			.footer-wp h3:after, .footer-wp .wp-block-heading:after{';
				$stylish_fashion_designer_custom_css .='left: 0;';
				$stylish_fashion_designer_custom_css .='}
		}';
	}

	$stylish_fashion_designer_footer_content = get_theme_mod( 'stylish_fashion_designer_footer_content','Left');
    if($stylish_fashion_designer_footer_content == 'Left'){
		$stylish_fashion_designer_custom_css .='.footer-wp .widget{';
		$stylish_fashion_designer_custom_css .='text-align: left;';
		$stylish_fashion_designer_custom_css .='}';
	}else if($stylish_fashion_designer_footer_content == 'Center'){
		$stylish_fashion_designer_custom_css .='.footer-wp .widget{';
			$stylish_fashion_designer_custom_css .='text-align: center;';
		$stylish_fashion_designer_custom_css .='}';
		$stylish_fashion_designer_custom_css .='
		@media screen and (max-width:767px) {
			.footer-wp .widget{';
				$stylish_fashion_designer_custom_css .='text-align: left;';
				$stylish_fashion_designer_custom_css .='} }';
	}else if($stylish_fashion_designer_footer_content == 'Right'){
		$stylish_fashion_designer_custom_css .='.footer-wp .widget{';
			$stylish_fashion_designer_custom_css .='text-align: right;';
		$stylish_fashion_designer_custom_css .='}';
		$stylish_fashion_designer_custom_css .='
		@media screen and (max-width:767px) {
			.footer-wp .widget{';
				$stylish_fashion_designer_custom_css .='text-align: left;';
				$stylish_fashion_designer_custom_css .='} }';
	}

	//Footer social icons font size
	$stylish_fashion_designer_footer_social_icons_size = get_theme_mod('stylish_fashion_designer_footer_social_icons_size', 15);
	$stylish_fashion_designer_custom_css .='.copyright-wrapper a i{';
		$stylish_fashion_designer_custom_css .='font-size: '.esc_attr($stylish_fashion_designer_footer_social_icons_size).'px;';
	$stylish_fashion_designer_custom_css .='}';		

	/*------------- Back to Top  -------------------*/
	$stylish_fashion_designer_back_to_top_border_radius = get_theme_mod('stylish_fashion_designer_back_to_top_border_radius');
	$stylish_fashion_designer_custom_css .='#scrollbutton {';
		$stylish_fashion_designer_custom_css .='border-radius: '.esc_attr($stylish_fashion_designer_back_to_top_border_radius).'px;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_scroll_icon_font_size = get_theme_mod('stylish_fashion_designer_scroll_icon_font_size', 22);
	$stylish_fashion_designer_custom_css .='#scrollbutton {';
		$stylish_fashion_designer_custom_css .='font-size: '.esc_attr($stylish_fashion_designer_scroll_icon_font_size).'px;';
	$stylish_fashion_designer_custom_css .='}';

	// back to top icon color
	$stylish_fashion_designer_scroll_icon_color = get_theme_mod('stylish_fashion_designer_scroll_icon_color');
	$stylish_fashion_designer_custom_css .='#scrollbutton i{';
		$stylish_fashion_designer_custom_css .='color: '.esc_attr($stylish_fashion_designer_scroll_icon_color).';';
	$stylish_fashion_designer_custom_css .='}';

	// back to top icon hover color
	$stylish_fashion_designer_scroll_icon_hover_color = get_theme_mod('stylish_fashion_designer_scroll_icon_hover_color');
	$stylish_fashion_designer_custom_css .='#scrollbutton i:hover{';
		$stylish_fashion_designer_custom_css .='color: '.esc_attr($stylish_fashion_designer_scroll_icon_hover_color).';';
	$stylish_fashion_designer_custom_css .='}';

	// back to top bg color
	$stylish_fashion_designer_scroll_icon_background = get_theme_mod('stylish_fashion_designer_scroll_icon_background');
	$stylish_fashion_designer_custom_css .='#scrollbutton{';
		$stylish_fashion_designer_custom_css .='background-color: '.esc_attr($stylish_fashion_designer_scroll_icon_background).';';
		$stylish_fashion_designer_custom_css .='border-color: '.esc_attr($stylish_fashion_designer_scroll_icon_background).';';
	$stylish_fashion_designer_custom_css .='}';

	// back to top bg hover color
	$stylish_fashion_designer_scroll_icon_background_hover = get_theme_mod('stylish_fashion_designer_scroll_icon_background_hover');
	$stylish_fashion_designer_custom_css .='#scrollbutton:hover{';
		$stylish_fashion_designer_custom_css .='background-color: '.esc_attr($stylish_fashion_designer_scroll_icon_background_hover).';';
		$stylish_fashion_designer_custom_css .='border-color: '.esc_attr($stylish_fashion_designer_scroll_icon_background_hover).';';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_top_bottom_scroll_padding = get_theme_mod('stylish_fashion_designer_top_bottom_scroll_padding', 7);
	$stylish_fashion_designer_custom_css .='#scrollbutton {';
		$stylish_fashion_designer_custom_css .='padding-top: '.esc_attr($stylish_fashion_designer_top_bottom_scroll_padding).'px; padding-bottom: '.esc_attr($stylish_fashion_designer_top_bottom_scroll_padding).'px;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_left_right_scroll_padding = get_theme_mod('stylish_fashion_designer_left_right_scroll_padding', 17);
	$stylish_fashion_designer_custom_css .='#scrollbutton {';
		$stylish_fashion_designer_custom_css .='padding-left: '.esc_attr($stylish_fashion_designer_left_right_scroll_padding).'px; padding-right: '.esc_attr($stylish_fashion_designer_left_right_scroll_padding).'px;';
	$stylish_fashion_designer_custom_css .='}';

	//First Cap
	$stylish_fashion_designer_show_first_caps = get_theme_mod('stylish_fashion_designer_show_first_caps', 'false');
	if($stylish_fashion_designer_show_first_caps == 'true' ){
	$stylish_fashion_designer_custom_css .='.blog-section .mainbox .new-text p:nth-of-type(1)::first-letter{';
	$stylish_fashion_designer_custom_css .=' font-size: 55px; font-weight: 600;';
	$stylish_fashion_designer_custom_css .=' margin-right: 6px;';
	$stylish_fashion_designer_custom_css .=' line-height: 1;';
	$stylish_fashion_designer_custom_css .='}';
	}elseif($stylish_fashion_designer_show_first_caps == 'false' ){
	$stylish_fashion_designer_custom_css .='.blog-section .mainbox .new-text p:nth-of-type(1)::first-letter {';
	$stylish_fashion_designer_custom_css .='display: none;';
	$stylish_fashion_designer_custom_css .='}';
	}

	/*-------------- Post Button  -------------------*/

	$stylish_fashion_designer_btn_font_size_option = get_theme_mod('stylish_fashion_designer_btn_font_size_option');
	$stylish_fashion_designer_custom_css .='.postbtn a{';
		$stylish_fashion_designer_custom_css .='font-size: '.esc_attr($stylish_fashion_designer_btn_font_size_option).'px !important;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_theme_lay = get_theme_mod( 'stylish_fashion_designer_button_text_tranform','Capitalize');
    if($stylish_fashion_designer_theme_lay == 'Uppercase'){
		$stylish_fashion_designer_custom_css .='.postbtn a{';
			$stylish_fashion_designer_custom_css .='text-transform: uppercase;';
		$stylish_fashion_designer_custom_css .='}';
	}else if($stylish_fashion_designer_theme_lay == 'Lowercase'){
		$stylish_fashion_designer_custom_css .='.postbtn a{';
			$stylish_fashion_designer_custom_css .='text-transform: lowercase;';
		$stylish_fashion_designer_custom_css .='}';
	}
	else if($stylish_fashion_designer_theme_lay == 'Capitalize'){
		$stylish_fashion_designer_custom_css .='.postbtn a{';
			$stylish_fashion_designer_custom_css .='text-transform: capitalize;';
		$stylish_fashion_designer_custom_css .='}';
	}

	// button font weight
	$stylish_fashion_designer_button_font_weight = get_theme_mod( 'stylish_fashion_designer_button_font_weight','700');
	if($stylish_fashion_designer_button_font_weight != ''){
		$stylish_fashion_designer_custom_css .='.postbtn a{';
			$stylish_fashion_designer_custom_css .='font-weight: '.esc_attr($stylish_fashion_designer_button_font_weight).';';
		$stylish_fashion_designer_custom_css .='}';
	}

	$stylish_fashion_designer_post_button_padding_top = get_theme_mod('stylish_fashion_designer_post_button_padding_top');
	$stylish_fashion_designer_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$stylish_fashion_designer_custom_css .='padding-top: '.esc_attr($stylish_fashion_designer_post_button_padding_top).'px !important; padding-bottom: '.esc_attr($stylish_fashion_designer_post_button_padding_top).'px !important;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_post_button_padding_right = get_theme_mod('stylish_fashion_designer_post_button_padding_right');
	$stylish_fashion_designer_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$stylish_fashion_designer_custom_css .='padding-left: '.esc_attr($stylish_fashion_designer_post_button_padding_right).'px !important; padding-right: '.esc_attr($stylish_fashion_designer_post_button_padding_right).'px !important;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_post_button_border_radius = get_theme_mod('stylish_fashion_designer_post_button_border_radius');
	$stylish_fashion_designer_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$stylish_fashion_designer_custom_css .='border-radius: '.esc_attr($stylish_fashion_designer_post_button_border_radius).'px !important;';
	$stylish_fashion_designer_custom_css .='}';

	// button letter spacing
	$stylish_fashion_designer_button_letter_spacing = get_theme_mod('stylish_fashion_designer_button_letter_spacing', '0');
	$stylish_fashion_designer_custom_css .='.postbtn a {';
		$stylish_fashion_designer_custom_css .='letter-spacing: '.esc_attr($stylish_fashion_designer_button_letter_spacing).'px;';
	$stylish_fashion_designer_custom_css .='}';			

	$stylish_fashion_designer_post_comment_enable = get_theme_mod('stylish_fashion_designer_post_comment_enable',true);
	if($stylish_fashion_designer_post_comment_enable == false){
		$stylish_fashion_designer_custom_css .='#comments{';
			$stylish_fashion_designer_custom_css .='display: none;';
		$stylish_fashion_designer_custom_css .='}';
	}

	/*----------- Preloader Color Option  ----------------*/
	$stylish_fashion_designer_preloader_bg_color_option = get_theme_mod('stylish_fashion_designer_preloader_bg_color_option');
	$stylish_fashion_designer_preloader_icon_color_option = get_theme_mod('stylish_fashion_designer_preloader_icon_color_option');
	$stylish_fashion_designer_custom_css .='.frame{';
		$stylish_fashion_designer_custom_css .='background-color: '.esc_attr($stylish_fashion_designer_preloader_bg_color_option).';';
	$stylish_fashion_designer_custom_css .='}';
	$stylish_fashion_designer_custom_css .='.dot-1,.dot-2,.dot-3{';
		$stylish_fashion_designer_custom_css .='background-color: '.esc_attr($stylish_fashion_designer_preloader_icon_color_option).';';
	$stylish_fashion_designer_custom_css .='}';

	// preloader type
	$stylish_fashion_designer_theme_lay = get_theme_mod( 'stylish_fashion_designer_preloader_type','First Preloader Type');
    if($stylish_fashion_designer_theme_lay == 'First Preloader Type'){
		$stylish_fashion_designer_custom_css .='.dot-1, .dot-2, .dot-3{';
			$stylish_fashion_designer_custom_css .='';
		$stylish_fashion_designer_custom_css .='}';
	}else if($stylish_fashion_designer_theme_lay == 'Second Preloader Type'){
		$stylish_fashion_designer_custom_css .='.dot-1, .dot-2, .dot-3{';
			$stylish_fashion_designer_custom_css .='border-radius:0;';
		$stylish_fashion_designer_custom_css .='}';
	}

    // preloader background image
	$stylish_fashion_designer_preloader_bg_img = get_theme_mod('stylish_fashion_designer_preloader_bg_img');
	if($stylish_fashion_designer_preloader_bg_img != false){
		$stylish_fashion_designer_custom_css .='.frame {';
			$stylish_fashion_designer_custom_css .='background: url('.esc_attr($stylish_fashion_designer_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$stylish_fashion_designer_custom_css .='}';
	}		

	/*------------------ Skin Option  -------------------*/
	$stylish_fashion_designer_theme_lay = get_theme_mod( 'stylish_fashion_designer_background_skin','Without Background');
    if($stylish_fashion_designer_theme_lay == 'With Background'){
		$stylish_fashion_designer_custom_css .='.inner-service,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin{';
			$stylish_fashion_designer_custom_css .='background-color: #F6F6F6; padding:20px;';
		$stylish_fashion_designer_custom_css .='}';
		$stylish_fashion_designer_custom_css .='.login-box a{';
			$stylish_fashion_designer_custom_css .='background-color: #fff;';
		$stylish_fashion_designer_custom_css .='}';
	}else if($stylish_fashion_designer_theme_lay == 'Without Background'){
		$stylish_fashion_designer_custom_css .='{';
			$stylish_fashion_designer_custom_css .='background-color: transparent;';
		$stylish_fashion_designer_custom_css .='}';
	}

	/*-------------- Woocommerce Button  -------------------*/
	$stylish_fashion_designer_woocommerce_button_padding_top = get_theme_mod('stylish_fashion_designer_woocommerce_button_padding_top',12);
	$stylish_fashion_designer_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$stylish_fashion_designer_custom_css .='padding-top: '.esc_attr($stylish_fashion_designer_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($stylish_fashion_designer_woocommerce_button_padding_top).'px;';
	$stylish_fashion_designer_custom_css .='}';
	

	$stylish_fashion_designer_woocommerce_button_padding_right = get_theme_mod('stylish_fashion_designer_woocommerce_button_padding_right',15);
	$stylish_fashion_designer_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$stylish_fashion_designer_custom_css .='padding-left: '.esc_attr($stylish_fashion_designer_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($stylish_fashion_designer_woocommerce_button_padding_right).'px;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_woocommerce_button_border_radius = get_theme_mod('stylish_fashion_designer_woocommerce_button_border_radius',3);
	$stylish_fashion_designer_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce a.added_to_cart{';
		$stylish_fashion_designer_custom_css .='border-radius: '.esc_attr($stylish_fashion_designer_woocommerce_button_border_radius).'px;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_related_product_enable = get_theme_mod('stylish_fashion_designer_related_product_enable',true);
	if($stylish_fashion_designer_related_product_enable == false){
		$stylish_fashion_designer_custom_css .='.related.products{';
			$stylish_fashion_designer_custom_css .='display: none;';
		$stylish_fashion_designer_custom_css .='}';
	}

	$stylish_fashion_designer_woocommerce_product_border_enable = get_theme_mod('stylish_fashion_designer_woocommerce_product_border_enable',false);
	if($stylish_fashion_designer_woocommerce_product_border_enable == false){
		$stylish_fashion_designer_custom_css .='.products li{';
			$stylish_fashion_designer_custom_css .='border: none;';
		$stylish_fashion_designer_custom_css .='}';
	}else if($stylish_fashion_designer_woocommerce_product_border_enable == true){
		$stylish_fashion_designer_custom_css .='.products li{';
			$stylish_fashion_designer_custom_css .='border: 1px solid #ccc;';
		$stylish_fashion_designer_custom_css .='}';
	}

	$stylish_fashion_designer_woocommerce_product_padding_top = get_theme_mod('stylish_fashion_designer_woocommerce_product_padding_top',0);
	$stylish_fashion_designer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$stylish_fashion_designer_custom_css .='padding-top: '.esc_attr($stylish_fashion_designer_woocommerce_product_padding_top).'px; padding-bottom: '.esc_attr($stylish_fashion_designer_woocommerce_product_padding_top).'px;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_woocommerce_product_padding_right = get_theme_mod('stylish_fashion_designer_woocommerce_product_padding_right',0);
	$stylish_fashion_designer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$stylish_fashion_designer_custom_css .='padding-left: '.esc_attr($stylish_fashion_designer_woocommerce_product_padding_right).'px; padding-right: '.esc_attr($stylish_fashion_designer_woocommerce_product_padding_right).'px;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_woocommerce_product_border_radius = get_theme_mod('stylish_fashion_designer_woocommerce_product_border_radius');
	$stylish_fashion_designer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$stylish_fashion_designer_custom_css .='border-radius: '.esc_attr($stylish_fashion_designer_woocommerce_product_border_radius).'px;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_woocommerce_product_box_shadow = get_theme_mod('stylish_fashion_designer_woocommerce_product_box_shadow');
	$stylish_fashion_designer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$stylish_fashion_designer_custom_css .='box-shadow: '.esc_attr($stylish_fashion_designer_woocommerce_product_box_shadow).'px '.esc_attr($stylish_fashion_designer_woocommerce_product_box_shadow).'px '.esc_attr($stylish_fashion_designer_woocommerce_product_box_shadow).'px #ddd;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_woo_product_sale_top_bottom_padding = get_theme_mod('stylish_fashion_designer_woo_product_sale_top_bottom_padding', 0);
	$stylish_fashion_designer_woo_product_sale_left_right_padding = get_theme_mod('stylish_fashion_designer_woo_product_sale_left_right_padding', 0);
	$stylish_fashion_designer_custom_css .='.woocommerce span.onsale{';
		$stylish_fashion_designer_custom_css .='padding-top: '.esc_attr($stylish_fashion_designer_woo_product_sale_top_bottom_padding).'px; padding-bottom: '.esc_attr($stylish_fashion_designer_woo_product_sale_top_bottom_padding).'px; padding-left: '.esc_attr($stylish_fashion_designer_woo_product_sale_left_right_padding).'px; padding-right: '.esc_attr($stylish_fashion_designer_woo_product_sale_left_right_padding).'px; display:inline-block;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_woo_product_sale_border_radius = get_theme_mod('stylish_fashion_designer_woo_product_sale_border_radius',3);
	$stylish_fashion_designer_custom_css .='.woocommerce span.onsale {';
		$stylish_fashion_designer_custom_css .='border-radius: '.esc_attr($stylish_fashion_designer_woo_product_sale_border_radius).'px;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_woo_product_sale_position = get_theme_mod('stylish_fashion_designer_woo_product_sale_position', 'Left');
	if($stylish_fashion_designer_woo_product_sale_position == 'Right' ){
		$stylish_fashion_designer_custom_css .='.woocommerce ul.products li.product .onsale{';
			$stylish_fashion_designer_custom_css .=' left:auto; right:0;';
		$stylish_fashion_designer_custom_css .='}';
	}elseif($stylish_fashion_designer_woo_product_sale_position == 'Left' ){
		$stylish_fashion_designer_custom_css .='.woocommerce ul.products li.product .onsale{';
			$stylish_fashion_designer_custom_css .=' left:0; right:auto;';
		$stylish_fashion_designer_custom_css .='}';
	}

	$stylish_fashion_designer_wooproduct_sale_font_size = get_theme_mod('stylish_fashion_designer_wooproduct_sale_font_size',14);
	$stylish_fashion_designer_custom_css .='.woocommerce span.onsale{';
		$stylish_fashion_designer_custom_css .='font-size: '.esc_attr($stylish_fashion_designer_wooproduct_sale_font_size).'px;';
	$stylish_fashion_designer_custom_css .='}';

	// Responsive Media
	$stylish_fashion_designer_post_date = get_theme_mod( 'stylish_fashion_designer_display_post_date',true);
	if($stylish_fashion_designer_post_date == true && get_theme_mod( 'stylish_fashion_designer_metafields_date',true) != true){
    	$stylish_fashion_designer_custom_css .='.metabox .entry-date{';
			$stylish_fashion_designer_custom_css .='display:none;';
		$stylish_fashion_designer_custom_css .='} ';
	}
    if($stylish_fashion_designer_post_date == true){
    	$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$stylish_fashion_designer_custom_css .='.metabox .entry-date{';
			$stylish_fashion_designer_custom_css .='display:inline-block;';
		$stylish_fashion_designer_custom_css .='} }';
	}else if($stylish_fashion_designer_post_date == false){
		$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px){';
		$stylish_fashion_designer_custom_css .='.metabox .entry-date{';
			$stylish_fashion_designer_custom_css .='display:none;';
		$stylish_fashion_designer_custom_css .='} }';
	}

	$stylish_fashion_designer_post_author = get_theme_mod( 'stylish_fashion_designer_display_post_author',true);
	if($stylish_fashion_designer_post_author == true && get_theme_mod( 'stylish_fashion_designer_metafields_author',true) != true){
    	$stylish_fashion_designer_custom_css .='.metabox .entry-author{';
			$stylish_fashion_designer_custom_css .='display:none;';
		$stylish_fashion_designer_custom_css .='} ';
	}
    if($stylish_fashion_designer_post_author == true){
    	$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$stylish_fashion_designer_custom_css .='.metabox .entry-author{';
			$stylish_fashion_designer_custom_css .='display:inline-block;';
		$stylish_fashion_designer_custom_css .='} }';
	}else if($stylish_fashion_designer_post_author == false){
		$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px){';
		$stylish_fashion_designer_custom_css .='.metabox .entry-author{';
			$stylish_fashion_designer_custom_css .='display:none;';
		$stylish_fashion_designer_custom_css .='} }';
	}

	$stylish_fashion_designer_post_comment = get_theme_mod( 'stylish_fashion_designer_display_post_comment',true);
	if($stylish_fashion_designer_post_comment == true && get_theme_mod( 'stylish_fashion_designer_metafields_comment',true) != true){
    	$stylish_fashion_designer_custom_css .='.metabox .entry-comments{';
			$stylish_fashion_designer_custom_css .='display:none;';
		$stylish_fashion_designer_custom_css .='} ';
	}
    if($stylish_fashion_designer_post_comment == true){
    	$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$stylish_fashion_designer_custom_css .='.metabox .entry-comments{';
			$stylish_fashion_designer_custom_css .='display:inline-block;';
		$stylish_fashion_designer_custom_css .='} }';
	}else if($stylish_fashion_designer_post_comment == false){
		$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px){';
		$stylish_fashion_designer_custom_css .='.metabox .entry-comments{';
			$stylish_fashion_designer_custom_css .='display:none;';
		$stylish_fashion_designer_custom_css .='} }';
	}

	$stylish_fashion_designer_post_time = get_theme_mod( 'stylish_fashion_designer_display_post_time',true);
	if($stylish_fashion_designer_post_time == true && get_theme_mod( 'stylish_fashion_designer_metafields_time',true) != true){
    	$stylish_fashion_designer_custom_css .='.metabox .entry-time{';
			$stylish_fashion_designer_custom_css .='display:none;';
		$stylish_fashion_designer_custom_css .='} ';
	}
    if($stylish_fashion_designer_post_time == true){
    	$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$stylish_fashion_designer_custom_css .='.metabox .entry-time{';
			$stylish_fashion_designer_custom_css .='display:inline-block;';
		$stylish_fashion_designer_custom_css .='} }';
	}else if($stylish_fashion_designer_post_time == false){
		$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px){';
		$stylish_fashion_designer_custom_css .='.metabox .entry-time{';
			$stylish_fashion_designer_custom_css .='display:none;';
		$stylish_fashion_designer_custom_css .='} }';
	}

	if($stylish_fashion_designer_post_date == false && $stylish_fashion_designer_post_author == false && $stylish_fashion_designer_post_comment == false && $stylish_fashion_designer_post_time == false){
		$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px) {';
    	$stylish_fashion_designer_custom_css .='.metabox {';
			$stylish_fashion_designer_custom_css .='display:none;';
		$stylish_fashion_designer_custom_css .='} }';
	}

	$stylish_fashion_designer_metafields_date = get_theme_mod( 'stylish_fashion_designer_metafields_date',true);
	$stylish_fashion_designer_metafields_author = get_theme_mod( 'stylish_fashion_designer_metafields_author',true);
	$stylish_fashion_designer_metafields_comment = get_theme_mod( 'stylish_fashion_designer_metafields_comment',true);
	$stylish_fashion_designer_metafields_time = get_theme_mod( 'stylish_fashion_designer_metafields_time',true);
	if($stylish_fashion_designer_metafields_date == false && $stylish_fashion_designer_metafields_author == false && $stylish_fashion_designer_metafields_comment == false && $stylish_fashion_designer_metafields_time == false){
		$stylish_fashion_designer_custom_css .='@media screen and (min-width:576px) {';
    	$stylish_fashion_designer_custom_css .='.metabox {';
			$stylish_fashion_designer_custom_css .='display:none;';
		$stylish_fashion_designer_custom_css .='} }';
	}

	$stylish_fashion_designer_sidebar = get_theme_mod( 'stylish_fashion_designer_display_sidebar',true);
    if($stylish_fashion_designer_sidebar == true){
    	$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$stylish_fashion_designer_custom_css .='#sidebar{';
			$stylish_fashion_designer_custom_css .='display:block;';
		$stylish_fashion_designer_custom_css .='} }';
	}else if($stylish_fashion_designer_sidebar == false){
		$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$stylish_fashion_designer_custom_css .='#sidebar{';
			$stylish_fashion_designer_custom_css .='display:none;';
		$stylish_fashion_designer_custom_css .='} }';
	}

	$stylish_fashion_designer_preloader = get_theme_mod( 'stylish_fashion_designer_display_preloader',false);
	if($stylish_fashion_designer_preloader == true && get_theme_mod( 'stylish_fashion_designer_preloader',false) == false){
		$stylish_fashion_designer_custom_css .='@media screen and (min-width:575px) {';
    	$stylish_fashion_designer_custom_css .='.frame{';
			$stylish_fashion_designer_custom_css .=' visibility: hidden;';
		$stylish_fashion_designer_custom_css .='} }';
	}
    if($stylish_fashion_designer_preloader == true){
    	$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$stylish_fashion_designer_custom_css .='.frame{';
			$stylish_fashion_designer_custom_css .='visibility:visible;';
		$stylish_fashion_designer_custom_css .='} }';
	}else if($stylish_fashion_designer_preloader == false){
		$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px){';
		$stylish_fashion_designer_custom_css .='.frame{';
			$stylish_fashion_designer_custom_css .='visibility: hidden;';
		$stylish_fashion_designer_custom_css .='} }';
	}

	$stylish_fashion_designer_scroll = get_theme_mod( 'stylish_fashion_designer_display_scroll',true);
    if($stylish_fashion_designer_scroll == true){
    	$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$stylish_fashion_designer_custom_css .='#scrollbutton{';
			$stylish_fashion_designer_custom_css .='display:block !important;';
		$stylish_fashion_designer_custom_css .='} }';
	}else if($stylish_fashion_designer_scroll == false){
		$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$stylish_fashion_designer_custom_css .='#scrollbutton{';
			$stylish_fashion_designer_custom_css .='display:none !important;';
		$stylish_fashion_designer_custom_css .='} }';
	}

	$stylish_fashion_designer_responsive_show_back_to_top = get_theme_mod('stylish_fashion_designer_responsive_show_back_to_top',true);
	if($stylish_fashion_designer_responsive_show_back_to_top == true && get_theme_mod('stylish_fashion_designer_hide_show_scroll',true) == false){
		$stylish_fashion_designer_custom_css .='@media screen and (min-width:575px){
			#scrollbutton{';
			$stylish_fashion_designer_custom_css .='visibility:visible;';
		$stylish_fashion_designer_custom_css .='} }';
	}
	if($stylish_fashion_designer_responsive_show_back_to_top == false){
		$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px){
			#scrollbutton{';
			$stylish_fashion_designer_custom_css .='visibility: hidden;';
		$stylish_fashion_designer_custom_css .='} }';
	}

	$stylish_fashion_designer_search = get_theme_mod( 'stylish_fashion_designer_display_search_category',true);
	if($stylish_fashion_designer_search == true && get_theme_mod( 'stylish_fashion_designer_search_enable_disable',true) != true){
    	$stylish_fashion_designer_custom_css .='.search-cat-box{';
			$stylish_fashion_designer_custom_css .='display:none;';
		$stylish_fashion_designer_custom_css .='} ';
	}
    if($stylish_fashion_designer_search == true){
    	$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$stylish_fashion_designer_custom_css .='.search-cat-box{';
			$stylish_fashion_designer_custom_css .='display:block;';
		$stylish_fashion_designer_custom_css .='} }';
	}else if($stylish_fashion_designer_search == false){
		$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px){';
		$stylish_fashion_designer_custom_css .='.search-cat-box{';
			$stylish_fashion_designer_custom_css .='display:none;';
		$stylish_fashion_designer_custom_css .='} }';
	}

	$stylish_fashion_designer_myaccount = get_theme_mod( 'stylish_fashion_designer_display_myaccount',true);
	if($stylish_fashion_designer_myaccount == true && get_theme_mod( 'stylish_fashion_designer_myaccount_enable_disable',true) != true){
    	$stylish_fashion_designer_custom_css .='.login-box{';
			$stylish_fashion_designer_custom_css .='display:none;';
		$stylish_fashion_designer_custom_css .='} ';
	}
    if($stylish_fashion_designer_myaccount == true){
    	$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$stylish_fashion_designer_custom_css .='.login-box{';
			$stylish_fashion_designer_custom_css .='display:block;';
		$stylish_fashion_designer_custom_css .='} }';
	}else if($stylish_fashion_designer_myaccount == false){
		$stylish_fashion_designer_custom_css .='@media screen and (max-width:575px){';
		$stylish_fashion_designer_custom_css .='.login-box{';
			$stylish_fashion_designer_custom_css .='display:none;';
		$stylish_fashion_designer_custom_css .='} }';
	}

	// menu settings
	$stylish_fashion_designer_menu_font_size_option = get_theme_mod('stylish_fashion_designer_menu_font_size_option');
	$stylish_fashion_designer_custom_css .='.primary-navigation ul li a{';
		$stylish_fashion_designer_custom_css .='font-size: '.esc_attr($stylish_fashion_designer_menu_font_size_option).'px;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_menu_padding = get_theme_mod('stylish_fashion_designer_menu_padding');
	$stylish_fashion_designer_custom_css .='.primary-navigation ul li a{';
		$stylish_fashion_designer_custom_css .='padding: '.esc_attr($stylish_fashion_designer_menu_padding).'px;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_theme_lay = get_theme_mod( 'stylish_fashion_designer_text_tranform_menu','Capitalize');
    if($stylish_fashion_designer_theme_lay == 'Uppercase'){
		$stylish_fashion_designer_custom_css .='.primary-navigation ul li a{';
			$stylish_fashion_designer_custom_css .='text-transform: uppercase;';
		$stylish_fashion_designer_custom_css .='}';
	}else if($stylish_fashion_designer_theme_lay == 'Lowercase'){
		$stylish_fashion_designer_custom_css .='.primary-navigation ul li a{';
			$stylish_fashion_designer_custom_css .='text-transform: lowercase;';
		$stylish_fashion_designer_custom_css .='}';
	}
	else if($stylish_fashion_designer_theme_lay == 'Capitalize'){
		$stylish_fashion_designer_custom_css .='.primary-navigation ul li a{';
			$stylish_fashion_designer_custom_css .='text-transform: capitalize;';
		$stylish_fashion_designer_custom_css .='}';
	}

	//  comment form width
	$stylish_fashion_designer_comment_form_width = get_theme_mod( 'stylish_fashion_designer_comment_form_width');
	$stylish_fashion_designer_custom_css .='#comments textarea{';
		$stylish_fashion_designer_custom_css .='width: '.esc_attr($stylish_fashion_designer_comment_form_width).'%;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_title_comment_form = get_theme_mod('stylish_fashion_designer_title_comment_form', 'Leave a Reply');
	if($stylish_fashion_designer_title_comment_form == ''){
		$stylish_fashion_designer_custom_css .='#comments h2#reply-title {';
			$stylish_fashion_designer_custom_css .='display: none;';
		$stylish_fashion_designer_custom_css .='}';
	}

	$stylish_fashion_designer_comment_form_button_content = get_theme_mod('stylish_fashion_designer_comment_form_button_content', 'Post Comment');
	if($stylish_fashion_designer_comment_form_button_content == ''){
		$stylish_fashion_designer_custom_css .='#comments p.form-submit {';
			$stylish_fashion_designer_custom_css .='display: none;';
		$stylish_fashion_designer_custom_css .='}';
	}

	// featured image setting
	$stylish_fashion_designer_image_border_radius = get_theme_mod('stylish_fashion_designer_image_border_radius', 0);
	$stylish_fashion_designer_custom_css .='.box-image img, .content_box img{';
		$stylish_fashion_designer_custom_css .='border-radius: '.esc_attr($stylish_fashion_designer_image_border_radius).'%;';
	$stylish_fashion_designer_custom_css .='}';

	$stylish_fashion_designer_image_box_shadow = get_theme_mod('stylish_fashion_designer_image_box_shadow',0);
	$stylish_fashion_designer_custom_css .='.box-image img, .content_box img{';
		$stylish_fashion_designer_custom_css .='box-shadow: '.esc_attr($stylish_fashion_designer_image_box_shadow).'px '.esc_attr($stylish_fashion_designer_image_box_shadow).'px '.esc_attr($stylish_fashion_designer_image_box_shadow).'px #b5b5b5;';
	$stylish_fashion_designer_custom_css .='}';

	// Post Block
	$stylish_fashion_designer_post_block_option = get_theme_mod( 'stylish_fashion_designer_post_block_option','By Block');
    if($stylish_fashion_designer_post_block_option == 'By Without Block'){
		$stylish_fashion_designer_custom_css .='.gridbox .inner-service, .related-inner-box, .mainbox-post, .layout2, .layout1, .post_format-post-format-video,.post_format-post-format-image,.post_format-post-format-audio, .post_format-post-format-gallery, .mainbox{';
			$stylish_fashion_designer_custom_css .='border:none; margin:30px 0;';
		$stylish_fashion_designer_custom_css .='}';
	}

	// post image 
	$stylish_fashion_designer_post_featured_color = get_theme_mod('stylish_fashion_designer_post_featured_color', 'var(--first-theme-color)');
	$stylish_fashion_designer_post_featured_image = get_theme_mod('stylish_fashion_designer_post_featured_image','Image');
	if($stylish_fashion_designer_post_featured_image == 'Color'){
		$stylish_fashion_designer_custom_css .='.post-color{';
			$stylish_fashion_designer_custom_css .='background-color: '.esc_attr($stylish_fashion_designer_post_featured_color).';';
		$stylish_fashion_designer_custom_css .='}';
	}

	// featured image dimention
	$stylish_fashion_designer_post_featured_image_dimention = get_theme_mod('stylish_fashion_designer_post_featured_image_dimention', 'Default');
	$stylish_fashion_designer_post_featured_image_custom_width = get_theme_mod('stylish_fashion_designer_post_featured_image_custom_width');
	$stylish_fashion_designer_post_featured_image_custom_height = get_theme_mod('stylish_fashion_designer_post_featured_image_custom_height');
	if($stylish_fashion_designer_post_featured_image_dimention == 'Custom'){
		$stylish_fashion_designer_custom_css .='.box-image img{';
			$stylish_fashion_designer_custom_css .='width: '.esc_attr($stylish_fashion_designer_post_featured_image_custom_width).'px; height: '.esc_attr($stylish_fashion_designer_post_featured_image_custom_height).'px;';
		$stylish_fashion_designer_custom_css .='}';
	}

	// featured image dimention
	$stylish_fashion_designer_custom_post_color_width = get_theme_mod('stylish_fashion_designer_custom_post_color_width');
	$stylish_fashion_designer_custom_post_color_height = get_theme_mod('stylish_fashion_designer_custom_post_color_height');
	if($stylish_fashion_designer_post_featured_image == 'Color'){
		$stylish_fashion_designer_custom_css .='.post-color{';
			$stylish_fashion_designer_custom_css .='width: '.esc_attr($stylish_fashion_designer_custom_post_color_width).'px; height: '.esc_attr($stylish_fashion_designer_custom_post_color_height).'px;';
		$stylish_fashion_designer_custom_css .='}';
	}

	// site title font size
	$stylish_fashion_designer_site_title_font_size = get_theme_mod('stylish_fashion_designer_site_title_font_size', 25);
	$stylish_fashion_designer_custom_css .='.logo .site-title{';
	$stylish_fashion_designer_custom_css .='font-size: '.esc_attr($stylish_fashion_designer_site_title_font_size).'px;';
	$stylish_fashion_designer_custom_css .='}';

	// site tagline font size
	$stylish_fashion_designer_site_tagline_font_size = get_theme_mod('stylish_fashion_designer_site_tagline_font_size', 13);
	$stylish_fashion_designer_custom_css .='p.site-description{';
	$stylish_fashion_designer_custom_css .='font-size: '.esc_attr($stylish_fashion_designer_site_tagline_font_size).'px;';
	$stylish_fashion_designer_custom_css .='}';

	// woocommerce Product Navigation
	$stylish_fashion_designer_wooproducts_nav = get_theme_mod('stylish_fashion_designer_wooproducts_nav', 'Yes');
	if($stylish_fashion_designer_wooproducts_nav == 'No'){
		$stylish_fashion_designer_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$stylish_fashion_designer_custom_css .='display: none;';
		$stylish_fashion_designer_custom_css .='}';
	}

	// site title color
	$stylish_fashion_designer_site_title_color = get_theme_mod('stylish_fashion_designer_site_title_color');
	$stylish_fashion_designer_custom_css .='.site-title a{';
		$stylish_fashion_designer_custom_css .='color: '.esc_attr($stylish_fashion_designer_site_title_color).' !important;';
	$stylish_fashion_designer_custom_css .='}';

	// site tagline color
	$stylish_fashion_designer_site_tagline_color = get_theme_mod('stylish_fashion_designer_site_tagline_color');
	$stylish_fashion_designer_custom_css .='.site-description{';
		$stylish_fashion_designer_custom_css .='color: '.esc_attr($stylish_fashion_designer_site_tagline_color).' !important;';
	$stylish_fashion_designer_custom_css .='}';
	
	// site toggle button color
	$stylish_fashion_designer_toggle_button_color = get_theme_mod('stylish_fashion_designer_toggle_button_color');
	$stylish_fashion_designer_custom_css .='.toggle-menu i{';
		$stylish_fashion_designer_custom_css .='color: '.esc_attr($stylish_fashion_designer_toggle_button_color).' !important;';
	$stylish_fashion_designer_custom_css .='}';

	//Copyright text color
	$stylish_fashion_designer_copyright_text_color = get_theme_mod('stylish_fashion_designer_copyright_text_color');
	$stylish_fashion_designer_custom_css .='.copyright-wrapper, .copyright-wrapper p a{';
		$stylish_fashion_designer_custom_css .='color: '.esc_attr($stylish_fashion_designer_copyright_text_color).';';
	$stylish_fashion_designer_custom_css .='}';

	//Copyright text Hover color
	$stylish_fashion_designer_copyright_text_hover_color = get_theme_mod('stylish_fashion_designer_copyright_text_hover_color');
	$stylish_fashion_designer_custom_css .='.copyright-wrapper, .copyright-wrapper p a:hover{';
		$stylish_fashion_designer_custom_css .='color: '.esc_attr($stylish_fashion_designer_copyright_text_hover_color).';';
	$stylish_fashion_designer_custom_css .='}';

	//Copyright background css
	$stylish_fashion_designer_copyright_text_background = get_theme_mod('stylish_fashion_designer_copyright_text_background');
	$stylish_fashion_designer_custom_css .='.copyright-wrapper{';
		$stylish_fashion_designer_custom_css .='background-color: '.esc_attr($stylish_fashion_designer_copyright_text_background).';';
	$stylish_fashion_designer_custom_css .='}';

	// menu font weight
	$stylish_fashion_designer_font_weight_option_menu = get_theme_mod( 'stylish_fashion_designer_font_weight_option_menu');
	if($stylish_fashion_designer_font_weight_option_menu != ''){
		$stylish_fashion_designer_custom_css .='.primary-navigation ul li a{';
			$stylish_fashion_designer_custom_css .='font-weight: '.esc_attr($stylish_fashion_designer_font_weight_option_menu).'!important;';
		$stylish_fashion_designer_custom_css .='}';
	}

	// menu color
	$stylish_fashion_designer_menu_color = get_theme_mod('stylish_fashion_designer_menu_color');

	$stylish_fashion_designer_custom_css .='.primary-navigation a, .primary-navigation ul li a, #site-navigation li a{';
			$stylish_fashion_designer_custom_css .='color: '.esc_attr($stylish_fashion_designer_menu_color).' !important;';
	$stylish_fashion_designer_custom_css .='}';

// Sub menu color
	$stylish_fashion_designer_sub_menu_color = get_theme_mod('stylish_fashion_designer_sub_menu_color');

	$stylish_fashion_designer_custom_css .='.primary-navigation ul.sub-menu a, .primary-navigation ul.sub-menu li a, #site-navigation ul.sub-menu li a, .primary-navigation ul.children a, .primary-navigation ul.children li a, #site-navigation ul.children li a{';
			$stylish_fashion_designer_custom_css .='color: '.esc_attr($stylish_fashion_designer_sub_menu_color).' !important;';
	$stylish_fashion_designer_custom_css .='}';

// menu hover color
	$stylish_fashion_designer_menu_hover_color = get_theme_mod('stylish_fashion_designer_menu_hover_color');

	$stylish_fashion_designer_custom_css .='.primary-navigation a:hover, .primary-navigation ul li a:hover, .primary-navigation .current_page_item > a:hover, .primary-navigation .current-menu-item > a:hover, .primary-navigation .current_page_ancestor > a:hover, #site-navigation li a:hover{';
			$stylish_fashion_designer_custom_css .='color: '.esc_attr($stylish_fashion_designer_menu_hover_color).' !important;';
	$stylish_fashion_designer_custom_css .='}';

// Sub menu hover color
	$stylish_fashion_designer_sub_menu_hover_color = get_theme_mod('stylish_fashion_designer_sub_menu_hover_color');

	$stylish_fashion_designer_custom_css .='.primary-navigation ul.sub-menu a:hover, .primary-navigation ul.sub-menu li a:hover, .primary-navigation .current_page_item > a:hover, .primary-navigation .current-menu-item > a:hover, .primary-navigation .current_page_ancestor > a:hover, #site-navigation ul.sub-menu li a:hover, .primary-navigation ul.children a:hover, .primary-navigation ul.children li a:hover, #site-navigation ul.children li a:hover{';
			$stylish_fashion_designer_custom_css .='color: '.esc_attr($stylish_fashion_designer_sub_menu_hover_color).' !important;';
	$stylish_fashion_designer_custom_css .='}';	

// Menu Item Hover Style	

	$stylish_fashion_designer_menus_item = get_theme_mod( 'stylish_fashion_designer_menus_item_style','None');
    if($stylish_fashion_designer_menus_item == 'None'){
		$stylish_fashion_designer_custom_css .='.primary-navigation ul li a{';
			$stylish_fashion_designer_custom_css .='';
		$stylish_fashion_designer_custom_css .='}';
	}else if($stylish_fashion_designer_menus_item == 'Zoom In'){
		$stylish_fashion_designer_custom_css .='.primary-navigation ul li a:hover{';
			$stylish_fashion_designer_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.1) !important;';
		$stylish_fashion_designer_custom_css .='}';
	}	

	/*----------------- Slider -----------------*/

	$stylish_fashion_designer_slider_hide = get_theme_mod('stylish_fashion_designer_slider_hide', true);
	if($stylish_fashion_designer_slider_hide == false){
		$stylish_fashion_designer_custom_css .='.page-template-home-page .top-header{';
			$stylish_fashion_designer_custom_css .='position: static; background-color: var(--first-theme-color);';
		$stylish_fashion_designer_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$stylish_fashion_designer_slider_layout = get_theme_mod( 'stylish_fashion_designer_slider_opacity_color', '0.3');
	if($stylish_fashion_designer_slider_layout == '0'){
		$stylish_fashion_designer_custom_css .='#slider img.slider-banner-img{';
			$stylish_fashion_designer_custom_css .='opacity:0';
		$stylish_fashion_designer_custom_css .='}';
		}else if($stylish_fashion_designer_slider_layout == '0.1'){
		$stylish_fashion_designer_custom_css .='#slider img.slider-banner-img{';
			$stylish_fashion_designer_custom_css .='opacity:0.1';
		$stylish_fashion_designer_custom_css .='}';
		}else if($stylish_fashion_designer_slider_layout == '0.2'){
		$stylish_fashion_designer_custom_css .='#slider img.slider-banner-img{';
			$stylish_fashion_designer_custom_css .='opacity:0.2';
		$stylish_fashion_designer_custom_css .='}';
		}else if($stylish_fashion_designer_slider_layout == '0.3'){
		$stylish_fashion_designer_custom_css .='#slider img.slider-banner-img{';
			$stylish_fashion_designer_custom_css .='opacity:0.3';
		$stylish_fashion_designer_custom_css .='}';
		}else if($stylish_fashion_designer_slider_layout == '0.4'){
		$stylish_fashion_designer_custom_css .='#slider img.slider-banner-img{';
			$stylish_fashion_designer_custom_css .='opacity:0.4';
		$stylish_fashion_designer_custom_css .='}';
		}else if($stylish_fashion_designer_slider_layout == '0.5'){
		$stylish_fashion_designer_custom_css .='#slider img.slider-banner-img{';
			$stylish_fashion_designer_custom_css .='opacity:0.5';
		$stylish_fashion_designer_custom_css .='}';
		}else if($stylish_fashion_designer_slider_layout == '0.6'){
		$stylish_fashion_designer_custom_css .='#slider img.slider-banner-img{';
			$stylish_fashion_designer_custom_css .='opacity:0.6';
		$stylish_fashion_designer_custom_css .='}';
		}else if($stylish_fashion_designer_slider_layout == '0.7'){
		$stylish_fashion_designer_custom_css .='#slider img.slider-banner-img{';
			$stylish_fashion_designer_custom_css .='opacity:0.7';
		$stylish_fashion_designer_custom_css .='}';
		}else if($stylish_fashion_designer_slider_layout == '0.8'){
		$stylish_fashion_designer_custom_css .='#slider img.slider-banner-img{';
			$stylish_fashion_designer_custom_css .='opacity:0.8';
		$stylish_fashion_designer_custom_css .='}';
		}else if($stylish_fashion_designer_slider_layout == '0.9'){
		$stylish_fashion_designer_custom_css .='#slider img.slider-banner-img{';
			$stylish_fashion_designer_custom_css .='opacity:0.9';
		$stylish_fashion_designer_custom_css .='}';
		}	

   //Footer Style 
   $stylish_fashion_designer_theme_lay = get_theme_mod( 'stylish_fashion_designer_footer_template','stylish_fashion_designer-footer-one');
   if($stylish_fashion_designer_theme_lay == 'stylish_fashion_designer-footer-one'){
	   $stylish_fashion_designer_custom_css .='.footer-wp{';
		   $stylish_fashion_designer_custom_css .='';
	   $stylish_fashion_designer_custom_css .='}';

   }else if($stylish_fashion_designer_theme_lay == 'stylish_fashion_designer-footer-two'){
	   $stylish_fashion_designer_custom_css .='.footer-wp {';
		   $stylish_fashion_designer_custom_css .='background: #E3F2FD !important;';
	   $stylish_fashion_designer_custom_css .='}';
	   $stylish_fashion_designer_custom_css .='.footer-wp p,.footer-wp span,.footer-wp li a,.footer-wp #wp-calendar caption,.footer-wp #wp-calendar td,.footer-wp #wp-calendar th, .footer-wp, .footer-wp h3, .footer-wp a.rsswidget, .footer-wp #wp-calendar a, .copyright a, .footer-wp .custom_details, .footer-wp ins span, .footer-wp .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, .footer-wp ul li a, .footer-wp table, .footer-wp th, .footer-wp td, .footer-wp caption, #sidebar caption,.footer-wp nav.wp-calendar-nav a,.footer-wp .search-form .search-field, .footer-wp .rssSummary, .footer-wp ul li{';
		   $stylish_fashion_designer_custom_css .='color:#000 !important;';
	   $stylish_fashion_designer_custom_css .='}';
	   $stylish_fashion_designer_custom_css .='.footer-wp p{';
		   $stylish_fashion_designer_custom_css .='color:#000 !important;';
	   $stylish_fashion_designer_custom_css .='}';
	   $stylish_fashion_designer_custom_css .='.footer-wp ul li::before{';
		   $stylish_fashion_designer_custom_css .='background:#000;';
	   $stylish_fashion_designer_custom_css .='}';
	   $stylish_fashion_designer_custom_css .='.footer-wp table, .footer-wp th, .footer-wp td,.footer-wp.search-form .search-field,.footer-wp .tagcloud a{';
		   $stylish_fashion_designer_custom_css .='border: 1px solid #000;';
	   $stylish_fashion_designer_custom_css .='}';

   }else if($stylish_fashion_designer_theme_lay == 'stylish_fashion_designer-footer-three'){
	   $stylish_fashion_designer_custom_css .='.footer-wp {';
		   $stylish_fashion_designer_custom_css .='background: #0A0A1F !important;;';
	   $stylish_fashion_designer_custom_css .='}';
   }
   else if($stylish_fashion_designer_theme_lay == 'stylish_fashion_designer-footer-four'){
	   $stylish_fashion_designer_custom_css .='.footer-wp {';
		   $stylish_fashion_designer_custom_css .='background: #F5F5DC !important;;';
	   $stylish_fashion_designer_custom_css .='}';
	   $stylish_fashion_designer_custom_css .='.footer-wp p,.footer-wp span,.footer-wp li a,.footer-wp #wp-calendar caption,.footer-wp #wp-calendar td,.footer-wp #wp-calendar th, .footer-wp, .footer-wp h3, .footer-wp a.rsswidget, .footer-wp #wp-calendar a, .copyright a, .footer-wp .custom_details, .footer-wp ins span, .footer-wp .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, .footer-wp ul li a, .footer-wp table, .footer-wp th, .footer-wp td, .footer-wp caption, #sidebar caption,.footer-wp nav.wp-calendar-nav a,.footer-wp .search-form .search-field, .footer-wp .rssSummary, .footer-wp ul li{';
		   $stylish_fashion_designer_custom_css .='color:#000 !important;';
	   $stylish_fashion_designer_custom_css .='}';
	   $stylish_fashion_designer_custom_css .='.footer-wp p{';
		   $stylish_fashion_designer_custom_css .='color:#000 !important;';
	   $stylish_fashion_designer_custom_css .='}';
	   $stylish_fashion_designer_custom_css .='.footer-wp ul li::before{';
		   $stylish_fashion_designer_custom_css .='background:#000;';
	   $stylish_fashion_designer_custom_css .='}';
	   $stylish_fashion_designer_custom_css .='.footer-wp table, .footer-wp th, .footer-wp td,.footer-wp.search-form .search-field,.footer-wp .tagcloud a{';
		   $stylish_fashion_designer_custom_css .='border: 1px solid #000;';
	   $stylish_fashion_designer_custom_css .='}';
   }
   else if($stylish_fashion_designer_theme_lay == 'stylish_fashion_designer-footer-five'){
   $stylish_fashion_designer_custom_css .='.footer-wp {';
	   $stylish_fashion_designer_custom_css .='background: #333333 !important;;';
   $stylish_fashion_designer_custom_css .='}';
  }	
  
	//Footer Social Icon Alignment
	$stylish_fashion_designer_footer_icon_alignment = get_theme_mod( 'stylish_fashion_designer_footer_icon_alignment','center');
    if($stylish_fashion_designer_footer_icon_alignment == 'left'){
		$stylish_fashion_designer_custom_css .='footer .socialicons{';
			$stylish_fashion_designer_custom_css .='text-align:left !important;';
		$stylish_fashion_designer_custom_css .='}';
	}else if($stylish_fashion_designer_footer_icon_alignment == 'center'){
		$stylish_fashion_designer_custom_css .='footer .socialicons{';
			$stylish_fashion_designer_custom_css .='text-align:center !important;';
		$stylish_fashion_designer_custom_css .='}';
	}else if($stylish_fashion_designer_footer_icon_alignment == 'right'){
		$stylish_fashion_designer_custom_css .='footer .socialicons{';
			$stylish_fashion_designer_custom_css .='text-align:right !important;';
		$stylish_fashion_designer_custom_css .='}';
	}	

	//Footer icon color
	$stylish_fashion_designer_footer_icon_color_option = get_theme_mod('stylish_fashion_designer_footer_icon_color_option');
	$stylish_fashion_designer_custom_css .='footer .socialicons a{';
			$stylish_fashion_designer_custom_css .='color: '.esc_attr($stylish_fashion_designer_footer_icon_color_option).' !important;';
	$stylish_fashion_designer_custom_css .='}';  
	
	//Social icon color
	$stylish_fashion_designer_social_icon_color = get_theme_mod('stylish_fashion_designer_social_icon_color');
	$stylish_fashion_designer_custom_css .='.social-icon i{';
			$stylish_fashion_designer_custom_css .='color: '.esc_attr($stylish_fashion_designer_social_icon_color).' !important;';
	$stylish_fashion_designer_custom_css .='}';  	