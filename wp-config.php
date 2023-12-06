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
define( 'DB_NAME', 'khachhang_wp_emtskin' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'd@t@base' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3316' );

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
define( 'AUTH_KEY',         'a47s&1_*<oAy>C&l>Vhg<ow=D4XQr[R^#XT7&ug p#ztMY.V*vVRMi#=!]cA-,^L' );
define( 'SECURE_AUTH_KEY',  'OhR-ls5JjPf;bc9gp$Q^%2A)nb%`6zn@m-NC+P0}oGfSF~.6Sw4.gXayWwk0uyeo' );
define( 'LOGGED_IN_KEY',    ';@5np#^{s:,>U#&AK{sgAW;9-&rgx{u&Cto;JFjx{qE%V5m1rh>O|FfzeuG^=m=e' );
define( 'NONCE_KEY',        '$e`LCgv5^j}wCk*/#b[pJSJ>=_Ns:z%mnLMO~&(azsNJ)UaD_]Vo/RCn~U@m#:j(' );
define( 'AUTH_SALT',        'Ar<;|/3yU|Q3s/=O3{bG.Sw/$V5W./V>a=|O3G@lbq:{&!(0=cf3b<.$/m Om3Y3' );
define( 'SECURE_AUTH_SALT', '7l(lnnw^oT!ARq^(M}$w3Qf*am*L?{v2@H Qrs/h#C!sztpv6Isjp|5vR|CyXCG@' );
define( 'LOGGED_IN_SALT',   '#P4c`+]G,R#0=jHI,A;HHT@],j#&7{8<?d&:E2pre<ld=fA7&r5]?A |*U[OO: b' );
define( 'NONCE_SALT',       '.znGW9X;KtAJ,^ (8eRhbTUvZI|n|~`ky$,4,>PEY4&0NH[gOd~fuLaR{fx}fd9u' );

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
