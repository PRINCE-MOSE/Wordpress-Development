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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'psalmist1' );

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
define( 'AUTH_KEY',         'cXeJ2LoUF?T]m0V#HuS}f#vTL{ny, >2hV%:si:9C=|4j|n9nu0}7K}HJT]PjW<a' );
define( 'SECURE_AUTH_KEY',  '8i4qb_~{Jqj9UsRtUmf6cH)7GZ+V#8v@v8I[h?@vnU6j5N6ud8)V[;l`T_VAbmYr' );
define( 'LOGGED_IN_KEY',    'z8me<QopB#>-j,PF6g:?=WuLMz DPK|.]f-c9(k!MeIYHk7mVa#rUdFeN$GAT8FQ' );
define( 'NONCE_KEY',        'Pdh}[9e.&h~a1,ms}{c:A]XfY%!=NB|x+;>C0Hm uR6TA99!fdgg+N9eh6i;yfAE' );
define( 'AUTH_SALT',        'oVh|j?`y3%B]^e^/wco^m(bOpa-3#D%,okpZO?)qAHCGs`ta/ojRMH5u[wL^2~x?' );
define( 'SECURE_AUTH_SALT', '%o*u_Y,%llwPw]}|98R9PYJ>u>QZe|.yW,@k]7}PyKDX`!iv1@3]$~fKPu72:4)[' );
define( 'LOGGED_IN_SALT',   'X%dYBtJCSqdz>;>K=FVz_$e4SQQM__E!PkC2dnZX>9aCNkn3S?73X,7N+(5k]=jc' );
define( 'NONCE_SALT',       'y_||$vY5ajW/]+Jzc9e_z=d0ii{C(6RVTx:+Y.]i}cFGK;{E>73GcX$:Beyn!e1.' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
