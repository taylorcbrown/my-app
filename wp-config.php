<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'my-app');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'u%-D6Db5M/r$eK>p{%X8e{U,GV7:^1zzam`Xyl/dNlQW5jU9$MhNBHV$%E%b#-Y-');
define('SECURE_AUTH_KEY',  ' ]f(4+w`Q`}dBE$.U$rZHCc.uSK/Q@=N=?eV;,uIUm7[VyYcPG<fgI5zacT(:QB&');
define('LOGGED_IN_KEY',    'nGV@+j7vNiFmG>wIvRi;dWMA48Y1]{@:W`j/5bI$1e;4mVYO3mc|c7734r}]i.[9');
define('NONCE_KEY',        'E3Y>6)4wtZ^TXIZV-<5JPuc^HjbD`cKVI?<7CkK#3zx!pOl)^ZF,YY(&8iT9TsT8');
define('AUTH_SALT',        '*(>Tz7Ik&wE:`ZXo_usn|~,3yY;|Vk`@1LYLDpU1l`XJ}E1suUYe03.:?%$CJ*<|');
define('SECURE_AUTH_SALT', 'ZL+p:17wZTkU4<hg0!hjjvt-XTWn%0XZ-a,xtb,bAFd9+^>FN0#*1V7?}k>cc$f%');
define('LOGGED_IN_SALT',   'kONPmM o!mAw^t-M6 oa~Y@+8QP?syX;:o*L.*.;#GAB&P@b=_%>vDY]* ^hOcDz');
define('NONCE_SALT',       'TNajSr]G#yP7<F%I%!]`>{S6I8adPtKY)Q*^M)f@x7x,xZPnBYrvF.HGfchn&i5Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
