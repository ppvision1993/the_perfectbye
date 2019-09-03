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
define('DB_NAME', 'theperfectgoodbye_wordpress');

/** MySQL database username */
define('DB_USER', 'theperfectgoodbye');

/** MySQL database password */
define('DB_PASSWORD', 'hhNnqbygbEdSmb8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '53zz77KgHrBb0oBl36o6liqax2AUBa4QSVRrTxcoVBgB1wwJCHHLuEijBfH4tw5o');
define('SECURE_AUTH_KEY', 'o6KX1mIu696i7uxldxVqR4bLsXfG35gjD0x8RtO8U4mi31nvo27TR1zt1czSv6V7');
define('LOGGED_IN_KEY', 'JaJAj5VTZZ45Vj9mV3S9bA6uAFlPL66qg9SbxFdIx68Zq8Q0BB8BhlNr6vjXT9pC');
define('NONCE_KEY', '8sKQYeRFWZkr5y3GSRqpG5cmUklF07qWvzrGmtIW7XW6hIMWOGoBhH3gqWbSJ5kx');
define('AUTH_SALT', 'u3OfamBbfmm2Y2oHVcUAvwT8nqxWaxSTRUXcUGNe8m9vnzm9u1lew65I2IOovTEh');
define('SECURE_AUTH_SALT', 'jKU9YVhZRFgRjPAVvFrhbrRsPBhe6QNBYmjKf7bN6NF8nFfIcjsy4uMx2kTSaTVc');
define('LOGGED_IN_SALT', 't9xZl0R0LdYH2GdklYKmnf800vsGVJu25RBXyiiVl1LDkIajQZIEI5QOeFrdsUgY');
define('NONCE_SALT', 'v7xwn541tCF5vI5LpQfsTCha24fVTezlNvCCVtIAgOaqpVCUimk5CVDE9h4Nrxjs');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
