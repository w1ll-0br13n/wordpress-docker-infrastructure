<?php
/**
 * Stylish Fashion Designer Theme Customizer
 * @package Stylish Fashion Designer
 */

load_template( trailingslashit( get_template_directory() ) . '/inc/logo-sizer.php' );
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function stylish_fashion_designer_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . 'inc/custom-control.php' );
	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->add_setting( 'stylish_fashion_designer_logo_sizer',array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control( new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_logo_sizer',array(
		'label' => esc_html__( 'Logo Sizer','stylish-fashion-designer' ),
		'section' => 'title_tagline',
		'priority'    => 9,
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	))); 

	$wp_customize->add_setting('stylish_fashion_designer_site_title_enable',array(
		'default' => true,
		'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
	));
	$wp_customize->add_control('stylish_fashion_designer_site_title_enable',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Site Title','stylish-fashion-designer'),
		'section' => 'title_tagline'
	));

 	$wp_customize->add_setting('stylish_fashion_designer_site_title_font_size',array(
		'default'=> 25,
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_site_title_font_size',array(
		'label' => esc_html__( 'Site Title Font Size (px)','stylish-fashion-designer' ),
		'section'=> 'title_tagline',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
      ),
	))); 

	// site title color
   $wp_customize->add_setting('stylish_fashion_designer_site_title_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_site_title_color', array(
		'label'    => __('Site Title Color', 'stylish-fashion-designer'),
		'section'  => 'title_tagline',
		'settings' => 'stylish_fashion_designer_site_title_color',
	)));

   $wp_customize->add_setting('stylish_fashion_designer_site_tagline_enable',array(
      'default' => false,
      'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
   ));
   $wp_customize->add_control('stylish_fashion_designer_site_tagline_enable',array(
      'type' => 'checkbox',
      'label' => __('Enable / Disable Site Tagline','stylish-fashion-designer'),
      'section' => 'title_tagline'
   ));

   $wp_customize->add_setting('stylish_fashion_designer_site_tagline_font_size',array(
		'default'=> 13,
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_site_tagline_font_size',array(
		'label' => esc_html__( 'Site Tagline Font Size (px)','stylish-fashion-designer' ),
		'section'=> 'title_tagline',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	// site tagline color
	$wp_customize->add_setting('stylish_fashion_designer_site_tagline_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_site_tagline_color', array(
		'label'    => __('Site Tagline Color', 'stylish-fashion-designer'),
		'section'  => 'title_tagline',
		'settings' => 'stylish_fashion_designer_site_tagline_color',
	)));

    $wp_customize->add_setting('stylish_fashion_designer_site_logo_inline',array(
       'default' => false,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
    ));
    $wp_customize->add_control('stylish_fashion_designer_site_logo_inline',array(
       'type' => 'checkbox',
       'label' => __('Site logo inline with site title','stylish-fashion-designer'),
       'section' => 'title_tagline',
    ));

    $wp_customize->add_setting('stylish_fashion_designer_background_skin',array(
        'default' => 'Without Background',
        'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	));
	$wp_customize->add_control('stylish_fashion_designer_background_skin',array(
        'type' => 'radio',
        'label' => __('Background Skin','stylish-fashion-designer'),
        'description' => __('Here you can add the background skin along with the background image.','stylish-fashion-designer'),
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background Skin','stylish-fashion-designer'),
            'Without Background' => __('Without Background Skin','stylish-fashion-designer'),
        ),
	) );

	//Important Links
	$wp_customize->add_section( 'stylish_fashion_designer_important_links' , array(
    	'title' => esc_html__( 'Important Links', 'stylish-fashion-designer' ),
    	'priority' => 10,
	) );

	$wp_customize->add_setting('stylish_fashion_designer_doc_link',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('stylish_fashion_designer_doc_link',array(
		'type'=> 'hidden',
		'description' => "<a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_FREE_DOC) ." '>". esc_html__('Documentation','stylish-fashion-designer') ."</a>",
		'section'=> 'stylish_fashion_designer_important_links'
	));

	$wp_customize->add_setting('stylish_fashion_designer_demo_links',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('stylish_fashion_designer_demo_links',array(
		'type'=> 'hidden',
		'description' => "<a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_LIVE_DEMO) ." '>". esc_html__('Demo','stylish-fashion-designer') ."</a>",
		'section'=> 'stylish_fashion_designer_important_links'
	));

	$wp_customize->add_setting('stylish_fashion_designer_forum_links',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('stylish_fashion_designer_forum_links',array(
		'type'=> 'hidden',
		'description' => "<a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_FREE_SUPPORT) ." '>". esc_html__('Support Forum','stylish-fashion-designer') ."</a>",
		'section'=> 'stylish_fashion_designer_important_links'
	));
	$wp_customize->add_setting('stylish_fashion_designer_review_links',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('stylish_fashion_designer_review_links',array(
		'type'=> 'hidden',
		'description' => "<a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_REVIEW) ." '>". esc_html__('Review','stylish-fashion-designer') ."</a>",
		'section'=> 'stylish_fashion_designer_important_links'
	));

	//add home page setting pannel
	$wp_customize->add_panel( 'stylish_fashion_designer_panel_id', array(
	   'priority' => 11,
	   'capability' => 'edit_theme_options',
	   'theme_supports' => '',
	   'title' => __( 'Theme Settings', 'stylish-fashion-designer' ),
	   'description' => __( 'Description of what this panel does.', 'stylish-fashion-designer' ),
	) );

	$stylish_fashion_designer_font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One',
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower',
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit',
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two',
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda',
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli',
		'Marck Script'           => 'Marck Script',
		'Noto Serif'             => 'Noto Serif',
		'Open Sans'              => 'Open Sans',
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen',
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display',
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik',
		'Rokkitt'                => 'Rokkitt',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Slabo'                  => 'Slabo',
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two',
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn',
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	//Typography
	$wp_customize->add_section('stylish_fashion_designer_typography', array(
		'title'    => __('Typography', 'stylish-fashion-designer'),
		'panel'    => 'stylish_fashion_designer_panel_id',
	));

	$wp_customize->add_setting('stylish_fashion_designer_typography_premium_info',array(
    	'sanitize_callback' => 'sanitize_text_field'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_typography_premium_info',array(
   		 'type'=> 'hidden',
   		 'label' => __('Premium Features','stylish-fashion-designer'),
   		 'description' => "<ul><li>". esc_html__('Please explore our premium theme for additional settings and features.','stylish-fashion-designer') ."</li><li>". esc_html__('And so on...','stylish-fashion-designer') ."</li></ul><a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_BUY_PRO) ." '>". esc_html__('Upgrade to Pro','stylish-fashion-designer') ."</a>",
   		 'section'=> 'stylish_fashion_designer_typography'
 	));

	//This is body FontFamily picker setting
	$wp_customize->add_setting('stylish_fashion_designer_body_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_body_color', array(
		'label'    => __('Body Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_typography',
		'settings' => 'stylish_fashion_designer_body_color',
	)));

	$wp_customize->add_setting('stylish_fashion_designer_body_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices',
	));
	$wp_customize->add_control(	'stylish_fashion_designer_body_font_family', array(
		'section' => 'stylish_fashion_designer_typography',
		'label'   => __('Body Fonts', 'stylish-fashion-designer'),
		'type'    => 'select',
		'choices' => $stylish_fashion_designer_font_array,
	));

	$wp_customize->add_setting('stylish_fashion_designer_body_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('stylish_fashion_designer_body_font_size', array(
		'label'   => __('Body Font Size', 'stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_typography',
		'setting' => 'stylish_fashion_designer_body_font_size',
		'type'    => 'text',
	));

	$wp_customize->add_setting('stylish_fashion_designer_body_font_weight',array(
		'default' => '',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_body_font_weight',array(
		'type' => 'select',
		'label' => __('Body Font Weight','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_typography',
		'choices' => array(
		   '100' => __('100','stylish-fashion-designer'),
         '200' => __('200','stylish-fashion-designer'),
         '300' => __('300','stylish-fashion-designer'),
         '400' => __('400','stylish-fashion-designer'),
         '500' => __('500','stylish-fashion-designer'),
         '600' => __('600','stylish-fashion-designer'),
         '700' => __('700','stylish-fashion-designer'),
         '800' => __('800','stylish-fashion-designer'),
         '900' => __('900','stylish-fashion-designer'),
		),
	) );	

	// This is Paragraph Color picker setting
	$wp_customize->add_setting('stylish_fashion_designer_paragraph_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_paragraph_color', array(
		'label'    => __('Paragraph Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_typography',
		'settings' => 'stylish_fashion_designer_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('stylish_fashion_designer_paragraph_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices',
	));
	$wp_customize->add_control(	'stylish_fashion_designer_paragraph_font_family', array(
		'section' => 'stylish_fashion_designer_typography',
		'label'   => __('Paragraph Fonts', 'stylish-fashion-designer'),
		'type'    => 'select',
		'choices' => $stylish_fashion_designer_font_array,
	));

	$wp_customize->add_setting('stylish_fashion_designer_paragraph_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('stylish_fashion_designer_paragraph_font_size', array(
		'label'   => __('Paragraph Font Size', 'stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_typography',
		'setting' => 'stylish_fashion_designer_paragraph_font_size',
		'type'    => 'text',
	));

	$wp_customize->add_setting('stylish_fashion_designer_paragraph_font_weight',array(
		'default' => '',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_paragraph_font_weight',array(
		'type' => 'select',
		'label' => __('Paragraph Font Weight','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_typography',
		'choices' => array(
		   '100' => __('100','stylish-fashion-designer'),
         '200' => __('200','stylish-fashion-designer'),
         '300' => __('300','stylish-fashion-designer'),
         '400' => __('400','stylish-fashion-designer'),
         '500' => __('500','stylish-fashion-designer'),
         '600' => __('600','stylish-fashion-designer'),
         '700' => __('700','stylish-fashion-designer'),
         '800' => __('800','stylish-fashion-designer'),
         '900' => __('900','stylish-fashion-designer'),
		),
	) );		

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting('stylish_fashion_designer_atag_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_atag_color', array(
		'label'    => __('"a" Tag Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_typography',
		'settings' => 'stylish_fashion_designer_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('stylish_fashion_designer_atag_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices',
	));
	$wp_customize->add_control(	'stylish_fashion_designer_atag_font_family', array(
		'section' => 'stylish_fashion_designer_typography',
		'label'   => __('"a" Tag Fonts', 'stylish-fashion-designer'),
		'type'    => 'select',
		'choices' => $stylish_fashion_designer_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting('stylish_fashion_designer_li_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_li_color', array(
		'label'    => __('"li" Tag Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_typography',
		'settings' => 'stylish_fashion_designer_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('stylish_fashion_designer_li_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices',
	));
	$wp_customize->add_control(	'stylish_fashion_designer_li_font_family', array(
		'section' => 'stylish_fashion_designer_typography',
		'label'   => __('"li" Tag Fonts', 'stylish-fashion-designer'),
		'type'    => 'select',
		'choices' => $stylish_fashion_designer_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting('stylish_fashion_designer_h1_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_h1_color', array(
		'label'    => __('H1 Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_typography',
		'settings' => 'stylish_fashion_designer_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('stylish_fashion_designer_h1_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices',
	));
	$wp_customize->add_control('stylish_fashion_designer_h1_font_family', array(
		'section' => 'stylish_fashion_designer_typography',
		'label'   => __('H1 Fonts', 'stylish-fashion-designer'),
		'type'    => 'select',
		'choices' => $stylish_fashion_designer_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('stylish_fashion_designer_h1_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('stylish_fashion_designer_h1_font_size', array(
		'label'   => __('H1 Font Size', 'stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_typography',
		'setting' => 'stylish_fashion_designer_h1_font_size',
		'type'    => 'text',
	));

	//This is H1 FontWeight setting	
	$wp_customize->add_setting('stylish_fashion_designer_h1_font_weight',array(
		'default' => '',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_h1_font_weight',array(
		'type' => 'select',
		'label' => __('H1 Font Weight','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_typography',
		'choices' => array(
		   '100' => __('100','stylish-fashion-designer'),
         '200' => __('200','stylish-fashion-designer'),
         '300' => __('300','stylish-fashion-designer'),
         '400' => __('400','stylish-fashion-designer'),
         '500' => __('500','stylish-fashion-designer'),
         '600' => __('600','stylish-fashion-designer'),
         '700' => __('700','stylish-fashion-designer'),
         '800' => __('800','stylish-fashion-designer'),
         '900' => __('900','stylish-fashion-designer'),
		),
	) );		

	// This is H2 Color picker setting
	$wp_customize->add_setting('stylish_fashion_designer_h2_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_h2_color', array(
		'label'    => __('H2 Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_typography',
		'settings' => 'stylish_fashion_designer_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('stylish_fashion_designer_h2_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices',
	));
	$wp_customize->add_control(
	'stylish_fashion_designer_h2_font_family', array(
		'section' => 'stylish_fashion_designer_typography',
		'label'   => __('H2 Fonts', 'stylish-fashion-designer'),
		'type'    => 'select',
		'choices' => $stylish_fashion_designer_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('stylish_fashion_designer_h2_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('stylish_fashion_designer_h2_font_size', array(
		'label'   => __('H2 Font Size', 'stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_typography',
		'setting' => 'stylish_fashion_designer_h2_font_size',
		'type'    => 'text',
	));

	//This is H2 FontWeight setting	
	$wp_customize->add_setting('stylish_fashion_designer_h2_font_weight',array(
		'default' => '',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_h2_font_weight',array(
		'type' => 'select',
		'label' => __('H2 Font Weight','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_typography',
		'choices' => array(
		   '100' => __('100','stylish-fashion-designer'),
         '200' => __('200','stylish-fashion-designer'),
         '300' => __('300','stylish-fashion-designer'),
         '400' => __('400','stylish-fashion-designer'),
         '500' => __('500','stylish-fashion-designer'),
         '600' => __('600','stylish-fashion-designer'),
         '700' => __('700','stylish-fashion-designer'),
         '800' => __('800','stylish-fashion-designer'),
         '900' => __('900','stylish-fashion-designer'),
		),
	) );

	// This is H3 Color picker setting
	$wp_customize->add_setting('stylish_fashion_designer_h3_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_h3_color', array(
		'label'    => __('H3 Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_typography',
		'settings' => 'stylish_fashion_designer_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('stylish_fashion_designer_h3_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices',
	));
	$wp_customize->add_control(
	'stylish_fashion_designer_h3_font_family', array(
		'section' => 'stylish_fashion_designer_typography',
		'label'   => __('H3 Fonts', 'stylish-fashion-designer'),
		'type'    => 'select',
		'choices' => $stylish_fashion_designer_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('stylish_fashion_designer_h3_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('stylish_fashion_designer_h3_font_size', array(
		'label'   => __('H3 Font Size', 'stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_typography',
		'setting' => 'stylish_fashion_designer_h3_font_size',
		'type'    => 'text',
	));

	//This is H3 FontWeight setting	
	$wp_customize->add_setting('stylish_fashion_designer_h3_font_weight',array(
		'default' => '',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_h3_font_weight',array(
		'type' => 'select',
		'label' => __('H3 Font Weight','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_typography',
		'choices' => array(
		   '100' => __('100','stylish-fashion-designer'),
         '200' => __('200','stylish-fashion-designer'),
         '300' => __('300','stylish-fashion-designer'),
         '400' => __('400','stylish-fashion-designer'),
         '500' => __('500','stylish-fashion-designer'),
         '600' => __('600','stylish-fashion-designer'),
         '700' => __('700','stylish-fashion-designer'),
         '800' => __('800','stylish-fashion-designer'),
         '900' => __('900','stylish-fashion-designer'),
		),
	) );	

	// This is H4 Color picker setting
	$wp_customize->add_setting('stylish_fashion_designer_h4_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_h4_color', array(
		'label'    => __('H4 Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_typography',
		'settings' => 'stylish_fashion_designer_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('stylish_fashion_designer_h4_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices',
	));
	$wp_customize->add_control('stylish_fashion_designer_h4_font_family', array(
		'section' => 'stylish_fashion_designer_typography',
		'label'   => __('H4 Fonts', 'stylish-fashion-designer'),
		'type'    => 'select',
		'choices' => $stylish_fashion_designer_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('stylish_fashion_designer_h4_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('stylish_fashion_designer_h4_font_size', array(
		'label'   => __('H4 Font Size', 'stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_typography',
		'setting' => 'stylish_fashion_designer_h4_font_size',
		'type'    => 'text',
	));

	//This is H4 FontWeight setting	
	$wp_customize->add_setting('stylish_fashion_designer_h4_font_weight',array(
		'default' => '',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_h4_font_weight',array(
		'type' => 'select',
		'label' => __('H4 Font Weight','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_typography',
		'choices' => array(
		   '100' => __('100','stylish-fashion-designer'),
         '200' => __('200','stylish-fashion-designer'),
         '300' => __('300','stylish-fashion-designer'),
         '400' => __('400','stylish-fashion-designer'),
         '500' => __('500','stylish-fashion-designer'),
         '600' => __('600','stylish-fashion-designer'),
         '700' => __('700','stylish-fashion-designer'),
         '800' => __('800','stylish-fashion-designer'),
         '900' => __('900','stylish-fashion-designer'),
		),
	) );	

	// This is H5 Color picker setting
	$wp_customize->add_setting('stylish_fashion_designer_h5_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_h5_color', array(
		'label'    => __('H5 Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_typography',
		'settings' => 'stylish_fashion_designer_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('stylish_fashion_designer_h5_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices',
	));
	$wp_customize->add_control('stylish_fashion_designer_h5_font_family', array(
		'section' => 'stylish_fashion_designer_typography',
		'label'   => __('H5 Fonts', 'stylish-fashion-designer'),
		'type'    => 'select',
		'choices' => $stylish_fashion_designer_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('stylish_fashion_designer_h5_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('stylish_fashion_designer_h5_font_size', array(
		'label'   => __('H5 Font Size', 'stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_typography',
		'setting' => 'stylish_fashion_designer_h5_font_size',
		'type'    => 'text',
	));

	//This is H5 FontWeight setting	
	$wp_customize->add_setting('stylish_fashion_designer_h5_font_weight',array(
		'default' => '',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_h5_font_weight',array(
		'type' => 'select',
		'label' => __('H5 Font Weight','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_typography',
		'choices' => array(
		   '100' => __('100','stylish-fashion-designer'),
         '200' => __('200','stylish-fashion-designer'),
         '300' => __('300','stylish-fashion-designer'),
         '400' => __('400','stylish-fashion-designer'),
         '500' => __('500','stylish-fashion-designer'),
         '600' => __('600','stylish-fashion-designer'),
         '700' => __('700','stylish-fashion-designer'),
         '800' => __('800','stylish-fashion-designer'),
         '900' => __('900','stylish-fashion-designer'),
		),
	) );	

	// This is H6 Color picker setting
	$wp_customize->add_setting('stylish_fashion_designer_h6_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_h6_color', array(
		'label'    => __('H6 Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_typography',
		'settings' => 'stylish_fashion_designer_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('stylish_fashion_designer_h6_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices',
	));
	$wp_customize->add_control('stylish_fashion_designer_h6_font_family', array(
		'section' => 'stylish_fashion_designer_typography',
		'label'   => __('H6 Fonts', 'stylish-fashion-designer'),
		'type'    => 'select',
		'choices' => $stylish_fashion_designer_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('stylish_fashion_designer_h6_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('stylish_fashion_designer_h6_font_size', array(
		'label'   => __('H6 Font Size', 'stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_typography',
		'setting' => 'stylish_fashion_designer_h6_font_size',
		'type'    => 'text',
	));

	//This is H6 FontWeight setting	
	$wp_customize->add_setting('stylish_fashion_designer_h6_font_weight',array(
		'default' => '',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_h6_font_weight',array(
		'type' => 'select',
		'label' => __('H6 Font Weight','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_typography',
		'choices' => array(
		   '100' => __('100','stylish-fashion-designer'),
         '200' => __('200','stylish-fashion-designer'),
         '300' => __('300','stylish-fashion-designer'),
         '400' => __('400','stylish-fashion-designer'),
         '500' => __('500','stylish-fashion-designer'),
         '600' => __('600','stylish-fashion-designer'),
         '700' => __('700','stylish-fashion-designer'),
         '800' => __('800','stylish-fashion-designer'),
         '900' => __('900','stylish-fashion-designer'),
		),
	) );	

 	//Header Section
	$wp_customize->add_section('stylish_fashion_designer_header_section',array(
		'title'	=> __('Header','stylish-fashion-designer'),
		'description'	=> __('Add Header here','stylish-fashion-designer'),
		'priority'	=> null,
		'panel' => 'stylish_fashion_designer_panel_id',
	));

	$wp_customize->add_setting('stylish_fashion_designer_header_premium_info',array(
    	'sanitize_callback' => 'sanitize_text_field'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_header_premium_info',array(
   		 'type'=> 'hidden',
   		 'label' => __('Premium Features','stylish-fashion-designer'),
   		 'description' => "<ul><li>". esc_html__('Please explore our premium theme for additional settings and features.','stylish-fashion-designer') ."</li><li>". esc_html__('And so on...','stylish-fashion-designer') ."</li></ul><a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_BUY_PRO) ." '>". esc_html__('Upgrade to Pro','stylish-fashion-designer') ."</a>",
   		 'section'=> 'stylish_fashion_designer_header_section'
 	));

	$wp_customize->add_setting('stylish_fashion_designer_cart_icon',array(
		'default'	=> 'fa-solid fa-basket-shopping',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_cart_icon',array(
		'label'	=> __('Cart Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_header_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('stylish_fashion_designer_phone_icon',array(
		'default'	=> 'fa-solid fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_phone_icon',array(
		'label'	=> __('Phone Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_header_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('stylish_fashion_designer_phone_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('stylish_fashion_designer_phone_text',array(
		'label'	=> __('Add Phone Text','stylish-fashion-designer'),
		'input_attrs' => array(
        'placeholder' => __( 'Phone', 'stylish-fashion-designer' ),
      ),
		'section'	=> 'stylish_fashion_designer_header_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('stylish_fashion_designer_phone_number',array(
		'default' => '',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_phone_number'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_phone_number',array(
		'type' => 'text',
		'label' => __('Add Phone Number','stylish-fashion-designer'),
		'input_attrs' => array(
        'placeholder' => __( ' 123-456-7890', 'stylish-fashion-designer' ),
      ),
		'section' => 'stylish_fashion_designer_header_section',
	) );

   $wp_customize->add_setting('stylish_fashion_designer_email_icon',array(
		'default'	=> 'fa-solid fa-envelope-open-text',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_email_icon',array(
		'label'	=> __('Email Address Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_header_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('stylish_fashion_designer_email_address_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('stylish_fashion_designer_email_address_text',array(
		'label'	=> __('Enter Email Address Text','stylish-fashion-designer'),
		'input_attrs' => array(
        'placeholder' => __( 'Mail', 'stylish-fashion-designer' ),
      ),
		'section'	=> 'stylish_fashion_designer_header_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('stylish_fashion_designer_email_address1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('stylish_fashion_designer_email_address1',array(
		'label'	=> __('Enter Email Address','stylish-fashion-designer'),
		'input_attrs' => array(
        'placeholder' => __( 'xyz123@example.com', 'stylish-fashion-designer' ),
      ),
		'section'	=> 'stylish_fashion_designer_header_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('stylish_fashion_designer_search_icon',array(
		'default'	=> 'fa-solid fa-bag-shopping',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_search_icon',array(
		'label'	=> __('Search Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_header_section',
		'type'		=> 'icon'
	)));

 	//Menu Section
	$wp_customize->add_section('stylish_fashion_designer_menu_section',array(
		'title'	=> __('Menu Settings','stylish-fashion-designer'),
		'priority'	=> null,
		'panel' => 'stylish_fashion_designer_panel_id',
	));

	$wp_customize->add_setting('stylish_fashion_designer_menu_premium_info',array(
    	'sanitize_callback' => 'sanitize_text_field'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_menu_premium_info',array(
   		 'type'=> 'hidden',
   		 'label' => __('Premium Features','stylish-fashion-designer'),
   		 'description' => "<ul><li>". esc_html__('Please explore our premium theme for additional settings and features.','stylish-fashion-designer') ."</li><li>". esc_html__('And so on...','stylish-fashion-designer') ."</li></ul><a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_BUY_PRO) ." '>". esc_html__('Upgrade to Pro','stylish-fashion-designer') ."</a>",
   		 'section'=> 'stylish_fashion_designer_menu_section'
 	));

	$wp_customize->add_setting('stylish_fashion_designer_menu_font_size_option',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize,'stylish_fashion_designer_menu_font_size_option',array(
		'label'	=> __('Menu Font Size','stylish-fashion-designer'),
		'section'=> 'stylish_fashion_designer_menu_section',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
     	),
	)));

	$wp_customize->add_setting('stylish_fashion_designer_menu_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize,'stylish_fashion_designer_menu_padding',array(
		'label'	=> __('Main Menu Padding','stylish-fashion-designer'),
		'section'=> 'stylish_fashion_designer_menu_section',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
      ),
	)));

	$wp_customize->add_setting('stylish_fashion_designer_font_weight_option_menu',array(
		'default' => '700',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_font_weight_option_menu',array(
		'type' => 'select',
		'label' => __('Menu Font Weight','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_menu_section',
		'choices' => array(
		   '100' => __('100','stylish-fashion-designer'),
         '200' => __('200','stylish-fashion-designer'),
         '300' => __('300','stylish-fashion-designer'),
         '400' => __('400','stylish-fashion-designer'),
         '500' => __('500','stylish-fashion-designer'),
         '600' => __('600','stylish-fashion-designer'),
         '700' => __('700','stylish-fashion-designer'),
         '800' => __('800','stylish-fashion-designer'),
         '900' => __('900','stylish-fashion-designer'),
		),
	) );

	$wp_customize->add_setting('stylish_fashion_designer_menus_item_style',array(
        'default' => '',
        'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	));
	$wp_customize->add_control('stylish_fashion_designer_menus_item_style',array(
        'type' => 'select',
		'label' => __('Menu Item Hover Style','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_menu_section',
		'choices' => array(
            'None' => __('None','stylish-fashion-designer'),
            'Zoom In' => __('Zoom In','stylish-fashion-designer'),
        ),
	) );

	$wp_customize->add_setting('stylish_fashion_designer_sub_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_sub_menu_hover_color', array(
		'label'    => __('Submenu Hover Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_menu_section',
		'settings' => 'stylish_fashion_designer_sub_menu_hover_color',
	)));

	$wp_customize->add_setting('stylish_fashion_designer_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_menu_color', array(
		'label'    => __('Menu Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_menu_section',
		'settings' => 'stylish_fashion_designer_menu_color',
	)));

	$wp_customize->add_setting('stylish_fashion_designer_sub_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_sub_menu_color', array(
		'label'    => __('Submenu Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_menu_section',
		'settings' => 'stylish_fashion_designer_sub_menu_color',
	)));

	$wp_customize->add_setting('stylish_fashion_designer_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_menu_hover_color', array(
		'label'    => __('Menu Hover Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_menu_section',
		'settings' => 'stylish_fashion_designer_menu_hover_color',
	)));

	//Slider Section
	$wp_customize->add_section( 'stylish_fashion_designer_slider_section' , array(
    	'title'      => __( 'Slider Section', 'stylish-fashion-designer' ),
		'priority'   => null,
		'panel' => 'stylish_fashion_designer_panel_id'
	) );	

	$wp_customize->add_setting('stylish_fashion_designer_slider_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('stylish_fashion_designer_slider_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','stylish-fashion-designer'),
		'description' => "<ul><li>". esc_html__('Please explore our premium theme for additional settings and features.','stylish-fashion-designer') ."</li><li>". esc_html__('And so on...','stylish-fashion-designer') ."</li></ul><a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_BUY_PRO) ." '>". esc_html__('Upgrade to Pro','stylish-fashion-designer') ."</a>",
		'section'=> 'stylish_fashion_designer_slider_section'
	));	

	$wp_customize->add_setting('stylish_fashion_designer_slider_hide',array(
		'default' => true,
		'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
	));
	$wp_customize->add_control('stylish_fashion_designer_slider_hide',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Slider','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_slider_section',
	));

	$wp_customize->add_setting('stylish_fashion_designer_slide_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_choices',
	));
	$wp_customize->add_control('stylish_fashion_designer_slide_number',array(
		'label'	=> __('Number of slides to show','stylish-fashion-designer'),
		'description' => __('Add number Of slide and refresh page','stylish-fashion-designer'),
		'section'	=> 'stylish_fashion_designer_slider_section',
		'type'		=> 'select',
		'choices' => array(
        	'1' => __('1','stylish-fashion-designer'),
         '2' => __('2','stylish-fashion-designer'),
         '3' => __('3','stylish-fashion-designer'),
        ),
	));

	$stylish_fashion_designer_count =  get_theme_mod('stylish_fashion_designer_slide_number');

	for($stylish_fashion_designer_i=1; $stylish_fashion_designer_i<=$stylish_fashion_designer_count; $stylish_fashion_designer_i++) {

		$wp_customize->add_setting('stylish_fashion_designer_slider_bg_image'.$stylish_fashion_designer_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'stylish_fashion_designer_slider_bg_image'.$stylish_fashion_designer_i,array(
	      'label' => __('Banner Background Image','stylish-fashion-designer'),
			'description' => __('Image Size (1200px × 800px) and use transparent image.','stylish-fashion-designer'),
	      'section' => 'stylish_fashion_designer_slider_section'
		)));

	 	$wp_customize->add_setting('stylish_fashion_designer_slider_small_text'.$stylish_fashion_designer_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('stylish_fashion_designer_slider_small_text'.$stylish_fashion_designer_i,array(
			'label'	=> __('Slider small Title','stylish-fashion-designer'),
			'section'	=> 'stylish_fashion_designer_slider_section',
			'input_attrs' => array(
	        'placeholder' => __( 'Hello Welcome To Fashion Designer', 'stylish-fashion-designer' ),
	      ),
			'type'	=> 'text'
		));

	 	$wp_customize->add_setting('stylish_fashion_designer_slider_title'.$stylish_fashion_designer_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('stylish_fashion_designer_slider_title'.$stylish_fashion_designer_i,array(
			'label'	=> __('Banner Title','stylish-fashion-designer'),
			'section'	=> 'stylish_fashion_designer_slider_section',
			'input_attrs' => array(
	        'placeholder' => __( 'EMBRACE YOUR STYLE', 'stylish-fashion-designer' ),
	      ),
			'type'	=> 'text'
		));

		$wp_customize->add_setting('stylish_fashion_designer_slider_btn_text'.$stylish_fashion_designer_i,array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
	 	));
	 	$wp_customize->add_control('stylish_fashion_designer_slider_btn_text'.$stylish_fashion_designer_i,array(
			'type' => 'text',
			'label' => __('Add Button Text','stylish-fashion-designer'),
			'input_attrs' => array(
	        'placeholder' => __( 'Read More', 'stylish-fashion-designer' ),
	      ),
			'section' => 'stylish_fashion_designer_slider_section',
		) );

		$wp_customize->add_setting('stylish_fashion_designer_slider_btn_url'.$stylish_fashion_designer_i,array(
			'default' => '',
			'sanitize_callback' => 'esc_url_raw'
	 	));
	 	$wp_customize->add_control('stylish_fashion_designer_slider_btn_url'.$stylish_fashion_designer_i,array(
			'type' => 'text',
			'label' => __('Add Button URL','stylish-fashion-designer'),
			'input_attrs' => array(
	        'placeholder' => __( 'www.example-info.com', 'stylish-fashion-designer' ),
	      ),
			'section' => 'stylish_fashion_designer_slider_section',
		) );

	}

	$wp_customize->add_setting('stylish_fashion_designer_slider_previous_icon',array(
		'default'	=> 'fa-solid fa-angle-left',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_slider_previous_icon',array(
		'label'	=> __('Previous Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_slider_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('stylish_fashion_designer_slider_next_icon',array(
		'default'	=> 'fa-solid fa-angle-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_slider_next_icon',array(
		'label'	=> __('Next Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_slider_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('stylish_fashion_designer_slider_opacity_color',array(
		'default'              => '0.3',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	  ));
	  $wp_customize->add_control( 'stylish_fashion_designer_slider_opacity_color', array(
	  	  'type'        => 'select',
		  'label'       => __( 'Slider Image Opacity','stylish-fashion-designer' ),
		  'section'     => 'stylish_fashion_designer_slider_section',
		  'choices' => array(
			'0' =>  esc_attr__('0','stylish-fashion-designer'),
			'0.1' =>  esc_attr__('0.1','stylish-fashion-designer'),
			'0.2' =>  esc_attr__('0.2','stylish-fashion-designer'),
			'0.3' =>  esc_attr__('0.3','stylish-fashion-designer'),
			'0.4' =>  esc_attr__('0.4','stylish-fashion-designer'),
			'0.5' =>  esc_attr__('0.5','stylish-fashion-designer'),
			'0.6' =>  esc_attr__('0.6','stylish-fashion-designer'),
			'0.7' =>  esc_attr__('0.7','stylish-fashion-designer'),
			'0.8' =>  esc_attr__('0.8','stylish-fashion-designer'),
			'0.9' =>  esc_attr__('0.9','stylish-fashion-designer')
		  ),
	));

	//Products Section
  	$wp_customize->add_section('stylish_fashion_designer_products_section',array(
		'title' => __('Products Section','stylish-fashion-designer'),
		'description' => '',
		'priority'  => null,
		'panel' => 'stylish_fashion_designer_panel_id',
	));		

	$wp_customize->add_setting('stylish_fashion_designer_product_section_premium_info',array(
    	'sanitize_callback' => 'sanitize_text_field'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_product_section_premium_info',array(
   		 'type'=> 'hidden',
   		 'label' => __('Premium Features','stylish-fashion-designer'),
   		 'description' => "<ul><li>". esc_html__('Please explore our premium theme for additional settings and features.','stylish-fashion-designer') ."</li><li>". esc_html__('And so on...','stylish-fashion-designer') ."</li></ul><a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_BUY_PRO) ." '>". esc_html__('Upgrade to Pro','stylish-fashion-designer') ."</a>",
   		 'section'=> 'stylish_fashion_designer_products_section'
 	));

	$wp_customize->add_setting('stylish_fashion_designer_section_small_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('stylish_fashion_designer_section_small_text',array(
		'label'	=> __('Add Section Text','stylish-fashion-designer'),
		'input_attrs' => array(
         'placeholder' => __( 'Online Shop', 'stylish-fashion-designer' ),
      ),
		'section'=> 'stylish_fashion_designer_products_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('stylish_fashion_designer_section_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('stylish_fashion_designer_section_title',array(
		'label'	=> __('Add Section Title','stylish-fashion-designer'),
		'input_attrs' => array(
         'placeholder' => __( 'OUR PRODUCT', 'stylish-fashion-designer' ),
      ),
		'section'=> 'stylish_fashion_designer_products_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('stylish_fashion_designer_product_btn_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_product_btn_text',array(
		'type' => 'text',
		'label' => __('Add Button Text','stylish-fashion-designer'),
		'input_attrs' => array(
        'placeholder' => __( 'View All Product', 'stylish-fashion-designer' ),
      ),
		'section' => 'stylish_fashion_designer_products_section',
	) );

	$wp_customize->add_setting('stylish_fashion_designer_product_btn_url',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_product_btn_url',array(
		'type' => 'text',
		'label' => __('Add Button URL','stylish-fashion-designer'),
		'input_attrs' => array(
        'placeholder' => __( 'www.example-info.com', 'stylish-fashion-designer' ),
      ),
		'section' => 'stylish_fashion_designer_products_section',
	) );

	$stylish_fashion_designer_args = array(
		'type'         => 'product',
		'child_of'     => 0,
		'parent'       => '',
		'orderby'      => 'term_group',
		'order'        => 'ASC',
		'hide_empty'   => false,
		'hierarchical' => 1,
		'number'       => '',
		'taxonomy'     => 'product_cat',
		'pad_counts'   => false
	);
 	$stylish_fashion_designer_categories = get_categories( $stylish_fashion_designer_args );
	$stylish_fashion_designer_cat_posts = array();
	$stylish_fashion_designer_i = 0;
	$stylish_fashion_designer_cat_posts[]='Select';
	foreach($stylish_fashion_designer_categories as $stylish_fashion_designer_category){
		if($stylish_fashion_designer_i==0){
			$stylish_fashion_designer_default = $stylish_fashion_designer_category->slug;
			$stylish_fashion_designer_i++;
		}
		$stylish_fashion_designer_cat_posts[$stylish_fashion_designer_category->slug] = $stylish_fashion_designer_category->name;
	}

	$wp_customize->add_setting('stylish_fashion_designer_product_page',array(
		'default'	=> 'select',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices',
	));
	$wp_customize->add_control('stylish_fashion_designer_product_page',array(
		'type'    => 'select',
		'choices' => $stylish_fashion_designer_cat_posts,
		'label' => __('Select Category to display Products','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_products_section',
	));

	//layout setting
	$wp_customize->add_section( 'stylish_fashion_designer_option', array(
    	'title'      => __( 'Layout Settings', 'stylish-fashion-designer' ),
    	'panel'    => 'stylish_fashion_designer_panel_id',
	) );

	$wp_customize->add_setting('stylish_fashion_designer_layout_premium_info',array(
    	'sanitize_callback' => 'sanitize_text_field'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_layout_premium_info',array(
   		 'type'=> 'hidden',
   		 'label' => __('Premium Features','stylish-fashion-designer'),
   		 'description' => "<ul><li>". esc_html__('Please explore our premium theme for additional settings and features.','stylish-fashion-designer') ."</li><li>". esc_html__('And so on...','stylish-fashion-designer') ."</li></ul><a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_BUY_PRO) ." '>". esc_html__('Upgrade to Pro','stylish-fashion-designer') ."</a>",
   		 'section'=> 'stylish_fashion_designer_option'
 	));

	$wp_customize->add_setting( 'stylish_fashion_designer_single_page_breadcrumb',array(
	    'default' => false,
    	'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
  	) );
	$wp_customize->add_control('stylish_fashion_designer_single_page_breadcrumb',array(
	    	'type' => 'checkbox',
	       'label' => __( 'Show / Hide Single Page Breadcrumb','stylish-fashion-designer' ),
	       'section' => 'stylish_fashion_designer_option'
	));

	$wp_customize->add_setting('stylish_fashion_designer_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
   ));
    $wp_customize->add_control('stylish_fashion_designer_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_option'
   ));

   $wp_customize->add_setting('stylish_fashion_designer_preloader_type',array(
     	'default' => 'First Preloader Type',
     	'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	));
	$wp_customize->add_control('stylish_fashion_designer_preloader_type',array(
      'type' => 'radio',
      'label' => __('Preloader Types','stylish-fashion-designer'),
      'section' => 'stylish_fashion_designer_option',
      'choices' => array(
         'First Preloader Type' => __('First Preloader Type','stylish-fashion-designer'),
         'Second Preloader Type' => __('Second Preloader Type','stylish-fashion-designer'),
      ),
	) );

	$wp_customize->add_setting('stylish_fashion_designer_preloader_bg_color_option', array(
		'default'           => 'var(--first-theme-color)',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_preloader_bg_color_option', array(
		'label'    => __('Preloader Background Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_option',
	)));

	$wp_customize->add_setting('stylish_fashion_designer_preloader_icon_color_option', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_preloader_icon_color_option', array(
		'label'    => __('Preloader Icon Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_option',
	)));

	$wp_customize->add_setting('stylish_fashion_designer_preloader_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'stylish_fashion_designer_preloader_bg_img',array(
        'label' => __('Preloader Background Image','stylish-fashion-designer'),
        'section' => 'stylish_fashion_designer_option'
	)));	

	$wp_customize->add_setting('stylish_fashion_designer_width_layout_options',array(
		'default' => 'Default',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	));
	$wp_customize->add_control('stylish_fashion_designer_width_layout_options',array(
		'type' => 'radio',
		'label' => __('Container Box','stylish-fashion-designer'),
		'description' => __('Here you can change the Width layout. ','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_option',
		'choices' => array(
		   'Default' => __('Default','stylish-fashion-designer'),
		   'Container Layout' => __('Container Layout','stylish-fashion-designer'),
		   'Box Layout' => __('Box Layout','stylish-fashion-designer'),
		),
	) );

	// Add page sidebar
	$wp_customize->add_setting('stylish_fashion_designer_page_sidebar',array(
        'default' => 'One Column',
        'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	) );
	$wp_customize->add_control('stylish_fashion_designer_page_sidebar', array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','stylish-fashion-designer'),
        'section' => 'stylish_fashion_designer_option',
        'choices' => array(
            'One Column' => __('One Column','stylish-fashion-designer'),
            'Left Sidebar' => __('Left Sidebar','stylish-fashion-designer'),
            'Right Sidebar' => __('Right Sidebar','stylish-fashion-designer')
        ),
	)   );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('stylish_fashion_designer_layout_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	) );
	$wp_customize->add_control('stylish_fashion_designer_layout_options', array(
        'type' => 'select',
        'label' => __('Post Sidebar Layout','stylish-fashion-designer'),
        'section' => 'stylish_fashion_designer_option',
        'choices' => array(
            'One Column' => __('One Column','stylish-fashion-designer'),
            'Three Columns' => __('Three Columns','stylish-fashion-designer'),
            'Four Columns' => __('Four Columns','stylish-fashion-designer'),
            'Grid Layout' => __('Grid Layout','stylish-fashion-designer'),
            'Left Sidebar' => __('Left Sidebar','stylish-fashion-designer'),
            'Right Sidebar' => __('Right Sidebar','stylish-fashion-designer')
        ),
	)   );

	$wp_customize->add_setting('stylish_fashion_designer_sidebar_size',array(
        'default' => 'Sidebar 1/3',
        'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	));
	$wp_customize->add_control('stylish_fashion_designer_sidebar_size',array(
        'type' => 'radio',
        'label' => __('Sidebar Size Option','stylish-fashion-designer'),
        'section' => 'stylish_fashion_designer_option',
        'choices' => array(
            'Sidebar 1/3' => __('Sidebar 1/3','stylish-fashion-designer'),
            'Sidebar 1/4' => __('Sidebar 1/4','stylish-fashion-designer'),
        ),
	) );

	//Global Color
	$wp_customize->add_section('stylish_fashion_designer_global_color', array(
		'title'    => __('Theme Color Option', 'stylish-fashion-designer'),
		'panel'    => 'stylish_fashion_designer_panel_id',
	));

	$wp_customize->add_setting('stylish_fashion_designer_global_premium_info',array(
    	'sanitize_callback' => 'sanitize_text_field'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_global_premium_info',array(
   		 'type'=> 'hidden',
   		 'label' => __('Premium Features','stylish-fashion-designer'),
   		 'description' => "<ul><li>". esc_html__('Please explore our premium theme for additional settings and features.','stylish-fashion-designer') ."</li><li>". esc_html__('And so on...','stylish-fashion-designer') ."</li></ul><a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_BUY_PRO) ." '>". esc_html__('Upgrade to Pro','stylish-fashion-designer') ."</a>",
   		 'section'=> 'stylish_fashion_designer_global_color'
 	));

	$wp_customize->add_setting('stylish_fashion_designer_first_color', array(
		'default'           => '#D1B266',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_first_color', array(
		'label'    => __('Highlight Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_global_color',
		'settings' => 'stylish_fashion_designer_first_color',
	)));

	//Blog Post Settings
	$wp_customize->add_section('stylish_fashion_designer_post_settings', array(
		'title'    => __('Post General Settings', 'stylish-fashion-designer'),
		'panel'    => 'stylish_fashion_designer_panel_id',
	));

	$wp_customize->add_setting('stylish_fashion_designer_post_premium_info',array(
    	'sanitize_callback' => 'sanitize_text_field'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_post_premium_info',array(
   		 'type'=> 'hidden',
   		 'label' => __('Premium Features','stylish-fashion-designer'),
   		 'description' => "<ul><li>". esc_html__('Please explore our premium theme for additional settings and features.','stylish-fashion-designer') ."</li><li>". esc_html__('And so on...','stylish-fashion-designer') ."</li></ul><a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_BUY_PRO) ." '>". esc_html__('Upgrade to Pro','stylish-fashion-designer') ."</a>",
   		 'section'=> 'stylish_fashion_designer_post_settings'
 	));

	$wp_customize->add_setting('stylish_fashion_designer_post_layouts',array(
     'default' => 'Layout 2',
     'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	));
	$wp_customize->add_control('stylish_fashion_designer_post_layouts', array(
		'type' => 'select',
		'label' => __('Post Layouts','stylish-fashion-designer'),
		'description' => __('Here you can change the 3 different layouts of post','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_post_settings',
		'choices' => array(
		   'Layout 1' => __('Layouts 1','stylish-fashion-designer'),
		   'Layout 2' => __('Layouts 2','stylish-fashion-designer'),
		   'Layout 3' => __('Layouts 3','stylish-fashion-designer'),
	)));

   $wp_customize->add_setting('stylish_fashion_designer_post_block_option',array(
        'default' => 'By Block',
        'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	));
	$wp_customize->add_control('stylish_fashion_designer_post_block_option',array(
        'type' => 'select',
        'label' => __('Blog Post Shown','stylish-fashion-designer'),
        'section' => 'stylish_fashion_designer_post_settings',
        'choices' => array(
            'By Block' => __('By Block','stylish-fashion-designer'),
            'By Without Block' => __('By Without Block','stylish-fashion-designer'),
        ),
	) );

	$wp_customize->add_setting('stylish_fashion_designer_metafields_date',array(
		'default' => true,
		'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
	));
	$wp_customize->add_control('stylish_fashion_designer_metafields_date',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Date','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_post_settings'
	));

	$wp_customize->add_setting('stylish_fashion_designer_post_date_icon',array(
		'default'	=> 'far fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_post_date_icon',array(
		'label'	=> __('Post Date Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('stylish_fashion_designer_metafields_author',array(
       'default' => true,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
    ));
    $wp_customize->add_control('stylish_fashion_designer_metafields_author',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Author','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_post_settings'
    ));

    $wp_customize->add_setting('stylish_fashion_designer_post_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_post_author_icon',array(
		'label'	=> __('Post Author Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('stylish_fashion_designer_metafields_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
    ));
    $wp_customize->add_control('stylish_fashion_designer_metafields_comment',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Comments','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_post_settings'
    ));

    $wp_customize->add_setting('stylish_fashion_designer_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_post_comment_icon',array(
		'label'	=> __('Post Comment Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('stylish_fashion_designer_metafields_time',array(
       'default' => true,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
    ));
    $wp_customize->add_control('stylish_fashion_designer_metafields_time',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Time','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_post_settings'
    ));

    $wp_customize->add_setting('stylish_fashion_designer_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_post_time_icon',array(
		'label'	=> __('Post Time Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('stylish_fashion_designer_post_featured_image',array(
       'default' => 'Image',
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_choices'
    ));
    $wp_customize->add_control('stylish_fashion_designer_post_featured_image',array(
       'type' => 'select',
       'label'	=> __('Post Image Options','stylish-fashion-designer'),
       'choices' => array(
            'Image' => __('Image','stylish-fashion-designer'),
            'Color' => __('Color','stylish-fashion-designer'),
            'None' => __('None','stylish-fashion-designer'),
        ),
      	'section'	=> 'stylish_fashion_designer_post_settings',
    ));

    $wp_customize->add_setting('stylish_fashion_designer_post_featured_color', array(
		'default'           => 'var(--first-theme-color)',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_post_featured_color', array(
		'label'    => __('Post Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_post_settings',
		'settings' => 'stylish_fashion_designer_post_featured_color',
		'active_callback' => 'stylish_fashion_designer_post_color_enabled'
	)));

	$wp_customize->add_setting( 'stylish_fashion_designer_custom_post_color_width',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_custom_post_color_width',	array(
		'label' => esc_html__( 'Color Post Custom Width','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 500,
			'step' => 1,
		),
		'active_callback' => 'stylish_fashion_designer_show_post_color'
	)));

	$wp_customize->add_setting( 'stylish_fashion_designer_custom_post_color_height',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_custom_post_color_height',array(
		'label' => esc_html__( 'Color Post Custom Height','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 350,
			'step' => 1,
		),
		'active_callback' => 'stylish_fashion_designer_show_post_color'
	)));

	$wp_customize->add_setting('stylish_fashion_designer_post_featured_image_dimention',array(
       'default' => 'Default',
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_choices'
    ));
    $wp_customize->add_control('stylish_fashion_designer_post_featured_image_dimention',array(
       'type' => 'select',
       'label'	=> __('Post Featured Image Dimention','stylish-fashion-designer'),
       'choices' => array(
            'Default' => __('Default','stylish-fashion-designer'),
            'Custom' => __('Custom','stylish-fashion-designer'),
        ),
      	'section'	=> 'stylish_fashion_designer_post_settings',
      	'active_callback' => 'stylish_fashion_designer_enable_post_featured_image'
    ));

    $wp_customize->add_setting( 'stylish_fashion_designer_post_featured_image_custom_width',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_post_featured_image_custom_width',	array(
		'label' => esc_html__( 'Post Featured Image Custom Width','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 500,
			'step' => 1,
		),
		'active_callback' => 'stylish_fashion_designer_enable_post_image_custom_dimention'
	)));

	$wp_customize->add_setting( 'stylish_fashion_designer_post_featured_image_custom_height',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_post_featured_image_custom_height',	array(
		'label' => esc_html__( 'Post Featured Image Custom Height','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 350,
			'step' => 1,
		),
		'active_callback' => 'stylish_fashion_designer_enable_post_image_custom_dimention'
	)));

	$wp_customize->add_setting( 'stylish_fashion_designer_image_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize,  'stylish_fashion_designer_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','stylish-fashion-designer' ),
		'section'     => 'stylish_fashion_designer_post_settings',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	)) );

	$wp_customize->add_setting( 'stylish_fashion_designer_image_box_shadow',array(
		'default' => 0,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize,  'stylish_fashion_designer_image_box_shadow',array(
		'label' => esc_html__( 'Featured Image Shadow','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	)));

	$wp_customize->add_setting('stylish_fashion_designer_show_first_caps',array(
      'default' => false,
      'sanitize_callback' => 'stylish_fashion_designer_sanitize_checkbox',
    ));
	$wp_customize->add_control( 'stylish_fashion_designer_show_first_caps',array(
		'label' => esc_html__('First Cap (First Capital Letter)', 'stylish-fashion-designer'),
		'type' => 'checkbox',
		'section' => 'stylish_fashion_designer_post_settings',
	));

    //Post excerpt
	$wp_customize->add_setting( 'stylish_fashion_designer_post_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'stylish_fashion_designer_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Content Limit','stylish-fashion-designer' ),
		'section'     => 'stylish_fashion_designer_post_settings',
		'type'        => 'number',
		'settings'    => 'stylish_fashion_designer_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('stylish_fashion_designer_content_settings',array(
        'default' =>'Excerpt',
        'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	));
	$wp_customize->add_control('stylish_fashion_designer_content_settings',array(
        'type' => 'radio',
        'label' => __('Content Settings','stylish-fashion-designer'),
        'section' => 'stylish_fashion_designer_post_settings',
        'choices' => array(
            'Excerpt' => __('Excerpt','stylish-fashion-designer'),
            'Content' => __('Content','stylish-fashion-designer'),
        ),
	) );

	$wp_customize->add_setting( 'stylish_fashion_designer_post_discription_suffix', array(
		'default'   => __('[...]','stylish-fashion-designer'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'stylish_fashion_designer_post_discription_suffix', array(
		'label'       => esc_html__( 'Post Excerpt Suffix','stylish-fashion-designer' ),
		'section'     => 'stylish_fashion_designer_post_settings',
		'type'        => 'text',
		'settings'    => 'stylish_fashion_designer_post_discription_suffix',
	) );

	$wp_customize->add_setting( 'stylish_fashion_designer_blog_post_meta_seperator', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'stylish_fashion_designer_blog_post_meta_seperator', array(
		'label'       => esc_html__( 'Meta Box Separator','stylish-fashion-designer' ),
		'section'     => 'stylish_fashion_designer_post_settings',
		'description' => __('Here you can add the seperator for meta box. e.g. "|",  ",", "/", etc. ','stylish-fashion-designer'),
		'type'        => 'text',
		'settings'    => 'stylish_fashion_designer_blog_post_meta_seperator',
	) );

	$wp_customize->add_setting('stylish_fashion_designer_enable_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
   ));
   $wp_customize->add_control('stylish_fashion_designer_enable_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Blog Page Pagination','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_post_settings'
   ));

   $wp_customize->add_setting( 'stylish_fashion_designer_post_pagination_position', array(
        'default'			=>  'Bottom',
        'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_choices'
   ));
   $wp_customize->add_control( 'stylish_fashion_designer_post_pagination_position', array(
        'section' => 'stylish_fashion_designer_post_settings',
        'type' => 'select',
        'label' => __( 'Post Pagination Position', 'stylish-fashion-designer' ),
        'choices'		=> array(
            'Top'  => __( 'Top', 'stylish-fashion-designer' ),
            'Bottom' => __( 'Bottom', 'stylish-fashion-designer' ),
            'Both Top & Bottom' => __( 'Both Top & Bottom', 'stylish-fashion-designer' ),
   )));

	$wp_customize->add_setting( 'stylish_fashion_designer_pagination_settings', array(
        'default'			=> 'Numeric Pagination',
        'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_choices'
   ));
   $wp_customize->add_control( 'stylish_fashion_designer_pagination_settings', array(
        'section' => 'stylish_fashion_designer_post_settings',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'stylish-fashion-designer' ),
        'choices'		=> array(
            'Numeric Pagination'  => __( 'Numeric Pagination', 'stylish-fashion-designer' ),
            'next-prev' => __( 'Next / Previous', 'stylish-fashion-designer' ),
   )));

	//Button Settings
	$wp_customize->add_section('stylish_fashion_designer_button_settings', array(
		'title'    => __('Button Settings', 'stylish-fashion-designer'),
		'panel'    => 'stylish_fashion_designer_panel_id',
	));

	$wp_customize->add_setting('stylish_fashion_designer_button_premium_info',array(
    	'sanitize_callback' => 'sanitize_text_field'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_button_premium_info',array(
   		 'type'=> 'hidden',
   		 'label' => __('Premium Features','stylish-fashion-designer'),
   		 'description' => "<ul><li>". esc_html__('Please explore our premium theme for additional settings and features.','stylish-fashion-designer') ."</li><li>". esc_html__('And so on...','stylish-fashion-designer') ."</li></ul><a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_BUY_PRO) ." '>". esc_html__('Upgrade to Pro','stylish-fashion-designer') ."</a>",
   		 'section'=> 'stylish_fashion_designer_button_settings'
 	));

	$wp_customize->add_setting('stylish_fashion_designer_button_text',array(
		'default'=> __('Read More','stylish-fashion-designer'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('stylish_fashion_designer_button_text',array(
		'label'	=> __('Add Button Text','stylish-fashion-designer'),
		'section'=> 'stylish_fashion_designer_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('stylish_fashion_designer_btn_font_size_option',array(
		'default'=> 14,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize,'stylish_fashion_designer_btn_font_size_option',array(
		'label'	=> __('Button Font Size','stylish-fashion-designer'),
		'section'=> 'stylish_fashion_designer_button_settings',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
     	),
	)));

	$wp_customize->add_setting('stylish_fashion_designer_button_text_tranform',array(
		'default' => 'Capitalize',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_button_text_tranform',array(
		'type' => 'select',
		'label' => __('Button Text Transform','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_button_settings',
		'choices' => array(
		   'Uppercase' => __('Uppercase','stylish-fashion-designer'),
		   'Lowercase' => __('Lowercase','stylish-fashion-designer'),
		   'Capitalize' => __('Capitalize','stylish-fashion-designer'),
		),
	) );

	$wp_customize->add_setting('stylish_fashion_designer_button_font_weight',array(
		'default' => '700',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_button_font_weight',array(
		'type' => 'select',
		'label' => __('Button Font Weight','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_button_settings',
		'choices' => array(
			'100' => __('100','stylish-fashion-designer'),
			'200' => __('200','stylish-fashion-designer'),
			'300' => __('300','stylish-fashion-designer'),
			'400' => __('400','stylish-fashion-designer'),
			'500' => __('500','stylish-fashion-designer'),
			'600' => __('600','stylish-fashion-designer'),
			'700' => __('700','stylish-fashion-designer'),
			'800' => __('800','stylish-fashion-designer'),
			'900' => __('900','stylish-fashion-designer'),
		),
	) );

	$wp_customize->add_setting( 'stylish_fashion_designer_post_button_padding_top',array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control( new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_post_button_padding_top',	array(
		'label' => esc_html__( 'Button Top Bottom Padding (px)','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_button_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'stylish_fashion_designer_post_button_padding_right',array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control( new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_post_button_padding_right',	array(
		'label' => esc_html__( 'Button Right Left Padding (px)','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_button_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'stylish_fashion_designer_post_button_border_radius',array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control( new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_post_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius (px)','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_button_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	// button letter spacing
	$wp_customize->add_setting( 'stylish_fashion_designer_button_letter_spacing',array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control( new  Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_button_letter_spacing', array(
		'label'  =>  esc_html__('Button Letter Spacing (px)','stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_button_settings',
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		   'step' => 1,
		)
 	)));		

   //Single Post Settings
	$wp_customize->add_section('stylish_fashion_designer_single_post_settings', array(
		'title'    => __('Single Post Settings', 'stylish-fashion-designer'),
		'panel'    => 'stylish_fashion_designer_panel_id',
	));

	$wp_customize->add_setting('stylish_fashion_designer_single_post_premium_info',array(
    	'sanitize_callback' => 'sanitize_text_field'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_single_post_premium_info',array(
   		 'type'=> 'hidden',
   		 'label' => __('Premium Features','stylish-fashion-designer'),
   		 'description' => "<ul><li>". esc_html__('Please explore our premium theme for additional settings and features.','stylish-fashion-designer') ."</li><li>". esc_html__('And so on...','stylish-fashion-designer') ."</li></ul><a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_BUY_PRO) ." '>". esc_html__('Upgrade to Pro','stylish-fashion-designer') ."</a>",
   		 'section'=> 'stylish_fashion_designer_single_post_settings'
 	));

	$wp_customize->add_setting('stylish_fashion_designer_single_post_bradcrumb',array(
		'default' => false,
		'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
	));
	$wp_customize->add_control('stylish_fashion_designer_single_post_bradcrumb',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Breadcrumb','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_single_post_settings',
	));

	$wp_customize->add_setting('stylish_fashion_designer_single_post_date',array(
       'default' => true,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
   ));
   $wp_customize->add_control('stylish_fashion_designer_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Date','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_single_post_settings'
   ));

   $wp_customize->add_setting('stylish_fashion_designer_single_post_date_icon',array(
		'default'	=> 'far fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_single_post_date_icon',array(
		'label'	=> __('Single Post Date Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('stylish_fashion_designer_single_post_author',array(
       'default' => true,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
   ));
   $wp_customize->add_control('stylish_fashion_designer_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Author','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_single_post_settings'
   ));

   $wp_customize->add_setting('stylish_fashion_designer_single_post_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
      $wp_customize,'stylish_fashion_designer_single_post_author_icon',array(
		'label'	=> __('Single Post Author Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('stylish_fashion_designer_single_post_comment',array(
		'default' => true,
		'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
	));
	$wp_customize->add_control('stylish_fashion_designer_single_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Comments','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_single_post_settings'
	));

 	$wp_customize->add_setting('stylish_fashion_designer_single_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer( $wp_customize, 'stylish_fashion_designer_single_post_comment_icon', array(
		'label'	=> __('Single Post Comment Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_single_post_settings',
		'type'		=> 'icon'
	)));

   $wp_customize->add_setting('stylish_fashion_designer_single_post_time',array(
       'default' => true,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
   ));
   $wp_customize->add_control('stylish_fashion_designer_single_post_time',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Time','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_single_post_settings',
   ));

   $wp_customize->add_setting('stylish_fashion_designer_single_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_single_post_time_icon',array(
		'label'	=> __('Single Post Time Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('stylish_fashion_designer_post_comment_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
   ));
   $wp_customize->add_control('stylish_fashion_designer_post_comment_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable post comment','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_single_post_settings',
   ));

	$wp_customize->add_setting('stylish_fashion_designer_single_post_featured_image',array(
       'default' => true,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
   ));
   $wp_customize->add_control('stylish_fashion_designer_single_post_featured_image',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Featured image','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_single_post_settings',
   ));

	$wp_customize->add_setting('stylish_fashion_designer_show_hide_single_post_categories',array(
			'default' => true,
			'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
   ));
   $wp_customize->add_control('stylish_fashion_designer_show_hide_single_post_categories',array(
			'type' => 'checkbox',
			'label' => __('Single Post Categories','stylish-fashion-designer'),
			'section' => 'stylish_fashion_designer_single_post_settings'
   ));

	$wp_customize->add_setting('stylish_fashion_designer_single_post_tags',array(
      'default' => true,
      'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
   ));
   $wp_customize->add_control('stylish_fashion_designer_single_post_tags',array(
      'type' => 'checkbox',
      'label' => __('Enable / Disable Tags','stylish-fashion-designer'),
      'section' => 'stylish_fashion_designer_single_post_settings'
   ));

	$wp_customize->add_setting('stylish_fashion_designer_single_post_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	) );
	$wp_customize->add_control('stylish_fashion_designer_single_post_layout', array(
        'type' => 'select',
        'label' => __('Select different Single post sidebar layout','stylish-fashion-designer'),
        'section' => 'stylish_fashion_designer_single_post_settings',
        'choices' => array(
            'One Column' => __('One Column','stylish-fashion-designer'),
            'Left Sidebar' => __('Left Sidebar','stylish-fashion-designer'),
            'Right Sidebar' => __('Right Sidebar','stylish-fashion-designer')
        ),
	)   );

	$wp_customize->add_setting( 'stylish_fashion_designer_single_post_meta_seperator', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'stylish_fashion_designer_single_post_meta_seperator', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','stylish-fashion-designer' ),
		'section'     => 'stylish_fashion_designer_single_post_settings',
		'description' => __('Here you can add the seperator for meta box. e.g. "|",  ",", "/", etc. ','stylish-fashion-designer'),
		'type'        => 'text',
		'settings'    => 'stylish_fashion_designer_single_post_meta_seperator',
	) );

	$wp_customize->add_setting( 'stylish_fashion_designer_comment_form_width',array(
		'default' => 100,
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control( new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_comment_form_width',	array(
		'label' => esc_html__( 'Comment Form Width','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_single_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('stylish_fashion_designer_title_comment_form',array(
       'default' => __('Leave a Reply','stylish-fashion-designer'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('stylish_fashion_designer_title_comment_form',array(
       'type' => 'text',
       'label' => __('Comment Form Heading Text','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_single_post_settings'
    ));

    $wp_customize->add_setting('stylish_fashion_designer_comment_form_button_content',array(
       'default' => __('Post Comment','stylish-fashion-designer'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('stylish_fashion_designer_comment_form_button_content',array(
       'type' => 'text',
       'label' => __('Comment Form Button Text','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_single_post_settings'
    ));

	$wp_customize->add_setting('stylish_fashion_designer_enable_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
   ));
   $wp_customize->add_control('stylish_fashion_designer_enable_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Single Post Pagination','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_single_post_settings'
   ));

   $wp_customize->add_setting('stylish_fashion_designer_prev_text',array(
       'default' => 'Previous page',
       'sanitize_callback'	=> 'sanitize_text_field'
   ));
   $wp_customize->add_control('stylish_fashion_designer_prev_text',array(
       'type' => 'text',
       'label' => __('Previous Navigation Text','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_single_post_settings'
   ));

   $wp_customize->add_setting('stylish_fashion_designer_next_text',array(
       'default' => 'Next page',
       'sanitize_callback'	=> 'sanitize_text_field'
   ));
   $wp_customize->add_control('stylish_fashion_designer_next_text',array(
       'type' => 'text',
       'label' => __('Next Navigation Text','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_single_post_settings'
   ));

	//Related Post Settings
	$wp_customize->add_section('stylish_fashion_designer_related_settings', array(
		'title'    => __('Related Post Settings', 'stylish-fashion-designer'),
		'panel'    => 'stylish_fashion_designer_panel_id',
	));		

	$wp_customize->add_setting('stylish_fashion_designer_related_premium_info',array(
    	'sanitize_callback' => 'sanitize_text_field'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_related_premium_info',array(
   		 'type'=> 'hidden',
   		 'label' => __('Premium Features','stylish-fashion-designer'),
   		 'description' => "<ul><li>". esc_html__('Please explore our premium theme for additional settings and features.','stylish-fashion-designer') ."</li><li>". esc_html__('And so on...','stylish-fashion-designer') ."</li></ul><a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_BUY_PRO) ." '>". esc_html__('Upgrade to Pro','stylish-fashion-designer') ."</a>",
   		 'section'=> 'stylish_fashion_designer_related_settings'
 	));

	$wp_customize->add_setting( 'stylish_fashion_designer_related_enable_disable',array(
		'default' => true,
      	'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
    ) );
    $wp_customize->add_control('stylish_fashion_designer_related_enable_disable',array(
    	'type' => 'checkbox',
        'label' => __( 'Enable / Disable Related Post','stylish-fashion-designer' ),
        'section' => 'stylish_fashion_designer_related_settings'
    ));

    $wp_customize->add_setting('stylish_fashion_designer_related_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('stylish_fashion_designer_related_title',array(
		'label'	=> __('Add Section Title','stylish-fashion-designer'),
		'section'	=> 'stylish_fashion_designer_related_settings',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'stylish_fashion_designer_related_posts_count_number', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'stylish_fashion_designer_related_posts_count_number', array(
		'label'       => esc_html__( 'Related Post Count','stylish-fashion-designer' ),
		'section'     => 'stylish_fashion_designer_related_settings',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 10,
		),
	) );

	$wp_customize->add_setting('stylish_fashion_designer_related_posts_taxanomies',array(
        'default' => 'categories',
        'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	));
	$wp_customize->add_control('stylish_fashion_designer_related_posts_taxanomies',array(
        'type' => 'radio',
        'label' => __('Post Taxonomies','stylish-fashion-designer'),
        'section' => 'stylish_fashion_designer_related_settings',
        'choices' => array(
            'categories' => __('Categories','stylish-fashion-designer'),
            'tags' => __('Tags','stylish-fashion-designer'),
        ),
	) );

	$wp_customize->add_setting( 'stylish_fashion_designer_related_post_excerpt_number',array(
		'default' => 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));

	$wp_customize->add_control( new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_related_post_excerpt_number',	array(
		'label' => esc_html__( 'Content Limit','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_related_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('stylish_fashion_designer_related_post_featured_image',array(
		'default' => true,
		'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
	));
	$wp_customize->add_control('stylish_fashion_designer_related_post_featured_image',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Featured image','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_related_settings',
	)); 

	//Responsive Media Settings
	$wp_customize->add_section('stylish_fashion_designer_responsive_media',array(
		'title'	=> __('Responsive Media','stylish-fashion-designer'),
		'panel' => 'stylish_fashion_designer_panel_id',
	));	

	$wp_customize->add_setting('stylish_fashion_designer_responsive_premium_info',array(
    	'sanitize_callback' => 'sanitize_text_field'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_responsive_premium_info',array(
   		 'type'=> 'hidden',
   		 'label' => __('Premium Features','stylish-fashion-designer'),
   		 'description' => "<ul><li>". esc_html__('Please explore our premium theme for additional settings and features.','stylish-fashion-designer') ."</li><li>". esc_html__('And so on...','stylish-fashion-designer') ."</li></ul><a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_BUY_PRO) ." '>". esc_html__('Upgrade to Pro','stylish-fashion-designer') ."</a>",
   		 'section'=> 'stylish_fashion_designer_responsive_media'
 	));

	$wp_customize->add_setting('stylish_fashion_designer_responsive_menu_open_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_responsive_menu_open_icon',array(
		'label'	=> __('Responsive Open Menu Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_responsive_media',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('stylish_fashion_designer_responsive_menu_close_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_responsive_menu_close_icon',array(
		'label'	=> __('Responsive Close Menu Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_responsive_media',
		'type'		=> 'icon'
	)));

	// site toggle button color
	$wp_customize->add_setting('stylish_fashion_designer_toggle_button_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_toggle_button_color', array(
		'label'    => __('Toggle Button Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_responsive_media',
		'settings' => 'stylish_fashion_designer_toggle_button_color',
	)));

	$wp_customize->add_setting('stylish_fashion_designer_display_post_date',array(
       'default' => true,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
    ));
    $wp_customize->add_control('stylish_fashion_designer_display_post_date',array(
       'type' => 'checkbox',
       'label' => __('Display Post Date','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_responsive_media'
    ));

    $wp_customize->add_setting('stylish_fashion_designer_display_post_author',array(
       'default' => true,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
    ));
    $wp_customize->add_control('stylish_fashion_designer_display_post_author',array(
       'type' => 'checkbox',
       'label' => __('Display Post Author','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_responsive_media'
    ));

    $wp_customize->add_setting('stylish_fashion_designer_display_post_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
    ));
    $wp_customize->add_control('stylish_fashion_designer_display_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Display Post Comment','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_responsive_media'
    ));

	$wp_customize->add_setting('stylish_fashion_designer_display_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
    ));
    $wp_customize->add_control('stylish_fashion_designer_display_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Display Sidebar','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_responsive_media'
    ));

    $wp_customize->add_setting('stylish_fashion_designer_display_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
    ));
    $wp_customize->add_control('stylish_fashion_designer_display_preloader',array(
       'type' => 'checkbox',
       'label' => __('Display Preloader','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_responsive_media'
    ));

	$wp_customize->add_setting('stylish_fashion_designer_display_scroll',array(
		'default' => true,
		'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
	));
	$wp_customize->add_control('stylish_fashion_designer_display_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Display Scroll To Top','stylish-fashion-designer'),
      	'section' => 'stylish_fashion_designer_responsive_media',
	));

    //404 Page Setting
	$wp_customize->add_section('stylish_fashion_designer_page_not_found',array(
		'title'	=> __('404 Page Not Found / No Result','stylish-fashion-designer'),
		'panel' => 'stylish_fashion_designer_panel_id',
	));

	$wp_customize->add_setting('stylish_fashion_designer_page_not_found_premium_info',array(
    	'sanitize_callback' => 'sanitize_text_field'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_page_not_found_premium_info',array(
   		 'type'=> 'hidden',
   		 'label' => __('Premium Features','stylish-fashion-designer'),
   		 'description' => "<ul><li>". esc_html__('Please explore our premium theme for additional settings and features.','stylish-fashion-designer') ."</li><li>". esc_html__('And so on...','stylish-fashion-designer') ."</li></ul><a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_BUY_PRO) ." '>". esc_html__('Upgrade to Pro','stylish-fashion-designer') ."</a>",
   		 'section'=> 'stylish_fashion_designer_page_not_found'
 	));

	$wp_customize->add_setting('stylish_fashion_designer_page_not_found_heading',array(
		'default'=> __('404 Not Found','stylish-fashion-designer'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('stylish_fashion_designer_page_not_found_heading',array(
		'label'	=> __('404 Heading','stylish-fashion-designer'),
		'section'=> 'stylish_fashion_designer_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('stylish_fashion_designer_page_not_found_text',array(
		'default'=> __('Looks like you have taken a wrong turn. Dont worry it happens to the best of us.','stylish-fashion-designer'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('stylish_fashion_designer_page_not_found_text',array(
		'label'	=> __('404 Content','stylish-fashion-designer'),
		'section'=> 'stylish_fashion_designer_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('stylish_fashion_designer_page_not_found_button',array(
		'default'=>  __('Back to Home Page','stylish-fashion-designer'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('stylish_fashion_designer_page_not_found_button',array(
		'label'	=> __('404 Button','stylish-fashion-designer'),
		'section'=> 'stylish_fashion_designer_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('stylish_fashion_designer_no_search_result_heading',array(
		'default'=> __('Nothing Found','stylish-fashion-designer'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('stylish_fashion_designer_no_search_result_heading',array(
		'label'	=> __('No Search Results Heading','stylish-fashion-designer'),
		'description'=>__('The search page heading display when no results are found.','stylish-fashion-designer'),
		'section'=> 'stylish_fashion_designer_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('stylish_fashion_designer_no_search_result_text',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','stylish-fashion-designer'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('stylish_fashion_designer_no_search_result_text',array(
		'label'	=> __('No Search Results Text','stylish-fashion-designer'),
		'description'=>__('The search page text display when no results are found.','stylish-fashion-designer'),
		'section'=> 'stylish_fashion_designer_page_not_found',
		'type'=> 'text'
	));

	//Woocommerce Section
	$wp_customize->add_section( 'stylish_fashion_designer_woocommerce_section' , array(
    	'title'      => __( 'Woocommerce Settings', 'stylish-fashion-designer' ),
    	'description'=>__('The below settings are apply on woocommerce pages.','stylish-fashion-designer'),
		'priority'   => null,
		'panel' => 'stylish_fashion_designer_panel_id'
	) );

	$wp_customize->add_setting('stylish_fashion_designer_woocommerce_premium_info',array(
    	'sanitize_callback' => 'sanitize_text_field'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_woocommerce_premium_info',array(
   		 'type'=> 'hidden',
   		 'label' => __('Premium Features','stylish-fashion-designer'),
   		 'description' => "<ul><li>". esc_html__('Please explore our premium theme for additional settings and features.','stylish-fashion-designer') ."</li><li>". esc_html__('And so on...','stylish-fashion-designer') ."</li></ul><a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_BUY_PRO) ." '>". esc_html__('Upgrade to Pro','stylish-fashion-designer') ."</a>",
   		 'section'=> 'stylish_fashion_designer_woocommerce_section'
 	));

	/**
	 * Product Columns
	 */
	$wp_customize->add_setting( 'stylish_fashion_designer_per_columns' , array(
		'default'           => 4,
		'transport'         => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stylish_fashion_designer_per_columns', array(
		'label'    => __( 'Product per columns', 'stylish-fashion-designer' ),
		'section'  => 'stylish_fashion_designer_woocommerce_section',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('stylish_fashion_designer_product_per_page',array(
		'default'	=> 12,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('stylish_fashion_designer_product_per_page',array(
		'label'	=> __('Product per page','stylish-fashion-designer'),
		'section'	=> 'stylish_fashion_designer_woocommerce_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('stylish_fashion_designer_shop_sidebar_enable',array(
       'default' => false,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
    ));
    $wp_customize->add_control('stylish_fashion_designer_shop_sidebar_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable shop page sidebar','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_woocommerce_section',
    ));

   // shop page sidebar alignment
   $wp_customize->add_setting('stylish_fashion_designer_shop_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices',
	));
	$wp_customize->add_control('stylish_fashion_designer_shop_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Shop Page Layout', 'stylish-fashion-designer'),
		'section'        => 'stylish_fashion_designer_woocommerce_section',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'stylish-fashion-designer'),
			'Right Sidebar' => __('Right Sidebar', 'stylish-fashion-designer'),
		),
	));

	$wp_customize->add_setting('stylish_fashion_designer_product_page_sidebar_enable',array(
		'default' => false,
		'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
	));
	$wp_customize->add_control('stylish_fashion_designer_product_page_sidebar_enable',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable single product page sidebar','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_woocommerce_section',
	));

   // single product page sidebar alignment
   $wp_customize->add_setting('stylish_fashion_designer_single_product_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices',
	));
	$wp_customize->add_control('stylish_fashion_designer_single_product_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Product Page Layout', 'stylish-fashion-designer'),
		'section'        => 'stylish_fashion_designer_woocommerce_section',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'stylish-fashion-designer'),
			'Right Sidebar' => __('Right Sidebar', 'stylish-fashion-designer'),
		),
	));

    $wp_customize->add_setting('stylish_fashion_designer_related_product_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
    ));
    $wp_customize->add_control('stylish_fashion_designer_related_product_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Related product','stylish-fashion-designer'),
       'section' => 'stylish_fashion_designer_woocommerce_section',
    ));

    $wp_customize->add_setting( 'stylish_fashion_designer_woo_product_sale_border_radius',array(
		'default' => 3,
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_woo_product_sale_border_radius', array(
        'label'  => __('Woocommerce Product Sale Border Radius','stylish-fashion-designer'),
        'section'  => 'stylish_fashion_designer_woocommerce_section',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('stylish_fashion_designer_wooproduct_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_wooproduct_sale_font_size',array(
		'label'	=> __('Woocommerce Product Sale Font Size','stylish-fashion-designer'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'stylish_fashion_designer_woocommerce_section',
	)));

    $wp_customize->add_setting('stylish_fashion_designer_woo_product_sale_top_bottom_padding',array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_woo_product_sale_top_bottom_padding',array(
		'label'	=> __('Woocommerce Product Sale Top Bottom Padding ','stylish-fashion-designer'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'stylish_fashion_designer_woocommerce_section',
		'type'=> 'number'
	)));

	$wp_customize->add_setting('stylish_fashion_designer_woo_product_sale_left_right_padding',array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_woo_product_sale_left_right_padding',array(
		'label'	=> __('Woocommerce Product Sale Left Right Padding','stylish-fashion-designer'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'stylish_fashion_designer_woocommerce_section',
		'type'=> 'number'
	)));

	$wp_customize->add_setting('stylish_fashion_designer_woo_product_sale_position',array(
        'default' => 'Left',
        'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	));
	$wp_customize->add_control('stylish_fashion_designer_woo_product_sale_position',array(
        'type' => 'select',
        'label' => __('Woocommerce Product Sale Position','stylish-fashion-designer'),
        'section' => 'stylish_fashion_designer_woocommerce_section',
        'choices' => array(
            'Right' => __('Right','stylish-fashion-designer'),
            'Left' => __('Left','stylish-fashion-designer'),
        ),
	));

	$wp_customize->add_setting( 'stylish_fashion_designer_woocommerce_button_padding_top',array(
		'default' => 12,
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control( new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_woocommerce_button_padding_top',	array(
		'label' => esc_html__( 'Button Top Bottom Padding (px)','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'stylish_fashion_designer_woocommerce_button_padding_right',array(
		'default' => 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control( new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_woocommerce_button_padding_right',	array(
		'label' => esc_html__( 'Button Right Left Padding (px)','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'stylish_fashion_designer_woocommerce_button_border_radius',array(
		'default' => 3,
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control( new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_woocommerce_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius (px)','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

   $wp_customize->add_setting('stylish_fashion_designer_woocommerce_product_border_enable',array(
      'default' => false,
      'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
   ));
   $wp_customize->add_control('stylish_fashion_designer_woocommerce_product_border_enable',array(
      'type' => 'checkbox',
      'label' => __('Enable / Disable product border','stylish-fashion-designer'),
      'section' => 'stylish_fashion_designer_woocommerce_section',
   ));

	$wp_customize->add_setting( 'stylish_fashion_designer_woocommerce_product_padding_top',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control( new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_woocommerce_product_padding_top',	array(
		'label' => esc_html__( 'Product Top Bottom Padding (px)','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'stylish_fashion_designer_woocommerce_product_padding_right',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control( new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_woocommerce_product_padding_right',	array(
		'label' => esc_html__( 'Product Right Left Padding (px)','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'stylish_fashion_designer_woocommerce_product_border_radius',array(
		'default' => 10,
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control( new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_woocommerce_product_border_radius',array(
		'label' => esc_html__( 'Product Border Radius (px)','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'stylish_fashion_designer_woocommerce_product_box_shadow',array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control( new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_woocommerce_product_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow (px)','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('stylish_fashion_designer_wooproducts_nav',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_choices'
    ));
    $wp_customize->add_control('stylish_fashion_designer_wooproducts_nav',array(
       'type' => 'select',
       'label' => __('Shop Page Products Navigation','stylish-fashion-designer'),
       'choices' => array(
            'Yes' => __('Yes','stylish-fashion-designer'),
            'No' => __('No','stylish-fashion-designer'),
        ),
       'section' => 'stylish_fashion_designer_woocommerce_section',
    ));

	//footer text
	$wp_customize->add_section('stylish_fashion_designer_footer_section',array(
		'title'	=> __('Footer Text','stylish-fashion-designer'),
		'panel' => 'stylish_fashion_designer_panel_id'
	));

	$wp_customize->add_setting('stylish_fashion_designer_footer_premium_info',array(
    	'sanitize_callback' => 'sanitize_text_field'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_footer_premium_info',array(
   		 'type'=> 'hidden',
   		 'label' => __('Premium Features','stylish-fashion-designer'),
   		 'description' => "<ul><li>". esc_html__('Please explore our premium theme for additional settings and features.','stylish-fashion-designer') ."</li><li>". esc_html__('And so on...','stylish-fashion-designer') ."</li></ul><a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_BUY_PRO) ." '>". esc_html__('Upgrade to Pro','stylish-fashion-designer') ."</a>",
   		 'section'=> 'stylish_fashion_designer_footer_section'
 	));
	
	$wp_customize->add_setting('stylish_fashion_designer_footer_hide',array(
		'default' => true,
		'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
	));
	$wp_customize->add_control('stylish_fashion_designer_footer_hide',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Footer','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_footer_section',
	));	

  	$wp_customize->add_setting('stylish_fashion_designer_footer_template',array(
      'default'	=> esc_html('stylish_fashion_designer-footer-one'),
      'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_choices'
	));
	$wp_customize->add_control('stylish_fashion_designer_footer_template',array(
		'label'	=> esc_html__('Footer style','stylish-fashion-designer'),
		'section'	=> 'stylish_fashion_designer_footer_section',
		'setting'	=> 'stylish_fashion_designer_footer_template',
		'type' => 'select',
		'choices' => array(
          'stylish_fashion_designer-footer-one' => esc_html__('Style 1', 'stylish-fashion-designer'),
          'stylish_fashion_designer-footer-two' => esc_html__('Style 2', 'stylish-fashion-designer'),
          'stylish_fashion_designer-footer-three' => esc_html__('Style 3', 'stylish-fashion-designer'),
          'stylish_fashion_designer-footer-four' => esc_html__('Style 4', 'stylish-fashion-designer'),
          'stylish_fashion_designer-footer-five' => esc_html__('Style 5', 'stylish-fashion-designer'),
          )
	));		

	$wp_customize->add_setting('stylish_fashion_designer_footer_bg_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_footer_bg_color', array(
		'label'    => __('Footer Background Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_footer_section',
	)));

	$wp_customize->add_setting('stylish_fashion_designer_footer_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'stylish_fashion_designer_footer_bg_image',array(
		'label' => __('Footer Background Image','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_footer_section'
	)));
	
	$wp_customize->add_setting('stylish_fashion_designer_footer_attatchment',array(
		'default'=> 'scroll',
		'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_choices'
	));
	$wp_customize->add_control('stylish_fashion_designer_footer_attatchment',array(
		'type' => 'select',
		'label'	=> __('Footer Background Attatchment','stylish-fashion-designer'),
		'choices' => array(
            'fixed' => __('fixed','stylish-fashion-designer'),
            'scroll' => __('scroll','stylish-fashion-designer'),
        ),
		'section'=> 'stylish_fashion_designer_footer_section',
	));

	$wp_customize->add_setting('stylish_fashion_designer_footer_img_position',array(
		'default' => 'center center',
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	  ));
	  $wp_customize->add_control('stylish_fashion_designer_footer_img_position',array(
		  'type' => 'select',
		  'label' => __('Footer Image Position','stylish-fashion-designer'),
		  'section' => 'stylish_fashion_designer_footer_section',
		  'choices' 	=> array(
			  'left top' 		=> esc_html__( 'Top Left', 'stylish-fashion-designer' ),
			  'center top'   => esc_html__( 'Top', 'stylish-fashion-designer' ),
			  'right top'   => esc_html__( 'Top Right', 'stylish-fashion-designer' ),
			  'left center'   => esc_html__( 'Left', 'stylish-fashion-designer' ),
			  'center center'   => esc_html__( 'Center', 'stylish-fashion-designer' ),
			  'right center'   => esc_html__( 'Right', 'stylish-fashion-designer' ),
			  'left bottom'   => esc_html__( 'Bottom Left', 'stylish-fashion-designer' ),
			  'center bottom'   => esc_html__( 'Bottom', 'stylish-fashion-designer' ),
			  'right bottom'   => esc_html__( 'Bottom Right', 'stylish-fashion-designer' ),
		  ),
	  ));		

	$wp_customize->add_setting('stylish_fashion_designer_footer_widget_areas',array(
		'default'           => 4,
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices',
	));
	$wp_customize->add_control('stylish_fashion_designer_footer_widget_areas',array(
		'type'        => 'radio',
		'label'       => __('Footer widget area', 'stylish-fashion-designer'),
		'section'     => 'stylish_fashion_designer_footer_section',
		'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'stylish-fashion-designer'),
		'choices' => array(
		   '1'     => __('One', 'stylish-fashion-designer'),
		   '2'     => __('Two', 'stylish-fashion-designer'),
		   '3'     => __('Three', 'stylish-fashion-designer'),
		   '4'     => __('Four', 'stylish-fashion-designer')
		),
	));

	$wp_customize->add_setting('stylish_fashion_designer_footer_heading',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	));
	$wp_customize->add_control('stylish_fashion_designer_footer_heading',array(
	    'type' => 'select',
	    'label' => __('Footer Heading Alignment','stylish-fashion-designer'),
	    'section' => 'stylish_fashion_designer_footer_section',
	    'choices' => array(
	    	'Left' => __('Left','stylish-fashion-designer'),
	        'Center' => __('Center','stylish-fashion-designer'),
	        'Right' => __('Right','stylish-fashion-designer')
	    ),
	) );

	$wp_customize->add_setting('stylish_fashion_designer_footer_heading_letter_spacing',array(
		'default'=> 1,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('stylish_fashion_designer_footer_heading_letter_spacing',array(
		'label'	=> __('Footer Heading Letter Spacing','stylish-fashion-designer'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'stylish_fashion_designer_footer_section',
	));		

	$wp_customize->add_setting('stylish_fashion_designer_footer_content',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	));
	$wp_customize->add_control('stylish_fashion_designer_footer_content',array(
	    'type' => 'select',
	    'label' => __('Footer Content Alignment','stylish-fashion-designer'),
	    'section' => 'stylish_fashion_designer_footer_section',
	    'choices' => array(
	    	'Left' => __('Left','stylish-fashion-designer'),
	        'Center' => __('Center','stylish-fashion-designer'),
	        'Right' => __('Right','stylish-fashion-designer')
	    ),
	) );

	$wp_customize->add_setting('stylish_fashion_designer_footer_heading_font_size',array(
		'default'=> 25,
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_footer_heading_font_size',array(
		'label' => esc_html__( 'Footer Heading Font Size','stylish-fashion-designer' ),
		'section'=> 'stylish_fashion_designer_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	$wp_customize->add_setting('stylish_fashion_designer_footer_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize,'stylish_fashion_designer_footer_padding',array(
		'label'	=> __('Footer Widget Padding','stylish-fashion-designer'),
		'section'=> 'stylish_fashion_designer_footer_section',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 100,
      ),
	)));

	$wp_customize->add_setting('stylish_fashion_designer_hide_show_scroll',array(
		'default' => true,
		'sanitize_callback'	=> 'stylish_fashion_designer_sanitize_checkbox'
	));
	$wp_customize->add_control('stylish_fashion_designer_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Enable / Disable Back To Top','stylish-fashion-designer'),
      	'section' => 'stylish_fashion_designer_footer_section',
	));

	$wp_customize->add_setting('stylish_fashion_designer_back_to_top_icon',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_back_to_top_icon',array(
		'label'	=> __('Back to Top Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_footer_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('stylish_fashion_designer_scroll_icon_font_size',array(
		'default'=> 22,
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_scroll_icon_font_size',array(
		'label'	=> __('Back To Top Icon Font Size','stylish-fashion-designer'),
		'section'=> 'stylish_fashion_designer_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	$wp_customize->add_setting('stylish_fashion_designer_scroll_icon_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_scroll_icon_color', array(
		'label'    => __('Back to Top Icon Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_footer_section',
	)));

	$wp_customize->add_setting('stylish_fashion_designer_scroll_icon_hover_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_scroll_icon_hover_color', array(
		'label'    => __('Back to Top Icon Hover Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_footer_section',
	)));

	$wp_customize->add_setting('stylish_fashion_designer_scroll_icon_background', array(
		'default'           => 'var(--first-theme-color)',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_scroll_icon_background', array(
		'label'    => __('Back to Top Background Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_footer_section',
	)));

	$wp_customize->add_setting('stylish_fashion_designer_scroll_icon_background_hover', array(
		'default'           => 'var(--first-theme-color)',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_scroll_icon_background_hover', array(
		'label'    => __('Back to Top Background Hover Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_footer_section',
	)));

	$wp_customize->add_setting('stylish_fashion_designer_footer_options',array(
        'default' => 'Right align',
        'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	));
	$wp_customize->add_control('stylish_fashion_designer_footer_options',array(
        'type' => 'radio',
        'label' => __('Back To Top Alignment','stylish-fashion-designer'),
        'section' => 'stylish_fashion_designer_footer_section',
        'choices' => array(
            'Left align' => __('Left Align','stylish-fashion-designer'),
            'Right align' => __('Right Align','stylish-fashion-designer'),
            'Center align' => __('Center Align','stylish-fashion-designer'),
        ),
	) );

	$wp_customize->add_setting( 'stylish_fashion_designer_top_bottom_scroll_padding',array(
		'default' => 7,
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control( new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_top_bottom_scroll_padding',	array(
		'label' => esc_html__( 'Top Bottom Scroll Padding (px)','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'stylish_fashion_designer_left_right_scroll_padding',array(
		'default' => 17,
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control( new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_left_right_scroll_padding',	array(
		'label' => esc_html__( 'Left Right Scroll Padding (px)','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'stylish_fashion_designer_back_to_top_border_radius',array(
		'default' => 5,
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control( new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_back_to_top_border_radius', array(
		'label' => esc_html__( 'Back to Top Border Radius (px)','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('stylish_fashion_designer_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('stylish_fashion_designer_footer_copy',array(
		'label'	=> __('Copyright Text','stylish-fashion-designer'),
		'section'	=> 'stylish_fashion_designer_footer_section',
		'description'	=> __('Add some text for footer like copyright etc.','stylish-fashion-designer'),
		'type'		=> 'text'
	));

	$wp_customize->add_setting('stylish_fashion_designer_footer_text_align',array(
        'default' => 'center',
        'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	));
	$wp_customize->add_control('stylish_fashion_designer_footer_text_align',array(
        'type' => 'radio',
        'label' => __('Copyright Text Alignment ','stylish-fashion-designer'),
        'section' => 'stylish_fashion_designer_footer_section',
        'choices' => array(
            'left' => __('Left Align','stylish-fashion-designer'),
            'right' => __('Right Align','stylish-fashion-designer'),
            'center' => __('Center Align','stylish-fashion-designer'),
        ),
	) );

	$wp_customize->add_setting('stylish_fashion_designer_copyright_text_font_size',array(
		'default'=> 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_copyright_text_font_size',array(
		'label' => esc_html__( 'Copyright Font Size (px)','stylish-fashion-designer' ),
		'section'=> 'stylish_fashion_designer_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	$wp_customize->add_setting( 'stylish_fashion_designer_footer_text_padding',array(
		'default' => 20,
		'transport' => 'refresh',
		'sanitize_callback' => 'stylish_fashion_designer_sanitize_integer'
	));
	$wp_customize->add_control( new Stylish_Fashion_Designer_Custom_Control( $wp_customize, 'stylish_fashion_designer_footer_text_padding',	array(
		'label' => esc_html__( 'Copyright Text Padding (px)','stylish-fashion-designer' ),
		'section' => 'stylish_fashion_designer_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('stylish_fashion_designer_copyright_text_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_copyright_text_color', array(
		'label'    => __('Copyright Text Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_footer_section',
	)));

	$wp_customize->add_setting('stylish_fashion_designer_copyright_text_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_copyright_text_hover_color', array(
		'label'    => __('Copyright Text Hover Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_footer_section',
	)));	

	$wp_customize->add_setting('stylish_fashion_designer_copyright_text_background', array(
		'default'           => 'var(--first-theme-color)',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_copyright_text_background', array(
		'label'    => __('Copyright background Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_footer_section',
	)));

	//Footer Social Icons
	$wp_customize->add_section('stylish_fashion_designer_footer_social_icons',array(
		'title'	=> __('Footer Social Icons','stylish-fashion-designer'),
		'priority'	=> null,
		'panel' => 'stylish_fashion_designer_panel_id',
	));

	$wp_customize->add_setting('stylish_fashion_designer_footer_social_icons_premium_info',array(
    	'sanitize_callback' => 'sanitize_text_field'
 	));
 	$wp_customize->add_control('stylish_fashion_designer_footer_social_icons_premium_info',array(
   		 'type'=> 'hidden',
   		 'label' => __('Premium Features','stylish-fashion-designer'),
   		 'description' => "<ul><li>". esc_html__('Please explore our premium theme for additional settings and features.','stylish-fashion-designer') ."</li><li>". esc_html__('And so on...','stylish-fashion-designer') ."</li></ul><a target='_blank' href='". esc_url(STYLISH_FASHION_DESIGNER_BUY_PRO) ." '>". esc_html__('Upgrade to Pro','stylish-fashion-designer') ."</a>",
   		 'section'=> 'stylish_fashion_designer_footer_social_icons'
 	));

	$wp_customize->add_setting('stylish_fashion_designer_footer_facebook_url',array(
		'default' => '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('stylish_fashion_designer_footer_facebook_url',array(
		'type' => 'url',
		'label' => __('Add Facebook URL','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_footer_social_icons',
	));

	$wp_customize->add_setting('stylish_fashion_designer_footer_facebook_icon',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_footer_facebook_icon',array(
		'label'	=> __('Choose Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_footer_social_icons',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('stylish_fashion_designer_footer_instagram_url',array(
		'default' => '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('stylish_fashion_designer_footer_instagram_url',array(
		'type' => 'url',
		'label' => __('Add Instagram URL','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_footer_social_icons',
	));

	$wp_customize->add_setting('stylish_fashion_designer_footer_instagram_icon',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_footer_instagram_icon',array(
		'label'	=> __('Choose Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_footer_social_icons',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('stylish_fashion_designer_footer_twitter_url',array(
		'default' => '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('stylish_fashion_designer_footer_twitter_url',array(
		'type' => 'url',
		'label' => __('Add Twitter URL','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_footer_social_icons',
	));

	$wp_customize->add_setting('stylish_fashion_designer_footer_twitter_icon',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_footer_twitter_icon',array(
		'label'	=> __('Choose Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_footer_social_icons',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('stylish_fashion_designer_footer_linkedin_url',array(
		'default' => '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('stylish_fashion_designer_footer_linkedin_url',array(
		'type' => 'url',
		'label' => __('Add LinkedIn URL','stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_footer_social_icons',
	));

	$wp_customize->add_setting('stylish_fashion_designer_footer_linkedin_icon',array(
		'default'	=> 'fa-brands fa-linkedin-in',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Stylish_Fashion_Designer_Icon_Changer(
        $wp_customize,'stylish_fashion_designer_footer_linkedin_icon',array(
		'label'	=> __('Choose Icon','stylish-fashion-designer'),
		'transport' => 'refresh',
		'section'	=> 'stylish_fashion_designer_footer_social_icons',
		'type'		=> 'icon'
	)));	

	$wp_customize->add_setting('stylish_fashion_designer_footer_social_icons_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('stylish_fashion_designer_footer_social_icons_size', array(
		'label'   => __('Icon Font Size', 'stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_footer_social_icons',
		'setting' => 'stylish_fashion_designer_footer_social_icons_size',
		'type'    => 'text',
	));

	$wp_customize->add_setting('stylish_fashion_designer_footer_icon_alignment',array(
        'default' => 'center',
        'sanitize_callback' => 'stylish_fashion_designer_sanitize_choices'
	));
	$wp_customize->add_control('stylish_fashion_designer_footer_icon_alignment',array(
        'type' => 'radio',
        'label' => __('Icon Alignment ','stylish-fashion-designer'),
        'section' => 'stylish_fashion_designer_footer_social_icons',
        'choices' => array(
            'left' => __('Left Align','stylish-fashion-designer'),
            'right' => __('Right Align','stylish-fashion-designer'),
            'center' => __('Center Align','stylish-fashion-designer'),
        ),
	) );	

	$wp_customize->add_setting('stylish_fashion_designer_footer_icon_color_option', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_fashion_designer_footer_icon_color_option', array(
		'label'    => __('Icon Color', 'stylish-fashion-designer'),
		'section'  => 'stylish_fashion_designer_footer_social_icons',
	)));

	//Reset All Settings
	$wp_customize->add_section( 'stylish_fashion_designer_reset_section', array(
        'title'    => __( 'Reset Theme Settings', 'stylish-fashion-designer' ),
        'priority'	=> null,
		'panel' => 'stylish_fashion_designer_panel_id',
    ) );

	//Reset Demo Import
    $wp_customize->add_setting( 'stylish_fashion_designer_reset_demo_import_settings', array(
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control('stylish_fashion_designer_reset_demo_import_settings',array(
            'label'   => __( 'Reset Demo Import', 'stylish-fashion-designer' ),
            'section' => 'stylish_fashion_designer_reset_section',
            'type'    => 'button',
            'input_attrs' => array(
                'onclick' => 'ResetDemoSettings()',
            ),
    ));

	//Reset Global Color
	$wp_customize->add_setting('stylish_fashion_designer_reset_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	
	$wp_customize->add_control('stylish_fashion_designer_reset_color', array(
		'type'    => 'button',
		'label'   => __('Reset Global Color', 'stylish-fashion-designer'),
		'section' => 'stylish_fashion_designer_reset_section',
		'input_attrs' => array(
			'onclick' => 'ResetGlobalColor()',
		),
	));
}
add_action( 'customize_register', 'stylish_fashion_designer_customize_register' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Stylish_Fashion_Designer_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Stylish_Fashion_Designer_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Stylish_Fashion_Designer_Customize_Section_Pro(
				$manager,
				'stylish_fashion_designer_example_1',
				array(
					'title'   =>  esc_html__( 'Stylish Fashion Designer Pro', 'stylish-fashion-designer' ),
					'pro_text' => esc_html__( 'Get Pro', 'stylish-fashion-designer' ),
					'pro_url'  => esc_url( 'https://www.buywptemplates.com/products/fashion-designer-wordpress-theme' ),
					'priority'   => 9
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'stylish-fashion-designer-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'stylish-fashion-designer-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}


	//Footer widget areas
	function stylish_fashion_designer_sanitize_choices( $input ) {
		$valid = array(
			'1'     => __('One', 'stylish-fashion-designer'),
			'2'     => __('Two', 'stylish-fashion-designer'),
			'3'     => __('Three', 'stylish-fashion-designer'),
			'4'     => __('Four', 'stylish-fashion-designer')
		);
		if ( array_key_exists( $input, $valid ) ) {
			return $input;
		} else {
	  		return '';
		}
	}

}

// Doing this customizer thang!
Stylish_Fashion_Designer_Customize::get_instance();