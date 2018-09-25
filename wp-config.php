<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id7119942_wp_9ec21e24de08c8e9e26c1caf75cc3c64' );

/** MySQL database username */
define( 'DB_USER', 'id7119942_wp_9ec21e24de08c8e9e26c1caf75cc3c64' );

/** MySQL database password */
define( 'DB_PASSWORD', '872bcc05c376d33b6688ed707053b69b259c6e0b' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jkamb5Mx2LCh:h8:HyLY*#iT$-;c|YIT>Q/2xYu2d5Gif LDq6uX/>=|>or{#%-O' );
define( 'SECURE_AUTH_KEY',  'sIB/Z@fRnK[`7V!)FZ6OlfK?@6y+6_mk!>^v#0?)mp0 {;M?lud[<)Hi-hDy>IW!' );
define( 'LOGGED_IN_KEY',    '29b@&Q<2)m1D;fgsP4t*+C!6}whR}Kl1^G}zL6lJwoHhh1FmtT]=Ory[uHT0N#a#' );
define( 'NONCE_KEY',        '7ni?4vTy_7V6HKM=mjd q6(w){3K$Se@Lj%cu= /2>Jf.?:aOI(?<frLyud6*GJn' );
define( 'AUTH_SALT',        'L9L|?lPbY[nH!!ej5>n;`LeM&[Ah h#=0w`W).vT]>?#:Sp|HBS^|WP{kREv4H]4' );
define( 'SECURE_AUTH_SALT', '-sgTR=a~66ez}]d,*-EDj9q(w~oDcC$3Gk^L>j5m)`-HXlC$cxrXe71erlO5X|I-' );
define( 'LOGGED_IN_SALT',   '-j9m|4n}hasc&~/q0h}MvBWn;-!Zb3< n sf8lxs#F)IE$vf.7-]RcAys/Xwsz1N' );
define( 'NONCE_SALT',       '`]^l^I^^/ Ce L)Yl6?r|zfQH!9orhm&;6X6Au&XA-_Q~I9j55Y3e-~7R|h|6H0r' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
