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
define('DB_NAME', 'szwar173_wp994');

/** MySQL database username */
define('DB_USER', 'szwar173_wp994');

/** MySQL database password */
define('DB_PASSWORD', 'p7S@8Z(27l');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ax1tl256vq35f09sm8bfbse4wgzbcmcsjqtqiiwjn7wkmqe3pvqkx28lndbywzmh');
define('SECURE_AUTH_KEY',  '7s5obb4cwo28sydunn0bkyhfsterjftololk20orzd3xufqerddsnhszhpyncj6t');
define('LOGGED_IN_KEY',    'qchciilwephzfn6xd016lqadfnlqoagqwot3yrbqs0yepzedlcisi4r7agslr7ct');
define('NONCE_KEY',        '0z4xu10w4ef9flsp64azdp6hhg4sf61atndt5gludgryyzci3qx8xt0ocymg0abz');
define('AUTH_SALT',        'wishvihrrxwq7gxv2ju61veau7lixzrte43kwulavayhmyuglp73e17yicxokqpl');
define('SECURE_AUTH_SALT', '7fmi10jhidwfyam4ulcoqdgfqmqigpzwunha9pwxzxqzeljhl46fvihiszuwfsf2');
define('LOGGED_IN_SALT',   'l55cyrzymm95xj1fiy7fsljnvhapdbq9lbomxlwtplhhwndgme2k343sigft6hlb');
define('NONCE_SALT',       'jpgthfrju0fiylfd00k3xk76kifnymmxqhub31mnzsb2ebjfjy3e0pg5mtdpkkwm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpcx_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
