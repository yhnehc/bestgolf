<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bestgolf');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'z1v!N~17.(zYod/}1c{,sI6#q$u1u@d36eV_YXb#&9|FKqt[w59N3OC;M|w{+M_K');
define('SECURE_AUTH_KEY',  'p=,7fVfS3p&ST=<1O);xA  AKj2oFfwOT{<DmPS-hPI]IO%X:j{.8x?$1lJ^+EdQ');
define('LOGGED_IN_KEY',    '7-&0^(^C hkd+nlCDw_+ X%f/-q3Xo<Y$l^^UG6_Pb-uzm&1Qx.d3?ALiO%>Um%J');
define('NONCE_KEY',        'uK0`=tT+00G[K/@]2Lzz3+|Z|Q$a,=,VFEQP&E@py)J&U]|.?B[-GQz~Y+|48k{b');
define('AUTH_SALT',        'xe|K<)Ncab:W(3aZJ1^O9CWe,x;siqc7G(nwK+ZG-(wlp:%]w:?kVY42wDeT.K03');
define('SECURE_AUTH_SALT', '&@CTQX8Sm~5xP/-7/~K`#L.cf03}TgO(Sgetl_nCQ9>l?49],%#x/o<u?`399(m9');
define('LOGGED_IN_SALT',   '{m5)+,DBN;N8_e|-8+,w7|<9ldCZeL_pm)-Gij5F];]esk(e:{uLEnnuFbF#cw[5');
define('NONCE_SALT',       'q^E`OR@hjO34wDaVzASWJ!Ve!8DxnOEFMhiny.Ul#F@.QKmQ2)tbv3T,Gaanb1qr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
