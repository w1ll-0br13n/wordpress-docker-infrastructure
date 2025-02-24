<?php
/**
 * Required All Extension.
 *
 * @package Frontis
 * @author Boomdevs
 * @since 1.0.0
 */

namespace Frontis;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once __DIR__ . '/metabox.php';
require_once __DIR__ . '/global-options.php';
require_once __DIR__ . '/hide-elements.php';
require_once __DIR__ . '/admin-bar.php';
require_once __DIR__ . '/responsive.php';

