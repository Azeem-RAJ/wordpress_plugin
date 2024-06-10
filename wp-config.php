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
define( 'DB_NAME', 'plugin_crm' );

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
define( 'AUTH_KEY',         'JWi!^Cxv.x4OqGq(fy;<4^u5krWD, y6E.! 36 [Zq@5w.2v K; CgvPIj/CDK;S' );
define( 'SECURE_AUTH_KEY',  '@P@nM!5>/T(&R0;!#id~?<:vy#99P rSD,>J%MT0E3i5]{9Q].|ltsjD<U=MY$!>' );
define( 'LOGGED_IN_KEY',    'ET,Y(:atH(OEl,(mL9lIxXEw.7{TJ OJMX{K7:Iu!S1M6,(Q4!QP=pi>;Qa}7g0<' );
define( 'NONCE_KEY',        'zoy5vSjDE6#?IhVgf?&&E--6j#l>eMR/`WfP]V<ND)/$,kK,vw~NtS!QM.<%R+Kd' );
define( 'AUTH_SALT',        '4KZ$`ekOIgEU?Hjds~.R/c?=jWMCg8A78%..H}CD$>u$_-Jw8-^W/%6#vZ&)dN2S' );
define( 'SECURE_AUTH_SALT', 'd>,Q4X&EZs.&H`xP~ CR5DW1P#&?7o<z/Y<$j+RgFiE7a@&O6[w3X9v)?PyqL^hu' );
define( 'LOGGED_IN_SALT',   'iV#om}oOn?fYev*wzD92o;6#<AN<n;mN}B$hN=U[3f68@A:G`(mpSsDa8P`1tQ~L' );
define( 'NONCE_SALT',       '5[-^p16Js7Qcxeo38jF$eR`UP_H?yKeBUXEn.]UjI?A`/Va{Kd{m!ht*`zj#Zu$u' );

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
