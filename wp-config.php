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
define( 'DB_NAME', 'cloud_db' );

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
define( 'AUTH_KEY',         'OIF|ez@Asx<8q]s~<qc)mS0?uzk-bJ!013E&jtj:Is8_h+|eB43XeTrTe2M3`IQy' );
define( 'SECURE_AUTH_KEY',  'KPh ai&Am{qw|n.@pp~NF(*bZvip.UOh[3N`i[Sh.nTF92Ih8+@3v0HRu]ElwM{f' );
define( 'LOGGED_IN_KEY',    '7Fv9ED?>Oqfs]YCzLGP14<2oI_l2&wppsOs4|MuZrFyj~bgD{#K[eNASVr*QP{Dn' );
define( 'NONCE_KEY',        '.b>Lwv@Vket0$bAW|0~}vD1`*%Y#Z;S8O1!W&s1)`fwO78mgX}3c&L(YY:AnoC9_' );
define( 'AUTH_SALT',        '4zi4Y1s4@lZ9>fzKsb*.MKHoT#^d?Xs=jxk6mNW}Mog7,9b8D<x8hFkgNv4i6-(_' );
define( 'SECURE_AUTH_SALT', '-sLO47VwU6utnbXh_Le>zb%:/>^#:Q`h]C7Yb76:/:P#Gm-pD[d-^QP&fr&Ij`DD' );
define( 'LOGGED_IN_SALT',   '%vJVSm!4}.^btEqZ*(8X`a!*|3.*SwL0_fkj4SVM,J=5RFN7_YaF?Zp/%h9/UeP*' );
define( 'NONCE_SALT',       '$P3FAE5Rsw.lg3jw m(4j#?{P*LVy|r<f^WYKt3=&0//U;1IUsodkRe4.wCmaG>`' );

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
