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
define( 'DB_NAME', 'local.naturalbeecare' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '*eZwA+;]0p7%6`@aZ!U.6^??l6xm>;~dn~DkAwp?H&KDqG*$P[jq9.f]ekdmDHX6' );
define( 'SECURE_AUTH_KEY',  'MCDgz+X{{T*-~,+fi}X];29ECn>+0ML7]TGruA`Zi!BH[^(S#pLGMEIA?qL9YFIh' );
define( 'LOGGED_IN_KEY',    '-|+`MBS}CqL^W5#QVk#+.M@iS>}l%.}pPa}DXl4>FHf5LKxAiK~02GMt^M$b,qi0' );
define( 'NONCE_KEY',        '0U_{4ss9*]./j)Bo|Gp5`Jcqu-{+=CtfLkW:]>,Jd)Y<I>smgM6_Z)N-?%`=2&%-' );
define( 'AUTH_SALT',        'saA`n49];0w#C7`aP3zVpIxlQa9?F<_v]^`+X^</nBy_~#?VqdQY4f#g!.+2to8:' );
define( 'SECURE_AUTH_SALT', ')6T[bJl5/?:Ck1#-dj3^s>u6R+cV[~CP8o-|ca.*&;b(jnc|p672DqvEE+Ad4:nX' );
define( 'LOGGED_IN_SALT',   'eB?s7[3O[hAZ_f;sI2eZ4!-*)@lG=PqHjJ>fVe4t#MT0N/o0mDHN#Umk2,sRv*N:' );
define( 'NONCE_SALT',       'm)N!N<hpt`[}>`D<Oj9K/ k>w+r~Kl|k;?ync,pli$[jJ~ay4=<PpY+aiP,ZZ}s.' );

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
