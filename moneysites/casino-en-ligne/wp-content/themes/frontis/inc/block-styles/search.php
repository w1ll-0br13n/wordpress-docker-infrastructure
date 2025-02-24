<?php
/**
 * Register Search Block Styles.
 *
 * @package frontis
 * @author WP Messiah
 * @since 1.0.0
 */

declare( strict_types=1 );

namespace Frontis;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$frontis_parent_class = '.is-style-' . FRONTIS_PREFIX . '-search-minimal';

register_block_style(
	'core/search',
	array(
		'name'         => FRONTIS_PREFIX . '-search-minimal',
		'label'        => __( 'Minimal', 'frontis' ),
		'inline_style' => '
            ' . $frontis_parent_class . ' .wp-block-search__input {
                padding: var(--wp--preset--spacing--spacing-16);
                color: var(--wp--preset--color--primary-800);
                background-color: var(--wp--preset--color--white);
                line-height: 1;
                border: 0;
            }

            ' . $frontis_parent_class . '.wp-block-search__button-outside {
                background-color: var(--wp--preset--color--white);
                border-radius: var(--wp--preset--spacing--spacing-64);
            }
            ' . $frontis_parent_class . ' .wp-block-search__button-outside:focus-visible,
            ' . $frontis_parent_class . ' .wp-block-search__button-outside .wp-block-search__inside-wrapper:focus-visible{
                outline: none;
            }
            ' . $frontis_parent_class . '.wp-block-search__button-outside .wp-block-search__inside-wrapper input:focus-visible {
                outline: 0;
            }

            ' . $frontis_parent_class . '.wp-block-search__button-outside .wp-block-search__inside-wrapper {
                height: 50px;
            }

            ' . $frontis_parent_class . '.wp-block-search__button-outside .wp-block-search__inside-wrapper .wp-block-search__button {
                width: 120px;
            }
            ' . $frontis_parent_class . '.wp-block-search__button-outside .wp-block-search__inside-wrapper .wp-block-search__button svg{
                margin-top: -3px;
            }

            ' . $frontis_parent_class . '.wp-block-search__button-outside .wp-block-search__label {
                display: none;
            }

            ' . $frontis_parent_class . '.wp-block-search__button-outside .wp-block-search__input{
                border-radius: var(--wp--preset--spacing--spacing-64);
            }
        ',
	)
);
