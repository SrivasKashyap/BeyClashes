<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site1' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Vizag@123' );

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
define( 'AUTH_KEY',         '][@P+U4_U*6r*ruufD(eI=3<u*Pr&qG;)&hY_U/&a5(d6w/$UlF9yr8df0d<3MZD' );
define( 'SECURE_AUTH_KEY',  'ZKDu]mCr^qS^>{obb@WQvQnm(&&0Jrgwk}b0Uo{8 {>m{ui$@{gV{wxST~@cV;/P' );
define( 'LOGGED_IN_KEY',    '{4axW+{s]k``Fr&hr~OiQBHrEZa5xNl!2ybNp267h LykBO<>h>*@q k}e9rj,-d' );
define( 'NONCE_KEY',        'BSG{c61*%t8L1_k@ZVhwy85S[G(/!+kIof,yCJr`V}5ROWZEmPjAh$$N19v:0#<N' );
define( 'AUTH_SALT',        'o?RGUoRS~Mbc0=(q6 ;r /kZSv]!rX,pDQ&YtHi.~& UQ]Rr~@_1,JTL~z{3D.$*' );
define( 'SECURE_AUTH_SALT', '9=qB[]z#Vd8^Z6s~Evc/)RX3wjV<KIPU.Sq8~ni#a#EnDi+x:.4T+FN4! ZeNkG0' );
define( 'LOGGED_IN_SALT',   'ffk}ff(@05D!SHAw3ZQ=g,@<(k^l>kMH#]3xnO}4Grr<]3ze; X+`I)jrm^_7>nn' );
define( 'NONCE_SALT',       '61.8![p+.)z@}aYd~+7WjzWH.}A;^.ym_4rGka&]Du*jy#tlQG.tVrdp=|<8E0.A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
