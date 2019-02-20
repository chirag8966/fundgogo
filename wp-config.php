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
define('DB_NAME', 'fundgogo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '.5s,q)|g,2/-YE6 &q]#wS,<~u3&Lx*xR~*g]/=u/G5n;tVK0P{sLvL-G8_4*&Gm');
define('SECURE_AUTH_KEY',  '+_+Z8[:(H5W(4wrdIW 6o6]J9QpGQU2{3[F#}Mwc[A768GehYhxs2d>*CuHA +eN');
define('LOGGED_IN_KEY',    '`PcvzhC:^^9)O+n)F$(b6y>(T#]UMOCcsu#,cjO^g@:mtJ-A0IeY.ODx^6DL8pi_');
define('NONCE_KEY',        ']A+K=Y]35,Sb@-@+ pL)I3+c=q]`|5fA%)P0Kx2.>VK;m[OZ^U--Cknl^/[ ](2t');
define('AUTH_SALT',        ':(j5+Tw/9Z|<h8r^3x2E$~QB=A-j^`2z&^ YNL0.e}2MZpF&+<u#_WsGxROAgL)x');
define('SECURE_AUTH_SALT', 'T2CX SM-v(JDPWm.d+dRn*DJ61A=u!YJ1&]ET?5q`@P846M:/7B]IZbKJpNGu@si');
define('LOGGED_IN_SALT',   'sJY[m/w`oF Gx6y;dvzK_FMt9f?9n!P}CwZ9k=55b:BR:O=S8/&JaI1:FyMdT1E/');
define('NONCE_SALT',       '0kcLYU^k:cgF>8<p)#vr=~Ik$?gH8?Ci)VIkC%Ye?3B@(=Y7L=GX_*ltY,@JoQhz');

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
