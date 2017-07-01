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
define('DB_NAME', 'wordpress-hygge');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6~>~q|N5vxl3PpL%f,Lu%o{i 4$3zuww:&Hx_yFo0CB6y7|zrk1C4A5F[_yd^Exv');
define('SECURE_AUTH_KEY',  'I;{HH7V?x)<YB8mi1*G:WWV.j3@sC-(V=99aTd/3%ik^N=/uK>|O3KojQG;W<<0v');
define('LOGGED_IN_KEY',    'hx?LnXlA1r~7yyfE{R6[,_OudYs=YWrr>QlAgc~WZ*%!&vx?_cVG|../&)b8239H');
define('NONCE_KEY',        '[,C]G$Qgj L{u+ceV&. 6okzuJ;c-R_xrvAViQ-R:sR6}D,i:|8Q@:F7)rtEb]{:');
define('AUTH_SALT',        '(R=f!6FS:mCP,P1`fHxarzbuvk$x1giX5^wf6&O`[:AWWtj;1} 89o[*ud+?FLFh');
define('SECURE_AUTH_SALT', 'Sav1=;9_PPq8zh]7L|~>K]Ea&dE1W;Y#UW1DC{E^RTaA<-gB<s}fJ8u)H baVCIP');
define('LOGGED_IN_SALT',   '|_=9T;ji=NH,saZ8`N6_K@U?6YTr~y@ oQ74H(2ygQZ7>#EItzwXb.xPFf]}h9k+');
define('NONCE_SALT',       'm2u<>,v+`15B3sl`$r)}g${>BKXM[_kA9!ZT=:%Zj[V)A{0S!-qKD5d1;EE$Oosv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
