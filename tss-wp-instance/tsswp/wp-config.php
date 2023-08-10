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
define( 'DB_NAME', 'thescien_tsswp' );
/** MySQL database username */
define( 'DB_USER', 'thescien_tsswp' );
/** MySQL database password */
define( 'DB_PASSWORD', '8H4H-pp(]9BS3!5]' );
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
define( 'AUTH_KEY',         'enalik7dnij5wx1e0vloesora9to1djrdsrtdqv59jgxwvzaa9xixptnbk1xbump' );
define( 'SECURE_AUTH_KEY',  'ix9ejvt2wvteypwukyqx4deawevpa7oh1hbmqywkdz0pmmwn9yjnio4xy9sugevh' );
define( 'LOGGED_IN_KEY',    'ljpzaxwncn0ysv6wa6uj3yrqzpadyukadwlwy4htuob2dmfhpmfdsnezbkcajpyw' );
define( 'NONCE_KEY',        'rmqs13td4hpftwzgovwnhmro41i0t5txottcn3ojeodrsxdtfbv1uu9nixubfucy' );
define( 'AUTH_SALT',        'la0b7exfadufgrcoqmnqpzfgbb6k2vrauc6poxam0iutvpgcat09uyslkrjybbt3' );
define( 'SECURE_AUTH_SALT', '42yawuiqtcxozcxnj43kcy2qhiwtjb4ghmctsl7asjhnlkd9hpmrarpdvb1ejqf6' );
define( 'LOGGED_IN_SALT',   'lw0gs6gibr78ottebiicqzzf2ilknejlm0afebdja621mpufxtgo20v1sda61qed' );
define( 'NONCE_SALT',       'dsdwmzfqz0jrftxao1n5fmzcisyyqdgglwk3ptlcqhry1qtwzyjzvcrll4rzvr6u' );
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