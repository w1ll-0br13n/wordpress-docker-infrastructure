<?php
/**
 * Enqueue scripts and styles for the Frontis theme
 *
 * @package Frontis
 */

namespace Frontis;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue scripts and styles for the frontend.
 */
function frontis_enqueue_scripts() {
	$post_id = absint( get_the_ID() );

	$theme_version = wp_get_theme()->get( 'Version' );
	// Get the global options.
    $theme_options = get_option( 'frontis_theme_options', [] );
    $scroll_to_top = ! empty( $theme_options['scrollToTop'] );
    $sticky_header = ! empty( $theme_options['stickyHeader'] );
    $sticky_header_offset = $theme_options['stickyHeaderOffset'] ?? 0;
    $smooth_scroll = ! empty( $theme_options['smoothScroll'] );
    $lazy_loading = ! empty( $theme_options['lazyLoading'] );

	$meta_lazy_loading = get_post_meta( $post_id, '_frontis_meta_lazy_load', true );
	

	// Enqueue frontend styles
	wp_enqueue_style(
		frontis_prefix( 'styles' ),
		get_stylesheet_uri(),
		array(),
		$theme_version
	);

	// Enqueue frontend scripts
	wp_enqueue_script(
		frontis_prefix( 'scripts' ),
		get_template_directory_uri() . '/assets/js/frontend.js',
		[],
		$theme_version,
		true
	);

	wp_enqueue_script(
		frontis_prefix( 'custom-scripts' ),
		get_template_directory_uri() . '/assets/custom/main.js',
		[],
		$theme_version,
		true
	);

	// Only enqueue the script if scrollToTop is enabled.
    if ( $scroll_to_top ) {
        wp_enqueue_script(
            'frontis-scroll-to-top',
            get_template_directory_uri() . '/assets/js/scroll-to-top.js',
			[],
            $theme_version,
            true
        );
    }
	// Check if smoothScroll is enabled.
	if ( $smooth_scroll ) {
		wp_enqueue_script(
			'frontis-smooth-scroll',
			get_template_directory_uri() . '/assets/js/smooth-scroll.js',
			[],
			$theme_version,
			true
		);
	}
	

	// Conditionally enqueue or dequeue the script
	if ( $lazy_loading ) {
		// Enqueue the script if lazy loading is enabled
		wp_enqueue_script(
			'frontis-lazy-loading',
			get_template_directory_uri() . '/assets/js/lazy-loading.js',
			[],
			$theme_version,
			true
		);
	}

	// Check if lazy loading is disabled by meta value and dequeue the script
	if ( $meta_lazy_loading ) {
		// Dequeue the script if lazy loading is disabled for this page
		wp_dequeue_script( 'frontis-lazy-loading' );
	}

	// Check if lazy loading is enabled.
	if ( $sticky_header ) {
		wp_enqueue_script(
			'frontis-sticky-header',
			get_template_directory_uri() . '/assets/js/sticky-header.js',
			[],
			$theme_version,
			true
		);

		wp_localize_script(
			'frontis-sticky-header',
			'headerData', // JavaScript object name
			[
				'ajax_url' => admin_url('admin-ajax.php'),
				'site_url' => home_url(),
				'sticky_header' => isset($sticky_header) ? $sticky_header : false,
				'sticky_header_offset' => isset($sticky_header_offset) && is_numeric($sticky_header_offset) ? $sticky_header_offset : 0,
			]
		);
	}

	// If comments are open and we have at least one comment, load the comment-reply script
	if ( is_singular() && comments_open() && get_comments_number() ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', FRONTIS_NAMESPACE . 'frontis_enqueue_scripts' );

/**
 * Enqueue scripts and styles for the block editor.
 */
function frontis_enqueue_block_editor_assets() {
	// $asset_file  = include FRONTIS_DIR . 'assets/admin/index.asset.php';
	$editor_file = include FRONTIS_DIR . 'assets/js/editor.asset.php';

	// Get the global options.
    $theme_options = get_option( 'frontis_theme_options', [] );
    $sticky_header = ! empty( $theme_options['stickyHeader'] );
    $sticky_header_offset = $theme_options['stickyHeaderOffset'] ?? 0;

	// Enqueue block editor script
	wp_enqueue_script(
		frontis_prefix( 'block-editor-script' ),
		get_template_directory_uri() . '/assets/js/editor.js',
		$editor_file['dependencies'],
		$editor_file['version'],
		true
	);

	// Enqueue site editor script
	wp_enqueue_script(
		frontis_prefix( 'site-editor-script' ),
		get_template_directory_uri() . '/assets/admin/index.js',
		$editor_file['dependencies'],
		$editor_file['version'],
		true
	);

	wp_localize_script('block-editor-script', 'defaultLogoData', array(
        'logoUrl' => get_template_directory_uri() . '/assets/image/dodger-logo.webp'
    ));

	// Enqueue block editor styles

}
add_action( 'enqueue_block_editor_assets', FRONTIS_NAMESPACE . 'frontis_enqueue_block_editor_assets' );