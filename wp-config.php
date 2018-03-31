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
define('DB_NAME', 'means');

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
define('AUTH_KEY',         '@YhzE9ndN}3#LPh t-N>o;Z>$uwqGTbVTLY=xPaln)h#sRUc>D3;9~7MNw(.MpQ/');
define('SECURE_AUTH_KEY',  'pv QKJ~a}K^1|Z`in}Ke{}!#jO(s@g,@YQ8ZHMSZ_G?`(qhXwv_]T@qk;!u8r-yC');
define('LOGGED_IN_KEY',    'QZ$i%`1ir,iegWm<6[]IHzap3t{H yLEMNMaPA(2rv#n**QHm:`;*NxnLx)IL::;');
define('NONCE_KEY',        'W} huG}9jxQA<i2Ln/&yXrG)N+QN/$~FPVZIp~(eg]A~~9[. [U8#[tf:,c9A[%:');
define('AUTH_SALT',        'pON={6y8nDwV}{0KH|]pHy/~fL)9Sg>t^(+7_zUG }@&%k=,oL:oOo8ZiNTumA3?');
define('SECURE_AUTH_SALT', 'J|!pPl^DeI!w_pHd3xOwe^<@-7Q*`POhe#mbC&O3J3|D!ozSda^n1&A?dP]Wx@9w');
define('LOGGED_IN_SALT',   'qJ5/z:v{KN_<jH!0+{7Sj30<$z]W9gU+:1jOjbD];;[yA(;7g6}JrR]2WJWHqj7$');
define('NONCE_SALT',       'sI4r5fk9f3Z6U@}2]CnEb(CNVb@J;S9)mVr!+FX)<}Y1K@4b|uN~01sLQV2^#Pc]');

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
