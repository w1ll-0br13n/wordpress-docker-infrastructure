<?php
/**
 * Stylish Fashion Designer functions and definitions
 * @package Stylish Fashion Designer
 */
 /* Breadcrumb Begin */
 function stylish_fashion_designer_the_breadcrumb() {
 	if (!is_home()) {
 		echo '<a href="';
 			echo esc_url( home_url() );
 		echo '">';
 			bloginfo('name');
 		echo "</a> ";
 		if (is_category() || is_single()) {
 			the_category(',');
 			if (is_single()) {
 				echo "<span> ";
 					the_title();
 				echo "</span> ";
 			}
 		} elseif (is_page()) {
 			echo "<span> ";
 				the_title();
 		}
 	}
 }
/* Theme Setup */
if ( ! function_exists( 'stylish_fashion_designer_setup' ) ) :

function stylish_fashion_designer_setup() {
	
	$GLOBALS['content_width'] = apply_filters( 'stylish_fashion_designer_content_width', 640 );

	load_theme_textdomain( 'stylish-fashion-designer', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 80,
		'flex-height' => true,
	) );
	add_image_size('stylish-fashion-designer-homepage-thumb',240,145,true);

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'stylish-fashion-designer' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support('responsive-embeds');
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', stylish_fashion_designer_font_url() ) );
}
endif; // stylish_fashion_designer_setup
add_action( 'after_setup_theme', 'stylish_fashion_designer_setup' );

/* Theme Widgets Setup */
function stylish_fashion_designer_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'stylish-fashion-designer' ),
		'description'   => __( 'Appears on posts and pages', 'stylish-fashion-designer' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Posts and Pages Sidebar', 'stylish-fashion-designer' ),
		'description'   => __( 'Appears on posts and pages', 'stylish-fashion-designer' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'stylish-fashion-designer' ),
		'description'   => __( 'Appears on posts and pages', 'stylish-fashion-designer' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$stylish_fashion_designer_widget_areas = get_theme_mod('stylish_fashion_designer_footer_widget_areas', '4');
	for ($stylish_fashion_designer_i=1; $stylish_fashion_designer_i <= 4; $stylish_fashion_designer_i++) {
		register_sidebar( array(
			'name'          => __( 'Footer Widget ', 'stylish-fashion-designer' ) . $stylish_fashion_designer_i,
			'id'            => 'footer-' . $stylish_fashion_designer_i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) ); 
	}

	register_sidebar( array(
		'name'          => __( 'Shop Page Sidebar', 'stylish-fashion-designer' ),
		'description'   => __( 'Appears on shop page', 'stylish-fashion-designer' ),
		'id'            => 'woocommerce_sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Single Product Page Sidebar', 'stylish-fashion-designer' ),
		'description'   => __( 'Appears on single product page', 'stylish-fashion-designer' ),
		'id'            => 'woocommerce-single-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'stylish_fashion_designer_widgets_init' );

/* Footer Widget */
add_theme_support( 'starter-content', array(
	'widgets' => array(
		'footer-1' => array(
			'archives',
		),
		'footer-2' => array(
			'meta',
		),
		'footer-3' => array(
			'categories',
		),
		'footer-4' => array(
			'search',
		),
	),
));

// edit

if (!function_exists('stylish_fashion_designer_edit_link')) :

    function stylish_fashion_designer_edit_link($view = 'default')
    {
    global $post;
        edit_post_link(
            sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __('Edit <span class="screen-reader-text">%s</span>', 'stylish-fashion-designer'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ),
            '<span class="edit-link"><i class="fa-solid fa-pen mx-2"></i>',
            '</span>'
        );
    }
endif;

/* Theme Font URL */
function stylish_fashion_designer_font_url() {
	$font_family   = array(
		'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Bad Script',
		'Bebas Neue',
		'Fjalla One',
		'PT Sans:ital,wght@0,400;0,700;1,400;1,700',
		'PT Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900',
		'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Alex Brush',
		'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Playball',
		'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Julius Sans One',
		'Arsenal:ital,wght@0,400;0,700;1,400;1,700',
		'Slabo 13px',
		'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900',
		'Overpass Mono:wght@300;400;500;600;700',
		'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
		'Raleway:ital,wght@0,100..900;1,100..900',
		'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
		'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700',
		'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Padauk:wght@400;700',
		'Inconsolata:wght@200;300;400;500;600;700;800;900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
		'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
		'Pacifico',
		'Indie Flower',
		'VT323',
		'Dosis:wght@200;300;400;500;600;700;800',
		'Frank Ruhl Libre:wght@300;400;500;700;900',
		'Fjalla One',
		'Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Oxygen:wght@300;400;700',
		'Arvo:ital,wght@0,400;0,700;1,400;1,700',
		'Noto Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Lobster',
		'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700',
		'Yanone Kaffeesatz:wght@200;300;400;500;600;700',
		'Anton',
		'Libre Baskerville:ital,wght@0,400;0,700;1,400',
		'Bree Serif',
		'Gloria Hallelujah',
		'Abril Fatface',
		'Varela Round',
		'Vampiro One',
		'Shadows Into Light',
		'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Rokkitt:wght@100;200;300;400;500;600;700;800;900',
		'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Francois One',
		'Orbitron:wght@400;500;600;700;800;900',
		'Patua One',
		'Acme',
		'Satisfy',
		'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700',
		'Architects Daughter',
		'Russo One',
		'Monda:wght@400;700',
		'Righteous',
		'Lobster Two:ital,wght@0,400;0,700;1,400;1,700',
		'Hammersmith One',
		'Courgette',
		'Permanent Marke',
		'Cherry Swash:wght@400;700',
		'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
		'Poiret One',
		'BenchNine:wght@300;400;700',
		'Economica:ital,wght@0,400;0,700;1,400;1,700',
		'Handlee',
		'Cardo:ital,wght@0,400;0,700;1,400',
		'Alfa Slab One',
		'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Cookie',
		'Chewy',
		'Great Vibes',
		'Coming Soon',
		'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
		'Days One',
		'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Shrikhand',
		'Tangerine:wght@400;700',
		'IM Fell English SC',
		'Boogaloo',
		'Bangers',
		'Fredoka One',
		'Volkhov:ital,wght@0,400;0,700;1,400;1,700',
		'Shadows Into Light Two',
		'Marck Script',
		'Sacramento',
		'Unica One',
		'Dancing Script:wght@400;500;600;700',
		'Exo 2:ital,wght@0,100..900;1,100..900',
		'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'DM Serif Display:ital@0;1',
		'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
		'Jost:ital,wght@0,100..900;1,100..900',
		'Mulish:ital,wght@0,200..1000;1,200..1000',
		'Quicksand:wght@300..700',
		'ABeeZee'
	);

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

/* Theme enqueue scripts */
function stylish_fashion_designer_scripts() {
	wp_enqueue_style( 'stylish-fashion-designer-font', stylish_fashion_designer_font_url(), array() );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');
	// blocks-css
	wp_enqueue_style( 'stylish-fashion-designer-block-style', get_theme_file_uri('/css/blocks.css') );
	wp_style_add_data( 'stylish-fashion-designer-style', 'rtl', 'replace' );	
	wp_enqueue_style( 'stylish-fashion-designer-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );
	// body
	$stylish_fashion_designer_body_color       = get_theme_mod('stylish_fashion_designer_body_color', '');
	$stylish_fashion_designer_body_font_family = get_theme_mod('stylish_fashion_designer_body_font_family', '');
	$stylish_fashion_designer_body_font_size   = get_theme_mod('stylish_fashion_designer_body_font_size', '');
	$stylish_fashion_designer_body_font_weight   = get_theme_mod('stylish_fashion_designer_body_font_weight', '');	
			
	// Paragraph
	$stylish_fashion_designer_paragraph_color       = get_theme_mod('stylish_fashion_designer_paragraph_color', '');
	$stylish_fashion_designer_paragraph_font_family = get_theme_mod('stylish_fashion_designer_paragraph_font_family', '');
	$stylish_fashion_designer_paragraph_font_size   = get_theme_mod('stylish_fashion_designer_paragraph_font_size', '');
	$stylish_fashion_designer_paragraph_font_weight   = get_theme_mod('stylish_fashion_designer_paragraph_font_weight', '');
	// "a" tag
	$stylish_fashion_designer_atag_color       = get_theme_mod('stylish_fashion_designer_atag_color', '');
	$stylish_fashion_designer_atag_font_family = get_theme_mod('stylish_fashion_designer_atag_font_family', '');
	// "li" tag
	$stylish_fashion_designer_li_color       = get_theme_mod('stylish_fashion_designer_li_color', '');
	$stylish_fashion_designer_li_font_family = get_theme_mod('stylish_fashion_designer_li_font_family', '');
	// H1
	$stylish_fashion_designer_h1_color       = get_theme_mod('stylish_fashion_designer_h1_color', '');
	$stylish_fashion_designer_h1_font_family = get_theme_mod('stylish_fashion_designer_h1_font_family', '');
	$stylish_fashion_designer_h1_font_size   = get_theme_mod('stylish_fashion_designer_h1_font_size', '');
	$stylish_fashion_designer_h1_font_weight   = get_theme_mod('stylish_fashion_designer_h1_font_weight', '');
	// H2
	$stylish_fashion_designer_h2_color       = get_theme_mod('stylish_fashion_designer_h2_color', '');
	$stylish_fashion_designer_h2_font_family = get_theme_mod('stylish_fashion_designer_h2_font_family', '');
	$stylish_fashion_designer_h2_font_size   = get_theme_mod('stylish_fashion_designer_h2_font_size', '');
	$stylish_fashion_designer_h2_font_weight   = get_theme_mod('stylish_fashion_designer_h2_font_weight', '');
	// H3
	$stylish_fashion_designer_h3_color       = get_theme_mod('stylish_fashion_designer_h3_color', '');
	$stylish_fashion_designer_h3_font_family = get_theme_mod('stylish_fashion_designer_h3_font_family', '');
	$stylish_fashion_designer_h3_font_size   = get_theme_mod('stylish_fashion_designer_h3_font_size', '');
	$stylish_fashion_designer_h3_font_weight   = get_theme_mod('stylish_fashion_designer_h3_font_weight', '');
	// H4
	$stylish_fashion_designer_h4_color       = get_theme_mod('stylish_fashion_designer_h4_color', '');
	$stylish_fashion_designer_h4_font_family = get_theme_mod('stylish_fashion_designer_h4_font_family', '');
	$stylish_fashion_designer_h4_font_size   = get_theme_mod('stylish_fashion_designer_h4_font_size', '');
	$stylish_fashion_designer_h4_font_weight   = get_theme_mod('stylish_fashion_designer_h4_font_weight', '');
	// H5
	$stylish_fashion_designer_h5_color       = get_theme_mod('stylish_fashion_designer_h5_color', '');
	$stylish_fashion_designer_h5_font_family = get_theme_mod('stylish_fashion_designer_h5_font_family', '');
	$stylish_fashion_designer_h5_font_size   = get_theme_mod('stylish_fashion_designer_h5_font_size', '');
	$stylish_fashion_designer_h5_font_weight   = get_theme_mod('stylish_fashion_designer_h5_font_weight', '');
	// H6
	$stylish_fashion_designer_h6_color       = get_theme_mod('stylish_fashion_designer_h6_color', '');
	$stylish_fashion_designer_h6_font_family = get_theme_mod('stylish_fashion_designer_h6_font_family', '');
	$stylish_fashion_designer_h6_font_size   = get_theme_mod('stylish_fashion_designer_h6_font_size', '');
	$stylish_fashion_designer_h6_font_weight   = get_theme_mod('stylish_fashion_designer_h6_font_weight', '');

	$stylish_fashion_designer_custom_css = '
		body{
		    color:'.esc_html($stylish_fashion_designer_body_color).'!important;
		    font-family: '.esc_html($stylish_fashion_designer_body_font_family).';
		    font-size: '.esc_html($stylish_fashion_designer_body_font_size).'px;
			font-weight: '.esc_html($stylish_fashion_designer_body_font_weight).'!important;
		}
		p,span{
		    color:'.esc_html($stylish_fashion_designer_paragraph_color).'!important;
		    font-family: '.esc_html($stylish_fashion_designer_paragraph_font_family).';
		    font-size: '.esc_html($stylish_fashion_designer_paragraph_font_size).'px !important;
			font-weight: '.esc_html($stylish_fashion_designer_paragraph_font_weight).'!important;
		}
		a{
		    color:'.esc_html($stylish_fashion_designer_atag_color).'!important;
		    font-family: '.esc_html($stylish_fashion_designer_atag_font_family).';
		}
		li{
		    color:'.esc_html($stylish_fashion_designer_li_color).'!important;
		    font-family: '.esc_html($stylish_fashion_designer_li_font_family).';
		}
		h1{
		    color:'.esc_html($stylish_fashion_designer_h1_color).'!important;
		    font-family: '.esc_html($stylish_fashion_designer_h1_font_family).'!important;
		    font-size: '.esc_html($stylish_fashion_designer_h1_font_size).'px!important;
			font-weight: '.esc_html($stylish_fashion_designer_h1_font_weight).'!important;	
		}
		h2{
		    color:'.esc_html($stylish_fashion_designer_h2_color).'!important;
		    font-family: '.esc_html($stylish_fashion_designer_h2_font_family).'!important;
		    font-size: '.esc_html($stylish_fashion_designer_h2_font_size).'px!important;
			font-weight: '.esc_html($stylish_fashion_designer_h2_font_weight).'!important;
		}
		h3{
		    color:'.esc_html($stylish_fashion_designer_h3_color).'!important;
		    font-family: '.esc_html($stylish_fashion_designer_h3_font_family).'!important;
		    font-size: '.esc_html($stylish_fashion_designer_h3_font_size).'px!important;
			font-weight: '.esc_html($stylish_fashion_designer_h3_font_weight).'!important;
		}
		h4{
		    color:'.esc_html($stylish_fashion_designer_h4_color).'!important;
		    font-family: '.esc_html($stylish_fashion_designer_h4_font_family).'!important;
		    font-size: '.esc_html($stylish_fashion_designer_h4_font_size).'px!important;
			font-weight: '.esc_html($stylish_fashion_designer_h4_font_weight).'!important;
		}
		h5{
		    color:'.esc_html($stylish_fashion_designer_h5_color).'!important;
		    font-family: '.esc_html($stylish_fashion_designer_h5_font_family).'!important;
		    font-size: '.esc_html($stylish_fashion_designer_h5_font_size).'px!important;
			font-weight: '.esc_html($stylish_fashion_designer_h5_font_weight).'!important;
		}
		h6{
		    color:'.esc_html($stylish_fashion_designer_h6_color).'!important;
		    font-family: '.esc_html($stylish_fashion_designer_h6_font_family).'!important;
		    font-size: '.esc_html($stylish_fashion_designer_h6_font_size).'px!important;
			font-weight: '.esc_html($stylish_fashion_designer_h6_font_weight).'!important;
		}
	';
	wp_add_inline_style('stylish-fashion-designer-basic-style', $stylish_fashion_designer_custom_css);

	/* Theme Color sheet */
	require get_parent_theme_file_path( '/theme-color-option.php' );
	wp_add_inline_style( 'stylish-fashion-designer-basic-style',$stylish_fashion_designer_custom_css );
	wp_enqueue_script( 'tether-js', get_template_directory_uri() . '/js/tether.js', array('jquery') ,'',true);
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') ,'',true);
	wp_enqueue_script( 'stylish-fashion-designer-custom-scripts-jquery', (get_template_directory_uri()) . '/js/custom.js', array('jquery') );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'stylish_fashion_designer_scripts' );

define('STYLISH_FASHION_DESIGNER_LIVE_DEMO',__('https://demos.buywptemplates.com/fashion-designer-pro/', 'stylish-fashion-designer'));
define('STYLISH_FASHION_DESIGNER_BUY_PRO',__('https://www.buywptemplates.com/products/fashion-designer-wordpress-theme', 'stylish-fashion-designer'));
define('STYLISH_FASHION_DESIGNER_PRO_DOC',__('https://demos.buywptemplates.com/demo/docs/stylish-fashion-designer-pro/', 'stylish-fashion-designer'));
define('STYLISH_FASHION_DESIGNER_FREE_DOC',__('https://demos.buywptemplates.com/demo/docs/stylish-fashion-designer/', 'stylish-fashion-designer'));
define('STYLISH_FASHION_DESIGNER_PRO_SUPPORT',__('https://buywptemplates.com/pages/community', 'stylish-fashion-designer'));
define('STYLISH_FASHION_DESIGNER_FREE_SUPPORT',__('https://wordpress.org/support/theme/stylish-fashion-designer/', 'stylish-fashion-designer'));
define('STYLISH_FASHION_DESIGNER_REVIEW',__('https://wordpress.org/support/theme/stylish-fashion-designer/reviews/', 'stylish-fashion-designer'));

define('STYLISH_FASHION_DESIGNER_CREDIT',__('https://www.buywptemplates.com/products/free-fashion-designer-wordpress-theme', 'stylish-fashion-designer'));

if ( ! function_exists( 'stylish_fashion_designer_credit' ) ) {
	function stylish_fashion_designer_credit(){
		echo '<a href="' . esc_url(STYLISH_FASHION_DESIGNER_CREDIT) . '" target="_blank" rel="noopener noreferrer">' . esc_html__('Fashion WordPress Theme', 'stylish-fashion-designer') . '</a>';

	}
}

/* Excerpt Limit Begin */
function stylish_fashion_designer_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

/*radio button sanitization*/
function stylish_fashion_designer_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function stylish_fashion_designer_sanitize_checkbox( $input ) {
	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function stylish_fashion_designer_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

/* Integer sanitization */
if ( ! function_exists( 'stylish_fashion_designer_sanitize_integer' ) ) {
	function stylish_fashion_designer_sanitize_integer( $input ) {
		return (int) $input;
	}
}

// Change number or products per row to 4
add_filter('loop_shop_columns', 'stylish_fashion_designer_loop_columns');
if (!function_exists('stylish_fashion_designer_loop_columns')) {
	function stylish_fashion_designer_loop_columns() {
		$stylish_fashion_designer_columns = get_theme_mod( 'stylish_fashion_designer_per_columns', 4 );
		return $stylish_fashion_designer_columns; // 4 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'stylish_fashion_designer_shop_per_page', 20 );
function stylish_fashion_designer_shop_per_page( $stylish_fashion_designer_cols ) {
  	$cols = get_theme_mod( 'stylish_fashion_designer_product_per_page', 12 );
	return $cols;
}

//Display the related posts
if ( ! function_exists( 'stylish_fashion_designer_related_posts' ) ) {
	function stylish_fashion_designer_related_posts() {
		wp_reset_postdata();
		global $post;
		$args = array(
			'no_found_rows'          => true,
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
			'ignore_sticky_posts'    => 1,
			'orderby'                => 'rand',
			'post__not_in'           => array( $post->ID ),
			'posts_per_page'         => absint( get_theme_mod( 'stylish_fashion_designer_related_posts_count_number', '3' ) ),
		);
		// Categories
		if ( get_theme_mod( 'stylish_fashion_designer_related_posts_taxanomies', 'categories' ) == 'categories' ) {

			$cats = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $cats ) {
				$cats                 = wp_get_post_categories( $post->ID, array( 'fields' => 'ids' ) );
				$args['category__in'] = $cats;
			} else {
				$args['cat'] = $cats;
			}
		}
		// Tags
		if ( get_theme_mod( 'stylish_fashion_designer_related_posts_taxanomies', 'categories' ) == 'tags' ) {

			$tags = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $tags ) {
				$tags            = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );
				$args['tag__in'] = $tags;
			} else {
				$args['tag_slug__in'] = explode( ',', $tags );
			}
			if ( ! $tags ) {
				$break = true;
			}
		}
		$query = ! isset( $break ) ? new WP_Query( $args ) : new WP_Query();
		return $query;
	}
}

function stylish_fashion_designer_enable_post_featured_image(){
	if(get_theme_mod('stylish_fashion_designer_post_featured_image') == 'Image' ) {
		return true;
	}
	return false;
}

function stylish_fashion_designer_post_color_enabled(){
	if(get_theme_mod('stylish_fashion_designer_post_featured_image') == 'Color' ) {
		return true;
	}
	return false;
}

function stylish_fashion_designer_enable_post_image_custom_dimention(){
	if(get_theme_mod('stylish_fashion_designer_post_featured_image_dimention') == 'Custom' ) {
		return true;
	}
	return false;
}

function stylish_fashion_designer_show_post_color(){
	if(get_theme_mod('stylish_fashion_designer_post_featured_image') == 'Color' ) {
		return true;
	}
	return false;
}

// Reset all theme settings
function stylish_fashion_designer_reset_demo_import_settings() {
    if (current_user_can('manage_options')) {
        // List only demo import-related settings to reset
        remove_theme_mod('stylish_fashion_designer_phone_text');
        remove_theme_mod('stylish_fashion_designer_phone_number');
        remove_theme_mod('stylish_fashion_designer_email_address_text');
        remove_theme_mod('stylish_fashion_designer_email_address1');
        remove_theme_mod('stylish_fashion_designer_slide_number');
		remove_theme_mod('stylish_fashion_designer_slider_bg_image');
		remove_theme_mod('stylish_fashion_designer_slider_small_text');
		remove_theme_mod('stylish_fashion_designer_slider_title');
		remove_theme_mod('stylish_fashion_designer_slider_btn_text');
		remove_theme_mod('stylish_fashion_designer_slider_btn_url');
		remove_theme_mod('stylish_fashion_designer_section_small_text');
		remove_theme_mod('stylish_fashion_designer_section_title');
		remove_theme_mod('stylish_fashion_designer_product_btn_text');
		remove_theme_mod('stylish_fashion_designer_product_btn_url');
		remove_theme_mod('stylish_fashion_designer_product_page');

        wp_send_json_success(array('message' => __('Demo import settings have been reset.', 'stylish-fashion-designer')));
    } else {
        wp_send_json_error(array('message' => __('Permission denied.', 'stylish-fashion-designer')));
    }
}
add_action('wp_ajax_stylish_fashion_designer_reset_demo_import_settings', 'stylish_fashion_designer_reset_demo_import_settings'); 

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Load Customizer file. */
require get_template_directory() . '/inc/customizer.php';

/* Load Customizer file. */
require get_template_directory() . '/wptt-webfont-loader.php';

/* Load welcome message.*/
require get_template_directory() . '/inc/dashboard/get_started_info.php';

/* TGM */
require get_template_directory() . '/inc/tgm/tgm.php';