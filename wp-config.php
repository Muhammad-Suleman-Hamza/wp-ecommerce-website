<?php
define( 'WP_CACHE', true ) ;
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
define( 'DB_NAME', 'u375393886_ggwsI' );

/** MySQL database username */
define( 'DB_USER', 'u375393886_3H07C' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hahBHYg386' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'n9AZTZb+G#e)AV^w%~lnLY92L`CT{>0k#%)+C1%iiN`/%%%@GWbiz_zgXAGIOpPC' );
define( 'SECURE_AUTH_KEY',   '|+g1$!,^/.*1$V|Gt-_Gv[xh-Ap.n6L)>Qs@kalqio&>fH1rul>MV,+VJ?mLn8F~' );
define( 'LOGGED_IN_KEY',     'zOYweLRle<zDRVikC:J^K$#}/N+]^<+juTlhj|(U%}gVcdq<4OCt33rXiwg2RA`!' );
define( 'NONCE_KEY',         '0BR^5z`Lp5PZ&u2!aXDRIgeu!h;~nnchwvZDU~/ee<]#}av(_y+uE>7;huRwyX0*' );
define( 'AUTH_SALT',         '&#2G|tU*Y?+g6[*dNba]8u@qbgK]7ry}F4@YPiwV!}&5ZFTrFu#m?xX/4DXFEk2v' );
define( 'SECURE_AUTH_SALT',  'C5,{O_8-g%N90|D1#rCZe@-G0ZM<TuNLkM0tCZb;]BJmv]qUZvexeS@>bOR2 N~)' );
define( 'LOGGED_IN_SALT',    'UuQc$dI&#FQ=m]%NB#n&r}!_r FVC~x&~aYs6@3Wq|.uvo-[jNJ5c#[l8%GXvZjw' );
define( 'NONCE_SALT',        'F]2Js-rx5|tS1mN%h4go7:8K6&yj(GkqdP:W}a~tdFS6]a%$.KZ`IM8!rM!UEE},' );
define( 'WP_CACHE_KEY_SALT', 'qOm-Lvg8y U,t}7<)WN-Q( 5b!pT:INm0X`5pX2am&y+`u-7i5+Ay/(I=*l1)4wM' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
