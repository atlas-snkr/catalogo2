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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'atlas' );

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
define( 'AUTH_KEY',         'e|ZYmJj)7=wwvS]}&gw+ctd#AjkzV~,z[w^;xrzjqoL3L5$jqtNEcoyO<z`F<*5>' );
define( 'SECURE_AUTH_KEY',  '>DX/vBN1!D%>>MSc[~4(l6J(xo9t5[<L}upn-^a5-BV/z?kI$4.1d(78aB^3>,aP' );
define( 'LOGGED_IN_KEY',    'w7X*oAQK(Ufj|hw<V=Vb*I|~bvz$4AR,K7[U<!>aR3Ywlm#[zx{kV^^B yaR3?0O' );
define( 'NONCE_KEY',        'm#m}@mc5gYx->Z:)3O2ez}95{|aiY &}f[uYf% B#{,aEB`7[m.xQ{16_7xH.sAY' );
define( 'AUTH_SALT',        '>]Scy*d@3cK5:`yn[OOsio*f7>YKtbDQS{xZHF>NjErwzEvl`k0n@,~{|-_QT|4;' );
define( 'SECURE_AUTH_SALT', 'A QT >cLsYGW*6<cl2&{hHB6I3B71S*q0=p,y3iYL&J_bTq&*$6>RmV<opR HcbQ' );
define( 'LOGGED_IN_SALT',   '2)I&8u`cD!SM8#82=7per*qXQwO93~1/S4GoHc,>*Zw-f[88rHV@L$PV;C*~<(id' );
define( 'NONCE_SALT',       '=sj[[ECqbJz4JsxCFKJ3dNK>vDZjaM@|U>)i_d#kp^ml~LNTlul>?U<AVWK ]-tz' );

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
