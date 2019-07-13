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
define('DB_NAME', 'wpboostrap');

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
define('AUTH_KEY',         'f83->`A>Ao9Y3pU)wKp|3Prd:*`Ma+te)NsQc~<#0#PZD<k#LJ5Sr{2a19o;rNro');
define('SECURE_AUTH_KEY',  'A?9P&koW%*q?F#+X?c-8AG+[kOsizz+QwnxV[V6/Y8lJx<M89*U+d8UCA3GPvT:%');
define('LOGGED_IN_KEY',    'RL9>!#37Q6<3*NrEn[il;=G9.xhO3uIg@jJF{NA+y50g~~10C.8,!r+8:s*A^:p_');
define('NONCE_KEY',        'F]!###/%rcsiG`8,]-gxqf.E>8~GL4Lb>|+bVY!aG.L[IK9JX}To.Qy{zizDW^!^');
define('AUTH_SALT',        'Unia@M1#?:@xE,{u/s+5QnPn*A}Wr[vf5DK%=89Rn|NH(g4SzU$|(n3`oi*p({8L');
define('SECURE_AUTH_SALT', 'h1 txS5=atA3[9(.ZTXN:e6N6Z#lRg#a{>6_%2onu;v_8^Nf2!I p,XWaz>=uNM}');
define('LOGGED_IN_SALT',   '7_||PZLO-Vo;YZSkHv~1tA!loCmJhqu?z|C.1,cwvVa?GT<@CiX#;TqScb?e^e$U');
define('NONCE_SALT',       '$I4d8nJz[NU9FA8_xJhpc:I?Sq5^7$Ylg+t~@v$}{MUGQM-khENvIfJ!tMi/QaQ;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpboostrap';

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
