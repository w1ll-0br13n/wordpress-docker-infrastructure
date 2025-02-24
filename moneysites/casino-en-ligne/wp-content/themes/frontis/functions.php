<?php
/**
 * Frontis functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package WordPress
 * @subpackage Frontis
 * @since Frontis 1.0
 */

declare(strict_types=1);

namespace Frontis;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Define theme constants
 */
const FRONTIS_PREFIX     = 'FWP_';
const FRONTIS_VERSION    = '1.1.7';
const FRONTIS_SLUG       = 'frontis';
const FRONTIS_NAME       = 'Frontis';
const FRONTIS_TEXTDOMAIN = 'frontis';
const FRONTIS_NAMESPACE  = __NAMESPACE__ . '\\';
const FRONTIS_DIR        = __DIR__ . DIRECTORY_SEPARATOR;

/**
 * Include required files
*/

require_once FRONTIS_DIR . 'inc/utilities/helpers.php';
require_once FRONTIS_DIR . 'inc/theme-setup.php';
require_once FRONTIS_DIR . 'inc/enqueue-scripts.php';
require_once FRONTIS_DIR . 'inc/extensions/all.php';
require_once FRONTIS_DIR . 'inc/admin/settings.php';
require_once FRONTIS_DIR . 'inc/tgm-plugin-activation.php';
require_once FRONTIS_DIR . 'inc/add-plugin.php';
require_once FRONTIS_DIR . 'inc/block-styles/all.php';
