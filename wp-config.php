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
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         '3g6t0|(=Bqjp@R}QRl>0Wb+xQJ`/l&x^oT;O-v$[E4MM*zv_Y5ethH%WD_)J&(^J' );
define( 'SECURE_AUTH_KEY',  'qa-p%-3ES^BC[g4P$l!zSv}]@Wz{;Pu$] @=)jR7}K<e>T{0`ENFoSw< $FuAk8z' );
define( 'LOGGED_IN_KEY',    'TBHn.p8BV^#V6VGnX2}d6`1)[[w &coH}B(PL8hNJfY|8U=!wM@[@5Y7gVJl&K*g' );
define( 'NONCE_KEY',        'ccw[Ei[^7qYWQ0EgY/CwCdl%(@Nz;sz~MCY+GuC~#7Q.<gO65Wv-gF97t_<3f{n=' );
define( 'AUTH_SALT',        'Byn,d]Z}$8f5S*V{`<wHE{q]!_qyOVC0FT6O&bE@*aKT]Jz4k3l.~{;a82Ii6PO8' );
define( 'SECURE_AUTH_SALT', 'c^?U>h+n:{vrT2j[m))LZx Mv^wP70[%K kS0V*[o,&mS$[0T-)hW%9L75LP]s4b' );
define( 'LOGGED_IN_SALT',   '!CS%~ D5p=&48s&[G&@[myl(/YE![*1WH^9FVb 82=d2]2LfwiLMVC&6LX@9-m9D' );
define( 'NONCE_SALT',       'yGyy;Mg3i-$XX~ 0U=hhLdW{$B8l@Mu}PESJ/Sp:yKPbZ#*0eGvpWI$)D8+OA$+%' );

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
