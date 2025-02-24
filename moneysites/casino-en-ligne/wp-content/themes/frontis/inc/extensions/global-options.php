<?php
/**
 * Hide Elements with Meta and Global Options
 *
 * @package Frontis
 * @since 1.0.0
 */

declare(strict_types=1);

namespace Frontis;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'render_block', FRONTIS_NAMESPACE . 'global_options', 10, 2 );

/**
 * Hide Elements.
 *
 * @since 1.0.0
 * @param string $block_content Entire Block Content.
 * @param array  $block Block Properties As An Array.
 * @return string
 */
function global_options( string $block_content, array $block ): string {
	$post_id = absint( get_the_ID() );

	// Retrieve global options from the database.
	$theme_options = get_option( 'frontis_theme_options', [] );
	$theme_options = is_array( $theme_options ) ? $theme_options : maybe_unserialize( $theme_options );

	// Check if the header should be disabled (global or per post).
	$disable_header = ! empty( $theme_options['disableHeader'] ) || get_post_meta( $post_id, '_frontis_meta_header_display', true );
	if ( $disable_header && isset( $block['attrs']['slug'] ) && 'header' === $block['attrs']['slug'] ) {
		return '';
	}

	// Check if the footer should be disabled (global or per post).
	$disable_footer = ! empty( $theme_options['disableFooter'] ) || get_post_meta( $post_id, '_frontis_meta_footer_display', true );
	if ( $disable_footer && isset( $block['attrs']['slug'] ) && 'footer' === $block['attrs']['slug'] ) {
		return '';
	}

	// Check if the header should have sticky behavior.
	$sticky_header = ! empty( $theme_options['stickyHeader'] );


	if ( $sticky_header && isset( $block['attrs']['slug'] ) && 'header' === $block['attrs']['slug'] ) {

		$sticky_header_color_gb = ! empty( $theme_options['stickyHeaderColor'] ) ? $theme_options['stickyHeaderColor'] : '#FFFFFF';
	
		// Get the post-specific sticky header color
		$post_id = get_the_ID();
		$sticky_header_color_sg = get_post_meta( $post_id, '_frontis_meta_sticky_bg_color', true );
	
		$sticky_header_color = ! empty( $sticky_header_color_sg ) ? $sticky_header_color_sg : $sticky_header_color_gb;
	
		// Output the CSS custom property dynamically
		$custom_css = sprintf(
			'<style>:root { --wp--preset--sticky--bg: %s; }</style>',
			esc_attr( $sticky_header_color )
		);
	
		// Add the CSS custom property to the <head>
		echo $custom_css;
	
		// Add a custom class to the block
		$block_content = add_custom_class( $block_content, 'fb-sticky-header' );
	}
	

	// Check if the header should have a transparent style.
	$transparent_header = ! empty( $theme_options['transparentHeader'] );

	if ( $transparent_header && isset( $block['attrs']['slug'] ) && 'header' === $block['attrs']['slug'] ) {

		$transparent_header_color_gb = ! empty( $theme_options['transparentHeaderColor'] ) ? $theme_options['transparentHeaderColor'] : '#FFFFFF';

		// Get the post-specific sticky header color
		$post_id = get_the_ID();
		$transparent_header_color_sg = get_post_meta( $post_id, '_frontis_meta_transparent_bg_color', true );

		$transparent_header_color = ! empty( $transparent_header_color_sg ) ? $transparent_header_color_sg : $transparent_header_color_gb;

		// Output the CSS custom property dynamically
		$custom_css = sprintf(
			'<style>:root { --wp--preset--transparent--bg: %s; }</style>',
			esc_attr( $transparent_header_color )
		);

		// Add the CSS custom property to the <head>
		echo $custom_css;

		// Add a custom class to the block
		$block_content = add_custom_class( $block_content, 'fb-transparent-header' );
	}


	
	return $block_content;
}

/**
 * Add custom class to block content.
 *
 * @param string $block_content Entire Block Content.
 * @param string $class CSS class to add.
 * @return string Modified block content with additional class.
 */
function add_custom_class( string $block_content, string $class ): string {
	// Add the custom class to the block's wrapper div.
	return preg_replace( '/class="([^"]*)"/', 'class="$1 ' . esc_attr( $class ) . '"', $block_content, 1 );
}
