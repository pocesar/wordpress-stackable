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
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASS'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST').":".getenv('DB_PORT'));

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
define('AUTH_KEY',         'S1rfDH 1B1sk%RuNp}M5NKYy*Og)ULRjl5hF JbL&`@uN?T`G;8$!:7U<i4A4xSg');
define('SECURE_AUTH_KEY',  'dgpaQP^NCgtBfu=4KvRqciYSTGpuO2+qSk{>%:K4c;24eQczV4MoP$|,12( /QPr');
define('LOGGED_IN_KEY',    'jV~sVV2QcLa w5VJ;WLgCx+VsP$kR@q+~Kw44WdvDd|ndIUl>qxP:R(YFks--V]E');
define('NONCE_KEY',        '-F8iiG%Ja_ysz] {6*SZi4mo}2R1mQVkp8(y(}O4n6tnZ+NmBt7f>JPjaJJG]3i~');
define('AUTH_SALT',        'B@9syFe0p]F_|`O.{)5,H)o1AyH}JUKM1$3|u[(WFKLHOIy[_4omxrVej2BwDef8');
define('SECURE_AUTH_SALT', '[8d+T^u0=%f6S|5MO?|%!@1MBW:+^Dxb;V*=Vc#2eP:m!Yrr.&<HP}+k&ISqFV_O');
define('LOGGED_IN_SALT',   'Uj?dkEmU5&/EybZO/,Qwd9EFs)i#mM!~[r|zN3<qr!E9N `}|ulU<rczR`|9`D-]');
define('NONCE_SALT',       'E8FlB]Ta-(%6sx|wY^r(+D:YURDk2jl*Amu|Fyf+Mb(Y#q8gK3rd_H0_pi>Tvy-!');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FORCE_SSL_ADMIN', true);
define('FORCE_SSL_LOGIN', true);
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  $_SERVER['HTTPS']='on';
}

define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', getenv('WP_HOME'));

/** change permisssions for plugin installation */
define("FS_METHOD","direct");
define("FS_CHMOD_DIR", 0777);
define("FS_CHMOD_FILE", 0777);
