<?php
/**
 * Hide Elements
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

add_filter( 'render_block', FRONTIS_NAMESPACE . 'hide_elements', 10, 2 );

/**
 * Hide Elements.
 *
 * @since 1.0.0
 * @param string $block_content Entire Block Content.
 * @param array  $block Block Properties As An Array.
 * @return string
 */
function hide_elements( string $block_content, array $block ): string {
	$post_id = absint( get_the_ID() );

	// Retrieve global options from the database.
	$theme_options = get_option( 'frontis_theme_options', [] );
	$theme_options = is_array( $theme_options ) ? $theme_options : maybe_unserialize( $theme_options );

	//Header Display
	if ( get_post_meta( $post_id, '_frontis_meta_header_display', true ) ) {

		if ( isset( $block['attrs']['slug'] ) && 'header' === $block['attrs']['slug'] ) {
			return '';
		}
	}
	//Footer Display
	if ( get_post_meta( $post_id, '_frontis_meta_footer_display', true ) ) {

		if ( isset( $block['attrs']['slug'] ) && 'footer' === $block['attrs']['slug'] ) {
			return '';
		}
	}
	//Title Display
	if ( get_post_meta( $post_id, '_frontis_meta_site_title_display', true ) ) {
		add_filter( 'the_title', function( $title, $id ) use ( $post_id ) {
			if ( $id === $post_id ) {
				return ''; 
			}
			return $title;
		}, 10, 2 );
	}

	// Check if the header should have sticky behavior.
	$sticky_header = ! empty( $theme_options['stickyHeader'] ); // Global sticky header setting
	$meta_sticky_header = get_post_meta( $post_id, '_frontis_meta_sticky_header', true ); // Page-specific meta setting

	if ( isset( $block['attrs']['slug'] ) && 'header' === $block['attrs']['slug'] ) {
		// If the meta setting exists, override the global setting
		if ( $meta_sticky_header !== '' ) {
			$sticky_header = ! $meta_sticky_header; // Invert meta value: true means disabled
		}

		// If sticky header is disabled, remove the class
		if ( ! $sticky_header ) {
			$block_content = remove_custom_class( $block_content, 'fb-sticky-header' );
		}
	}

	// Check if the header should have a transparent style.
	$transparent_header = ! empty( $theme_options['transparentHeader'] ); // Global transparent header setting
	$meta_transparent_header = get_post_meta( $post_id, '_frontis_meta_transparent_header', true ); // Page-specific meta setting

	if ( isset( $block['attrs']['slug'] ) && 'header' === $block['attrs']['slug'] ) {
		// If the meta setting exists, override the global setting
		if ( $meta_transparent_header !== '' ) {
			$transparent_header = ! $meta_transparent_header; // Invert meta value: true means disabled
		}

		if ( ! $transparent_header ) {
			$block_content = remove_custom_class( $block_content, 'fb-transparent-header' );
		}
	}
	

	return $block_content;
}


/**
 * Get disable section fields.
 *
 * @return array $frontis_page_meta_elements All toggle based page elements.
 */
function get_disable_section_fields(): array {
	$frontis_page_meta_elements = array(
		array(
			'key'   => '_frontis_meta_header_display',
			'label' => __( 'Disable Header', 'frontis' ),
		),
		array(
			'key'   => '_frontis_meta_footer_display',
			'label' => __( 'Disable Footer', 'frontis' ),
		),
	);

	return $frontis_page_meta_elements;
}

function remove_custom_class( $block_content, $class_name ) {
    return preg_replace( '/\b' . preg_quote( $class_name, '/' ) . '\b/', '', $block_content );
}
