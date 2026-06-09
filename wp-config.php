<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i10454272_ktpf1' );

/** Database username */
define( 'DB_USER', 'i10454272_ktpf1' );

/** Database password */
define( 'DB_PASSWORD', 'R.JgJkNDX2AhLbAm4lw82' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lehz3sT3h0VPKVctmHdS1PjSaUg6khA4A3gosn4TYS6uOPU87Xz2EaGdVIT14yCN');
define('SECURE_AUTH_KEY',  'w5jq2SsA9FtdF5WkJf4NI41RdhetPuVRO150QZiAybQw6HnrRH9PD11VdPuc3UDw');
define('LOGGED_IN_KEY',    'CpnN4z9zRAjoGiKajOhlbH9QXD7SHNeJtUNVLGuAnV8gtSPM2PwDyQcYXvwERLgi');
define('NONCE_KEY',        '3BrXONOLWtpbRZtS5Gb0mV1a5ERWTLEaRqDVf28p0DleM2frk3ZQwt3VpVn0wwAW');
define('AUTH_SALT',        'rVMBanSfciIfajEh2OrjZa0hKKs4MoN1znY858VIH0MrGf1skGTQFEQkXJSR13k7');
define('SECURE_AUTH_SALT', 'c3iRZJKgFjS4F6G8TryAE9N5phx4fR0daegVsR60dqeFwST07EGERfwghhLBj59a');
define('LOGGED_IN_SALT',   'DvfXYQTgqyxyZwIEstQ2EAoiWHmZ8mRZikpmFxJNuTeqXZXpmZ3daYuNnwWRqGU9');
define('NONCE_SALT',       'MITu5pHOFxTS7XsFyGMG1AHfplK8GS5C3r3fAnVlA8zIeKVqTeEm7WpnmAHOQoQc');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'ucqh_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
