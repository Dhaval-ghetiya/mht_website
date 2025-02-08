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
define( 'DB_NAME', 'mht_bd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'g[R[T$0EnK(LX!dF#D~iw,I&-7u+-l1+c7Vbaz9/d4CJD)F|?dxFnqRZ2O~q+-hZ');
define('SECURE_AUTH_KEY',  '*jTiH|;o2lE/fM)+N [L:w 46B[A2G;qNi.u%sg=O/a88l_6~Swdb+?MZ*D$]F<[');
define('LOGGED_IN_KEY',    '%EW{R)=eWu?=4Uymqp Tb#Jv-dH-@l5=;n:8}+qP-g3)sN(u()?_E!(LE-IU:rmi');
define('NONCE_KEY',        'Y2cVC|.Vv@@#iY,9_*{W{$z_{3f&9|1+l,fP-bf<}N,MNr32+IPC1&FmAIa4}>|<');
define('AUTH_SALT',        'TCWAeCIMaqF6s/&7t7AO$UhN6$Q~7?.8,p0,AIyDrH,`uR[K0_x;E=x/Ktb5oV2h');
define('SECURE_AUTH_SALT', 'JqcC|nJfrEAaK;|VE;f}x$FW3%}O}=-uW59[ZC|AxVaX%ckB|l?wU!5`*[QfUe+o');
define('LOGGED_IN_SALT',   'qQz/F)ON/8uP;^,{UF1&=0h7f2&5bV|rT[07xS6)~]}q^G38z$sJ+ZQg]Qbys*(Q');
define('NONCE_SALT',       'V6U4YPa5z`4+Z?k,7s8sB{g!k0`noaF2h+w:~2}Wyo_>XFi(^a+=t,HR,,4aFyR|');

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
