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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_database' );

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
define( 'AUTH_KEY',         '@S1|_vl!Ry=Ff>Jt].9oX^3Dxq%R32)-aS{+;Ih}nF:XU5SwFD)}t4KuB9rC5za;' );
define( 'SECURE_AUTH_KEY',  'J%/%VWqY<hB<F!U-n qad1@S?yR!F*ooN 2=Hb@A(yrQX|^R D[V1qg~qBAD$vY+' );
define( 'LOGGED_IN_KEY',    '?6~?QV|s58}5d-Xy=2l`uZx$az4A>_|5?V4&Am.$SQ*xVR%$qpxTdAu ~;(Zg(%;' );
define( 'NONCE_KEY',        'h^.@o.-Co1r_ZXnE!Y=e*0)LiiU!,DGFEGfiWqM>^inuR7!ZH60F4]; {]$oCa(>' );
define( 'AUTH_SALT',        '[[z@b6TC:..b0yO7#B(9 @LL>o?Y*rEL*/jClJa>V/m,P^^tF#Hdfm)%S-f74 1v' );
define( 'SECURE_AUTH_SALT', 'qn!4h1b{]0G+bi$8hM9$UO!kqvz3):z;V`3eXq;Ha[%rnl4+C.&9Lb!-LiY|:1nD' );
define( 'LOGGED_IN_SALT',   'VAB(R{szHQFsH8R}&tXi!|Og_u-VU+.IX+*wT)i#/iJVn@5]&36orlZ#u%]sb3h%' );
define( 'NONCE_SALT',       'QnA YXKLbw(:-8bm(146zX1x3KL5>mp>U7JzKex`C(2YW$SC>F}a=2CjT3#@]uBW' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
