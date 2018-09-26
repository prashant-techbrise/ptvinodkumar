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
define('DB_NAME', 'ptdhrupad');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'techbrise');

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
define('AUTH_KEY',         '_>H0wb:`bbFb-vzBgqGOVg^vIA3?E@q)rLc~nkOURWm<K)^FRG!Ry~7tJnQ++p:_');
define('SECURE_AUTH_KEY',  'g>{g3H.Fn*j7m82macj$~Asw?;{rlG|,T4j1uYwIWPQ)UWd!zzE4dZA2ugb}mMOt');
define('LOGGED_IN_KEY',    '#YM;1AmFZ<0) eXyg]%}#v3,N<OFF(?OP`S8dWPFJnG/Y=}@k`hfFKV?%2%@{v(D');
define('NONCE_KEY',        'O<ZK8:<G<$ (+Rso3PsRmG@a|%mLX7>~AV7gUp94rqYxekh`KI&d$y,Um~=]^2/Y');
define('AUTH_SALT',        ' V8fv2l2$6t;H%.{hYk!6BkSi^?G?10({vXk@IxU Nmk:Q[&|mG*m4S6zouZA<Gs');
define('SECURE_AUTH_SALT', '}uvZUcV1+HY7M=4QZB4#%8BlC?9(L--=X5xsACM{%u*gX+~ySlhBeiRA;-;p]sz=');
define('LOGGED_IN_SALT',   'aHMzVK$a*MLycK1dBk21kBbYUeRP>~OIoG0wU])b8_Sc[X+Vip7Fi2!L6-! N6pl');
define('NONCE_SALT',       '`:I^m5=s>*sl$G~]V0+N]| {s)};||J4E_@X/d7pwJ@iWP;p57zs#wFZP0juPyPu');

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
define( 'UPLOADS', 'wp-content/uploads' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
