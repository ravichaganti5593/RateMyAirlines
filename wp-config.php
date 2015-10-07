<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home4/ravbhav/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
/** The name of the database for WordPress */
define('DB_NAME', 'ravbhav_wrdp1');

/** MySQL database username */
define('DB_USER', 'ravbhav_wrdp1');

/** MySQL database password */
define('DB_PASSWORD', 'S3tZBlfIFrJyXGhh');

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
define('AUTH_KEY',         'QHN(612Nnh)2g4|ilX-/^zcALt!XOzL\`@;>oHe(NZMi-$9:<XMp$9Zu/L_1S2>x0NXa');
define('SECURE_AUTH_KEY',  'g!iv>ZI0#:>u4X*G1=D(yJ1?yN((0d|gIk=26L8BCZpRqFN/8wzvw=es|*ShS9gwVj(8dxhW3/9J');
define('LOGGED_IN_KEY',    'QWlBCP?q4ZU7T@q?wo=_XOB/>d!r0#\`!tn2eSw7|FYBE=6OkxK0GX@ZK5LI~Lt0pmI5\`PrMfB0=@_xHDx(N4F*CmGW$x');
define('NONCE_KEY',        'ceYbQL|=?Y/Fz>Rol2~NW0BYc~llW6F6ytEb5mIOHxHL0)s=*MLBT7R!\`N(:S0rkz/Y');
define('AUTH_SALT',        'qKGxte!5x*Df-wOGSa9>WQx?^2N?12Y#WYmA5)jr7:<vv|GW(5C$F2nrLZB0O_OhyQCewJ');
define('SECURE_AUTH_SALT', 'gT^BD?ots=5fi$=I!y5<#V4;T5?Jch0L<fjYy?1r0PGlOJjgJb9sOuSdm8vE?BstwPp~');
define('LOGGED_IN_SALT',   'i3jRy=wO9ohw7)-qX$@(hYNbzGvS:cNj3hL>:LNW\`\`v>b6#xlD:C(sO8aonCPdJmB9edBCeJ>v');
define('NONCE_SALT',       'PQyk2!IRz;*8g~s0md4ADX!o6Ew(wMuV=Lq;38NPCmqejoFJ7qfecUF/Xxen/nk?g3l^9MCGOA(w4#gnAZ?pE');


/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
