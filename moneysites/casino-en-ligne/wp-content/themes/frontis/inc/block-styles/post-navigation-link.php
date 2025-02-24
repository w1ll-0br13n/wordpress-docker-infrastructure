<?php
/**
 * Register post navigation link block style.
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

$frontis_parent_class = '.is-style-' . FRONTIS_PREFIX . '-post-navigation-simple';

register_block_style(
    'core/post-navigation-link',
    array(
        'name'         => FRONTIS_PREFIX . '-post-navigation-simple',
        'label'        => __('Simple', 'frontis'),
        'inline_style' => '
            ' . $frontis_parent_class . ' {
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
            }

            ' . $frontis_parent_class . ' .wp-block-post-navigation-link__label {
                text-transform: uppercase;
                color: var(--wp--preset--color--primary);
                font-size: var(--wp--preset--font-size--small);
                font-weight: var(--wp--custom--font-weight--medium);
                margin-bottom: 0.5rem;
            }

            ' . $frontis_parent_class . ' .wp-block-post-navigation-link__content {
                color: var(--wp--preset--color--heading);
                font-size: var(--wp--preset--font-size--medium);
                font-weight: var(--wp--custom--font-weight--regular);
                text-decoration: none;
                line-height: var(--wp--custom--line-height--medium);
            }

            .wp-block-post-navigation-links {
                display: flex;
                justify-content: space-between;
                gap: 2rem;
                width: 100%;
            }

            .post-navigation-link-previous {
                flex: 1;
            }

            .post-navigation-link-next {
                flex: 1;
                text-align: right;
            }

            ' . $frontis_parent_class . ':hover .wp-block-post-navigation-link__content {
                color: var(--wp--preset--color--primary);
            }
        ',
    )
);