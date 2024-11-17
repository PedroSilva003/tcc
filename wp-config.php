<?php
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
define( 'AUTH_KEY',          'ICf=hm[}^ujCfw)I+4sm=.qVl;FfvM4V8_n*]Z0:;2A94cIy@ctli[E}3,A^m59!' );
define( 'SECURE_AUTH_KEY',   '_O@%#/%69HJZUSi|c ]& g1/`q RAeJ)iM/~=jn?Ng^O^X{Xk~+`2:+;nI^t7W[.' );
define( 'LOGGED_IN_KEY',     '7!GjGyZ(D a>ZZ;z:KSQxo~1|4b?XWcPbb || Nnf[pk?[TJmDN|H9z_dsI^B@c;' );
define( 'NONCE_KEY',         'c*GDBj`Q/rcxyYX$mf/GZ4q91-@YW61,h}J<w5E1+ 6yf%nEJw+QX:.OYH[;T?*w' );
define( 'AUTH_SALT',         'wUJ8+*jkTKdg E+ODh.|GGnkkG6]#!p(Jv:{|n+$yvF>9Y7D7;L$@du(XtXn?d<F' );
define( 'SECURE_AUTH_SALT',  '8c<txu5u*O0lLx2f^B`H11o[s0E%DR-]uu(@ cX90.-;ZRsA2g0dLIXv&Qrg&r[2' );
define( 'LOGGED_IN_SALT',    'Rste*a/%z^c[YPn}($v}V[@%+EI]r72`tqSr9SIVcKP0L;S~:=a!cz=c[Vr?([%u' );
define( 'NONCE_SALT',        'DH=r`*epVfnQ%BYJN#?HVX~D<Tw{hw@j*2;M+-r875+NxOyre:3fzx=ArGS)3Q<c' );
define( 'WP_CACHE_KEY_SALT', 'Q_UFsmBqsDuD Xb.l[qsJGs9okAgThdthACaV%@`=;kAvlF)EZn8[YVY?0L)Ww+n' );


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

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
