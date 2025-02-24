<?php
/**
 * Enqueue scripts and styles for the Frontis theme.
 *
 * @package Frontis
 * @since 1.0.0
 */

namespace Frontis;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Enqueue Editor Scripts.
 *
 * @since 1.0.0
 * @return void
 */
function enqueue_editor_block_styles(): void {
    // Add support for block styles.
    add_theme_support( 'wp-block-styles' );

    // Enqueue editor styles.
    add_editor_style( 'assets/css/editor-style.css' );

    // Add support for post formats.
    add_theme_support(
        'post-formats',
        [ 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ]
    );

}
add_action( 'after_setup_theme', FRONTIS_NAMESPACE . 'enqueue_editor_block_styles' );

/**
 * Registers custom block styles.
 *
 * @since 1.0.0
 * @return void
 */
function frontis_block_styles(): void {
    register_block_style(
        'core/list',
        [
            'name'         => 'checkmark-list',
            'label'        => __( 'Checkmark', 'frontis' ),
            'inline_style' => '
            ul.is-style-checkmark-list {
                list-style-type: "\2713";
            }
            ul.is-style-checkmark-list li {
                padding-inline-start: 1ch;
            }',
        ]
    );
}
add_action( 'init', FRONTIS_NAMESPACE . 'frontis_block_styles' );

/**
 * Registers pattern categories.
 *
 * @since 1.0.0
 * @return void
 */
function frontis_pattern_categories(): void {
    register_block_pattern_category(
        'frontis_page',
        [
            'label'       => __( 'Pages', 'frontis' ),
            'description' => __( 'A collection of full page layouts.', 'frontis' ),
        ]
    );

    register_block_pattern_category(
        'frontis_post_format',
        [
            'label'       => __( 'Post Formats', 'frontis' ),
            'description' => __( 'A collection of post format patterns.', 'frontis' ),
        ]
    );
}
add_action( 'init', FRONTIS_NAMESPACE . 'frontis_pattern_categories' );

/**
 * Registers block binding sources.
 *
 * @since 1.0.0
 * @return void
 */
function frontis_register_block_bindings(): void {
    register_block_bindings_source(
        'frontis/format',
        [
            'label'              => _x( 'Post format name', 'Editor block binding label', 'frontis' ),
            'get_value_callback' => FRONTIS_NAMESPACE . 'frontis_format_binding',
        ]
    );
}
add_action( 'init', FRONTIS_NAMESPACE . 'frontis_register_block_bindings' );

/**
 * Callback function for the post format name block binding source.
 *
 * @since 1.0.0
 * @return string Post format name or an empty string if the format is 'standard'.
 */
function frontis_format_binding(): string {
    $post_format_slug = get_post_format();
    return ( $post_format_slug && 'standard' !== $post_format_slug ) ? get_post_format_string( $post_format_slug ) : '';
}

function register_footer_pattern_category() {
    if ( function_exists( 'register_block_pattern_category' ) ) {
        register_block_pattern_category(
            'footer',
            array( 'label' => __( 'Footer', 'frontis' ) )
        );
    }
}
add_action( 'init', FRONTIS_NAMESPACE . 'register_footer_pattern_category' );


function fb_add_frontend_image_class($block_content, $block) {
    if ($block['blockName'] === 'core/image') {
        if (!empty($block['attrs']['imgFull'])) {
            // Use \ before DOMDocument to use the global namespace
            $dom = new \DOMDocument();
            @$dom->loadHTML(mb_convert_encoding($block_content, 'HTML-ENTITIES', 'UTF-8'));
            
            $figures = $dom->getElementsByTagName('figure');
            foreach ($figures as $figure) {
                $existingClass = $figure->getAttribute('class');
                $figure->setAttribute('class', $existingClass . ' fbimgfull');
            }
            
            $body = $dom->getElementsByTagName('body')->item(0);
            $block_content = '';
            foreach ($body->childNodes as $node) {
                $block_content .= $dom->saveHTML($node);
            }
        }
    }
    return $block_content;
}
add_filter('render_block', FRONTIS_NAMESPACE . 'fb_add_frontend_image_class', 10, 2);

function fb_add_frontend_image_styles() {
    echo '<style>
        .wp-block-image.fbimgfull img {
            width: 100%;
        }
        .fb-banner-hero .fb-hero-banner{
            margin-top: 288px !important;
        }
        .fb-banner-hero .fb-hero-banner img{
            margin-top: -288px !important;
        }
        @media (max-width: 1400px) {
            .fb-banner-hero .fb-hero-banner{
                margin-top: 22% !important;
            }
            .fb-banner-hero .fb-hero-banner img{
                margin-top: -22% !important;
            }
        }
        @media (min-width: 1025px) {
            .fb-hide-desktop {
                display: none !important;
            }
        }

        @media (min-width: 600px) and (max-width: 1024px) {
            .fb-hide-tablet {
                display: none !important;
            }
        }

        @media (max-width: 600px) {
            .fb-hide-mobile {
                display: none !important;
            }
            /* .fb-banner-hero .fb-banner-hero-top{
                padding-bottom: 130px !important;
            } */
            .fb-banner-hero .fb-hero-banner{
                margin-top: 23% !important;
            }
            .fb-banner-hero .fb-hero-banner img{
                margin-top: -23% !important;
            }
        }
    </style>';
}
add_action('wp_head', FRONTIS_NAMESPACE . 'fb_add_frontend_image_styles');

if ( ! function_exists( 'frontis_register_pattern_categories' ) ) {
    /**
     * Registers custom block pattern categories for the theme.
     *
     * @return void
     */
    function frontis_register_pattern_categories() {
        if ( ! function_exists( 'register_block_pattern_category' ) ) {
            return;
        }

        register_block_pattern_category(
            'testimonial',
            array(
                'label'       => esc_html__( 'Testimonial', 'frontis' ),
                'description' => esc_html__( 'A collection of testimonial block patterns.', 'frontis' ),
            )
        );

        register_block_pattern_category(
            'banners',
            array(
                'label'       => esc_html__( 'Banners', 'frontis' ),
                'description' => esc_html__( 'Various banner layouts for promotions and highlights.', 'frontis' ),
            )
        );

        register_block_pattern_category(
            'counter',
            array(
                'label'       => esc_html__( 'Counter', 'frontis' ),
                'description' => esc_html__( 'Numerical counters and statistic patterns.', 'frontis' ),
            )
        );

        register_block_pattern_category(
            'faq',
            array(
                'label'       => esc_html__( 'FAQ', 'frontis' ),
                'description' => esc_html__( 'Frequently asked questions section layouts.', 'frontis' ),
            )
        );

        register_block_pattern_category(
            'card',
            array(
                'label'       => esc_html__( 'Card', 'frontis' ),
                'description' => esc_html__( 'Versatile card designs for displaying content.', 'frontis' ),
            )
        );
        register_block_pattern_category(
            'contact-from',
            array(
                'label'       => esc_html__( 'Contact From', 'frontis' ),
                'description' => esc_html__( 'Versatile Contact From designs for displaying content.', 'frontis' ),
            )
        );
        register_block_pattern_category(
            'comment-form',
            array(
                'label'       => esc_html__( 'Comment Form', 'frontis' ),
                'description' => esc_html__( 'Versatile Comment Form designs for displaying content.', 'frontis' ),
            )
        );
        register_block_pattern_category(
            'pages',
            array(
                'label'       => esc_html__( 'Pages', 'frontis' ),
                'description' => esc_html__( 'Versatile Pages designs for displaying content.', 'frontis' ),
            )
        );
        register_block_pattern_category(
            'sidebar',
            array(
                'label'       => esc_html__( 'Sidebar', 'frontis' ),
                'description' => esc_html__( 'Versatile Sidebar designs for displaying content.', 'frontis' ),
            )
        );



    }
}
add_action( 'init', FRONTIS_NAMESPACE . 'frontis_register_pattern_categories', 9 );


require FRONTIS_DIR . '/vendor/autoload.php';

/**
 * Initialize the plugin tracker
 *
 * @return void
 */
function appsero_init_tracker_frontis() {

    if ( ! class_exists( 'Appsero\Client' ) ) {
      require_once FRONTIS_DIR . '/appsero/src/Client.php';
    }

    $client = new \Appsero\Client( 'eb681981-d6b7-46d8-b557-6f49a67f29bb', 'Frontis', __FILE__ );

    // Active insights
    $client->insights()->init();

}

appsero_init_tracker_frontis();


