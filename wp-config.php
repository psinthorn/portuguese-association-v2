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

if (strstr($_SERVER["SERVER_NAME"], "portugueseasso.local")) {
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

} else {
	define( 'DB_NAME', 'portug67_wp386' );

	/** MySQL database username */
	define( 'DB_USER', 'portug67_portug67' );

	/** MySQL database password */
	define( 'DB_PASSWORD', '+QpNQs@mEcoz' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );

	/** Database Charset to use in creating database tables. */
	define( 'DB_CHARSET', 'utf8' );

	/** The Database Collate type. Don't change this if in doubt. */
	define( 'DB_COLLATE', '' );

}


/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r3hOiM9B1mTpRJkmm9/kJKH43nK519otzFwF5CotrrTNQvHTP1p8u96XOWYou9H4Pp8JJRpdEMI9Yy48WQOjlw==');
define('SECURE_AUTH_KEY',  'C+VIgTFf+V/yCt1NhqXZwU3XOQ3h04p9alZLVYtN+qS/ijdLeWVNrVMVTz2zMM/19WZXb2WA+y9Tu1yjJHIGXA==');
define('LOGGED_IN_KEY',    'MG9YylEAG8o6jCuf3+OJL8jkCCmUXWo20gQIljH4SZl2uJcIrwfkY0AT/rUDHjJ8a4Gli7eG2ekFsc6AECDX5g==');
define('NONCE_KEY',        'lDExFDq4VbQbtq1Uc5EA0bepjypIc/cCEbZ2XTnU12dfqfbq2DaLrfLIaaWcFrbOh0B/njaiF19gxSamazgDmA==');
define('AUTH_SALT',        'blkBazZunoo6x5258RgND52f6j6NyfMnUCIxJWfPRBjIfCJlneRZSCyLhZrJo8ohshAuhC5gNe74nn9JmXhhcg==');
define('SECURE_AUTH_SALT', 'zuYKgpkAI7T9cYwzrb2VMJooQKPf0gGE2ovL6te7T3ebAews5aNYclWdVj5M8kVSGc4RcAassKgTpzepXClMFg==');
define('LOGGED_IN_SALT',   'HLo0xy2vXH1kRb6XSFv/oAVu52eLdBgwoY2oiNymdMhqA0/tRVSJ/Phfk4kk8LrfTjbMpcqIPpVN87aHk1dJ5Q==');
define('NONCE_SALT',       'Ew4XfEDZ7yZ/1/Ajx34ItL/6ZBmN0sLE3R3KvPfXlhjbw0LrZBXUAthYitq0jBBbSFxNvnnlXL1M32Fb+87DAA==');

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
