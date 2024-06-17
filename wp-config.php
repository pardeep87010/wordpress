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
define( 'DB_NAME', 'connectx' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'K5,{=M0,{Av?;#Pt0^43d+fZw!xuY1kM$HxHOcwo|BM6K3GrdWWG_G*MMlP{pCwt' );
define( 'SECURE_AUTH_KEY',  ',5}e_kuPF1wB<5AbtnXaXkC;FZ_-X7 3jm`Bl_5)[*;uqJR2=)<}s>VNL @(kzLp' );
define( 'LOGGED_IN_KEY',    'od#zg=E%TsZM&30Ss?#zltKdzj(6#xeHO ,slv[Cnp~1k*y&p0}HjoybNLP&W]{8' );
define( 'NONCE_KEY',        'x~b/138I-q&2 &(L`]Sj.^NmgM0ypb4W1/xk8.}Yk`}f{~L]_N#hO(s<0-VA}O8}' );
define( 'AUTH_SALT',        '0Cn.!i~lh9#1V#5I%m`aqBD &X!EbS3y5(Cpw4,;*#Ea8{oPLw}h56Ku9T3`;<KG' );
define( 'SECURE_AUTH_SALT', 'YSPRV49?({if 0bfoGh<48/`]-=9pvHNQf:X(OuGW[ln9=Z%$?#u-gf@u<Wl@:i`' );
define( 'LOGGED_IN_SALT',   'XcO<RE-,+e(W)YTnk4znT4eE /ZL[B,SX;<6TfDR@1T6*|Y`[N.lcgI=@u$>SS@_' );
define( 'NONCE_SALT',       'rP}@U3AyfjTM!m.{-4K+.c)vZ$eE|dw[Ioqea{wfr!l4jo7SNr3: C1z[Z-x,7/|' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
