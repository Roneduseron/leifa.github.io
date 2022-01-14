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
define( 'DB_NAME', 'leifa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'lKylK+JKNXAisaTWQ3f6Ofq4E7N`+p%9TrMnG@V$cRPgxZlzWgTOqk!y)n,GFs#.' );
define( 'SECURE_AUTH_KEY',  'gO#&*~gH}-WS,T0m_83D@T:lEV-X#a=$gr_^ahX$BwQ*<G_)N86BB~1k>bFC`U86' );
define( 'LOGGED_IN_KEY',    's4Zq0cs]&c~)b<gt:Do;MlR7sJ##ub;N+8KV1*`z{O67:(yy/Y(&UF(Z%eRjW9*X' );
define( 'NONCE_KEY',        'rP^O>Y^6Y`SD|P|S=_1kvY#Uq|h1][|a7`Z<|2z2o?`q7YLq $e(=FI-_q9luDH7' );
define( 'AUTH_SALT',        '.|tfs!jh,|94OdP]x@,AX#FBye5R3=p<i2k&DLX+g_|X5v!xN!tN98K|,:_^;Q_D' );
define( 'SECURE_AUTH_SALT', 'OUB4&6F1n-Y* ,f96N<W>azvnl%6#$}?N1<m&K4mY&=SvfcLQvFW)w!&8`kiM[<a' );
define( 'LOGGED_IN_SALT',   's/To|0Udt-wf^}%$jdI3F2T,8uTa~bk:fZ#83k]TH!pC~}+t9HE/ZM]Wf nYVX0z' );
define( 'NONCE_SALT',       'dKR3Evpzn~uj{M_86!s,XkL/Y!LXuZ9K{:w]@LYb9X [RMk?&/Gr>e!z%u-w0QV#' );

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
