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
define( 'DB_NAME', 'sunriseo_wp3' );

/** Database username */
define( 'DB_USER', 'sunriseo_wp3' );

/** Database password */
define( 'DB_PASSWORD', 'G.tds1EuB1pkw0kP1bX72' );

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
define('AUTH_KEY',         '48C2uA7LHPjGP8Iwilufc7zOYtQNYPmUA2NKxzMVCJq6WEprZUf1RT4BkMiNcLtJ');
define('SECURE_AUTH_KEY',  'nKgfKq46tRhJzwCnEG1lQ0Yazaty4wdCKH53Nq8vFvk8EprUkcNZANZ9v4EdsKfK');
define('LOGGED_IN_KEY',    'jNplyTSP0JVvhtFj9sPqTd5t40epT4TlvpKnBOom3jRktqya3j7BxcvTDIoolNrv');
define('NONCE_KEY',        'ff4a7zBPPID1U8SZx8yHZSROAhjPiBK6P5sitgu6X3n3M5I4tu5tNx583A39RXGa');
define('AUTH_SALT',        '4E5V92231Q1PNtk98rCDhpuYUAPYrv5740vPlNjUPue63Ve86LMzloSb4MHZAYQf');
define('SECURE_AUTH_SALT', 'TIIg0eJ41fKtN9BXq3onEp1UZd98v1Cv2DY37CBLa7lcFJH8Po2CjTc8pMBRhKRH');
define('LOGGED_IN_SALT',   'TLbH1aYhNa3hSi06nRPEcWbYahOI0ljIbm7UWmvYSFgcvvcH7ZNKHLI0V0QVmgWj');
define('NONCE_SALT',       'Cfds2XOsqvi4TNIo1YCHhHHPbY13I523obxbgMbucRoNswBRcTw7PJoaLbFyBntg');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
