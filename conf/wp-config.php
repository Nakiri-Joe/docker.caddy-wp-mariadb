<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('MARIADB_DATABASE') );

/** Database username */
define( 'DB_USER', getenv('MARIADB_USER') );

/** Database password */
define( 'DB_PASSWORD', getenv('MARIADB_PASSWORD') );

/** Database hostname */
define( 'DB_HOST', getenv('MARIADB_HOST') );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|R61*K[5;08QoeLAtT6BAm<Rh+|3yz7F@.mZbX>dZldTwk$i*u7 -7(1;BkdJIok');
define('SECURE_AUTH_KEY',  '{s0~~ilM-B+}vLk?8{ |eDF&:]VvXm`23$okCW7Z7miJtHGf&*V>C~h@zor!IqLr');
define('LOGGED_IN_KEY',    'Yvy=jRv@ejD;0$z@c+jf-!*|;S.4UowBtDM1;EF~E~@D~6x&PP /%284-3pF,UBV');
define('NONCE_KEY',        '#B2;el-t*h{yQ%MZY>Xd_G2A9bK#6Xq8DDrSa$~nUEH$BX;%CUP&!I~rd}7vO$3a');
define('AUTH_SALT',        'pRO#rm^Wh-VXn46,Cwbkf%q[M90`~y)MpPCam+kdqJHGNle)bO#3yMY%1Eb/=8H`');
define('SECURE_AUTH_SALT', '=uGZ]$E2~UD+=I0rz}Y&1+kz:1(O7g_fo|?`)c[C/UUUj>)_#+O0h6cdcvU&ue<X');
define('LOGGED_IN_SALT',   '+0x]H9!ZljRyhX#GSV4gr1F6e<?3%,P=S$aR|FVJaA. AYJz>,U??,hUJ>,I4F^w');
define('NONCE_SALT',       'A{$vF)u(Yf`FN_CkD!g@GrXVSHXN?@+q~`7j>) z7_QfEHMO?(c[)e7Gdk(z=KeS');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
