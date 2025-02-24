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
define( 'DB_NAME', 'imaosun' );

/** Database username */
define( 'DB_USER', 'imaosun_user' );

/** Database password */
define( 'DB_PASSWORD', 'imaosun_securekey2025' );

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
define( 'AUTH_KEY',         'esST}H43N_*Q=$vKTP}Z_zBE:,{I-/m!7@B*m=p|mc-Zbjez[!3=_&7Q>=om{o]i' );
define( 'SECURE_AUTH_KEY',  'v<j<;$yG{@9XuCv`Vx^C{J}:d@V~gU4Jt.VF~*<)G<+0xLsJON]:gEW+8aV;Th:$' );
define( 'LOGGED_IN_KEY',    'U([<PcXh;,G(|GW8{^&@a5%32&ufR)duZnUa%;`gMLlnKuzJ,#~c{^DL3 JvU%]C' );
define( 'NONCE_KEY',        'f$Ox*80a>dP*N^-%czsSik1H ) cV(PuvM7.D%9k.d}_#)o $O<`v:vI(YIxCq53' );
define( 'AUTH_SALT',        '`:LhB,`?EEc*N=2ccYL3U$4uOp2(1$B@:L2;/q4/);WZS[=}89?KW8=U<,lB3c39' );
define( 'SECURE_AUTH_SALT', 'V;dt1TM4fv$T)(v#_op3Jv brhK7x>!-b_&9wV)>U l`Z>+qA`3lE&1p@hY5ze9g' );
define( 'LOGGED_IN_SALT',   '#6].)k0!*)0` qy_QQ8/Kv$c`Y1U9xu9Itr7-e+>EdeL>MI;?SD*KzQwjw$a`TM`' );
define( 'NONCE_SALT',       'YFe:e)#~pTDCE5cxtLv@N^;o#,WZ<Icev. r)N)Usi@N,wF|Q_-%>CF4S}=%byR_' );

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
