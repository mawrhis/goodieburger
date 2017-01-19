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
define('DB_NAME', 'goodieburger');

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
define('AUTH_KEY',         ';r|;mY#H5jUUs-`q5hZf-Hnc=eoRu<c$R]|Ul6{Do-55zycQ>ygpv yKT>:kp!-&');
define('SECURE_AUTH_KEY',  '<rsv+a=G`Ainq}9&A/Aa]{Jzcf!FhGEgd%?]x/0VD(#!6H>h`%L2PDC6r#o%~%&,');
define('LOGGED_IN_KEY',    'U/sQ?W3Fk$>M@o#r n$ow/?(i +WHi{`fsVwz/8,0<!}cI~5pSU)P/a%( P1wbSU');
define('NONCE_KEY',        'Cib.czAZeAzzgHHge>uh(qPBFF4=PJ];^)|Kuis!uQGbqOSxFkn[M3Lu/PaF$j0D');
define('AUTH_SALT',        '6e{-|HB{z~/YUWs6hR^K]3t1*E3b_-Iqo]X7^};j4%?4gHo<wt><<9ys-oWDT80d');
define('SECURE_AUTH_SALT', ':C;mI RX,zZ}9h/^yDv5LJLvluy]n BAhUjd[K>_^1ER^|nJMOy}D+7X1fFDzECv');
define('LOGGED_IN_SALT',   'fWD~|;~Mw&]Wl+?}In[d$dphJBr;P|V3*HMnw 8G~VoFHq/Ykp&@.j$t9RE!NPkE');
define('NONCE_SALT',       '{}6q4!KVM>F(=/-nhmOy*p-x7#Y[Uz,/l%p4PH!Ag~/h3Jk34fi.+ZG8iIc[.{+Z');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
