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
define( 'DB_NAME', 'enemer_wp766' );

/** MySQL database username */
define( 'DB_USER', 'enemer_wp766' );

/** MySQL database password */
define( 'DB_PASSWORD', ')5fS41pg-I' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'vcc8yy5qsyp6h4ryxitrvvd6buqqooqaltt4ao0ykgmzotiuqskfiteqgnoj4auk' );
define( 'SECURE_AUTH_KEY',  'vyz2b8erc7tvbuqqnktlxgipyv7w7wiilmjjldwxspvdn8pnjbzqbcyhpqitect4' );
define( 'LOGGED_IN_KEY',    'biigf19nqnlzik2qd7khqtfcaorlcrvfiekcxyrynvhdz6gzfuprajmllv9s66bl' );
define( 'NONCE_KEY',        'mlxad0ofa8ambxscuuxkdgi15bqo23qswzq4fayax1suysmvhqxeojobetbl6tkd' );
define( 'AUTH_SALT',        'iokxqgvctkg7oaaqyugki3qkihvnougss4kkwgzpxlcamjrx0z74zm4udn1oecoc' );
define( 'SECURE_AUTH_SALT', 'wunce6wud7rbjtllx3mm5jt2hptkgnoqqq3rosudqyj0yrzddtx1ncymoujcww71' );
define( 'LOGGED_IN_SALT',   '8fpgigjz9wgbcchmqqj7sovthk4tsmvlwyvgasgexspacckayrjssosodxxu0juk' );
define( 'NONCE_SALT',       'adabkfece1radaexzzuflxqjmgavjnwuh1xxw97zpimuyzftngruc4d82xm0gjzg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdq_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
