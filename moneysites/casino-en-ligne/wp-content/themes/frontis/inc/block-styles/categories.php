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

$frontis_parent_class = '.is-style-' . FRONTIS_PREFIX . '-categories-minimal';

register_block_style(
	'core/categories',
	array(
		'name'         => FRONTIS_PREFIX . '-categories-minimal',
		'label'        => __( 'Minimal', 'frontis' ),
		'inline_style' => '

			' . $frontis_parent_class . ' {
				list-style: none;
			}

			' . $frontis_parent_class . ' li.cat-item {
				margin-bottom: var(--wp--preset--spacing--spacing-8);
			}
			' . $frontis_parent_class . ' li.cat-item:last-child {
				margin-bottom: 0;
			}

			' . $frontis_parent_class . ' li.cat-item a {
				color: var(--wp--preset--color--white);
				font-size: var(--wp--preset--font-size--p-2);
			}

			' . $frontis_parent_class . '.wp-block-categories-dropdown .wp-block-categories__label {
				font-size: var(--wp--preset--font-size--p-1);
				color: var(--wp--preset--color--white);
			}
			
			' . $frontis_parent_class . '.wp-block-categories-dropdown select {
				padding-' . rtl_css( 'left' ) . ': var(--wp--preset--spacing--spacing-8);
				padding-' . rtl_css( 'right' ) . ': var(--wp--preset--spacing--spacing-8);
				padding-top: var(--wp--preset--spacing--spacing-8);
				padding-bottom: var(--wp--preset--spacing--spacing-8);
				border: 2px solid var(--wp--preset--color--white);
				border-radius: var(--wp--preset--spacing--spacing-8);
				font-size: var(--wp--preset--font-size--p-2);
				color: var(--wp--preset--color--white);
				background-color: var(--wp--preset--color--primary-100);
				width: 100%;
				height: 50px;
				appearance: none;
			}

			' . $frontis_parent_class . '.wp-block-categories-dropdown select:focus-visible {
				border: 2px solid var(--wp--preset--color--white) !important;
				outline-color: var(--wp--preset--color--white) !important;
			}
		',
	) 
);
