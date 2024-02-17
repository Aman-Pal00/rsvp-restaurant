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
define( 'DB_NAME', 'rsvp restaurant' );

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
define( 'AUTH_KEY',         '}ib]$%=>w7Brxfn].)G35n }1S^?[7kbu@jf#aUTR7u~Y]d)Sgy*sFJEW>hy 7-D' );
define( 'SECURE_AUTH_KEY',  '$pd1DZ3dmC+eyC)$6;dgfZo~KKAkQBfmG8p7(F$25;n{|Zi]2M2gUC/rG?1b}KRx' );
define( 'LOGGED_IN_KEY',    'Ny)DSX&2vP+0FB#!r3ikaWtqf7KcSIJ}%F];<`>GSLblrrPuN.yy_=bH.%k.t#<f' );
define( 'NONCE_KEY',        'wS<#LD{Fzfspcao~}90*>3X3rN9[0!+,,`@/ga1YdW_S%8WPVsI+j0?%5[il)qH^' );
define( 'AUTH_SALT',        '+=v$<2uHJ?tRqR~KwUOp7CV2K1zznd9%M|9|B2dJzD`X[oT~oS]o%(~)<+:s6O^!' );
define( 'SECURE_AUTH_SALT', 'OD$mNFr)^b]i` Kp.vP=t^jY3PPUjL:#,[|IbcR-CL4H)~=xyoQKf=Vla3A4:02#' );
define( 'LOGGED_IN_SALT',   '{9#@w0/c&w#=l}f=L%lzTcNOC*9*ma9$QJy|eSy{zGM[l1Pl~!Y(0NUY5qMuC(74' );
define( 'NONCE_SALT',       '5S{x3;BzrZ>(iw|7LtF,uQMKS[~o+ttdQ|R=#9~yJ&YE !G?AG5XV g>kf$mxmP0' );

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
