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
define( 'DB_NAME', 'netitcom_wp578' );

/** Database username */
define( 'DB_USER', 'netitcom_wp578' );

/** Database password */
define( 'DB_PASSWORD', 'kb3)9CS!0p' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'n0ovi970uc267tecvnddk3yszphsr3mbzhgdo12m6jt8pyzlmckmfgiizoijqaas' );
define( 'SECURE_AUTH_KEY',  'slccczoqhaizvjumouubg89o8rsbscvjvy5rtd3xmaa3txmrxohtiuujxwagofrk' );
define( 'LOGGED_IN_KEY',    'vdvphjydsi4ufhxj3itohkvko713nccitnd7aycysn3dghigo7yotdjlwrsrv8bf' );
define( 'NONCE_KEY',        'ltkxyblwpwlb8rbxog8z9jmibzbqzcajzc1t3ngr5mngpwiyfzkgrvirjlhtdeya' );
define( 'AUTH_SALT',        'ozgkgaelmkiqodh1rjvo2xt7oemkrcgkpmsparr36o68bqmvizikmblxpszvm4gm' );
define( 'SECURE_AUTH_SALT', '2ss9my40uzorkkjki6do8dhcrxwzyjatqygnmihalhj0s64qaiksx4z3vrqw9dhi' );
define( 'LOGGED_IN_SALT',   'xwqnkbclbfzsycmjeoomzx02667rhxnvujbrirnpfhojaf8movq6ikay8uaj3zl1' );
define( 'NONCE_SALT',       'dii1ypy1l2zxuh8rrubvgup78e8ltxvv7onzj3gemvgwdxhd8cicdozh7bemnmcr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wprk_';

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
