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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/uomleoso/public_html/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'uomleoso_leo');

/** MySQL database username */
define('DB_USER', 'uomleoso_root');

/** MySQL database password */
define('DB_PASSWORD', 'bestleos2017');

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
define('AUTH_KEY',         'gl>QC*,v-a0FFc1`4ZgbN(<5e`m<>WMS{|y0 >C!,`taca =`R::6.52bQbZAi=b');
define('SECURE_AUTH_KEY',  'L%WTp8,bT08aJ,u}WH{S}^{);}+wKX~O`<Eb6 }O[V2HT{r6f3jq8zCxtiU>dlTl');
define('LOGGED_IN_KEY',    'gX. RfAKfG#1~e}?+JCQ<@<]%$9lG?B>Z7Ps>9Q?6,i&Gsp<uEOZ=xJHDE[H)<z=');
define('NONCE_KEY',        'j(pXQhH_DwB1!@,I=}@M_yIUGFe%kx87k)@N.Q+;zd-&`Y0n25#AVYtzMMSqJ`hM');
define('AUTH_SALT',        '2u#X(8hE1?;%yMLM**1bj>a0jG>~I<[0heeM?D2 SdvYp_?}t$4)<:^y2%FF_Xc@');
define('SECURE_AUTH_SALT', 'Giu1a[cZua| Gt8wnSagG^/qL@#{JOLO--T(>rk;j)fOrA:lj R`e_%qr?![w!i&');
define('LOGGED_IN_SALT',   'Zd)wz&Vf<WD_<vU,]81E>%4H#<Q7pL^V*6KVW4o$qhY1/[,)(/4vnZIIrN?t]:a~');
define('NONCE_SALT',       '9^K(5,Jq:skV(tv!q@PJTL-:by2J<wKW~+9R~bW|sI;t=[Cho7Lk+|ZA44={xv9{');

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
