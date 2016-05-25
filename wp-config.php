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
define('DB_NAME', 'vagrant');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         ' f8Hc~W|(8x}5@<=G-twu^3X>sQT<-yP/eB#}w>S7xAu((o~Jw+T-XR-2XN6X-HH');
define('SECURE_AUTH_KEY',  '#yTN{VMf(YciQa+q;>`w3BQ#TsDWotkn.h;n,Y6|z}]iZg>W[`l-m>dR[yLKFAV/');
define('LOGGED_IN_KEY',    '3+#c&uF~M66Yj*OOwaMz0e#@[z%$[M|XXc5a{`fj[c2C`S/h6gGW0Lv/Kj#~n1+c');
define('NONCE_KEY',        '{F+A%>2BG^bpL+7_bJv7ShmYC0+d9.bb0X<`97u}IodHxm7A`j4E#|K|fWIlE+KH');
define('AUTH_SALT',        'QYAecz*_}W!o+q*u2=r-01Ua,soymQgX;/T|A(8fv`fj^=B16]qa;t^x`~];bo_|');
define('SECURE_AUTH_SALT', '>+o2*2Xvqa**iP+MK9dkX2w;ri+7A7w+B QLZ^IL&[j -Ieb*+##ISTC;Z>I^Xw[');
define('LOGGED_IN_SALT',   '|MYLG1/9RAS5=?_?1+/q2s+iZ($La~}.UIZ6m$N`<#v(P^%*9C|(J]J?NO|`zIkc');
define('NONCE_SALT',       'c6i^6YURHN%5ETHFTDhWRW!@D[=[gDk}=S[}%f[P-Kf M=Dst&tT.B_#Ul6e.rLA');

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
