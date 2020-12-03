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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'TI:zLb^r{/I`%4`5X=]!&o$P}*ieZA[hH@/O!Ea+o$+cW~_NhDujYM1%.%_tp<lO' );
define( 'SECURE_AUTH_KEY',  'XmH$xQr]<+/`JX#>eC8X~YNy=P_cC4.Mi.ua@:LAZ+7TF 16q3g!./xuLr>*(>DQ' );
define( 'LOGGED_IN_KEY',    'm]OWp/%KD+gKH;m$zwwRJ:[wN$}}gK7[R%A[hsuPYxZ`Arq2_VrMk*<y3Eq47CY}' );
define( 'NONCE_KEY',        '*k4QBl5UoA@~A_J3XE^(}lBnO(Y#}?<d@Hbe=6`1fAZ#WKL!__{Th#.QK8-_Em<c' );
define( 'AUTH_SALT',        'EZ| ~_Rm]ZGKd!`+(5eub%<31v9[izjt!FMAZfZQ~M.k,aT.HA]>95iv;`iY^x(v' );
define( 'SECURE_AUTH_SALT', '#QQsF5Gho-)*_M HS)[C,Tj;3ev+$o4`9<}fciot#C,hYV>jWOz,QRgA56X/S8[j' );
define( 'LOGGED_IN_SALT',   'v;;Q+O4,X!FBSS]u+]To=HXZQG!Ev.ez9B}14^yi]C ;qT3pb^_ZxsFX]=IGqfA9' );
define( 'NONCE_SALT',       '3Un3T@5{bHnTnC(gf~k}2isMaLjY].R!9 ^;/}#FU^S>RLuQ7,kAx9MNNT/t<~:D' );

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
