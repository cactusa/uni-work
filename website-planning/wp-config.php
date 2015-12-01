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
define('DB_PASSWORD', 'WH.Rerd7H');

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
define('AUTH_KEY',        '0Ns_m;yK6FF2zbiTrFjuZp[>N,62PCGj`hhRkD?q#`U#d1Q$|E>7e4V!]@LgZ*~m');
define('SECURE_AUTH_KEY', '|=G4@X/=)idt?9F3o|`?SajGu|ldv^ECD+YlO~uW7WzxRM:@Kg%?`A|1TlHQ2pC{');
define('LOGGED_IN_KEY',   'rPxzI1f@<n3*KCk?]MAi;YXiFji?kdYj$t0.EL~Q1v+;1H9|zkwu!El{H!>,{;$I');
define('NONCE_KEY',       '&akO-Lv7+2I$Yx)c1Hb*ooc)Yrjj+JIFx=^ZD_8`@E?_KYpHm7-y2*./nKa!AO`b');
define('AUTH_SALT',        'tXif/xU[HKJ(sMH`>g_KLj-`ctaLBSt#-qlY;V<?7&jm3!**9oW0yRD([JQH:8u+');
define('SECURE_AUTH_SALT', '0LRALSbvWSM1t*|h+?R5z~/ZT?rE}jeu-m4dGSM&!6ab4j+r`iSa+/-Os?SnC[(i');
define('LOGGED_IN_SALT',   'SGXT 4&%R`LK-Mic~H+k`i> }v~^dFFf48FV~,D~;@MZI%B!R.b>09A4ys=#mLtd');
define('NONCE_SALT',       '=Wc6!*^#nYDArs-&xVw{@o.nWo9F|kvtAS=ALiP-qON cDR2A7|HV|c-[J+-~D|j');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
