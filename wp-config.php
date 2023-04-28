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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assessment4' );

/** Database username */
define( 'DB_USER', 'admin3' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'c`UhE2E>b=.}hVxB:QJ5e7pqr[5md!G<BCbPk|BjRk~{+!rP4I;D_}J(6zq~;{$D' );
define( 'SECURE_AUTH_KEY',  'Jdp`.iysqdZwcJlNoa)8*yW|O#NVV2_lq2zS63~^r,+_7z /pN|LR?^I0xCnOS1~' );
define( 'LOGGED_IN_KEY',    'TW4iYyC#JE%qF]iqno29ZM4-.RK|j9Qh=3e3,[?%uPZppNO97oc;D;Q<W>hZyBBQ' );
define( 'NONCE_KEY',        'B.~VOdN#:s[X(y%5jTK|sg^an-u2wmf.z=fX/z23-e/(i_[h~Qyo^fo]AEB`oFp&' );
define( 'AUTH_SALT',        '~}=YG*MZj$  +BbO;@Ylx/*:|hxO%!-CeGiIl/%L.fm6kP+Km&C.8C3!X7K}([7y' );
define( 'SECURE_AUTH_SALT', 'v1.//x^{O/{pg&29),g7YdNjKu)pJlT]^N+@m =$SZZom%{PaRHw(Kdw0uKOir[f' );
define( 'LOGGED_IN_SALT',   'mTM]i]m{N(;R&{/jmKp0*uyWqR$Ck1U%h=yblG!n8S6unPKCpKCW(gLfK>x.zjJR' );
define( 'NONCE_SALT',       '/!]UfN#n7Wxqbe;j&>#@CpA)`jjRl7pv7Swy}0E!!Dy#X=wo4#U_Izcl f]|gt-:' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
