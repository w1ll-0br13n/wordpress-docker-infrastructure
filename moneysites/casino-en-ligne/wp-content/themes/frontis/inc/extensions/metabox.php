<?php
/**
 * Meta Box
 *
 * @package Frontis
 * @author BoomDevs
 * @since 1.0.0
 */

declare(strict_types=1);

namespace Frontis;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'init', FRONTIS_NAMESPACE . 'register_meta_settings' );

/**
 * Register Post Meta options for react based fields.
 *
 * @since 0.0.1
 * @return void
 */
function register_meta_settings(): void {
	register_post_meta(
		'',
		'_frontis_meta_header_display',
		array(
			'show_in_rest'  => true,
			'single'        => true,
			'type'          => 'boolean',
			'auth_callback' => '__return_true',
		)
	);

	register_post_meta(
		'',
		'_frontis_meta_footer_display',
		array(
			'show_in_rest'  => true,
			'single'        => true,
			'type'          => 'boolean',
			'auth_callback' => '__return_true',
		)
	);

	register_post_meta(
		'',
		'_frontis_meta_site_title_display',
		array(
			'show_in_rest'  => true,
			'single'        => true,
			'type'          => 'boolean',
			'auth_callback' => '__return_true',
		)
	);

	register_post_meta(
		'',
		'_frontis_meta_sticky_header',
		array(
			'show_in_rest'  => true,
			'single'        => true,
			'type'          => 'boolean',
			'auth_callback' => '__return_true',
		)
	);

	register_post_meta(
		'',
		'_frontis_meta_transparent_header',
		array(
			'show_in_rest'  => true,
			'single'        => true,
			'type'          => 'boolean',
			'auth_callback' => '__return_true',
		)
	);
	register_post_meta(
		'',
		'_frontis_meta_lazy_load',
		array(
			'show_in_rest'  => true,
			'single'        => true,
			'type'          => 'boolean',
			'auth_callback' => '__return_true',
		)
	);
	register_post_meta(
		'',
		'_frontis_meta_transparent_bg_color',
		array(
			'show_in_rest'  => true,
			'single'        => true,
			'type'          => 'string',
			'auth_callback' => '__return_true',
		)
	);
	register_post_meta(
		'',
		'_frontis_meta_sticky_bg_color',
		array(
			'show_in_rest'  => true,
			'single'        => true,
			'type'          => 'string',
			'auth_callback' => '__return_true',
		)
	);
}
