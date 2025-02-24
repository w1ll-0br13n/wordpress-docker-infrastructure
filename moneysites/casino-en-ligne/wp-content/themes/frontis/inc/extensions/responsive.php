<?php
/**
 * Responsive Support for Gutenburg Blocks
 *
 * @package Frontis
 * @author WPMessiah
 * @since 0.0.1
 */

declare(strict_types=1);

namespace Frontis;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Parse HTML string into a DOMDocument object.
 *
 * @param string $html The HTML content.
 * @return \DOMDocument
 */
function dom( string $html ): \DOMDocument {
    $dom = new \DOMDocument();
    
    // Suppress warnings from malformed HTML and load it.
    libxml_use_internal_errors(true);
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $html, LIBXML_HTML_NODEFDTD | LIBXML_HTML_NOIMPLIED);
    libxml_clear_errors();
    
    return $dom;
}

/**
 * Get the first DOM element matching a tag name.
 *
 * @param string      $tag The tag name to search for (e.g., '*').
 * @param \DOMDocument $dom The DOMDocument object.
 * @return \DOMElement|null
 */
function get_dom_element( string $tag, \DOMDocument $dom ): ?\DOMElement {
    $elements = $dom->getElementsByTagName($tag);
    return $elements->length > 0 ? $elements->item(0) : null;
}

add_filter( 'render_block', FRONTIS_NAMESPACE . 'render_responsive_blocks', 10, 2 );

/**
 *  Render Responsive Blocks.
 *
 * @since 0.0.1
 * @param string $block_content Entire Block Content.
 * @param array  $block Block Properties As An Array.
 * @return string
 */
function render_responsive_blocks( string $block_content, array $block ):string { 
	$responsive_classes = '';

	if ( isset( $block['attrs']['FBHideDesktop'] ) && true === $block['attrs']['FBHideDesktop'] ) {
		$responsive_classes .= ' fb-hide-desktop';
	}

	if ( isset( $block['attrs']['FBHideTab'] ) && true === $block['attrs']['FBHideTab'] ) {
		$responsive_classes .= ' fb-hide-tablet';
	}

	if ( isset( $block['attrs']['FBHideMob'] ) && true === $block['attrs']['FBHideMob'] ) {
		$responsive_classes .= ' fb-hide-mobile';
	}

	$dom        = dom( $block_content );
	$first_item = get_dom_element( '*', $dom );

	if ( ! $first_item ) {
		return $block_content;
	}

	$classes = $first_item->getAttribute( 'class' );

	if ( $responsive_classes ) {
		$first_item->setAttribute( 'class', $classes . $responsive_classes );
		$block_content = $dom->saveHTML();
	}

	add_filter( 'fb_dynamic_theme_css', FRONTIS_NAMESPACE . 'responsive_blocks_inline_css' );

	return $block_content;
}

/**
 * Responsive Blocks Inline CSS.
 *
 * @since 0.0.1
 * @param string $css Inline CSS.
 * @return string
 */
function responsive_blocks_inline_css( $css ): string {
	$css_desktop_output = array(
		'.fb-hide-desktop' => array(
			'display' => 'none !important',
		),
	);

	$css .= parse_css( $css_desktop_output, '1025', '' );

	$css_tablet_output = array(
		'.fb-hide-tablet' => array(
			'display' => 'none !important ',
		),
	);

	$css .= parse_css( $css_tablet_output, '768', '1024' );

	$css_mobile_output = array(
		'.fb-hide-mobile' => array(
			'display' => 'none !important',
		),
	);

	$css .= parse_css( $css_mobile_output, '', '767' );

	return $css;
}

// Disable frontis plugin responsive controls.
add_filter( 'enable_responsive_condition_for_core', '__return_false' );

