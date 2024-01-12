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
define( 'DB_NAME', 'root' );

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
define( 'AUTH_KEY',         'qIjOwZ==9A)]Yy*>l.rV3.)FpeD.w]ern*3&r&v)#I>&u2L.imfWUrSHFvJn*u1W' );
define( 'SECURE_AUTH_KEY',  ';Y&ffx-Abb[518GT9H*1dSoY^+mcGI*zniE>Y.m(y!PtaSH~/3ivq=QcSTgY.[<P' );
define( 'LOGGED_IN_KEY',    ':B?kz,h{)}nP1JZ:>${ad/Sc#s9=WfMF=d|XhBP@@}`Lm@oaxv$Y3vh/]&9P29sW' );
define( 'NONCE_KEY',        'y>Xc-P;lEx(|~6--p]KB:g|GK}@r&wEq&BkTlk`[~.Q3]oS1QTi^+d5HtpTJC6[n' );
define( 'AUTH_SALT',        'ifji?k#&o(_:M?anmjTxDN& {Rx!^cebq^3`1 Idp-ZUnI?e[$wesKmu{PLo8ZWI' );
define( 'SECURE_AUTH_SALT', 'QO>~SHs<v;,`0v,>v{]Q,*Wq+4tKJB2g<`Q[_IlY}3#Qk?tt/{4WR;z:BKvZqdC0' );
define( 'LOGGED_IN_SALT',   'q[H:svV)2cM^gNr5%q:[xlqf |fDi*-gb`.*f37TF[`c[pEA>_|dnIXdH89i;mX>' );
define( 'NONCE_SALT',       '<z03U({Hbh[ED?s<uDXy,e5_t%4Kx59!rB]n4=F8O#Co0aOC}MTa]Dl<-wHu1/{L' );

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
