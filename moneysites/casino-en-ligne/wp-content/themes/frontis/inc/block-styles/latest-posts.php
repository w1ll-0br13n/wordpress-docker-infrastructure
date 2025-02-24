<?php
/**
 * Register Latest Post Styles.
 *
 * @package Frontis
 * @author WP Messiah
 * @since 1.0.0
 */

declare(strict_types=1);

namespace Frontis;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$frontis_parent_class = '.is-style-' . FRONTIS_PREFIX . '-latest-posts-minimal';

register_block_style(
    'core/latest-posts',
    array(
        'name'         => FRONTIS_PREFIX . '-latest-posts-minimal',
        'label'        => __('Minimal', 'frontis'),
        'inline_style' => '
            ' . $frontis_parent_class . ' {
                list-style: none;
                padding: 0;
                margin: 0;
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
                gap: var(--wp--preset--spacing--spacing-16);
            }

            ' . $frontis_parent_class . ' li {
                display: grid;
                grid-template-columns: 64px auto;
                row-gap: var(--wp--preset--spacing--spacing-16);
                column-gap: var(--wp--preset--spacing--spacing-16);
                align-items: center;
                padding: var(--wp--preset--spacing--spacing-16);
                border-radius: var(--wp--preset--spacing--spacing-8);
                background-color: var(--wp--preset--color--white);
            }

            ' . $frontis_parent_class . ' li:hover {
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            ' . $frontis_parent_class . ' .wp-block-latest-posts__featured-image img {
                width: 100%;
                height: 100%;
                border-radius: 10px;
                object-fit: cover;
            }

            ' . $frontis_parent_class . ' .wp-block-latest-posts__post-title {
                font-size: var(--wp--preset--font-size--p-2);
                font-weight: 600;
                color: var(--wp--preset--color--primary-800);
                text-decoration: none;
            }

            ' . $frontis_parent_class . ' .wp-block-latest-posts__post-author,
            ' . $frontis_parent_class . ' .wp-block-latest-posts__post-date {
                font-size: var(--wp--preset--font-size--p-3);
                color: var(--wp--preset--color--primary-800);
            }
        ',
    )
);
