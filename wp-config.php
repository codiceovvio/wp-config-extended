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
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define( 'WPLANG', 'it_IT' );

/**
 * Enable or not auto optimization for database
 * define to true only when the feature is required
 */
define( 'WP_ALLOW_REPAIR', false );

/**
 * Disable file editing for plugin or theme code
 */
define( 'DISALLOW_FILE_EDIT', true );
/* Disable plugin and theme update and installation
   Setting this constant also disables the plugin and theme editor */
define( 'DISALLOW_FILE_MODS', false );

/**
 * Specify the WordPress address and the site address
 */
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/path/to/wordpress' );
define( 'WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/path/to/wordpress' );

/**
 * Move wp-content but re-define plugin directory
 * because some plugins might not work if not defined
 */
/* Set WP_CONTENT_DIR to the full local path of this directory (no trailing slash) */
//define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/blog/wp-content' );
/* Set WP_CONTENT_URL to the full URI of this directory (no trailing slash) */
//define( 'WP_CONTENT_URL', 'http://example/blog/wp-content' );
/* Set WP_PLUGIN_DIR to the full local path of this directory (no trailing slash) */
//define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/blog/wp-content/plugins' );
/* Set WP_PLUGIN_URL to the full local path of this directory (no trailing slash) */
//define( 'PLUGINDIR', dirname(__FILE__) . '/blog/wp-content/plugins' );

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
/* Turns WordPress debugging on */
define( 'WP_DEBUG', true );
/* Tells WordPress to log everything to the /wp-content/debug.log file */
define( 'WP_DEBUG_LOG', true );
/* Doesn't force the PHP 'display_errors' variable to be on */
define( 'WP_DEBUG_DISPLAY', false );
/* Turn these off unless needed */
//define( 'SCRIPT_DEBUG', false );
//define( 'SAVEQUERIES', false );
/* Hides errors from being displayed on-screen */
ini_set( 'display_errors', 0 );
/* But kepp errors being reported and saved in a debug.log file
   inside of wp-content folder */
ini_set( 'log_errors', 1 );
ini_set( 'error_log', dirname( __FILE__ ) . '/wp-content/debug.log' );
ini_set( 'error_reporting', E_ALL ^ E_NOTICE );

/**
 * Manage Core Updates
 */
/* Disable all automatic updates */
//define( 'AUTOMATIC_UPDATER_DISABLED', true );
/* Disable all core updates */
//define( 'WP_AUTO_UPDATE_CORE', false );
/* Enable all core updates, including minor and major */
//define( 'WP_AUTO_UPDATE_CORE', true );
/* Enable core updates for minor releases (default) */
define( 'WP_AUTO_UPDATE_CORE', 'minor' );

/**
 * Limit or disable posts revisions
 * Disable media trash
 * Empty trash every 15 days
 * Increase autosave interval to 3 minutes
 */
/* Limit Post Revisions. */
// define( 'WP_POST_REVISIONS', 5 );
define( 'WP_POST_REVISIONS', false );
/* Media Trash. */
define( 'MEDIA_TRASH', false );
/* Trash Days. */
define( 'EMPTY_TRASH_DAYS', '15');
/* AutoSave Interval. */
define( 'AUTOSAVE_INTERVAL', 180);

/**
 * Increase Php memory average and max limits
 * Set Server request max time limit
 */
/* PHP average Memory limit */
define( 'WP_MEMORY_LIMIT', '128M');
/* PHP max Memory limit */
define('WP_MAX_MEMORY_LIMIT', '256M');
/* Max server request time limit (in seconds) */
set_time_limit( 2400);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
