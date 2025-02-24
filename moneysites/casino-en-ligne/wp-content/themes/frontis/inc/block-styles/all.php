<?php

/**
 * Required all block styles
 *
 * @package Frontis
 * @author Boomdevs
 * @since 1.0.0
 */

namespace Frontis;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once __DIR__ . '/post-author.php';
require_once __DIR__ . '/tag-cloud.php';
require_once __DIR__ . '/categories.php';
require_once __DIR__ . '/post-terms.php';
require_once __DIR__ . '/post-date.php';
require_once __DIR__ . '/post-navigation-link.php';
require_once __DIR__ . '/latest-posts.php';
require_once __DIR__ . '/search.php';
require_once __DIR__ . '/calendar.php';
