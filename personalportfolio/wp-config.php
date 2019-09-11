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
define( 'DB_NAME', 'charlotte_skibsted_dk_portfolio' );

/** MySQL database username */
define( 'DB_USER', 'charlotte_skibsted_dk_portfolio' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Puttemis1' );

/** MySQL hostname */
define( 'DB_HOST', 'charlotte-skibsted.dk.mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '&?0L_4O+2vYui-V|#+vy7Bd++o,o|&?DpOCGp|9!~(3a#Yr*A8C>Yzx[h)05t1{U');
define('SECURE_AUTH_KEY',  '-%{3/ZVGP+!~W3d[+}?lT%` D%}[t./hu8kqPTWObgo4>r^Dp!Mpm/rCbQ,e0#J]');
define('LOGGED_IN_KEY',    'ilTJlruwqh)%Fm?yLw(&=]kmWr3:|+.-,dFC?F?JU#rbGy.p-Rl*+a y~qT`dXxx');
define('NONCE_KEY',        'ZUFY TI(!<+#g8X^;1RG@^@k|AmH)tMt()j#xo_B+l}]qJ@V}[WKz7po|9&cleP^');
define('AUTH_SALT',        '0b+cSm_.J|L+Cw2JJsWi|}BKJ90TU?|@4C+o.{Lt@<?MjiH>#-Bqcmv[*Y} yg1x');
define('SECURE_AUTH_SALT', 'oRGGz~2]=T1s,2v0OMK[n5Q@cme kF=-0Z)|h_$}N8FY-xp7_uJ9Zef|#SUFYEsH');
define('LOGGED_IN_SALT',   'q^RQ1_:,(-[;x:Pf{&0lq/_?h]|(pJwWQ5qb}YW7ePQ[d<&vows]A4&J5b)+0QZ>');
define('NONCE_SALT',       '3~|J5|,7Et9P)oz1 3?.-< ZKy[|p(.5$;6%o?wU>!}FfsDdg~e,HPtSuuL Ch@q');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'personalportfoliowp_';

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
