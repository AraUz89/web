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
define( 'DB_NAME', 'instituto' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'VJh|fF3kh^F$%<9gg8ZQW<(a<apM(vV5lUJz^TduY4>8L[M|/@N2F0~nC@%1/z,Z' );
define( 'SECURE_AUTH_KEY',  'w^<*r9r1aay0lC*u99cX3:L6 @&KP&1g;a*t6LQ`US#Ijh#(+{|kIVqoEFR#218f' );
define( 'LOGGED_IN_KEY',    'Y2jO[nhYAS6/#41B}%F`C8D*!4%CYApff:Tb3+td`!z1uDG4MMp8;x$.dPVb590#' );
define( 'NONCE_KEY',        ',G=WtGuh(f,4@]|H?VNw:c4Ndr= Leki&Hnt*D>1x-%M:46n?T!2fYWT.GiX>cF.' );
define( 'AUTH_SALT',        '%/a%@QreP4IDHlz(>1I5GSK<AaDFb|IOFY{]Iur<H4gw!bFxm/`):UB.?MjpT;e<' );
define( 'SECURE_AUTH_SALT', 'HR_#BQvA;P[_sEkSUPgU E%QZs>BO>GRXpQi:!e@]-be<RJv$E&F>xkWNadyvL9^' );
define( 'LOGGED_IN_SALT',   'Sq6f<0Xn3f6Q/5+I }Eu?_VVo,g<U{D@$t!y&Kras0J,)FLl4lD84l[~<PO^o_bW' );
define( 'NONCE_SALT',       'Ww&#d1d3?b$2I`2f?w3&Y6grU8FLGPr_ktL:0} 4?#yYPE=1LLB.YY&&s=Zbp.5c' );

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
