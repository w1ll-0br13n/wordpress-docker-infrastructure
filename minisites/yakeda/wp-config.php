<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yakeda' );

/** Database username */
define( 'DB_USER', 'yakeda_user' );

/** Database password */
define( 'DB_PASSWORD', 'yakeda_securekey2025' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U3}x;: v$V23O~piz@|}F,q/zC.zI7GfUPZ$t]a<N,]^8=Zsn+EjIwOV.jqxAk_D' );
define( 'SECURE_AUTH_KEY',  '/KQ|2}?g_JP@?393Ktnzy]#d /CBS`GoRx>]+A,q/00x4<Rj5w1r{F!TLwOz9!K,' );
define( 'LOGGED_IN_KEY',    'gm*d|[z?@XoiiUL@8ICs%|g/KYjGg-/AX)_vPNO!`J%I-L,=a=k2&-QYO,OCERLr' );
define( 'NONCE_KEY',        'olXN*==ByPL9aGC6;7&,I#A;6;M:u=)IPiC#T.aXT=roI?4(`:]2kgI,Hx*5x@,k' );
define( 'AUTH_SALT',        '}^cO>ZRvpUd*PLp-ZYzM?Ot-:G2)GMG(7Zp_X:i%2YXA65y`l*w@z^w/:k3=s!|K' );
define( 'SECURE_AUTH_SALT', 'Eo}PtVdpV1q:x|}=I#93J 4/+J=D|25Ymkw.:?RP|IjJZkUh<2#RyA3*w6s,}Qew' );
define( 'LOGGED_IN_SALT',   '7`f5k6iF4RW,Y]_L%5-!nenPyR#ABT!/)AMRl_c@=oBbK qWCKs*rRDXX,B?JhEF' );
define( 'NONCE_SALT',       '7|VgyL/F+UJ_OuyF2ie(2KQCoEt7qCQ2q|tV=fX)nU!jH{]xfL_v/ayZ$WDoFLQ^' );
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
	$_SERVER['HTTPS'] = 'on';
}
$_SERVER['HTTPS']='off';

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
