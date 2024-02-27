<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ',UEa|KMGc88xw}{6su;xrdJo*A,r`;81l1_]oDS$K jGpB~0dDCLZ4;~8X;6CAIF' );
define( 'SECURE_AUTH_KEY',   'H~I$j+?}6eH8{N6G~4>CJMgXgh+cn goF<.WB^<Y=:4`Edn`.r(2)sa/S%Hf_=9d' );
define( 'LOGGED_IN_KEY',     '7MuuwcN/Yl_%3gyh5CQ/_S/Wj$l|6L|faboeP&Y7t)ifHkD,P/qF,tWJ[*xWUqw_' );
define( 'NONCE_KEY',         'N5sa#?C0KKGF.CQqb7_u[5nYf,ASLj gfB~En[T)G39;mxc,pGnqa?N2k>Dc!wnv' );
define( 'AUTH_SALT',         '3*.+*f[JKQkQ,(:.?svP:%$U?$L1~]8C+mnTBJfpAB|-9X|B4l^`(Y>Nq(vkS (s' );
define( 'SECURE_AUTH_SALT',  'jKK]96Y2q*+KTm~Y6TIQ OVkPOQ20BQ[bhqaE|Q/|}ct~4?;!S&c^GduN[%qNx/i' );
define( 'LOGGED_IN_SALT',    'Upn.rx29,{LEIiBB[7o8O!9gTW&3KizA.ulsYwO)ea1bsFO<`?$^~<5:b<><|o_g' );
define( 'NONCE_SALT',        'WJabg|gG}z~X&KfP#a3Vi]m-fssM2<:f4x`QWiCZvkjaS0PwkNHo1k3H*-`>dC5f' );
define( 'WP_CACHE_KEY_SALT', 'xI>l;,L4OnL=+)/[__u(/*Do6?Gjd37oskHJ_ &mB|m33?%zAJgj@yX;rVWgIFbL' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
define('ALLOW_UNFILTERED_UPLOADS', true);
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
