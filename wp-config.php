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
define('DB_NAME', 'massenza_portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '$z;/8%_v/~iq1;wt4{J1ehe}GkE,D43p(=[C&uZw`.~0lEFRp@x(wtO+SP#P6jjQ');
define('SECURE_AUTH_KEY',  'Wu+mz?l2/kGa+]G@<%-U0lv|dxo(Q.7_1DH>*fpl-[@n/`_Z0c yIo.FWfdC-5aE');
define('LOGGED_IN_KEY',    'w(|f+^QzBuq(|lO#850[,{X0n!wZFc|MPpm~|fBC[nu|pL*|ydQ8k8#99T+~*e,!');
define('NONCE_KEY',        '8SZ(n$%>*.hH}u*p/LCj!v-.IDV}[]3!(aj*KUm#n{Hpbg3/k-wGm$+q%JXnw5Fi');
define('AUTH_SALT',        '7H|dJq7/)^<A~hg-jx;xyW|qvL%9AZO5QP^W>+)BYB&$9(< !-n1rxku%R><K8!]');
define('SECURE_AUTH_SALT', 'M^/Iy9VuLft|]Mu7xfnFEuMy(62x wu-Xz0UE}5+vwux!aVwRn+,woXzswd]+C6:');
define('LOGGED_IN_SALT',   '}18VCs`Dr?+,eg+G!@]K:i|6O|k&G_.vOhfT|I*X<%6EbB|d7`~#`+Y;4--:JTR6');
define('NONCE_SALT',       'HI_}^OS|SM:S,AN9mu<I|ET5yE^Z3L93fPCO}3z;R{L5<1<o!rK$SYn!Jb*f^~e_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
