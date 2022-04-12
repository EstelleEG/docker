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
define( 'DB_NAME', 'yoga_email' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '$jBr!a}yB&pKz/qcrO>$T{i0vHh6wdtv&xA^3(q{leL/>Xf>0@+N <LZ!_=d8 y>' );
define( 'SECURE_AUTH_KEY',  'rX=z~~9~sSgi6Xho`<fgF,jrZH!`[`eBob4cI#p8$2ydYjm2NEyI`C{(HuXM=>z=' );
define( 'LOGGED_IN_KEY',    '}fM^xI~6rGu^%,g;3M_4@anQ<-=^by%{RH$WkM*XW_F1R.JM&<;b[GWoOCV++m+S' );
define( 'NONCE_KEY',        'L5c*${+!SZQstlE70:5qXIQIC#5CqNcRtcMbUv[L<k5aWT*|4(yyp-F1DQLLZuMN' );
define( 'AUTH_SALT',        'bAIK#MTRbI)AS+-c!=Yy$/(it)o[sE)u)~mWZ8K8-`Qp?.c.,U*fhUK@M tMx|t}' );
define( 'SECURE_AUTH_SALT', '/tkS}(evV?6:xqq4,=k>I:Meo[>p:oj(wuAhxBXw;B~nlD{q+&>,?.wJ}IG[e?XE' );
define( 'LOGGED_IN_SALT',   'Ivgh9ur_Q03f+UpQQ+?ZQ`rH@a#tOJ-Hn=)tCzg(j#OQHiqF~v}[{5fkb>o&bLvc' );
define( 'NONCE_SALT',       '!qEaO9dN2/eZs rqppQ>ujhw-n0|}!:TUzT4bylbVFPfF4Q_+MUmB=7W(v23KLCO' );

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
