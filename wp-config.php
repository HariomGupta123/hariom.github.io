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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'i6n| AP;93Vj|f5z /hQS,L[s+-A?zwahmnl,]K3|oZ,cNKrrj9Q5= A63[uHY_B' );
define( 'SECURE_AUTH_KEY',  'onm9bw2Yc5|/Bh.j{%f1(@UB>YC_zI`sYl:._<#8z>/W)Uhg=>y_e(G!5}5 =i_J' );
define( 'LOGGED_IN_KEY',    'Ohyk08)G4K$[H1&y-EK`c>0e2$$s3^,ybxLxC}bn|ep -0SB>oC 7UDT=e&7<6&Y' );
define( 'NONCE_KEY',        '/uaDO[]a7|@R*SJ2 CsAXDZHEy}Mjm%4zqY]MLng |^Y;Z_K.~e4BKyfd&X0F*~A' );
define( 'AUTH_SALT',        '`v^B]_E!8u8ZW!! CKO[>fpZ[8`k}Hlrr:c<Zar_HG? Z#W+Cf!f-cR(J5d%:=F8' );
define( 'SECURE_AUTH_SALT', '4Z=T$ZR|p/h|:hc/7*4vxiCKTbn(;VJwGe u[Pgw^P<n~JI.H#6_2^GfK,;yzRfE' );
define( 'LOGGED_IN_SALT',   'z6QfZ[ Vb<S-;2$@m(q{r7!qk.*LlY,Do#SkVG-MJfFU.XzvuZB`Li1;2&V2K3.v' );
define( 'NONCE_SALT',       'Z,Rw`0tLgEr4^IT?I@uL[X!pgW=#Yz=R}`c4}aGWLm0Jw~P5=MKR|uIMHLswY<u[' );

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
