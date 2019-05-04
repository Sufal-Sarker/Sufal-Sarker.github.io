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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',T1R7&de=^_Z(S/znfF1*uK}&vHe=mmY3_LX>F;6Ils@Q/Ewv3ri*.<Vd65rRvhO' );
define( 'SECURE_AUTH_KEY',  'u=D;_[0qD28Fy6Cm#JG]N*ky|(-yA<2a6$Kpu/a,nkhtrQ`/M}`RMjISp*jx& c ' );
define( 'LOGGED_IN_KEY',    '- g<|2mu:Bfwno{.HU<r._TbYUfd$mv%0P;EadN|Tz*6a7R`u0^QhoC)p9:cLDEc' );
define( 'NONCE_KEY',        '-2c(XjV&-o{5?LL6{P_[%~{!0jmebY pdFV)jR* -&M:=Bz5.UnoG:n5j9u>]1?b' );
define( 'AUTH_SALT',        'J}k1M/cEFu0 n_*TGCS])K`@XN0iEC-hOkydYr&5km;weJJFFtkZnkZU<siwjD9!' );
define( 'SECURE_AUTH_SALT', '1n`jo=<]# {O/1h~cd+[;?;pjd n)w/ _3_lR]mcGZkZm`#0pLsnmR| FQ1~;]zh' );
define( 'LOGGED_IN_SALT',   '<R?,,=<m9e@hD^fz# sA*wf^*cN;MZcv~6!sD:Caq@b|dHco{Fvo3oD<}b-do57+' );
define( 'NONCE_SALT',       'Q?h&R}nRc?!h(1[Sq+`.3L9G.JUh% EJs9}dQFU]X,V)$Lv^GkTX>;/kr;fW#1[u' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_78365';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
