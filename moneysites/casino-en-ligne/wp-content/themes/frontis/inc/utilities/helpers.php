<?php

/**
 * Theme Helper functions
 *
 * @package Frontis
 * @author Boomdevs
 * @since 1.0.0
 */

namespace Frontis;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}



/**
 * Helper function to use the prefix constant
 */
function frontis_prefix( $string ) {
	return FRONTIS_PREFIX . $string;
}

/**
 * Check the WordPress version.
 *
 * @since  1.0.0
 * @param string $version   WordPress version to compare with the current version.
 * @param mixed  $compare   Comparison value i.e > or < etc.
 * @return bool|null            True/False based on the  $version and $compare value.
 */
function frontis_version_compare( $version, $compare ) {
	global $wp_version;
	if ( ! $wp_version ) {
		return null;
	}
	list( $current_version ) = explode( '-', $wp_version );
	return version_compare( $current_version, $version, $compare );
}

/**
 * Parse CSS
 *
 * @param  array $css_output Array of CSS.
 * @param  mixed $min_media  Min Media breakpoint.
 * @param  mixed $max_media  Max Media breakpoint.
 * @return string             Generated CSS.
 */
function parse_css( array $css_output = array(), $min_media = '', $max_media = '' ): string {

	$parse_css = '';
	if ( count( $css_output ) > 0 ) {

		foreach ( $css_output as $selector => $properties ) {

			if ( null === $properties ) {
				break;
			}

			if ( ! count( $properties ) ) {
				continue;
			}

			$temp_parse_css   = $selector . '{';
			$properties_added = 0;

			foreach ( $properties as $property => $value ) {

				if ( '' == $value && 0 !== $value ) {
					continue;
				}

				$properties_added++;
				$temp_parse_css .= $property . ':' . $value . ';';
			}

			$temp_parse_css .= '}';

			if ( $properties_added > 0 ) {
				$parse_css .= $temp_parse_css;
			}
		}

		if ( '' != $parse_css && ( '' !== $min_media || '' !== $max_media ) ) {

			$media_css       = '@media ';
			$min_media_css   = '';
			$max_media_css   = '';
			$media_separator = '';

			if ( '' !== $min_media ) {
				$min_media_css = '(min-width:' . $min_media . 'px)';
			}
			if ( '' !== $max_media ) {
				$max_media_css = '(max-width:' . $max_media . 'px)';
			}
			if ( '' !== $min_media && '' !== $max_media ) {
				$media_separator = ' and ';
			}

			$media_css .= $min_media_css . $media_separator . $max_media_css . '{' . $parse_css . '}';

			return $media_css;
		}
	}

	return $parse_css;
}

/**
 * RTL For Dynamic / Inline css
 *
 * @since 0.0.1
 *
 * @param string $direction Left or Right Direction.
 *
 * @return string
 */
function rtl_css( string $direction = '' ): string {
	$is_site_rtl = is_rtl() ? true : false;
	if ( 'left' === $direction ) {
		return $is_site_rtl ? esc_attr( 'right' ) : esc_attr( 'left' );
	} else {
		return $is_site_rtl ? esc_attr( 'left' ) : esc_attr( 'right' );
	}
}
