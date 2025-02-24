<?php
/**
 * Register Calendar block style.
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

$frontis_calendar_class = '.is-style-' . FRONTIS_PREFIX . '-post-calendar-custom-style';

register_block_style(
    'core/calendar',
    array(
        'name'         => FRONTIS_PREFIX . '-post-calendar-custom-style',
        'label'        => __('Calendar', 'frontis'),
        'inline_style' => '
            ' . $frontis_calendar_class . ' .wp-calendar-table {
                width: 100%;
                border-collapse: collapse;
                background-color: var(--wp--preset--color--primary-800);
                color: var(--wp--preset--color--white);
                overflow: hidden;
            }

            ' . $frontis_calendar_class . ' .wp-calendar-table caption {
                margin-bottom: var(--wp--preset--spacing--spacing-8);
                font-size: var(--wp--preset--font-size--h-6);
            }

            ' . $frontis_calendar_class . ' .wp-calendar-table th,
            ' . $frontis_calendar_class . ' .wp-calendar-table td {
                padding: var(--wp--preset--spacing--spacing-8);
                text-align: center;
                border: 1px solid rgba(255, 255, 255, 0.2);
            }

            ' . $frontis_calendar_class . ' .wp-calendar-table th {
                background-color: rgba(255, 255, 255, 0.1);
                font-weight: bold;
            }

            ' . $frontis_calendar_class . ' .wp-calendar-table td a {
                display: inline-block;
                background-color: var(--wp--preset--color--primary-600);
                color: var(--wp--preset--color--white);
                text-decoration: none;
                width: 20px;
                height: 20px;
                line-height: 20px;
                transition: background-color 0.3s ease-in-out;
            }

            ' . $frontis_calendar_class . ' .wp-calendar-table td a:hover {
                background-color: var(--wp--preset--color--primary-600);
            }

            ' . $frontis_calendar_class . ' #today {
                background-color: var(--wp--preset--color--primary-600);
                color: white;
                font-weight: bold;
            }

            ' . $frontis_calendar_class . ' .wp-calendar-nav {
                display: none;
            }
        ',
    )
);
