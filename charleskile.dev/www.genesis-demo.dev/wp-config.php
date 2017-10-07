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
define('DB_NAME', 'genesisdDBuufo7');

/** MySQL database username */
define('DB_USER', 'genesisdDBuufo7');

/** MySQL database password */
define('DB_PASSWORD', 'IqznWIQH39');

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
define('AUTH_KEY',         'Bcrlw_:9KWht~1CKVhs~[8KVo-|1CNZkw!4FRco@[4GVLWix.;ALXiu#2DPap+#2D');
define('SECURE_AUTH_KEY',  'p9Oap-#5Kdo-[5GShs~1GRdo~:8KZPeq+<6IXi*]6LXix.2Eamx#2HTit]5LWlx#2');
define('LOGGED_IN_KEY',    'Efv^3EQfq$<3EQmy.AMXju.|0CNZoz|0CVgv!}8JZkv>4FRcoz,0FYjv^}BNYkz');
define('NONCE_KEY',        'Jn$<3BMYjv$>AMTfqy.7IUfVgo-|18KVho-}8JRdoz!:8Kckv!}8FRckv!4BNYgr');
define('AUTH_SALT',        '89LWit~]2DPap-#19KWep+#1GSdp-_:9KSdw_:5GSdlw_:5u^{3EQXju^>3MXfq$.');
define('SECURE_AUTH_SALT', 'q6Lbq+{AMFRcoz[4GVkz,0BNVgr@>0JUgnz,0BJUgr^}7JQcnz^}7:5GSZlw_]5GS');
define('LOGGED_IN_SALT',   '@BRgr!}JUjv^0BQcy,3BMYfr$>3BUfry,7IUbndow!:8GSdlw_4CNVhs~[1COVoz');
define('NONCE_SALT',       '2Pamx.6DPamt*]6DPFMYjv@>3FQYk$>3BMYfr$>3BUfny,7IUbn^{3EQbju^{3E~');

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
