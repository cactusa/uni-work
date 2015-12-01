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
define('DB_NAME', 'web244-a-word-79');

/** MySQL database username */
define('DB_USER', 'web244-a-word-79');

/** MySQL database password */
define('DB_PASSWORD', 'J9mYs!syF');

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
define('AUTH_KEY',        'JWg+M?jpEPV6{7yVSP*-YWqNe%I]wnGAOSO&T3A%?#=vOedNX3=E*!3S4%9baM39');
define('SECURE_AUTH_KEY', '<[H55Dav@@%$XR{guKZurR/s2|?!Vsx)w+>[8Tr7mpZmBeB#,7MD++ykhNU$Fl;?');
define('LOGGED_IN_KEY',   ' 1] lGUtk$:feOix}b_+_i9a%JV=B0VKIhwWbD8&*QM0CL{Ry;BzFP[ezTJHC#aH');
define('NONCE_KEY',       'a5n1WZ@$^O`7Q-;2]wGJm0;`C.{u=uXEMp$)U=%B.(G^aZApN+E3%/4&1,=GTF|!');
define('AUTH_SALT',        '/<Z0fJ73OZ2[Vl2&&wkQ4Q=;|2}kSx$.PI#vqP#.B74]pHcV4G2F1X:<2;6|%xeN');
define('SECURE_AUTH_SALT', 'pUxBn*9x1FX+Y|@S>ur1m+81yu[Rp|r&i6[(H@lv)-(t.dh}(-A]-[E33ix#7z)F');
define('LOGGED_IN_SALT',   ',b^qhQa0fMyH|c8pZ^zLo*$Y7YACFyn-#7-UXWSC=dj#Z9rcRUd(-=~K8HP5?15N');
define('NONCE_SALT',       '-6)G-VBkJE.=p0VjBW9>}m96 lFQ?>Br)g?GF_I?noM6R{QqK,EepR^i&g[BOEi]');

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
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
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

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

