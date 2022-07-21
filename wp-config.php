<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'listing' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'vTVWByYHh~@(CUf}s0[jbi8gU6|6u*TM,!--@k&!(r&a[>]O?d$H(U/hq+~ynwU4' );
define( 'SECURE_AUTH_KEY',   'Z#V?,88uxO0u#M^agx>]c)/qX)Gs(^d9qjL!k2G*[:wU**jhlkOMF}T r3$B)BSC' );
define( 'LOGGED_IN_KEY',     'Xxbdumz;O0R<9%~;q9?_xm:WTwzO`I1jaB#EgSO0RVlLe}LkC@G~;2W0@V.~1Ww%' );
define( 'NONCE_KEY',         'vGuGa9SuTXJivGea>Dd}UQ6F>p+%04BkT&ax!SJdX[.~@%Gj?:8s.9d}%]6 EN%$' );
define( 'AUTH_SALT',         'f36`%^p(sxE0_@ApK/>)Q/[PT,z[q)WH-{@b-1?Ca.gv{a<Op%X??CQ.#z IOMHY' );
define( 'SECURE_AUTH_SALT',  'xv0O9(teQV`wiy3$93UC4p%r6QDh>!~7OvmRW;#[v rD6),G6{-fk*_Yp7ig}!l0' );
define( 'LOGGED_IN_SALT',    'D(,%$><cxE2n:o!oS{}zLWVed?hxSb!)?17.n(U@U%PDY~ Tiglc%%C80{Y)cNMH' );
define( 'NONCE_SALT',        'B>&L0jB+fbs5>OQAN9 `jQuGOY.#vM}Zx%R<c8>81xc2.Nr2V[#XtO6i*M-#j9x:' );
define( 'WP_CACHE_KEY_SALT', '6Vw~J)C x:CL#D*FO`bCTVo[*r_E+AvpG=wh%Z1T-YrfB**wb!L!a|w#KRC11%HT' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
