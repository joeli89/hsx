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
define('DB_NAME', 'HSX');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'm.]hf6C-E)4rV92Dl%/`0d1-QnUpKcL3o*<%66L3j,XmkAgLc%*#:(x,Wv_jl9{@');
define('SECURE_AUTH_KEY',  ')#9&frMM*#y(05Js`)4/z(lRe#x[rKWS4-E)B}Tnq2q.30t<[zxh,X)MJ`9MCV[@');
define('LOGGED_IN_KEY',    '7$j:ClUFmQj<CxCAAhIy~,R:#0}NQ/#_~8JY/rvZJK$j2^GuNi_jaR|:Om rIdlX');
define('NONCE_KEY',        'E_V~l;)H/0t)AMziuP)|T4bgII9TR2I%yEU+FA~]Gt}3(K_t}9!SkxA6TvyJ26T@');
define('AUTH_SALT',        '.|&?@uo8H_ylmJ-H@:?(v@5u<e&t?7FOVv=/wV:uFRn$dE/6T8`j_f&TgHYh_JtR');
define('SECURE_AUTH_SALT', '/fbP;0Gfk![|f#4u 9EGJ5WE-Gd_wlHlJnc4LIdT}YL}HEOQNENa}J!#g^]~sBBY');
define('LOGGED_IN_SALT',   '8jjhdO{I.CNF0TCUjU}kafRu;mL>8lu]y+n6iPfW8:7@WN=%dp;brRdQF.OV~=^g');
define('NONCE_SALT',       'M}F_mdabm+Xgr#m*opw*9|Lu>>1)i@9_&lM5QoM>OU%lk{: ,b!&}%CX&hfs8[II');

/**#@-*/

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
