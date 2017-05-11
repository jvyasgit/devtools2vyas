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
define('DB_NAME', 'devtools2vyas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '&5Ha+TS7)^ffnw8E|)*g~(^PPPJI_CM~p%*8n)o7^;E^,Nr;sqFe4I8QEo?C9a2t');
define('SECURE_AUTH_KEY',  '#1PXMqY9jj7fV%r4~0kuh1-A^-4Kw65:iR!oBE5Vi(f:Z<5&7vqf?yIooZD_&P(p');
define('LOGGED_IN_KEY',    '.zWI:rk4xK$gz{$?)vPFBrwKZk9HruF7_g4+*s1i@C]Zf&bHAH$qR|c&k?i(=b(R');
define('NONCE_KEY',        'Kf4Xxs59~ZAo!F<zZ?vH+#k^Ol@5a*!Uf`2 oGfAo,)Ct<^Ktu^$g*HTh- ;d$G-');
define('AUTH_SALT',        'o/=|GKy]9Cw%3lz(sW~N/w$FkQg1OpfSI}4%SBP|_#)Y#;5id-Q$&=&jKt7|BODH');
define('SECURE_AUTH_SALT', ' v{EX=[6I]-@mMg08UuPjXEoMD$w7Whk{(#;w:.:*@<2}oM<*Nvwn*>0fN,M03JA');
define('LOGGED_IN_SALT',   'f)F&vu<7k[nW^CR9E$B#nkma(+rOShu.Oj:cG%y{~8gHg~I3(N(G]Y^^,xyT+]~O');
define('NONCE_SALT',       'Dt,tCJ~oK3^/.``rWRvxJG@`6 SB!Dk},|4O#&]oWt@;ID*VQ2?;>=rV;hEiwLp;');

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
