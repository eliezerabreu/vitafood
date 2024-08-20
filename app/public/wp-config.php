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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '^4M n&VTCg1ER)$,wsfKCGdOwg7L-s4A}u8n*bkTc}z[1u?*Q<.^W2_-0olq?3VM' );
define( 'SECURE_AUTH_KEY',   '|2o6^&Si_qD&4lyY2mLG9?1d`sGdsod?xpFg6%s=5*:=jyPfT>jYlJIeCIn?>~)v' );
define( 'LOGGED_IN_KEY',     ',C]yD<i*K3V`m|+7.=715=a4zYz7|7<x*(FNe$z]m]|wa|L$;RgEM/e[C) `rH3(' );
define( 'NONCE_KEY',         'Or!PS;r)!g!-B=jndNMp=#g#b5m45h.6~h_|@A)#!lyGQ.2a#SPdXK59_pm_j0(K' );
define( 'AUTH_SALT',         'F3dWg0o#Iy5&K{I {C635sc;ZB>&fbxphH4?eHtSDq7u!K$):y0I58!l]><R{He*' );
define( 'SECURE_AUTH_SALT',  'nCnCrK{Mvg3^fzQk{>T2QQ(;^A7X09 ymA,}o)*P3Ln[:~cTk*c qiOkf+/I9b.w' );
define( 'LOGGED_IN_SALT',    '0m9kbcez&W5=G!jQ8<_bkvnJ`g`O3,qvwih=A44Y=Hf<X2ZYm11S)i/,5.VqY}+L' );
define( 'NONCE_SALT',        'zmMZn,Ei4<G{s6rHZd#7={mgyIr!E|x6BxfM$t( f2`ziH!],5;(ZnnuMJCI!K6H' );
define( 'WP_CACHE_KEY_SALT', 'TZ[X:~?(yFqbS`{hb{Ew98|)0p<** /,~ rn:R w8SkU;bHESOhpJhER?,trG=, ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
