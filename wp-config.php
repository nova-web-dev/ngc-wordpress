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
define('DB_NAME', 'wp-ngc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'carleis0');

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
define('AUTH_KEY',         'qmsh#|}3Oh?=DAH9&#7`9-T=rG4hl2/&0wVT?Q8jZC8N[;uYy>gj=q=1;86+3H7H');
define('SECURE_AUTH_KEY',  '3_WWgFn]X5x5Wl0C4%Qj |4Ff}-; }XJ7/i@@|+NyxqU749w*o+vW fH,,agr*y<');
define('LOGGED_IN_KEY',    'tv^LZHMZbM!Hh;u:8oalial/`g@h,fb,Za&+-C_;|Y8NP~.yZgmU]xvCeX%SiKNS');
define('NONCE_KEY',        'O1h|E(Z{wSz,VSj`Iaq*|}% B#.EdeO+u#xMT#5H.oW#YqDNd@T{|R4jF|^A-LKt');
define('AUTH_SALT',        '(is+csOsf^0==k2RE|*`bTcMCI/moTmzoK{u,b-O2~!j3/yqGt$ll3y[- jwLP;A');
define('SECURE_AUTH_SALT', '@|63JX<E$E`ibF$|(Dnf[CyT)TD,aB6S2Km}b>n-k-GW<_U{wPTp&r@uT{;t&@~r');
define('LOGGED_IN_SALT',   '|}<cM1V>b%fKZpInp:Z+r-|aK` icr|+XNy H`s0?=N#q#|+7|:}cPX(6Bx&q:-n');
define('NONCE_SALT',       'a$Qj_h/!ujG}7I -:{ U%a7HUDZ$OB`_>|V3B+jTL5uYNiDzGv8TZfB`|C62pwhJ');

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
