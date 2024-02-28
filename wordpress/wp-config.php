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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'property' );

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
define( 'AUTH_KEY',         '->rTS}Vma@YM :tlF!ftsyDiuK@:JW9:{/Ghfnc9?L2f%~kW7b$kEC|x%Er)G^Xi' );
define( 'SECURE_AUTH_KEY',  '@b>DmJfdTdK,qy2LX3,1bVT;wKLQq-C8*nc@8]hJGN_Yb{$l@mp$5$;v5FyYk=9}' );
define( 'LOGGED_IN_KEY',    '_s,4.ml<]nxCl`Ps1uKy=<^oCe!@|_7}:gF<=Xw vGBr1zVbgaq5fpQ9SK-g+/9y' );
define( 'NONCE_KEY',        '4@C^v?c;;O`NwJ!NVe=Ia]E &=.JA61<yv3k7:`CjL8IexwB2B71;.-:<pbnCnk8' );
define( 'AUTH_SALT',        'yIGeV9kYV@}>z7l#E3o,cVMA$G8DJ.3ewKS>PIns?i0^%_$y0NU[P[GSy5Z@r|Dw' );
define( 'SECURE_AUTH_SALT', '&Jw 8>UzCAX%b!Qb[G7d3I3F|dHC<(n@^*}VQF:8kKw&lC-~>?^-Gh=C+?GYL9OA' );
define( 'LOGGED_IN_SALT',   'cOj5R/|Em(am<P`|GkJM&zAda02dM,<(ULK~=``doYxR|Z%y7<v}s][ho_Se)3E]' );
define( 'NONCE_SALT',       'D(a;ffzzdr3|(^ifvX@ P5pg`NmnWys:FCi8cStmDwq@6_ofT(]yut_dtt&_~dFY' );

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
