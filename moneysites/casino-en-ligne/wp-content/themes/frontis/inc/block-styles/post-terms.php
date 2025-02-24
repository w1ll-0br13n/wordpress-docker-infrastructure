<?php
/**
 * Register Category Styles.
 *
 * @package Frontis
 * @author WP Messiah
 * @since 1.0.0
 */

declare( strict_types=1 );

namespace Frontis;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

register_block_style(
	'core/post-terms',
	array(
		'name'         => FRONTIS_PREFIX . '-post-terms-pill',
		'label'        => __( 'Pill', 'frontis' ),
		'inline_style' => '
			.wp-block-post-terms.is-style-' . FRONTIS_PREFIX . '-post-terms-pill a {
                font-size: var(--wp--preset--font-size--p-2) !Important;
				font-weight: 400;
                padding: 6px 14px;
				margin: 0px 10px 10px 0px;
				border-radius: var(--wp--preset--spacing--spacing-8);
				color: var(--wp--preset--color--white);
				background-color: var(--wp--preset--color--primary);
                text-decoration: none;
				display: inline-block;
				height: 100%;
			}

			.is-style-' . FRONTIS_PREFIX . '-post-terms-pill .wp-block-post-terms__separator {
				display: none;
			}
		',
	) 
);
