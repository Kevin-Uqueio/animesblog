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
define( 'DB_NAME', 'anime' );

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
define( 'AUTH_KEY',         'Ljq;`ZDMj!``m=HWr+Z^Y9j/Zj8rg 8r&Ns`bq?<14r_?`75.~;iY+PrfuC_V6t:' );
define( 'SECURE_AUTH_KEY',  '_vVE=X<J[c5b[Bmwj{!Y,T:ErbIZ%nRN<lBSiAQ Rs?s.|9X^c;qez)2sPTJvL!x' );
define( 'LOGGED_IN_KEY',    '63tbuTivN=s:P-=xilY-*@`({$Nj:p:Cq2g%Eef=7BBouY&w|7Rn43sjDTE]0PPh' );
define( 'NONCE_KEY',        '6$)b: UDR`lf/pr;Gx:qZ(H0BS NNv]=,(D#Hx~Y%Tf#cb{gKiMSB@cSS->cWryW' );
define( 'AUTH_SALT',        '{*Y9L&;ysFdFuD8eA1/AI9KpVy{Aazsu:X-UIL9*2xmMv-$&[X`hm[;Q+zu)b$U6' );
define( 'SECURE_AUTH_SALT', 'q/|rEfU@|Gsv[E4)*zRU<pRhGQMU+%:)kK~O2W <7U6%#O*C317i6y!qT],g9.v-' );
define( 'LOGGED_IN_SALT',   'T%p~Jhv. lyf-6?Xq1_R@%pSh?ZFBJ2Rf=|:G1_-LAVH6}TcDpg$H&mAa;+.uj4 ' );
define( 'NONCE_SALT',       'r8@<QJ@MPYlF9KHWT2WyC&fJwA,sE`mR9QtVv9yN=xcz< D5x[Q}!Y$9VlaYk+Hc' );

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
