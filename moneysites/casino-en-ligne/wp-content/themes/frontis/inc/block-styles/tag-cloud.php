<?php
/**
 * Register tag cloud styles.
 *
 * @package Frontis
 * @author WP Messiah
 * @since 1.0.0
 */

 declare(strict_types=1);

 namespace Frontis;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


register_block_style(
	'core/tag-cloud',
	array(
		'name'         => FRONTIS_PREFIX . '-tag-cloud-pill',
		'label'        => __( 'Pill', 'frontis' ),
		'inline_style' => '
            .is-style-' . FRONTIS_PREFIX . '-tag-cloud-pill .tag-cloud-link {
                font-size: var(--wp--preset--font-size--p-2) !Important;
				font-weight: 400;
                padding: 6px 14px;
				margin: 0px 10px 10px 0px;
				border-radius: var(--wp--preset--spacing--spacing-8);
				color: var(--wp--preset--color--white);
				background-color: var(--wp--preset--color--primary);
                text-decoration: none;
            }
		',
	) 
);