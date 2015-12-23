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
define('DB_NAME', 'revista');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '4m*E<g2-=q-fz7L3P>+[(9+pIiY^=ujm/ngf;:~,GV99I,l3F|^g-R xb0?wc4PB');
define('SECURE_AUTH_KEY',  '%<|9xGE:/9@7@Y0KA0;_Jz,w;hk`|S!gd!-j[{9X,mIMLl|:6tBkI}dos+8W2^O#');
define('LOGGED_IN_KEY',    'C?xue`ccjH%F!6|AyWl{2e9<t-42}QQ0rZ8Fo)IhGnq+taHNF3*Z2{,b7(m|:+ng');
define('NONCE_KEY',        ':[A4wEtc*T4bT<j]<dk!M5z4l^~IoafhL|~CRRu0x-8Bl``_tPtr=<~S7m`u+,xi');
define('AUTH_SALT',        'Al:v]7woUf+++O1zivO<uW*k2;]II&[NY@-11H+g#9of1)#|Em5O6 ;=%H>b/5BD');
define('SECURE_AUTH_SALT', 'OQISyFBIOhC!a==sf~1e[Z|,Th#$;>(GvAeQ6-}RGKD%Ff[NFoSb+%}o9|I#hjs|');
define('LOGGED_IN_SALT',   'rZ BA@W/x:7C#l)iHLF{^]4YoYO98Qbwkvi(p?;PKdD/vb&^LrF0k*.`MzC}I)I3');
define('NONCE_SALT',       'LEkPWt57wTpO5W6C]@ps=q3gLS@<oV*Q]} J#DK3>//+Z49&4vq7bWr1y&VR8(V1');

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
