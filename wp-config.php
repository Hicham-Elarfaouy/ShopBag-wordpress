<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ShopBag' );

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
define( 'AUTH_KEY',         '6aKWHDOve5Ae4yvaOPJUy5cMD667bLGFuRfwKJ95VuoHEHHqzu0GjZiP07F76gm8' );
define( 'SECURE_AUTH_KEY',  'g47xupVd4mox0F390W2UIfk1aCTEZdOjDXRGZIY1krkXpTgchE05LOViDrTtly8M' );
define( 'LOGGED_IN_KEY',    'aunwHlr4nKFujOttsokAzz0xcUFYIQVr4GEbGf6QHbA5qcXTy0kbZnlzVTxKrkoN' );
define( 'NONCE_KEY',        'ZgYl7ZhsCP0eWwrzQ3wx99OmTWT0w4I7Er2FzUOr6dN3BZSlWXclpdn9IuWr0FUy' );
define( 'AUTH_SALT',        'RRUfUhX5Ty3zkrEhH6hQQz43L7TTNuavEHAERvJ0sAxAbxGUhCIYJq84KvYVxINV' );
define( 'SECURE_AUTH_SALT', 'Y6AITKonBx5GT8IZ0ot8I11zXm9hGxXHYPNLjCcQRPrH8cvr75qplxmOKZXIqzMl' );
define( 'LOGGED_IN_SALT',   'lYZK6oymKMezByFHcW5lLqFWuHChdc6HAQD2VfcuhWvonZkWrjkDgx7oIVTQObRM' );
define( 'NONCE_SALT',       'IQoMg2JlS1orkYBogvGzOQkj237iJRcHcQsgxSd9H3z5DMaqMzdSaxRZGRPYbOWd' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
