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
define('DB_NAME', 'webdesigDBjyn8v');

/** MySQL database username */
define('DB_USER', 'webdesigDBjyn8v');

/** MySQL database password */
define('DB_PASSWORD', 'ZeTEy6sekV');

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
define('AUTH_KEY',         '*Let*;Ahw_1DOap-#1DSep-]5Lk-|1CRdo-[5GSdp-|1COoz|0CNcoz|0GRdo-|0C');
define('SECURE_AUTH_KEY',  'Ns!}8JVgw!}8JVgs!cnz,0BQcn@>4FQcr@>4Ffq${7IUju^{7IUfr$>7Iiu*{AMXi');
define('LOGGED_IN_KEY',    'i3Tqax2Pq#He+6h_9Wx;Ol_Ds[Gh~5Sp[Gs[Gd-0Nk!8V1Nk!8Vo|CZwCVs[Gcw:J');
define('NONCE_KEY',        '~CRhs~:8KVhw_:9OZlFRcoz|4FRcoz|4GVgs@:MYjv^0BNYnz,0FRco@>4Uju^{BM');
define('AUTH_SALT',        '{Ur^Ffy.2IXju^{6IQbnu^{7Iiq+<2ALXiq+<2ALXiq+<2EPpx_;9LWip+#2DLWi');
define('SECURE_AUTH_SALT', 'a:COZp-#5GWht~]9KWht:8JVkw!:8KVhs~:8KVhs0BRco@>8JVgs!}CNZkz|FQfr$');
define('LOGGED_IN_SALT',   'k|8KZkw!1COZlw_FRYoz|0CNcoz|0CNZkw!FQcnz>3FQcnz,0BNYkv,0Ufr^}7JUf');
define('NONCE_SALT',       'l:CSVl-[Vko@14Kds!|8ORh-[:cgz|8NRko@04NRgz@04cfz$03JQjn@0FNcgz@}F');

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
