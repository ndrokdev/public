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
define( 'AUTH_KEY',          'RvpNNl0$3DuVpX$,~`kJgH#Ll6nhyS,BctW_ Ik~+jrE^vghZv5f45Bm (MCz9rV' );
define( 'SECURE_AUTH_KEY',   'rWF/IbAbflu<qkSq>~>mLv;`q76x[GTcfZ0bO:+-$PkN#Lu${t]6lrf1YKX[ 3KQ' );
define( 'LOGGED_IN_KEY',     '6|9NY!dsoQD0#qZkHTsr7.(:x&cPA@5Ss30&;`CKN5l&:>Xjj.Y#JP3TJxM2!_y|' );
define( 'NONCE_KEY',         '<u7$C}bfThO[JG~r&*S&_dGH+tq&@>afU)=zg:u|?Q@n*k/zbc*3kh( XaI;BNM?' );
define( 'AUTH_SALT',         ':|zq8>UZh:?TuOx:h$J.r|dcCuz>hX3xpU$:/%N$z2_V^Lib5wxW_lw0C^~[n^&G' );
define( 'SECURE_AUTH_SALT',  'Z`UUjdFvtPXF[awI6G3MB GjocA,&0=s#rrb3UTII^|i2mN^h&k Z`PO#Xxoa2;G' );
define( 'LOGGED_IN_SALT',    'S4Kj}ryad!jD/jq}%/^{(i]X?5R<XWSz|_.S-)CVRGdu,C0xRi&q2e,a(/|&!`@z' );
define( 'NONCE_SALT',        '=7,BKVhKe+p}N5cw]bzkZ]qJ&>|2W+J5Lw(9~zjOkYk6(`d_jxKJ>7EDS7L|k_YC' );
define( 'WP_CACHE_KEY_SALT', 'f7DbF?WY/Nb1Y: ;fsGL,NH_y4y0y!`br.8`r`Did:ixGbJ|Z3TVb!tKiUv|YFYY' );


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
