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
define( 'DB_NAME', 'fneziqmy_word' );

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
define( 'AUTH_KEY',         ' rg+9(fill~_-iJr7Y51&%H?MM3-K a]k-; >M1}Yp(aG^~mR1SmQ~<,)mOD[Y1b' );
define( 'SECURE_AUTH_KEY',  'w<%VB0Urmt/JSN]kS42-Pjt{e_)#f@<E39[0Y}2G7C2aGz8%:p}`:N{Y_das`e: ' );
define( 'LOGGED_IN_KEY',    'g9gzi0E`|HhKv{V#)]3njcBeT4oF!5)7I.*Z#*wcZl+K]BBL;{LC.S-]^U 7UJnW' );
define( 'NONCE_KEY',        'T@&gT=xq]Pt&Q!!}wDrv@^(kq>2w3/Orf-*1m40,{KPZ.nlx$DhI,udwS<JBSiIs' );
define( 'AUTH_SALT',        'bJ`S`&2UfjQ|~hBZ{1~j{-O6qL8o6;?IS)%O}v%U~|u|dbPss(hOdnx@F7gfz/AL' );
define( 'SECURE_AUTH_SALT', 'j^cIokXWtz^Kq8E1>(Pv4rAbu*Xo@<0tT&[-G<,C+yO1<Em{W~LD+BV(O#K}L[E$' );
define( 'LOGGED_IN_SALT',   'c#[sjE0a{M(;h3XA!EEwYgqL#x@0X&4CVIkkjOpU$?afuZ9E}<&KAgUO~C4=e9m<' );
define( 'NONCE_SALT',       'jg$vD?HD/6-YyBG3H~LgM)M@Zq{wQ^UyqyQ(:vYN+t07rE|FZU!P)G]WG_hx*NHm' );

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
