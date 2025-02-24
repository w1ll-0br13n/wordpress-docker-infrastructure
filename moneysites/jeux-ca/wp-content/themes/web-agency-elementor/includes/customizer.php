<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));

	Kirki::add_field( 'theme_config_id', [
        'type'        => 'slider',
        'settings'    => 'web_agency_elementor_logo_resizer',
        'label'       => __( 'Logo Size', 'web-agency-elementor' ),
        'section'     => 'title_tagline',
        'default'     => 150,
        'choices'     => [
            'min'   => 50,
            'max'   => 200,
            'step'  => 1,
        ],
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_enable_logo_text',
		'section'     => 'title_tagline',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

  	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'web_agency_elementor_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'web-agency-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'web-agency-elementor' ),
			'off' => esc_html__( 'Disable', 'web-agency-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'web_agency_elementor_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'web-agency-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'web-agency-elementor' ),
			'off' => esc_html__( 'Disable', 'web-agency-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_agency_elementor_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_site_tittle_transform_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Text Transform', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'web_agency_elementor_site_tittle_transform',
		'section'     => 'title_tagline',
		'default'     => 'none',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'web-agency-elementor' ),
			'uppercase' => esc_html__( 'Uppercase', 'web-agency-elementor' ),
			'lowercase' => esc_html__( 'Lowercase', 'web-agency-elementor' ),
			'capitalize' => esc_html__( 'Capitalize', 'web-agency-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '.logo a'),
				'property' => ' text-transform',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_agency_elementor_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_logo_settings_premium_features',
		'section'     => 'title_tagline',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Unlock More Features in the Premium Version!', 'web-agency-elementor' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customizable Text Logo', 'web-agency-elementor' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Enhanced Typography Options', 'web-agency-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Priority Support', 'web-agency-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'web-agency-elementor' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/web-design-agency-wordpress-theme', 'web-agency-elementor' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'web-agency-elementor' ) .'</a></div>',
	) );

	// Theme color

	Kirki::add_section( 'web_agency_elementor_theme_color_setting', array(
		'title'    => __( 'Color Option', 'web-agency-elementor' ),
		'priority' => 10,
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_agency_elementor_theme_color',
		'label'       => __( 'Theme First color', 'web-agency-elementor'),
		'description'    => esc_html__( 'To customize the colors of the homepage, use the Elementor editor', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_theme_color_setting',
		'type'        => 'color',
		'default'     => '#ffb424',
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_agency_elementor_theme_second_color',
		'label'       => __( 'Theme Second color', 'web-agency-elementor'),
		'section'     => 'web_agency_elementor_theme_color_setting',
		'type'        => 'color',
		'default'     => '#ff8751',
	) );

	// TYPOGRAPHY SETTINGS
	Kirki::add_panel( 'web_agency_elementor_typography_panel', array(
		'priority' => 10,
		'title'    => __( 'Typography', 'web-agency-elementor' ),
	) );

	//Heading 1 Section

	Kirki::add_section( 'web_agency_elementor_h1_typography_setting', array(
		'title'    => __( 'Heading 1', 'web-agency-elementor' ),
		'panel'    => 'web_agency_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_h1_typography_heading',
		'section'     => 'web_agency_elementor_h1_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 1 Typography', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'web_agency_elementor_h1_typography_font',
		'section'   =>  'web_agency_elementor_h1_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Poppins',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h1',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 2 Section

	Kirki::add_section( 'web_agency_elementor_h2_typography_setting', array(
		'title'    => __( 'Heading 2', 'web-agency-elementor' ),
		'panel'    => 'web_agency_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_h2_typography_heading',
		'section'     => 'web_agency_elementor_h2_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 2 Typography', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'web_agency_elementor_h2_typography_font',
		'section'   =>  'web_agency_elementor_h2_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Poppins',
			'font-size'       => '',
			'variant'       =>  '700',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h2',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 3 Section

	Kirki::add_section( 'web_agency_elementor_h3_typography_setting', array(
		'title'    => __( 'Heading 3', 'web-agency-elementor' ),
		'panel'    => 'web_agency_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_h3_typography_heading',
		'section'     => 'web_agency_elementor_h3_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 3 Typography', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'web_agency_elementor_h3_typography_font',
		'section'   =>  'web_agency_elementor_h3_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Poppins',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h3',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 4 Section

	Kirki::add_section( 'web_agency_elementor_h4_typography_setting', array(
		'title'    => __( 'Heading 4', 'web-agency-elementor' ),
		'panel'    => 'web_agency_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_h4_typography_heading',
		'section'     => 'web_agency_elementor_h4_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 4 Typography', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'web_agency_elementor_h4_typography_font',
		'section'   =>  'web_agency_elementor_h4_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Poppins',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h4',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 5 Section

	Kirki::add_section( 'web_agency_elementor_h5_typography_setting', array(
		'title'    => __( 'Heading 5', 'web-agency-elementor' ),
		'panel'    => 'web_agency_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_h5_typography_heading',
		'section'     => 'web_agency_elementor_h5_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 5 Typography', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'web_agency_elementor_h5_typography_font',
		'section'   =>  'web_agency_elementor_h5_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Poppins',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h5',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 6 Section

	Kirki::add_section( 'web_agency_elementor_h6_typography_setting', array(
		'title'    => __( 'Heading 6', 'web-agency-elementor' ),
		'panel'    => 'web_agency_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_h6_typography_heading',
		'section'     => 'web_agency_elementor_h6_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 6 Typography', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'web_agency_elementor_h6_typography_font',
		'section'   =>  'web_agency_elementor_h6_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Poppins',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h6',
				'suffix' => '!important'
			],
		],
	) );

	//body Typography

	Kirki::add_section( 'web_agency_elementor_body_typography_setting', array(
		'title'    => __( 'Content Typography', 'web-agency-elementor' ),
		'panel'    => 'web_agency_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_body_typography_heading',
		'section'     => 'web_agency_elementor_body_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content  Typography', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'web_agency_elementor_body_typography_font',
		'section'   =>  'web_agency_elementor_body_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Poppins',
			'variant'       =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   => 'body',
				'suffix' => '!important'
			],
		],
	) );

	// Theme Options Panel
	Kirki::add_panel( 'web_agency_elementor_theme_options_panel', array(
		'priority' => 10,
		'title'    => __( 'Theme Options', 'web-agency-elementor' ),
	) );

	//ADDITIONAL SETTINGS

	Kirki::add_section( 'web_agency_elementor_additional_setting',array(
		'title' => esc_html__( 'Additional Settings', 'web-agency-elementor' ),
		'panel' => 'web_agency_elementor_theme_options_panel',
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'General', 'web-agency-elementor' ),
			],
			'header-image'  => [
				'label' => esc_html__( 'Header Image', 'web-agency-elementor' ),
			],
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_agency_elementor_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_additional_setting',
		'default'     => '0',
		'tab'      => 'general',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'web_agency_elementor_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'web_agency_elementor_scroll_alignment_heading',
		'section'     => 'web_agency_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Scroll To Top Position', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'radio-buttonset',
		'tab'      => 'general',
		'settings'    => 'web_agency_elementor_scroll_alignment',
		'section'     => 'web_agency_elementor_additional_setting',
		'default'     => 'right',
		'choices'     => [
			'left' => esc_html__( 'left', 'web-agency-elementor' ),
			'center' => esc_html__( 'center', 'web-agency-elementor' ),
			'right' => esc_html__( 'right', 'web-agency-elementor' ),
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'web_agency_elementor_scroller_border_radius_heading',
		'section'     => 'web_agency_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Scroll To Top Border Radius', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'slider',
		'tab'      => 'general',
		'settings'    => 'web_agency_elementor_scroller_border_radius',
		'section'     => 'web_agency_elementor_additional_setting',
		'default'     => '3',
		'choices'     => [
			'min'  => 0,
			'max'  => 25,
			'step' => 1,
		],
		'output' => array(
			array(
				'element'  => '.scroll-up a',
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'web_agency_elementor_cursor_outline_heading',
		'section'     => 'web_agency_elementor_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Dot Cursor', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'web_agency_elementor_cursor_outline',
		'label'       => esc_html__( 'Enable or Disable Dot Cursor', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_additional_setting',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'web_agency_elementor_progress_bar_heading',
		'section'     => 'web_agency_elementor_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Progress Bar', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'web_agency_elementor_progress_bar',
		'label'       => esc_html__( 'Enable or Disable Progress Bar', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_additional_setting',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'web_agency_elementor_single_page_layout_heading',
		'section'     => 'web_agency_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Page Layout', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'general',
		'settings'    => 'web_agency_elementor_single_page_layout',
		'section'     => 'web_agency_elementor_additional_setting',
		'default'     => 'One Column',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'web-agency-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'web-agency-elementor' ),
			'One Column' => esc_html__( 'One Column', 'web-agency-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'web_agency_elementor_header_background_attachment_heading',
		'section'     => 'web_agency_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'header-image',
		'settings'    => 'web_agency_elementor_header_background_attachment',
		'section'     => 'web_agency_elementor_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'web-agency-elementor' ),
			'fixed' => esc_html__( 'Fixed', 'web-agency-elementor' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	 ) );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'web_agency_elementor_header_image_height_heading',
		'section'     => 'web_agency_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image height', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_agency_elementor_header_image_height',
		'label'       => __( 'Image Height', 'web-agency-elementor' ),
		'description'    => esc_html__( 'Enter a value in pixels. Example:500px', 'web-agency-elementor' ),
		'type'        => 'text',
		'tab'      => 'header-image',
		'default'    => [
			'desktop' => '550px',
			'tablet'  => '350px',
			'mobile'  => '200px',
		],
		'responsive' => true,
		'section'     => 'web_agency_elementor_additional_setting',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.header-image-box'),
				'property' => 'height',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			),
		),
	) );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'web_agency_elementor_header_overlay_heading',
		'section'     => 'web_agency_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Overlay', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_agency_elementor_header_overlay_setting',
		'label'       => __( 'Overlay Color', 'web-agency-elementor' ),
		'type'        => 'color',
		'tab'      => 'header-image',
		'section'     => 'web_agency_elementor_additional_setting',
		'transport' => 'auto',
		'default'     => '#1a1b29',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.header-image-box:before',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'web_agency_elementor_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'web_agency_elementor_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	// HEADER SECTION

	Kirki::add_section( 'web_agency_elementor_section_header',array(
		'title' => esc_html__( 'Header Settings', 'web-agency-elementor' ),
		'description'    => esc_html__( 'Here you can add header information.', 'web-agency-elementor' ),
		'panel' => 'web_agency_elementor_theme_options_panel',
		'tabs'  => [
			'header' => [
				'label' => esc_html__( 'Header', 'web-agency-elementor' ),
			],
			'menu'  => [
				'label' => esc_html__( 'Menu', 'web-agency-elementor' ),
			],
		],
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'tab'      => 'header',
		'settings'    => 'web_agency_elementor_sticky_header',
		'label'       => esc_html__( 'Enable/Disable Sticky Header', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_section_header',
		'default'     => 0,
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'web-agency-elementor'),
			'off' => esc_html__( 'Disable', 'web-agency-elementor'),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'menu',
		'settings'    => 'web_agency_elementor_menu_size_heading',
		'section'     => 'web_agency_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Font Size(px)', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_agency_elementor_menu_size',
		'label'       => __( 'Enter a value in pixels. Example:20px', 'web-agency-elementor' ),
		'type'        => 'text',
		'section'     => 'web_agency_elementor_section_header',
		'transport' => 'auto',
		'tab'      => 'menu',
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'font-size',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'menu',
		'settings'    => 'web_agency_elementor_menu_text_transform_heading',
		'section'     => 'web_agency_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Text Transform', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'menu',
		'settings'    => 'web_agency_elementor_menu_text_transform',
		'section'     => 'web_agency_elementor_section_header',
		'default'     => 'capitalize',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'web-agency-elementor' ),
			'uppercase' => esc_html__( 'Uppercase', 'web-agency-elementor' ),
			'lowercase' => esc_html__( 'Lowercase', 'web-agency-elementor' ),
			'capitalize' => esc_html__( 'Capitalize', 'web-agency-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => ' text-transform',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'web_agency_elementor_enable_button_heading',
		'section'     => 'web_agency_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( ' Header Button', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Button Text', 'web-agency-elementor' ),
		'settings' => 'web_agency_elementor_header_button_text',
		'section'  => 'web_agency_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Button URL', 'web-agency-elementor' ),
		'settings' => 'web_agency_elementor_header_button_url',
		'section'  => 'web_agency_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_agency_elementor_menu_color',
		'label'       => __( 'Menu Color', 'web-agency-elementor' ),
		'type'        => 'color',
		'section'     => 'web_agency_elementor_section_header',
		'transport' => 'auto',
		'tab'      => 'menu',
		'default'     => '#fff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'color',
			),
			
		),
	) );
	
	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_agency_elementor_menu_hover_color',
		'label'       => __( 'Menu Hover Color', 'web-agency-elementor' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'default'     => '#ffb424',
		'section'     => 'web_agency_elementor_section_header',
		'transport' => 'auto',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a:hover', '#main-menu ul li a:hover', '#main-menu li:hover > a','#main-menu a:focus','#main-menu li.focus > a','#main-menu ul li.current-menu-item > a','#main-menu ul li.current_page_item > a','#main-menu ul li.current-menu-parent > a','#main-menu ul li.current_page_ancestor > a','#main-menu ul li.current-menu-ancestor > a'),
				'property' => 'color',
			),

		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_agency_elementor_submenu_color',
		'label'       => __( 'Submenu Color', 'web-agency-elementor' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'section'     => 'web_agency_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#1a1b29',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a', '#main-menu ul.sub-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_agency_elementor_submenu_hover_color',
		'label'       => __( 'Submenu Hover Color', 'web-agency-elementor' ),
		'type'        => 'color',
		'section'     => 'web_agency_elementor_section_header',
		'transport' => 'auto',
		'tab'      => 'menu',
		'default'     => '#fff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_agency_elementor_submenu_hover_background_color',
		'label'       => __( 'Submenu Hover Background Color', 'web-agency-elementor' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'section'     => 'web_agency_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#ffb424',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'web_agency_elementor_logo_settings_premium_features_header',
		'section'     => 'web_agency_elementor_section_header',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Enhance your header design now!', 'web-agency-elementor' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customize your header background color', 'web-agency-elementor' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Adjust icon and text font sizes', 'web-agency-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Explore enhanced typography options', 'web-agency-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'web-agency-elementor' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/web-design-agency-wordpress-theme', 'web-agency-elementor' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'web-agency-elementor' ) .'</a></div>',
	) );

	// POST SECTION

	Kirki::add_section( 'web_agency_elementor_blog_post',array(
		'title' => esc_html__( 'Post Settings', 'web-agency-elementor' ),
		'description'    => esc_html__( 'Here you can add post information.', 'web-agency-elementor' ),
		'panel' => 'web_agency_elementor_theme_options_panel',
		'tabs'  => [
			'blog-post' => [
				'label' => esc_html__( 'Blog Post', 'web-agency-elementor' ),
			],
			'single-post'  => [
				'label' => esc_html__( 'Single Post', 'web-agency-elementor' ),
			],
		],
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'web_agency_elementor_post_layout_heading',
		'section'     => 'web_agency_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Layout', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'blog-post',
		'settings'    => 'web_agency_elementor_post_layout',
		'section'     => 'web_agency_elementor_blog_post',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'web-agency-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'web-agency-elementor' ),
			'One Column' => esc_html__( 'One Column', 'web-agency-elementor' ),
			'Three Columns' => esc_html__( 'Three Columns', 'web-agency-elementor' ),
			'Four Columns' => esc_html__( 'Four Columns', 'web-agency-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'web_agency_elementor_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'web_agency_elementor_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'web_agency_elementor_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'web_agency_elementor_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'web_agency_elementor_length_setting_heading',
		'section'     => 'web_agency_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'tab'      => 'blog-post',
		'settings'    => 'web_agency_elementor_length_setting',
		'section'     => 'web_agency_elementor_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'web_agency_elementor_show_pagination_heading',
		'section'     => 'web_agency_elementor_blog_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Pagination', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'web_agency_elementor_show_pagination',
		'label'       => esc_html__( 'Enable or Disable Blog Post Pagination', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_blog_post',
		'default'     => true,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'web_agency_elementor_single_post_date_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Date', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'     	  => 'single-post',
		'settings'    => 'web_agency_elementor_single_post_author_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Author', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'web_agency_elementor_single_post_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Comment', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'web-agency-elementor' ),
		'settings'    => 'web_agency_elementor_single_post_tag',
		'section'     => 'web_agency_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'web-agency-elementor' ),
		'settings'    => 'web_agency_elementor_single_post_category',
		'section'     => 'web_agency_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'web_agency_elementor_post_comment_show_hide',
		'label'       => esc_html__( 'Show / Hide Comment Box', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'web_agency_elementor_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'single-post',
		'settings'    => 'web_agency_elementor_single_post_radius',
		'section'     => 'web_agency_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_agency_elementor_single_post_border_radius',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'web-agency-elementor' ),
		'type'        => 'text',
		'tab'      => 'single-post',
		'section'     => 'web_agency_elementor_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );

	// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'web_agency_elementor_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'web-agency-elementor' ),
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'web-agency-elementor' ),
		'panel'    => 'woocommerce',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_agency_elementor_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'web-agency-elementor' ),
		'settings'    => 'web_agency_elementor_shop_page_layout',
		'section'     => 'web_agency_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'web-agency-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'web-agency-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'web_agency_elementor_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]

	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'web-agency-elementor' ),
		'settings'    => 'web_agency_elementor_products_per_row',
		'section'     => 'web_agency_elementor_woocommerce_settings',
		'default'     => '3',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'web-agency-elementor' ),
		'settings'    => 'web_agency_elementor_products_per_page',
		'section'     => 'web_agency_elementor_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_agency_elementor_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'web-agency-elementor' ),
		'settings'    => 'web_agency_elementor_single_product_sidebar_layout',
		'section'     => 'web_agency_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'web-agency-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'web-agency-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'web_agency_elementor_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_products_button_border_radius_heading',
		'section'     => 'web_agency_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Products Button Border Radius', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'web_agency_elementor_products_button_border_radius',
		'section'     => 'web_agency_elementor_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
		'choices'  => [
					'min'  => 1,
					'max'  => 50,
					'step' => 1,
				],
		'output' => array(
			array(
				'element'  => array('.woocommerce ul.products li.product .button',' a.checkout-button.button.alt.wc-forward','.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button','.woocommerce input.button','.woocommerce #respond input#submit.alt','.woocommerce button.button.alt','.woocommerce input.button.alt'),
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_sale_badge_position_heading',
		'section'     => 'web_agency_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Badge Position', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'web_agency_elementor_sale_badge_position',
		'section'     => 'web_agency_elementor_woocommerce_settings',
		'default'     => 'right',
		'choices'     => [
			'right' => esc_html__( 'Right', 'web-agency-elementor' ),
			'left' => esc_html__( 'Left', 'web-agency-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_products_sale_font_size_heading',
		'section'     => 'web_agency_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Font Size', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'text',
		'settings'    => 'web_agency_elementor_products_sale_font_size',
		'section'     => 'web_agency_elementor_woocommerce_settings',
		'priority'    => 10,
		'output' => array(
			array(
				'element'  => array('.woocommerce span.onsale','.woocommerce ul.products li.product .onsale'),
				'property' => 'font-size',
				'units' => 'px',
			),
		),
	] );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_show_related_product_heading',
		'section'     => 'web_agency_elementor_woocommerce_settings',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Related Product', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_agency_elementor_show_related_product',
		'label'       => esc_html__( 'Enable or Disable Related Product', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	// No Results Page Settings

	Kirki::add_section( 'web_agency_elementor_no_result_section', array(
		'title'          => esc_html__( '404 & No Results Page Settings', 'web-agency-elementor' ),
		'panel'    => 'web_agency_elementor_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_page_not_found_title_heading',
		'section'     => 'web_agency_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Title', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'web_agency_elementor_page_not_found_title',
		'section'  => 'web_agency_elementor_no_result_section',
		'default'  => esc_html__('404 Error!', 'web-agency-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_page_not_found_text_heading',
		'section'     => 'web_agency_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Text', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'web_agency_elementor_page_not_found_text',
		'section'  => 'web_agency_elementor_no_result_section',
		'default'  => esc_html__('The page you are looking for may have been moved, deleted, or possibly never existed.', 'web-agency-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'     => 'custom',
		'settings' => 'web_agency_elementor_page_not_found_line_break',
		'section'  => 'web_agency_elementor_no_result_section',
		'default'  => '<hr>',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_no_results_title_heading',
		'section'     => 'web_agency_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Title', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'web_agency_elementor_no_results_title',
		'section'  => 'web_agency_elementor_no_result_section',
		'default'  => esc_html__('Nothing Found', 'web-agency-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_no_results_content_heading',
		'section'     => 'web_agency_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Content', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'web_agency_elementor_no_results_content',
		'section'  => 'web_agency_elementor_no_result_section',
		'default'  => esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'web-agency-elementor'),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'web_agency_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'web-agency-elementor' ),
        'panel'    => 'web_agency_elementor_theme_options_panel',
		'description'    => esc_html__( 'Here you can change copyright text', 'web-agency-elementor' ),
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_show_footer_widget_heading',
		'section'     => 'web_agency_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_agency_elementor_show_footer_widget',
		'label'       => esc_html__( 'Footer Widget', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_agency_elementor_show_footer_copyright',
		'label'       => esc_html__( 'Footer Copyright', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_footer_text_heading',
		'section'     => 'web_agency_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'web_agency_elementor_footer_text',
		'section'  => 'web_agency_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_footer_enable_heading',
		'section'     => 'web_agency_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'web_agency_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'web-agency-elementor' ),
			'off' => esc_html__( 'Disable', 'web-agency-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_footer_background_widget_heading',
		'section'     => 'web_agency_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Background', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id',
	[
		'settings'    => 'web_agency_elementor_footer_background_widget',
		'type'        => 'background',
		'section'     => 'web_agency_elementor_footer_section',
		'default'     => [
			'background-color'      => 'rgba(26, 27, 41,1)',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.footer-widget',
			],
		],
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_footer__widget_alignment_heading',
		'section'     => 'web_agency_elementor_footer_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Alignment', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'web_agency_elementor_footer__widget_alignment',
		'section'     => 'web_agency_elementor_footer_section',
		'default'     => 'left',
		'choices'     => [
			'center' => esc_html__( 'center', 'web-agency-elementor' ),
			'right' => esc_html__( 'right', 'web-agency-elementor' ),
			'left' => esc_html__( 'left', 'web-agency-elementor' ),
		],
		'output' => array(
			array(
				'element'  => '.footer-area',
				'property' => 'text-align',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_footer_copright_color_heading',
		'section'     => 'web_agency_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Background Color', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_agency_elementor_footer_copright_color',
		'type'        => 'color',
		'label'       => __( 'Background Color', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_footer_section',
		'transport' => 'auto',
		'default'     => '#1a1b29',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.footer-copyright',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_footer_copright_text_color_heading',
		'section'     => 'web_agency_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Text Color', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_agency_elementor_footer_copright_text_color',
		'type'        => 'color',
		'label'       => __( 'Text Color', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_footer_section',
		'transport' => 'auto',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '.footer-copyright a', '.footer-copyright p'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_logo_settings_premium_features_footer',
		'section'     => 'web_agency_elementor_footer_section',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Elevate your footer with premium features:', 'web-agency-elementor' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Tailor your footer layout', 'web-agency-elementor' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Integrate an email subscription form', 'web-agency-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Personalize social media icons', 'web-agency-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'web-agency-elementor' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/web-design-agency-wordpress-theme', 'web-agency-elementor' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'web-agency-elementor' ) .'</a></div>',
	) );

	// Footer Social Icons Section

	Kirki::add_section( 'web_agency_elementor_footer_social_media_section', array(
		'title'          => esc_html__( 'Footer Social Icons', 'web-agency-elementor' ),
		'panel'    => 'web_agency_elementor_theme_options_panel',
		'priority'       => 160,
	) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_footer_social_icon_hide_heading',
		'section'     => 'web_agency_elementor_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable or Disable your Footer Social Icon', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_agency_elementor_footer_social_icon_hide',
		'label'       => esc_html__( 'Enable or Disable Social Icon.', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_footer_social_media_section',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_enable_footer_socail_link_align_heading',
		'section'     => 'web_agency_elementor_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Text Align', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_agency_elementor_enable_footer_socail_link_align',
		'type'        => 'select',
		'priority'    => 10,
		'label'       => __( 'Text Align', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_footer_social_media_section',
		'default'     => 'left',
		'choices'     => [
			'center' => esc_html__( 'center', 'web-agency-elementor' ),
			'right' => esc_html__( 'right', 'web-agency-elementor' ),
			'left' => esc_html__( 'left', 'web-agency-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '.footer-links'),
				'property' => 'text-align',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'priority'    => 10,
		'settings'    => 'web_agency_elementor_enable_footer_socail_link',
		'section'     => 'web_agency_elementor_footer_social_media_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Link', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'priority'    => 10,
		'section'     => 'web_agency_elementor_footer_social_media_section',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Footer Social Icons', 'web-agency-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'web-agency-elementor' ),
		'settings'     => 'web_agency_elementor_social_links_settings_footer',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'web-agency-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'web-agency-elementor' ). ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'web-agency-elementor' ) . ' </strong></a>',
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'web-agency-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'web-agency-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

}