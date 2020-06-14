<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'biography' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8(l/40?PX&S^+c.rhF`.Y:7q+c=:XU3u.e:TlQZxGR?^oJ}n|)+qpUzZ7$:AI$c^' );
define( 'SECURE_AUTH_KEY',  ' |-V@ G;eOVHPi]KR/l+4l83K![YQX!2FWWTu|m!T}]m6Y<=5uE!-/~N6b7^!^(*' );
define( 'LOGGED_IN_KEY',    'j?UzS=kZGPvQ1pY|f|i][e#sLR.[UbpkoJ)zq!h;m@8Durpljt2{Tvx2D?t!qVwa' );
define( 'NONCE_KEY',        '.dULV1dJ=x&<v_wF<V^9s,S<O8J~YAT!z)|SWH5+aF!x3A@|)T=Ffx,u2kod`mY7' );
define( 'AUTH_SALT',        'kW-0!f@bg#w6s{&O4TdB(3}dr4d;!qq}5rjJRB6kLy4YJV.l6#dzl<`jr;2|??Zq' );
define( 'SECURE_AUTH_SALT', '4WuT01h#|),MYXC`#vB5Q!&91^Zf<RUZJtg3E-n:`U/k,eb ,TXtUH]jG- 05Rl7' );
define( 'LOGGED_IN_SALT',   'O)?B&1GIZCs6kr9UA`*Ho|6e`1/JhDL.%GkS|#Im.>#lS>:oB ==@R34zSq4cZyk' );
define( 'NONCE_SALT',       '!UMN0HV:,gY^6Gj~EjY;m3jL64BM(o Bb>`~Sb`D]:SzJ@ #.55U:y5{F[RP::P7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
