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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '7dQhDOfO/J|MTBDOf@f4#X_(mjVk=nn4SNK*?bCv73.-$#a>1t9a=0D~4$!DklNb' );
define( 'SECURE_AUTH_KEY',  '?iT%~g^^_%7Wc/G8=kE@U-aWRitVld.IyR)54$Q)9 w,Q8GHlOuZ{=yGF]I&/r0w' );
define( 'LOGGED_IN_KEY',    'Hv&2eQuZQgg5zSO*<>(F$1#N/HS;DwiFu_(Xt^H{^#r*N%C6[bA9G,#Dm<h=+_g?' );
define( 'NONCE_KEY',        'w#ytSuI(/JI5(P19V9>Q2jd*NksyXB#<h?3b+[RHj{%^6^73qYZ<(8D4]`tKkF1 ' );
define( 'AUTH_SALT',        'N)FN&$9DCRB.x+VK{LRI)N3me5^yw=4fp@/c`0huF?w3hh8B$_7V|j9OVz-(Go:r' );
define( 'SECURE_AUTH_SALT', 'oPmY^n-os_}hz@NRmMmY>b<Q{Sj}nhpR.<!UIPUTm<37(f&{{2k9*tja:&1I/%&N' );
define( 'LOGGED_IN_SALT',   '+6nWo~2ZpQdLIvX&%n+kOG9!,$/>55mpK8Suo}(81Y~l+uf*i z9Wpc_?,+^`r55' );
define( 'NONCE_SALT',       'QP!A(yO1<S,G0w.MSup`YK;[Ka-|/ucyhI,F-&)_x5#fJPb&YHkb-JBABFXS>oZq' );

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
