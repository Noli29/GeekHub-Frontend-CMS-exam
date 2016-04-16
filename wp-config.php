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
define('DB_NAME', 'wordpress_2');

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
define('AUTH_KEY',         'Bo(`-b b8@+5[w9b~M~qV]R)`e#l=eu-On@BK;k/?7y_f?VJR/&=Aud|9b(+`LFE');
define('SECURE_AUTH_KEY',  'IwVd&M|lY!jgcs.ncH1($YuG|^8X+,NsCHVdUaHxT/n,!wVjZ?4 erHAIW&e9d4B');
define('LOGGED_IN_KEY',    'E,9j^EiId0oS?.32f(RfzbF7|4C> ~5/3^%@UF3(BXmg(_p0&F[+m^p7KQXHC>T1');
define('NONCE_KEY',        'zYq`93K]EG!8cUbl`|4_M9I4sPAo2Az+L<&%VR94TY}$7r ~I#0)@qvb0@;F>l)v');
define('AUTH_SALT',        'pSXQp|!~&4uyNdZbsJQIKg9uCR/+{ rg4a+dOpKXJ)u~i!}Hq,Xt2BQj!&rbx.E|');
define('SECURE_AUTH_SALT', 'yd:Uhx0o6?t/;7|>m4!W P:+O50mH,dQZ,-|NDMH3{<@d1fF<VnI62%o^6uu!=mU');
define('LOGGED_IN_SALT',   '|(<,-eZUZZWv1K/>xn/b$%W/>XB^q;flnHC}SNZe[jR4]oM<c*gC4@B6%d==f~`H');
define('NONCE_SALT',       '`-@k1Sc(g4rax|NH^ar+:0N2G#;O?fW;e_Lg{!`lmD|CX8|{2xo?S83x/0gX_:LH');

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

