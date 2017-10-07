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
define('DB_NAME', 'charleskDBvdg8a');

/** MySQL database username */
define('DB_USER', 'charleskDBvdg8a');

/** MySQL database password */
define('DB_PASSWORD', 'SMA24XPR2j');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'DHt__5hld~9SRVl485KO~:!0gw-w|GZZcw0FCGZ|[>8or!@}NcgkzJNFY,>BBFr,@');
define('SECURE_AUTH_KEY',  'a6A2Lm*.u.EXbTm<AEIXx{;<6mqu.<XaXmqAEHLe];];Hi+*_#WatatxDWKa]:H9D');
define('LOGGED_IN_KEY',    'Zsv>NRYVZs04CFNUY>04,8Fgo!7Fv$^@,>0gnrj$^EYfQUc}7FIQXy{3^3Bfj$u');
define('NONCE_KEY',        '_1Gtw#_#WlppSl#9C5ORw[:[:dlo:08oszw-!RVock@8RYGZg!4C0JRr,>z}0gorv');
define('AUTH_SALT',        '<mmqAELHLe.<APWp]DH2LPt#];29pt+x+LSWahl59HDHO~_5:1Kps#t-:Ohpdw-8S');
define('SECURE_AUTH_SALT', 'k@v|UYYn7NQJc>}7Bry$z$,UYr^<Bbj$j$,EYfTnqIQ7EXy{3<AIi+.q.<Xfjmq');
define('LOGGED_IN_SALT',   '{2Lm*<u<{aemptDLPLTW#]2Wat15O9DW+~2]:Hlp_p_]KdlZsw5OSDWa~15:CsRh|');
define('NONCE_SALT',       'i+uy*PTmbi+6EXELf*2A;HPq.#x];emqtx*PSaWa]269HL+_#_#;ei+:1Klt#t#:');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
