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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hlR+NWFZ2Pc59f/f4jNFboRmlK0YPBtgAGqaTiomdMIMR4oIdNtv0xZ815rxNEDoZwupiyxAzlO7nfhuPa+OSw==');
define('SECURE_AUTH_KEY',  'ILhL29RHmmcXoxEyY7lj0o/YN4s99oaGtPzrt2fd1rWgodnGwoMITYQ1HslXjsgDKf34WG3zEWC8kyjEoF8HWQ==');
define('LOGGED_IN_KEY',    'iRszSVG05PHKejQCh1GJUFHnly0tGax5hMdKVZi1UmZDPOa2cN5WeSOOTJKxf/VP9li4m4Ip3jT4AuOV4wPKNw==');
define('NONCE_KEY',        'EEGLSSMGfJoSCIX7HPGpkjo0HlI9+1WvvyxgqHPhStmgxulCqRdPO9bniEXpa9XUvxQD81AfJZ3WdsagO4Mx/g==');
define('AUTH_SALT',        '13xBWMvuGHm9Z8Udq/T7E4cUQCt5RHwCFGFt3aD3ik2mw1ML13TcXyv1UCy7ZxHTT4BJaiCQzg9I5plLSJ9TBg==');
define('SECURE_AUTH_SALT', 'ZrzpQT2vYqyl7dKgN+cayfYjemngxqH0EZdhs3LAvwah1Ca7+gYySRun8TzCWxtry9FG1EcY2mLw4lpnss1OUA==');
define('LOGGED_IN_SALT',   'CPgIsB4dJnAYjgqV4WZ0KLROJ1uRaDXLTETRchPZPWlKkA1GsntMa/hH2cBfOxCfvK8bBH12e29+YxkWlS7nbA==');
define('NONCE_SALT',       'yZKafSIHhxFJ30SVMdqPFWVNKSpQklkl6te1+zucbR/egzMRe+yIYHzDTaj0anBCegHXabSZw7ryc+OQ0IdxIg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
