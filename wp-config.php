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
define( 'DB_NAME', 'lambdanetwork' );

/** Database username */
define( 'DB_USER', 'Suki' );

/** Database password */
define( 'DB_PASSWORD', 'Suki1031' );

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
define( 'AUTH_KEY',         'W9VTMm/-0=#OvLl::7LXrWJ%av}`gh?$f*|a9qaZ(I8`6FHXcn7maZO: G?V.0 !' );
define( 'SECURE_AUTH_KEY',  'F=}7X%~CFZZO`&2FgjI{x9-0Td;{C1!w9YJQh@:/Vx0co|,8K.WIJH#_$-z,266J' );
define( 'LOGGED_IN_KEY',    ';JsY_CxkWITB<8JO_{B$Y{M*$F[.D^:U3J~O^JvfsNG8bHx wHV+DXUA:PQV-XbQ' );
define( 'NONCE_KEY',        'f{,n^;w}i,fi0yzpqJ#XbkM(NBtFR*y4bQv k].3%on(HjjKA%Vjx17CUNV)7oYQ' );
define( 'AUTH_SALT',        ')pcJRm[@y7qKL<Z#:5GGrW9Hb3HG|9:x#(EX9&p&U/`e;DBb%S6jnv[%BZrx]NXk' );
define( 'SECURE_AUTH_SALT', 'FEzkEI7.xS2<3)[L(^NUg<_gLJrHMBt8dTPHu;w;z*XJ+^/=,Z%6oC8Bp<#|UEI$' );
define( 'LOGGED_IN_SALT',   '>B!@&[+&uYL4m2N{c(zPNtTb7B>?1k[sO([5a7TU>bS3qT!h+1cw ):]]B=`VrR4' );
define( 'NONCE_SALT',       '<3*jO *n@3P*nEpg?8A%G%+g2P>MKaWL$j<r<m5/Zfl;z%C%9JF+Kqh(J%9dSFZh' );

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
