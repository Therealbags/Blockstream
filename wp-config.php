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
define( 'DB_NAME', 'Blockstream' );

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
define( 'AUTH_KEY',         'w49M|Q&,C~Vy1.%PWwhUCpJJ=s;zR>~yY2T.+^/?2[06}>Z%cr(2*]2/)X@iN1:s' );
define( 'SECURE_AUTH_KEY',  'ac<L@aQe>=V2K.j0AdQopFU3l56zSLUjMEY#L}1XOs8:P+y?^hc;)HJ~]0Susjrm' );
define( 'LOGGED_IN_KEY',    'JAU*NU.KT`w*RM}k>rQP;ySa} hL9JZhW}!x>l>/|2[U4^w.j24G#]5vSE}UUO08' );
define( 'NONCE_KEY',        '>dQU#!kR]T!ni3&>7X[S2N^z&6N<fVhmdz}OhzaMkCDkAz<S}bYe9%{pNpqqZ$HP' );
define( 'AUTH_SALT',        '/j2Md+^AG.k ePUs/dD61ITfUL`%ENKqQHCisijpk:+X8t+EoZ+gu6iW4zzKr@SK' );
define( 'SECURE_AUTH_SALT', '0Wa7TIee2 {DR~`Z3-WEi&Kz`F{UUP[q67 Vb*[bEL`XK$?CE5lV{Uoby2b^z#NK' );
define( 'LOGGED_IN_SALT',   '*[8+`cnSAuyU(z{i$`Ng+r <2*czo7BiQRiWU)k~bi:-QtASyd=9NiCS@ZVxmk3S' );
define( 'NONCE_SALT',       '#H|SD?+DY+%.&G/E~G6[H{+5x %&Hv*hF1j-[IUA6 s,K%!<DWnY[3i~SAHIx(Dg' );

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
