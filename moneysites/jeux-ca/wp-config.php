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
define( 'DB_NAME', 'jeux-ca' );

/** Database username */
define( 'DB_USER', 'jeuxca_user' );

/** Database password */
define( 'DB_PASSWORD', 'jeuxca_securekey2025' );

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
define( 'AUTH_KEY',         '~q};UZA.s~-f,N3f/;+_Em]z}dx[/bH|v)xs)|i,TZuI4ir^kwXdb,|D<kA0wBu^' );
define( 'SECURE_AUTH_KEY',  'F06Ud)?}>&+#EK=2!M}N? r7;6|~964!slt$4<DwM;Tl8zP)-Y+AuyQZ1^Flm0}C' );
define( 'LOGGED_IN_KEY',    'V4kTf*dpXl>u)/mQo5>58:Hfi%ykEC{ BF#37 #>S&_C=4%n&0E_*;@TJf%Ul[Z(' );
define( 'NONCE_KEY',        '/fLaaEc)Z1*HP@RyhHNq)b|2vWZGLzh~V45)M8P?Zeuu>@a`6K-5z8(4jzn<Ql*<' );
define( 'AUTH_SALT',        'et .3!{XqqW(3t~il6ZR@{(7}:Zcb_%(u4fX)9?rtXgS?j5tLl]ZW4DMZR- !Brq' );
define( 'SECURE_AUTH_SALT', '.P5d|*uOtM)yJG;._k`{L#xPR#SQLv+ 2WzP*QrgOvam:fD5 l;tG+P7&}7BN)mI' );
define( 'LOGGED_IN_SALT',   'HRBBe2zm+[X0lEWIobl[UqJ5D&AoqNY>l+-hMG$}iE+Ojpo&q:^0c]LF.KrEFn1F' );
define( 'NONCE_SALT',       'D%k%aNeeZ58ldrrqK`2{GET^H3T9Z>2g_54e)kc8Z6M;b&H35fTRl~d-_Zu,rmWI' );

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
