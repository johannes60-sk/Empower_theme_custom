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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'theme_custom' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ' 7C/ba>E9;#!Z3ze>I#Ll|(FsF(UE2J9zScuubxPs|wf7(5e{}M9GKS!%O 1*v,5' );
define( 'SECURE_AUTH_KEY',  '/|HW|_wr|bnxzx&ZxBG9QKn)EFUkL;g-CcL&OLJ]W=2`JA,$,s,@#edd`6g%-@W]' );
define( 'LOGGED_IN_KEY',    '60T{>@}NEse:LU0]xX$jvgEC%}ri,!yEk3}E?dVUa0~aP(_#p3]e[YbwYj$qBFd]' );
define( 'NONCE_KEY',        'hl+j`6<yi4H7&#=@-Z*BUCicF>_~:7&9on0qQU{>4y+a=C2$4DNG.tN6/Zrg>Rug' );
define( 'AUTH_SALT',        '.rKoD1 @d^Y$+GOpY@J~_?8Z 2^5P@!rK>& O)gI4w`85${%a{+Sok.xf7n1:)=^' );
define( 'SECURE_AUTH_SALT', 'ua^q$4NzHJ+c?EDf>>mu?>350YSqj^8(s2BvKQdJ|r5W~3#>?>/oAkoS->nxk>@6' );
define( 'LOGGED_IN_SALT',   'D5d76%zS7T,8u[INehCHRZXBt`2ark?!g1KQV~4=P)Wk<No|7?46[nTvptXN6g(M' );
define( 'NONCE_SALT',       'QlX2oJHzPV<1S8Jm#BTZZX7pFL1vb=$rVD~OY6c&Jo^T2Zjo(8 V}sG0NHXV)64~' );

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
