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
define( 'DB_NAME', 'wp_circuitcoaching' );

/** MySQL database username */
define( 'DB_USER', 'jlbokass' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dabok77' );

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
define( 'AUTH_KEY',         'XM9?I4gxbtU0/;g[WUdsHa[`w13N+^0@5^+k<]58#~R9 3S*g:O}9>`e!v$_OJFg' );
define( 'SECURE_AUTH_KEY',  'TraxQ0SFo?uq-~Z@zHv6z&`,Lw#*$-)[.j5,f}vvHl9 =nMnRmo=*&P0%[GLDTxv' );
define( 'LOGGED_IN_KEY',    '4iq79(qs~^FQsO7R4n7|q6d2yO8S3CudSk)]FZ$!pq $mFG7{kgmn=~G4s3q=:L2' );
define( 'NONCE_KEY',        'odNa<MGyTSHVEv~oMdu3Gg6(6z>4/Oftqmhos`?`x5|L:$RV`_ 1V-O{X ?tAuZM' );
define( 'AUTH_SALT',        ' g<BjGWqi?2rg;|j,-P5 q+Y-}sqUG[+Nztv|oEa>VzKBXhPk#AXmuK.6@@iOEp,' );
define( 'SECURE_AUTH_SALT', 'Dy[@oMe0Z|# eJRy39:Uf:+LZ%_P`m?oU+Y=FfkGm3O`.HbPj6|!@6:13&E,@{{l' );
define( 'LOGGED_IN_SALT',   '}<XSI^D*t$474Zy_XrN>1au-6uGi0SKubCG*W/zL[#P;*c(OD}:_E9|3c7KBRQ*0' );
define( 'NONCE_SALT',       '&a%1zJP&.YE[_mO^~_aR%1b~K,~{UL8w)w~EH]ZV9JOiqamSXGX`DHt*xy) #7:-' );

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
