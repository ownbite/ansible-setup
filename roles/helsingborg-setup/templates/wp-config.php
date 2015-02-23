<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', '{{ mysql_databases[0].name }}');

/** MySQL database username */
define('DB_USER', '{{ mysql_users[0].name }}');

/** MySQL database password */
define('DB_PASSWORD', '{{ mysql_users[0].password }}');

/** MySQL hostname */
define('DB_HOST', '{{ mysql_hostname }}');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', '{{ mysql_databases[0].encoding }}');

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
define('AUTH_KEY',         'salts');
define('SECURE_AUTH_KEY',  'salts');
define('LOGGED_IN_KEY',    'salts');
define('NONCE_KEY',        'salts');
define('AUTH_SALT',        'salts');
define('SECURE_AUTH_SALT', 'salts');
define('LOGGED_IN_SALT',   'salts');
define('NONCE_SALT',       'salts');

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
//define('WP_HOME','tt.helsingborg.se');
//define('WP_SITEURL','tt.helsingborg.se');
//define('RELOCATE', true);
define( 'WP_POST_REVISIONS', 10 );
/* That's all, stop editing! Happy blogging. */

define('FS_METHOD', 'direct');

//define( 'WP_ALLOW_REPAIR', true );
/* Multisite */
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', '{{ mysql_hostname }}');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');