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
define( 'DB_NAME', 'dbws21' );

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
define( 'AUTH_KEY',         '0yPjlcf<JaDm_Q:<-:Wp`8 dXR,M~dKQch?}nSCuW$+Z3Jh>;`^WDhX!!]II)h68' );
define( 'SECURE_AUTH_KEY',  '$Oy}/ N6GD@uCOQ<i>eYbK=iF4#CoJJQLZw[&UzUR`<IMy{,OY)-=~pSN1NqwcM?' );
define( 'LOGGED_IN_KEY',    '$|Tw)=1M?NuZ4GZwqkq7.N3PzAbaNVa9%Q%:0ZerW~, +#&p0-SMf3XL}9C%eTVa' );
define( 'NONCE_KEY',        '>O^:f[kd?VZF9lR>AV-9w|64 94wp9P!_-)J;ajb7=vqx{=KP3erT[3)4j`%:l50' );
define( 'AUTH_SALT',        '%V2rhPcw1 QtH2]{aDca(%k79YCFI{z8#,PNhH|Eyn_FT@oMJfd+){:L,|$DbP4|' );
define( 'SECURE_AUTH_SALT', '(~*EB>4LRDox1B`Q@CYB-q49q _yzx$hdG_E0pcP/(,`:t#9q^5SLI;S62)q*n[r' );
define( 'LOGGED_IN_SALT',   'GE3$LO?CAVG^=<k9jY?GKhruoe<]I^k!6 qCD.-]5BAuL2[h4F8@.G>ADt$;zNLI' );
define( 'NONCE_SALT',       '>Mg$WQYuYoeS~G7-y(4,;<gi{^W<B24=N}x@o;ML@TSi*=Ml#ky;|.K@8dk5;})Q' );

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
