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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'AOiCz2 )yvlo7;19weT6>:2{AS&2Z`$QH1Kl)NY1Z2pMb,(71,z~lh.:,-)yscPx' );
define( 'SECURE_AUTH_KEY',  '%?I!;I`!X(HW.pm{HVbw:*~o(ZoAk6Z5?wlw}gF[3]L&`?M^iH)i{krxu9y66ur}' );
define( 'LOGGED_IN_KEY',    'obaZ^X`0svf|{Bz?~}TKV;28@=w|Y5bgeQ[,Q6r~Y>#W-H5JB?rV>v+F{3$Wjizi' );
define( 'NONCE_KEY',        'zW_S]rFqHq#g+@T7Zg^2y-Y`i7LN:;GJ8;@4gVeg=<pA.E_#ekutL,M,bjlm>*(Z' );
define( 'AUTH_SALT',        '+YR[Zc{&-Km#ku$0P[6}A0CsFs/^96N0>4*QQCSfzyC@A<XuZZBJc`h/m(w_nh;#' );
define( 'SECURE_AUTH_SALT', 'o7-#,E7zUG]Fram;~uTRo<u:naU}^bQ.|x=]pX@M_Km34,79-?;0_!hpL?@^UPKZ' );
define( 'LOGGED_IN_SALT',   '#jM}4vP=BT:T r Lp%<b^#O)!+FT[& Qk~M0rvGrT^eTN%lN_ H/PH>6>7Id*82r' );
define( 'NONCE_SALT',       '!5}a[+r6o,V:pT_9Hd fP9 z$CT.bZN}>%2}/_xOb4Jkg87irR4uPt60X(~;uyrA' );

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
define('FS_METHOD','direct');
