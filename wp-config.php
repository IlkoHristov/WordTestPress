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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'dK+ZV28s8P]-X,qd!5U>0T-jxL$:{,ZewnmK`u!gGc3mYmvr|gr%WS@L2l}^u[ O' );
define( 'SECURE_AUTH_KEY',  'l?pes?I$#pUmf*E,7&@x:ktHB4s`rJnO4DQW72GPj9}WnjE~+>T%9mO3L5|_Pam+' );
define( 'LOGGED_IN_KEY',    'O=}$;)~g6h;Y+IeX8$K+g%u(Z.6AR2$vxLj>!o%B(j?q2#ya 1+(@Q$YJA.@7D+!' );
define( 'NONCE_KEY',        'zDrze=kj#wChzX&k1d_$/mJx]<YU`5z5jK2JZoB8H$1x^k)9?F:3y<H7+73-o?y`' );
define( 'AUTH_SALT',        '&@&,l,=h[9QGRp(Mtvm1uxs(cO7=)o|%C8b2s.^QTNR9bI2b~/4|BL1A)!|Bs1J#' );
define( 'SECURE_AUTH_SALT', 'M&wFXI[2Af>3xn^T9RR1i1KzQasYu29&cN3u8(MQ |FI7=Qx`8@{,se*a.uw$u3:' );
define( 'LOGGED_IN_SALT',   '7nqu<T=UgEE:N]K`7hl;*F&[u|}h$@7m3={4 <=[SPVWu+t&T6!Yw)R@PQWo!vAA' );
define( 'NONCE_SALT',       'okj-~cEpabcja0Ck~hKN},A6IC#m}XKr=&bKa>C>&Vw~pUPu3Jt6aS30O`jCy0{+' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
