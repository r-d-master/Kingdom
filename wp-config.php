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

define('WP_HOME','http://anilahealthcare.co.uk');
define('WP_SITEURL','http://anilahealthcare.co.uk');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tcss');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'gsjha@978290499');

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
define('AUTH_KEY',         '3kQ!c:+2*g%~8jtMNs_lK?-lNBa|NH=x{Qr=OkF9+[7cW!B52^6E|2>fry|KXSy[');
define('SECURE_AUTH_KEY',  '[)y|^L6YPTgRb)LXB[lsLa%B4uU`q).}Obs[|}<N/o#|~,nuE|K$<tSX%NHUivIT');
define('LOGGED_IN_KEY',    '86lV3sIz [w{2<<8e#8E6@T%BE+HV|8WJIsb-aOT;p`e$Y2+`3+|3]gMksaafLt*');
define('NONCE_KEY',        'oIl0uO}4#p.4+HCQS:AnzR?UJu$:1RQs2<hZ Bg^?3SP8,C+e7K?kaUqq5~{R <$');
define('AUTH_SALT',        'kuS_($-,G8K-|g2FuH@i@:i=*{|7t%/_-)BFnbyNhMUs!3+b=;c/Erw:90jUkZdR');
define('SECURE_AUTH_SALT', ',r;UP@^Rlj-#5URF|tJ0RKSZ;{N)1owz7[.d!2X^Gg,tFkq@>Y7qmUS&Z6+M/[c|');
define('LOGGED_IN_SALT',   'U2:0GAtIN}IXQKk/SkoFDvna(I#3DEuIGEFKaPNYZK80aS{b[euSj@xGx|iXR)20');
define('NONCE_SALT',       'ZVm,Aym=IbO~P<uOG U~=En:hYzy[FkqgN5|i)R$)KqO??+Op_i?b]6w3-rje&!c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tcss_';

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
