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
if (isset($_SERVER["DATABASE_URL"])) {
 $db = parse_url($_SERVER["DATABASE_URL"]);
 define("DB_NAME", trim($db["path"],"/"));
 define("DB_USER", $db["user"]);
 define("DB_PASSWORD", $db["pass"]);
 define("DB_HOST", $db["host"]);
}
else {
 die("Your heroku DATABASE_URL does not appear to be correctly specified.");
}
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gMjU9+#(WSK~RcTWx=|{`(?yNxUdqTTCjbqhn=l-vg,_E`39;-;-$yRN%d;r_FcL');
define('SECURE_AUTH_KEY',  'R[G.v1q-o9^v<S&/_wCH>X34n+,$KHYeWOJ+Voz5EWOL;fCJAZ(qx||*xSs[8EnW');
define('LOGGED_IN_KEY',    'T<]iK] 607`x%ET{0H|puraXoc#y|o~k3$T+v+nF}y:.0@X>V6DJrJRS.-lDT sF');
define('NONCE_KEY',        '`j]1RPl4:I!uQX(>)BM};q;P[+C{@2|tE/It1xf.]vJEi0/W}LLczTLkN$e*fA$-');
define('AUTH_SALT',        'X<@Rr:<6+E@fhPA`2<jFDJBZP EOQG=HMJqNhY3AEj`Z5Nz+eZ$[?(qNAfap98q0');
define('SECURE_AUTH_SALT', 'v?j%au|9|I|q_2&xYXPEmG43Kl[h4(I*R0Dzt4* PEzCJH&Un/P*PW-:9]&!)AX4');
define('LOGGED_IN_SALT',   '#XxaTLO_^aZ-Dj?T?EZm;-Eps0<1]b`=h[ak@`/4l{W  MyEv[Le;T^Qa/dN]$Jx');
define('NONCE_SALT',       ']`:$<m7|WK}0!V;@at6It+zl3F:Zso9)?I4[;[8IvF==`*ACr#Ll!Z_Az~6d*[>0');

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

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] );

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
