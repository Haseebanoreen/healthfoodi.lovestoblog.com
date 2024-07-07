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
define( 'DB_NAME', 'if0_36838146_wp932' );

/** Database username */
define( 'DB_USER', '36838146_1' );

/** Database password */
define( 'DB_PASSWORD', '63wSup0z.]' );

/** Database hostname */
define( 'DB_HOST', 'sql109.byetcluster.com' );

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
define( 'AUTH_KEY',         'huvfq9jxhtuc5ydugq7gwcr3mlegx0lw6vunprtdce6lquat21aopl4wgfusoi7e' );
define( 'SECURE_AUTH_KEY',  '4znjjpyo3yl6lhmnxctx5qhxyaipjuq9pkiawg7krknk3ip6gutjabycjmcg1fyu' );
define( 'LOGGED_IN_KEY',    'ndhc8rctmxeb8ikqjd8ijey2uii69tm1ptrgcrfydsvha8en4zx99yg4jvqe5pez' );
define( 'NONCE_KEY',        'zii0ewvmz8zbduqjzhvef8g7ex0ggqdt0fkgng5ccdkf5wpsfpttksquc1sqk5hd' );
define( 'AUTH_SALT',        'elygbl2imzk6fqu8ioohe2m6lmkw3ssu4noyeegtw2ocldz8rxceyk6xomfuzw59' );
define( 'SECURE_AUTH_SALT', 't8yqkyg3qtlhrj6uxnkatrlxmchfut5ciwc95acqxnepp9wjmmbdtnlzjhgn0mmy' );
define( 'LOGGED_IN_SALT',   'lfoupztkeywkdxqkx9tqm3iusulr5l4vnrw3gg1rnthbij7pqosz7afoxqen6y5y' );
define( 'NONCE_SALT',       'rwv4kx2ldrcrpzpynywfo3uvbda6cbvjcwx7czoewnt8yokmh7gcijwzbruhhx8a' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpng_';

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
