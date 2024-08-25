<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assignment-for-10th-module' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'fX14TxixrZBrmFDk3lw19Iv549SLHn3SfNfzbYmYuWLSJqmlGS4BqZqCf7hwNOki' );
define( 'SECURE_AUTH_KEY',  'bLylgPEjx3P4X3Mgce7TORLRAWpcnHbViyK8UvQNXtdQuYXZTpDnKwzADOnRxsm3' );
define( 'LOGGED_IN_KEY',    'LslSe1IL4SK74ZmkpDzHTpydiemg5MY1OX1YiIcho5VwF8VjMB5W350EjMEwJ99S' );
define( 'NONCE_KEY',        'rCaBp8jRIFQVuBDgYfIDpz70vWE59tMgyPSnRJ99PJcV6yv1ulrV5HMNJ4MyYZ6B' );
define( 'AUTH_SALT',        'dh1xLasAyr8ydSC6T7wFmlpEc5iByMAGx0mlCzEmhu33LhI42DMlPpuZTBMWg2bc' );
define( 'SECURE_AUTH_SALT', '8gdLJOX9BPXy22woBzwbUC5AzJ4sMT41aqEmXaW5KEXq75rAikHEfAWA2TfvkVPj' );
define( 'LOGGED_IN_SALT',   '0yMhh4PyRQmWV4nc9FKa3o7VCWWDPOcfsDLrSw1fdgY88VFAjpdRic0C9Ucd8J1X' );
define( 'NONCE_SALT',       'yOsCD3PtLJuu5H2u4ECBVEbyENbKjbmaHFjIx0nTI0eE9Wp3AGvLiaDUc8Ap0dQ8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
