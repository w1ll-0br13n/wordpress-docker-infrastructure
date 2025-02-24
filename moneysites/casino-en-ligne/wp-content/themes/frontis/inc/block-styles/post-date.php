<?php
/**
* Register post date block style.
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

$frontis_date_class = '.is-style-' . FRONTIS_PREFIX . '-post-date-custom-style';

register_block_style(
    'core/post-date',
    array(
        'name'         => FRONTIS_PREFIX . '-post-date-custom-style',
        'label'        => __( 'Elegant Date', 'frontis' ),
        'inline_style' => '
            ' . $frontis_date_class . ' time::before {
                font-size: var(--wp--preset--font-size--p-2);
                content: "•";
                display: inline-block;
                margin-right: var(--wp--preset--spacing--spacing-8);;
                color: var(--wp--preset--color--heading);
            }
        ',
    )
);