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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '+Z1/`Myu1pT))-bQ<ss)OJJ%E5)~#3/G;a[[%7t5Jw[P<$On# ]3qV$j+FVJaEpF' );
define( 'SECURE_AUTH_KEY',  'f$C3&*w5Gr$EgEnp9yHc:Le2<{HZqBNduu&hZeD-(zC=Ll}X^41Dj>C2MNvPPv`e' );
define( 'LOGGED_IN_KEY',    'v|xx&&RsX5Z90c/SZclbZ*HgTV;jWKLrD5ktD$l3e#1(JAHyLxqYj.AfD)/wtj:b' );
define( 'NONCE_KEY',        'dQ]&^cktEp?c94Rm4nj44/E@TY;|=]U69[aFiyL]&(dL3d2i`AU^VT+E^mM`35Uz' );
define( 'AUTH_SALT',        '2*L8&qG;(Wm[L3YWp{_+f7=7+7cgM;STt(J]&qKS[YCZ|K5<f+yU|j,b)+GXM?t!' );
define( 'SECURE_AUTH_SALT', 'ckd:NA})]iWv[f{`+#MJ,k5V(AmvXk,(msF>xG.|Y*C-yCWqbZ;25_w=uJF7G&5J' );
define( 'LOGGED_IN_SALT',   'eXNkoR[.)l?T Pjt`(5JqeCVqj$djV]|;L>b#dJ=-qm{UyU,m^EF~kk8oyhVcZb&' );
define( 'NONCE_SALT',       '4F6U]}tqJ&|71z^;1*m]^WdzfJF~TU0&?&wIP;GTCc)j8Vx{-D_alB=b 8.<A4!x' );

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
