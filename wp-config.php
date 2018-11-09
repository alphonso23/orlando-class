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
define('DB_NAME', 'orlandocDBt1lz1');

/** MySQL database username */
define('DB_USER', 'orlandocDBt1lz1');

/** MySQL database password */
define('DB_PASSWORD', 'jPdgvxejm0');

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
define('AUTH_KEY',         'k!0BvELXiu*<2ALTeqy.{6IPbiu*<3AMTfqy.{7EQbnu^<3BMUfr$,Salt~]5DOWh');
define('SECURE_AUTH_KEY',  's!08JRcoz!}4GNZks@|08KRdow![4COZhs-|:8Ku^<3EMUfr$,7IQbjv^>3BMYfr');
define('LOGGED_IN_KEY',    'LXmu*{6EPXiq+<AIPbmu*<3AMTfqy.OZhs~|19KSdpw_[5DOWht-#:9HSelx~]1D');
define('NONCE_KEY',        '8NYk@[4FRZGRdkw![4G6EQXfq$.7IQbnu^<3BMXfry,{7FQbjv$>BMUcnv^}7FM');
define('AUTH_SALT',        'q*]6HPbiu*<2ALTeqy.NZhs~|18KRdlw~[5COVhp-_:9GSZlt~#1DKWdpw_]5HOWh');
define('SECURE_AUTH_SALT', 'r!08JVcov![4iq+.;AITbmu*{2EMXfqy.6IQbju$<3AMTfny,{7EQXjr$,7IQ~#');
define('LOGGED_IN_SALT',   '*]AHTemx*NVgsz|08GRZkw@[4CKVho-!:8GRZls~[1CKVdpw_[5GOZht-#7EQXju');
define('NONCE_SALT',       '0FQckv@>4ip+.;6HTamt*<2EPXiq+.;6ITbmu*<2EMXfqy.6EQXju$<7Is~[1CK');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
