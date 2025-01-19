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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '37b9+3%[$Ol<XM;1< 9(V/N9j~ pmN5=>:{x[:t=^PZDKSim?hfKZ?VMKu;_K}C,' );
define( 'SECURE_AUTH_KEY',  '=z4RNc<R&kxb%BtE%zXEYm1 uVc/21h-xW~,jUoMu}ylX!.=KB([ou0@dzV`<W7w' );
define( 'LOGGED_IN_KEY',    ')vxZHvZoM,?^_;y|PlAW,%aTa3,0h1ZOo4boc%0^[[/-3h7krqh=f? iT=]QS#j/' );
define( 'NONCE_KEY',        'HVy1bz%1muC,;Kr:=akv~lRi6X{Kzd.uY~%$RE}:@f!g7,7olS?L4[%]lCcaD%MY' );
define( 'AUTH_SALT',        'fBBn(^|m7 Gi7)X63_rumH5ICR]r4`s;jSop)1M8Dzj  _,*mAIIA)9S3|@*!T<i' );
define( 'SECURE_AUTH_SALT', '.u[COS`+<AhPB8>(;)N5xpu(p0XtGhz dfjGgFqEiVZ7WM9ZmaQq/NsI1`<~j*Pj' );
define( 'LOGGED_IN_SALT',   'm/foYBu2uB!_zr:}kW09p~iG(KQFD$Y_yGW6opX>|e{xPX~YCRY~;P9B4+Q<k6;q' );
define( 'NONCE_SALT',       '!9yX?.[oe5/Q;7!9;2R-ZbSmBnC4}Fyqq`uXO/xq{DB-}#49l8h_i[[-KgY/A9z`' );

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
