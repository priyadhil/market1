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
define('DB_NAME', 'firstsitDB0kyew');

/** MySQL database username */
define('DB_USER', 'firstsitDB0kyew');

/** MySQL database password */
define('DB_PASSWORD', '58s2LXr1Ui');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'IUU,V|V|V!R!R~O~KwGwDtDp9l6i;e]a<X<T.T^Q$MyEvBr7j3FrBn4g0c}c0d:d[');
define('SECURE_AUTH_KEY',  'wtHxHtDpAm6i2eX<X.T^Q$MyIvFrBn7k4g0c}d:Z[~K-KwDp9l5i2e;e]a<X.T*P');
define('LOGGED_IN_KEY',    ':[h1d:d1d;_S*P+LxHuEqAm6jb>Y>Y,Q^Q!R@NzFwCo8o4h1d[Z[W#W_S~]a#W#S');
define('NONCE_KEY',        'vnFrBn7k4g}g}c:Z[Z|V|V_W#W_S_O*L+LxHP+L+HyEuEqAn7jb{c}Y>Y,U,R!N@');
define('AUTH_SALT',        'tl9p9p9m2i;e;b{b<X.U^{b<Y>U,U^N@JzFvFs8o8k4h1d:Z[Z#W#S_S_S*P+LxHu');
define('SECURE_AUTH_SALT', 'voCs8JzGwCsCo8l1h:d:d]a#W#S*P*L+HyEuAq6n3fY>Y,U^Q@N@N8k8k4h:d[Z#');
define('LOGGED_IN_SALT',   '>}g0c}c[Z|V|R!S~t9l5h2e;e]a]X<X.T*P$M$MyIvBrBn7k0c}c>Z|V!R@O~K-Gv');
define('NONCE_SALT',       'JBzJvFvFsCo8k4h1d[Z[a]a#W_S*P+L+LxIyEuAq7n38l5h1d[a]a]a]a#W.T.T*P');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
