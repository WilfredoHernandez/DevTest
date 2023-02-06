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
define( 'DB_NAME', 'devtest' );

/** Database username */
define( 'DB_USER', 'testUser' );

/** Database password */
define( 'DB_PASSWORD', 'test123' );

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
define( 'AUTH_KEY',         '^SIIp%y)w]Pb`a3%ViyXEGw8R!zTU`SU<y0>|+*{[.;X[/#,Z5;5Fa8<LK+YS4O0' );
define( 'SECURE_AUTH_KEY',  '8)jdZ:R. =hssmOT>#*dh.9DX,<OZ}hZt[0b.qx[(%r8!aj8R$cy%cn-O6Pqz?(<' );
define( 'LOGGED_IN_KEY',    'L|;=-$~i+>(3Rvg-9!4/>o u5Q| 9R`#8rQMu=W0|c1g q@4yiHv[<%<)BbHU3SP' );
define( 'NONCE_KEY',        'kJ)gXi[p,rM{VMY+MXBk(RFZ.plEo!B|Jil%}MInm&F[FK4cL g.8gdusjHg y+z' );
define( 'AUTH_SALT',        'Y~%UUhMOvFvWh8TPJo69jX>4)a_:j_NUqhpmXn5Hqa%oX~%H@Gx8*`3pRxd_ig/_' );
define( 'SECURE_AUTH_SALT', ' Qs^_op{gB+iZd]nByTWz9 hNT--,dMiJk=uv`q8K))s+H2G{V7fR.]V3x/1mP$ ' );
define( 'LOGGED_IN_SALT',   '&c:;@<VNT$_@xf)Pqk>P1j.&>2$w0_4*;%`h,Q]6t(o?KvIfF#;BwGon|Ud2-y;,' );
define( 'NONCE_SALT',       'rsAQuH*(}-+,KOF((0f_A@k8pk/pcnI)hVOqu?|;S67Ffu<W_H`M^%a4V0p`<G0M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';
$sid = 'AC8d6dd3e9af9816f112846e0b767e77e9';
$token = 'fb6a786f909d8bd654bdb84e29eb7c10';
$twilioNum= '+14344781683';

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
