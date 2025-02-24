<?php
/**
 * Global settings routes
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
 * Creating rest routes.
 * 
 * @package Frontis
 * @author BoomDevs
 * @since 1.0.0
 */

function frontis_rest_routes() {
	register_rest_route(
		'frontis/v1',
		'/global-settings',
		array(
			array(
				'methods'             => \WP_REST_Server::READABLE,
				'callback'            => FRONTIS_NAMESPACE . 'frontis_get_global_settings',
				'permission_callback' => function () {
					return true;
				},
			),
			array(
				'methods'             => \WP_REST_Server::EDITABLE,
				'callback'            => FRONTIS_NAMESPACE . 'frontis_update_global_settings',
				'permission_callback' => function () {
					return current_user_can( 'edit_theme_options' );
				},
			),
		)
	);
}
add_action( 'rest_api_init', FRONTIS_NAMESPACE . 'frontis_rest_routes' );



/**
 * Get options
 *
 * @since 1.0.0
 * @param \WP_REST_Request $request Full details about the request.
 * @return \WP_REST_Response|\WP_Error Response object on success, or WP_Error object on failure.
 */
function frontis_get_global_settings( \WP_REST_Request $request ) {
	$default_settings = array(
        'disableHeader'     => false,
        'disableFooter'     => false,
        'stickyHeader'      => false,
		'stickyHeaderOffset' => 0,
        'transparentHeader' => false,
        'scrollToTop'       => false,
        'smoothScroll'       => false,
        'relatedPosts'       => false,
        'authorBox'       => false,
        'lazyLoading'       => false,
        'stickyHeaderColor'       => null,
        'transparentHeaderColor'       => 'transparent',
    );

	$settings = get_option( 'frontis_theme_options' );

	return rest_ensure_response( $settings, $default_settings );
}



/**
 * Set options
 *
 * @param \WP_REST_Request $request Full details about the request.
 * @return \WP_REST_Response|\WP_Error Response object on success, or WP_Error object on failure.
 * @since 1.0.2
 */
function frontis_update_global_settings( \WP_REST_Request $request ) {

	$fields = isset( $request['setting'] ) ? $request['setting'] : array();

	error_log( print_r( $fields, true ) );

	// Validate incoming data.
    $valid_fields = array(
        'disableHeader'     => filter_var( $fields['disableHeader'] ?? false, FILTER_VALIDATE_BOOLEAN ),
        'disableFooter'     => filter_var( $fields['disableFooter'] ?? false, FILTER_VALIDATE_BOOLEAN ),
        'stickyHeader'      => filter_var( $fields['stickyHeader'] ?? false, FILTER_VALIDATE_BOOLEAN ),
		'stickyHeaderOffset' => filter_var( $fields['stickyHeaderOffset'] ?? 0, FILTER_VALIDATE_INT ),
        'transparentHeader' => filter_var( $fields['transparentHeader'] ?? false, FILTER_VALIDATE_BOOLEAN ),
        'scrollToTop'       => filter_var( $fields['scrollToTop'] ?? false, FILTER_VALIDATE_BOOLEAN ),
        'smoothScroll'       => filter_var( $fields['smoothScroll'] ?? false, FILTER_VALIDATE_BOOLEAN ),
        'relatedPosts'       => filter_var( $fields['relatedPosts'] ?? false, FILTER_VALIDATE_BOOLEAN ),
        'authorBox'       => filter_var( $fields['authorBox'] ?? false, FILTER_VALIDATE_BOOLEAN ),
        'lazyLoading'       => filter_var( $fields['lazyLoading'] ?? false, FILTER_VALIDATE_BOOLEAN ),
        'stickyHeaderColor' => validate_color( $fields['stickyHeaderColor'] ?? '' ),
        'transparentHeaderColor' => validate_color( $fields['transparentHeaderColor'] ?? '' ),
    );

	if ( ! empty( $fields ) ) {
		update_option( 'frontis_theme_options', $valid_fields );
	}

	return rest_ensure_response( 'success' );
}

/**
 * Validate color in HEX format.
 *
 * @param string $color The color to validate.
 * @return string|null Returns the validated color or null if invalid.
 */
function validate_color( $color ) {
    if ( preg_match( '/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/', $color ) ) {
        return $color;
    }
    return null;
}