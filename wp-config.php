<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'maxima' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'ec2-54-243-238-144.compute-1.amazonaws.com:5432' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         's$deR)&R+h5M5/P>}PjABE0~TK%PP]-?]PtTLPlIc=Z7dywe0y^9+i4.K:-GS}AS' );
define( 'SECURE_AUTH_KEY',  '?gRp~ZI^W:vrfuSAfa4SRx@W dA-q9U%,dH%Woc)nw+gaNeC&TVXO{DmsPn?9E.n' );
define( 'LOGGED_IN_KEY',    'TQr>VK_ uM/j5hyx8<B:>EY}!L!T1}ikAtMTA| J}1~Q7Y]E(4XR>O8-GlF|LyH>' );
define( 'NONCE_KEY',        ',nH(z6ei:`X!_~+iCDLIRSrN[*K80z+pj|xt;i<4P!11m](}s>KZD#R$kjuZ@4fE' );
define( 'AUTH_SALT',        'eb.U^P/9jn`kI@sY9Zp?uXtLU5bi]Mu|cH.B9*7WAY&@[D*ju#(Oq4mG#E}D XUI' );
define( 'SECURE_AUTH_SALT', '7-]bUUMfA~}Mem>y`X<8qb<;glTf{.)Dt;RxXwu!XeMgjZ9s@q=6VE&{#tl=#eYi' );
define( 'LOGGED_IN_SALT',   '}4bYCV]=}m_dhHN7plV$pKOc/ -9*;+Q1V}K.s]%Efaiyy goOnE}7m^~0cL(fcD' );
define( 'NONCE_SALT',       '.:UfG|:o:AoPfj+1(ZOfsw$b2;<ykBZ.1s@u}V61-0s%c(Sjl=SU>jN@JM$W@F14' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
