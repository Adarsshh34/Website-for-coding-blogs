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
define( 'DB_NAME', 'word' );

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
define( 'AUTH_KEY',         'l?n835 I=;z1^e=0ctax)dxE}%O{N^ud,OXtW<lj:J(Ygh=IeEY},A!UlmuC,UUa' );
define( 'SECURE_AUTH_KEY',  'a_/x1cAxcjr6h6kdOI+l3v.>Mqvz^$gF_UwlhJbQsK1spgRF<2pYD]KL5ry4pGW}' );
define( 'LOGGED_IN_KEY',    '244-/U#lW5DED~R/2]J+Iu-w;l9QplD21K`4CG&+f9>i8ITzNnC0hW[~&?)9sZ&@' );
define( 'NONCE_KEY',        'fiL5Yo413?~2+;3y2iHv%ndg0oN~j6TF~yc.S[iTx6xmZgeSnk/<~.kml0W.ZUkl' );
define( 'AUTH_SALT',        'IO`g-ar>Iio%}+>Upig=BE%ldv_CH^sEl[GnQ7u@]Ls<Gw *L(YCeCTSO4RAeA(I' );
define( 'SECURE_AUTH_SALT', '0OkR-XP91*]!2odI4AAI5icdvCK^*esPD?m4,uZ/,m?wn^6*;9~+@4?#kae]>x4L' );
define( 'LOGGED_IN_SALT',   'gYe8.,HNZ[h iT6=kCA4Ty7S%}544?<wH>3*pY[Yt@=z:AM5O,bn<,bJ3&/0z}_H' );
define( 'NONCE_SALT',       'zPkeqg5gG;e>R19ycIx4_CXw,IJ~(rRTa(w]:83W8g=D5No>Nt-P*6{_3v J)f4)' );

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
