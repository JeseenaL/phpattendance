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
define( 'DB_NAME', 'temp1' );

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
define( 'AUTH_KEY',         ' 7{%GQVWnXuPCr}.];*VkS.;jbHl>CwQxSE;+ORi%K,YQzZHFE?<I@`g;DJ`4`MY' );
define( 'SECURE_AUTH_KEY',  'DJ.} ZFrN%(sdr^;&fQ.M2IF1vZz;QHZD?y&7%t_l/CL>6$G Ae8_R@)?g~akj|+' );
define( 'LOGGED_IN_KEY',    ']=fj]Yb_5n~I;CF}Mn/q(yWm>1n$^|Y01gfkUc3g,:g[4uK#v}Gp:mMWNi4P*afT' );
define( 'NONCE_KEY',        '}]{XD7`x2.@Md%}c}{B*+= //% Am0^0)_Vf~.+nh !bD%U)4d:^A&sa*PCIe6i ' );
define( 'AUTH_SALT',        'T:O!cBUzB,;:6Xl,AG.4JlKM%J{&q(0JJY1w*:HV+ H{tA:51s8LBU`s?xoio(B_' );
define( 'SECURE_AUTH_SALT', 'OECUQ_OG*P%-*hjX L(1#Z3EU/DBkQ4JaK9y|S*ZoII~x#m+OhwFH*knUVH!?KiH' );
define( 'LOGGED_IN_SALT',   '^~Y1I7]*/1#|[#!.*SC;i:kP{N@:Ikzwqn7/,x264OZ(|FsE7#%~uT4QZGCv?0i(' );
define( 'NONCE_SALT',       '(SN$mtc)GaEkkc{97kFP4G!_+*|_^qGsa~f)/W*6T`L;6L{/dVd.LpDpP=e-%F-5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'db_';

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
