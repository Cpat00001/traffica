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
define( 'DB_NAME', 'exampleone' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'FjS/&UD24g*},=xJ8Ncl26/)9~u(gorl<68l]!//4+t?tZO;WBr8<.#rrOT{Tgx[' );
define( 'SECURE_AUTH_KEY',  'd,o_PBdO D`~DX78cAn*FRlZz=S5S}%]1wcK.Ie&*8mSgiV]/q4yH}:J8=W0nQT4' );
define( 'LOGGED_IN_KEY',    'e>+K<S!15`*4O33O0x@22>3-7Tw>@IX>iAe.1^%`|p%1`O3^_2pS<ZxS|8S RkL|' );
define( 'NONCE_KEY',        '99|)nJgaja8VLfF<c.AvQ&PPt,*4.kxdh[ClM#Dev+J=B@pGA)-#{^wl@I<qX*;{' );
define( 'AUTH_SALT',        'eUw<npo)3X)NLSp<gVCed8%?aWxJS3y#W#i)|E}&U,C-qLhU9^ym%3b1w]m$r<p$' );
define( 'SECURE_AUTH_SALT', 'x>/0jjoncr7vi;_7=<9n;aRc524Kx~$M]wjj*&*nkdH;#]D:9?wl|p0Yf<wye)2=' );
define( 'LOGGED_IN_SALT',   'wxV_R)[Eegi{BMOi^l,%>K{e|s;4(BRUjI*JbNKFTKc0 fhzV+]zFUSH#}g]m4y0' );
define( 'NONCE_SALT',       ',6e+W7SvH82Crv5=&Y5Y&9T{0xQqLHCgH#lXV=xPIiPs9r;_f&w(_DPHF1u_vigO' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
