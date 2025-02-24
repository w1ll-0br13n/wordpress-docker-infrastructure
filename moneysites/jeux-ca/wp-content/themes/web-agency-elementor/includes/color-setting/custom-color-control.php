<?php

  $web_agency_elementor_theme_custom_setting_css = '';

	// Global Color
	$web_agency_elementor_theme_color = get_theme_mod('web_agency_elementor_theme_color', '#ffb424');
	$web_agency_elementor_theme_second_color = get_theme_mod('web_agency_elementor_theme_second_color', '#ff8751');

	$web_agency_elementor_theme_custom_setting_css .=':root {';
		$web_agency_elementor_theme_custom_setting_css .='--primary-theme-color: '.esc_attr($web_agency_elementor_theme_color ).'!important;';
		$web_agency_elementor_theme_custom_setting_css .='--secondary-theme-color: '.esc_attr($web_agency_elementor_theme_second_color ).'!important;';
	$web_agency_elementor_theme_custom_setting_css .='}';

	// Scroll to top alignment
	$web_agency_elementor_scroll_alignment = get_theme_mod('web_agency_elementor_scroll_alignment', 'right');

	if($web_agency_elementor_scroll_alignment == 'right'){
		$web_agency_elementor_theme_custom_setting_css .='.scroll-up{';
			$web_agency_elementor_theme_custom_setting_css .='right: 30px;!important;';
			$web_agency_elementor_theme_custom_setting_css .='left: auto;!important;';
		$web_agency_elementor_theme_custom_setting_css .='}';
	}else if($web_agency_elementor_scroll_alignment == 'center'){
		$web_agency_elementor_theme_custom_setting_css .='.scroll-up{';
			$web_agency_elementor_theme_custom_setting_css .='left: calc(50% - 10px) !important;';
		$web_agency_elementor_theme_custom_setting_css .='}';
	}else if($web_agency_elementor_scroll_alignment == 'left'){
		$web_agency_elementor_theme_custom_setting_css .='.scroll-up{';
			$web_agency_elementor_theme_custom_setting_css .='left: 30px;!important;';
			$web_agency_elementor_theme_custom_setting_css .='right: auto;!important;';
		$web_agency_elementor_theme_custom_setting_css .='}';
	}

	// Related Product

	$web_agency_elementor_show_related_product = get_theme_mod('web_agency_elementor_show_related_product', true );

	if($web_agency_elementor_show_related_product != true){
		$web_agency_elementor_theme_custom_setting_css .='.related.products{';
			$web_agency_elementor_theme_custom_setting_css .='display: none;';
		$web_agency_elementor_theme_custom_setting_css .='}';
	}		