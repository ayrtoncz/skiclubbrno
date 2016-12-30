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
define('DB_NAME', 'skiclubbrnocz01');

/** MySQL database username */
define('DB_USER', 'skiclubbrnocz002');

/** MySQL database password */
define('DB_PASSWORD', '5KVRx4UL');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '{<i(ABb1Z9%;2e|?RVGY`p:BoIbO%h+(]g%#G$ce`Ej0[]+3x:h<gDc1KD O5m.g');
define('SECURE_AUTH_KEY',  'q=0wMd0~?33mDp)LA@d EOG,.!md-^A=w;Q|1uX75&N)#x;jPNO0XXLOt*g iC[{');
define('LOGGED_IN_KEY',    'Q/|!x{+e+{i;zV0q<|>q5cZpR-XVywWZwh-|96~=@gg&YBp3z!)+|TTHGR,u]4Vy');
define('NONCE_KEY',        'jqK$)l{AL*S~Mov K)?3-hPMFWcMf7.x7ze2$GM}p7BX)#!<Sf$=jA<OrjxI?rL7');
define('AUTH_SALT',        'n%tV7f=l-q |;Q)>_6dU~k-:qKQR^k2:UkMM3w|TgCxTNmPao&5uTZW1|6h;x|&+');
define('SECURE_AUTH_SALT', '6+Ou |lEAs>yy|5Ar-~{b]+[RAqK>C_,}|>8^FDa+XA?q`|0h}O>eEPTjV7lRxv,');
define('LOGGED_IN_SALT',   'hxk#C,7h^V:D0cuP,-#I}>S?#03xO>]wG-`sy.D9:W;90Ka! ,CPoq|vkHLi_|+D');
define('NONCE_SALT',       'v]fMf$(!_*T``UR@6}Y.RW<+O%IpgZ:%l;Ay4I@S2w`Z.4~FFyZF+-7niAN#Yj/4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp431_';

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
