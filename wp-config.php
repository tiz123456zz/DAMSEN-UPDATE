<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_asiavina' );

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
define( 'AUTH_KEY',         '?Zxj%8P2_~6`hzZI[QCR8nUp+`UP6+c/@&S6zl%)%g$}XKWZrCtpA.R&ztM;[%:j' );
define( 'SECURE_AUTH_KEY',  ',&KVNH0H0}^h?^Zi&fjtoA)M+&+HD&%q)1cPisn2Ms[m=o[sC5H@1dV$ih|Mno=,' );
define( 'LOGGED_IN_KEY',    '}OacN3b@-tfwUTn84Zx>V|J8jd&1*8/mMe/<lMx@/|Jxv~&IoZ]2P2EXsIT&li(a' );
define( 'NONCE_KEY',        '9x[-Uf&-u{6!/mtY0HTuN}o*}S]&8D>rcPoUy cn=y5>|ri8KU$CN0{$)Fe?J>bk' );
define( 'AUTH_SALT',        'HlJMkUjadYd<JfFekB`V@$<o9G~9k-90#h5h^<tYU|3k%$jU%0zOtMskEhs7:34$' );
define( 'SECURE_AUTH_SALT', ';68?x7Xm#@3n{ZVCHf0s]l0Z+)mEy?4n(,KL0p{n+vIfX%5cD -74<f[#Dgmelt|' );
define( 'LOGGED_IN_SALT',   'L%0y@8@?kf9A?t_ajE|8zIdhl=qSzZHj48<2}wx(_eZ3>3R=,WmKgw*:;RK &nFz' );
define( 'NONCE_SALT',       'O&zf<O_7}s>[V(,0*r1hAa_P.KoU(C(#{?<D= <Y}Oh^=lu!k#E=DwwR,C(%Bjl.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
