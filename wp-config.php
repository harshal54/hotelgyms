<?php
define('WP_CACHE', true); // Added by WP Rocket
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
 #change site url
//  define('WP_HOME','http://localhost/chainstoreguide/');
//  define('WP_SITEURL','http://localhost/chainstoreguide/');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hotelgyms');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V},a+Pmp_NUd0bv_U<YE+UONv~>K@q@Af!|#z,aN`7%HJ[-pIX}|P.!7HOmbja#Z');
define('SECURE_AUTH_KEY',  'cjnE=%V:You.xE8dt|?ceyVZ5?x`wx{)%-L?S9;KGJREe9GTA#f]a#A;mdR ?D1A');
define('LOGGED_IN_KEY',    'rHN4Sk|QdNe8wf?`l$2&{K9gBx$>!U2s?E]}7Y(B]u}oXE)l:*1*!MKoW! XI^$+');
define('NONCE_KEY',        '!H=>n8*Vx//a&.p[??)?N+=Hk^l=A-.lCL6;OxV&)V 65DI;njD8*-/[He,l;{7Z');
define('AUTH_SALT',        'tUmW_`i[_vUpr56Tq jbJz;LQdEVDY%z#/3!cQ(v$pa8v.Ct1!Vkwh84<+Q8=:ni');
define('SECURE_AUTH_SALT', '7(y.AWn:Fd7;mWor!i&]}(j~O|#4/SPa%{%AR[3[BVi%y8*:|e8 Y-Soj|oeEUp)');
define('LOGGED_IN_SALT',   'FK5TE;S:Q&yaeI-a1CL9(HL5:>Y8dzKx[qi=Hh(<_vGWo0QJy|VN/J!yPp&xkl@;');
define('NONCE_SALT',       ' .X},U+!9ef325Xr6? PPmbtorAQ11<P`IlO2kcJCzTp6~(;hE?m.-GuJH2zpSG{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bc_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
