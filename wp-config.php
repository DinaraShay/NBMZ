<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'wp_nbmz' );

/** Database username */
define( 'DB_USER', 'wp_nbmz' );

/** Database password */
define( 'DB_PASSWORD', 'cMIDbErTXD' );

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
define( 'AUTH_KEY',         'zxd:)c,pn(jsn^{q3c1MG?b<Cs]S<2_-?`_7%HCx*.OS6YI{Nla4H$xs0< f$C({' );
define( 'SECURE_AUTH_KEY',  'CH~=ha^afENzn3z5^LuNiR-.=-vc`{{KQGhj?p)/O!WAU!pJ@q-].t5OG11.*NL}' );
define( 'LOGGED_IN_KEY',    '?Ai7n^Cm8_JKS`064EP8)XWLuQ&WPD&_?j/s8:X@jkc<7g)uu=z#5K~ MqesK!tV' );
define( 'NONCE_KEY',        'g2T|O|u~v91-WE,@.<Q2X<&eY7mJH}RYYVwOC/]>G:`hm/G0`!bwzJ*r2|$]*?v ' );
define( 'AUTH_SALT',        'x7*/Y@l0MsI,L4qy<s*Aom>we#se3o1QJ(CS08Me|L-Iis$}JfJHwK:-yIxeXwEH' );
define( 'SECURE_AUTH_SALT', '>HsYk)_D6Sg)Ci8+^ek$5+)Z8yQ2f% Ht!#K?fHIzA+/PPKCK@,ug)d}P(,=kOn!' );
define( 'LOGGED_IN_SALT',   'hd&N5aVx!j,xhza~l/^Yo%j=icyR!|wDkz?%2Tf{&D(6Kd&TJbz=(AHoMs}NLIKw' );
define( 'NONCE_SALT',       'R#pAn(ze;TzQfX{&|ISg7s|UR1tA#R:PJ{-eC[z&6+kKNN90{1S63J9hij>BG1DJ' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
