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
define( 'DB_NAME', 'casino-en-ligne' );

/** Database username */
define( 'DB_USER', 'casinoenligne_user' );

/** Database password */
define( 'DB_PASSWORD', 'casinoenligne_securekey2025' );

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
define( 'AUTH_KEY',         'oiqxStne]pj&%NP4Z-N9z`zqol5J$5IK1m8ha^L0eY6RS1Yjb]}He91SeeEfLh?Q' );
define( 'SECURE_AUTH_KEY',  '(qz=Q:!>h!F4aU/P1lU78PsTp.0p|mn9uRt4U+solygg~Hi_*-15xBVCG{ugm,-t' );
define( 'LOGGED_IN_KEY',    'eiHA}#)b7k;6yx!T%$*0`C-mJC-r`+LJXxQwPg:{}T ptDZt_)=/c9^/+N4|Gz/4' );
define( 'NONCE_KEY',        'NBXE3XmyGdto:jyu!F0ew4,l[C/oU6tzuy{}oH{B2CMAl~/ytF*St7kn8g?}N T$' );
define( 'AUTH_SALT',        'X{_2G|dE)A%frDu@+e`U{7O<LR$e^Trem. >m*<O^{r<g*Dvh(dX3i_sNqS)#  r' );
define( 'SECURE_AUTH_SALT', '7*.p(x=+6$]Z|z/| dBYKwwM*INW,@qm,G%GA[{dG*.!-RE9jamgD&qA5wzM@:$%' );
define( 'LOGGED_IN_SALT',   'u7*kqO$SJ1WL<<cB[:-3iLaplLZkd|nZ{#jOf>1G`1r7ErU_./,D4Lp0=s}h5Y{z' );
define( 'NONCE_SALT',       'g,:/y#+y*:-4LV+M}]d5SDa>1QHQX9&IB(fR0)>,iyj{X+c[Gb0mlvYn~2<}[&1x' );

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
if( strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false )
    $_SERVER['HTTPS'] = 'on';
else
    $_SERVER['HTTPS'] = 'off';


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
