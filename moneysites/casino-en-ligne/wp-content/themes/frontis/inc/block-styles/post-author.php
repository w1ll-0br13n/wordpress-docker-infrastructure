<?php
/**
 * Register multiple post author block styles.
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

$frontis_parent_class_compact = '.is-style-' . FRONTIS_PREFIX . '-post-author-compact-author';
$frontis_parent_class_elegant = '.is-style-' . FRONTIS_PREFIX . '-post-author-elegant-author';

// Compact Author style
register_block_style(
    'core/post-author',
    array(
        'name'         => FRONTIS_PREFIX . '-post-author-compact-author',
        'label'        => __( 'Compact Author', 'frontis' ),
        'inline_style' => '
            ' . $frontis_parent_class_compact . ' {
                flex-wrap: inherit;
            }
            ' . $frontis_parent_class_compact . ' .wp-block-post-author__avatar {
                margin-right: var(--wp--preset--spacing--spacing-16);
                display: flex;
            }
            ' . $frontis_parent_class_compact . ' .avatar {
                width: var(--wp--preset--spacing--spacing-48);
                height: var(--wp--preset--spacing--spacing-48);
                object-fit: cover;
                border-radius: var(--wp--preset--spacing--spacing-104);
            }
            ' . $frontis_parent_class_compact . ' .wp-block-post-author__name {
                font-size: var(--wp--preset--spacing--spacing-32);
                font-weight: 600;
                color: var(--wp--preset--color--white);
                text-transform: capitalize;
                width: 100%;
            }
            ' . $frontis_parent_class_compact . ' .wp-block-post-author__name a {
                color: var(--wp--preset--color--white);
            }
        ',
    )
);

// Elegant Author style
register_block_style(
    'core/post-author',
    array(
        'name'         => FRONTIS_PREFIX . '-post-author-elegant-author',
        'label'        => __( 'Elegant Author', 'frontis' ),
        'inline_style' => '
            ' . $frontis_parent_class_elegant . ' {
                flex-wrap: nowrap;
            }
            ' . $frontis_parent_class_elegant . ' .wp-block-post-author__avatar {
                margin-right: var(--wp--preset--spacing--spacing-16);
                display: flex;
            }
            ' . $frontis_parent_class_elegant . ' .avatar {
                width: var(--wp--preset--spacing--spacing-40);
                height: var(--wp--preset--spacing--spacing-40);
                object-fit: cover;
                border-radius: var(--wp--preset--spacing--spacing-104);
            }
            ' . $frontis_parent_class_elegant . ' .wp-block-post-author__name a {
                display: block;
                font-size: var(--wp--preset--font-size--p-2);
            }
        ',
    )
);
