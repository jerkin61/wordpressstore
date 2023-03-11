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
define( 'DB_NAME', "wordpressstore" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define('AUTH_KEY',         '7OPU2ZlCqN6gDk5N90LNbCu49K4SzYXKbXpf2vxYQmHyMy4e8JT2byXzyLjY5Z0L');
define('SECURE_AUTH_KEY',  'aoYERHT6lZ7svzdfQMMBqWhPOvXuS3bEb3eRlniTKVL2sWOx2FvRp05a0STBnSfU');
define('LOGGED_IN_KEY',    'HLc770m1FZ2UQHKMCvqn6GrySr1QB4NRc2vDYMBIVjcnfQd6o8mQrlgcRubA4kPi');
define('NONCE_KEY',        'vdusmqWPfafFIPtkCVSSPsqvGB5OHLNvagLEIbEa8Kac4wV1Fvcn9ihOhT0AYKTT');
define('AUTH_SALT',        '80LFgfafLO498KVXUt2zzqiSR84sFmuyJVfipDaUA5zGNvZ20JxMFM3Zx8DDeYZ0');
define('SECURE_AUTH_SALT', 'zibqKhtOrVRYLazWjbi8I5y9lk7JRPFZsQxpgx5YIB5bxS8rELvlhW62feh84X9B');
define('LOGGED_IN_SALT',   'wCjs5WknFcAwwaz729gld8YrsWiBQZexrhTo9caRzJbByd07FHFDqCnjWD3PC75q');
define('NONCE_SALT',       'mX4iLuqgHFYIhbGaqx3io1ydme06aipBfUgAEAECBnnxh85W4UjMEIHxx5YStBbl');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define( 'WP_TEMP_DIR', 'C:/laragon/www/wordpress/wp-content/uploads' );


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
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';