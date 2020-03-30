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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assignment_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'K3A$;Us=j/(W=8m wK]/NI,CR~%Yb.oCz}.qcq)3j1eE;{sU01XLr:M:+Un(yoyZ' );
define( 'SECURE_AUTH_KEY',  '2fS =N].}qyhDfp$x?|eN}xWdF{m$_YU/,+>o/K^U(pUE9Xnm0[@IQArEwhHunvr' );
define( 'LOGGED_IN_KEY',    '@E`q|7Wxg8#}>U|WW?,H=ble7qxyo1nIa2sqRj%turK <A(e/rW>n@#yeb,%gVsM' );
define( 'NONCE_KEY',        'Blsk1_$`kJL#CEU(G}J6jEsIrKbyx-`2BT8AdV*!,yr}N6F/9k[/pQp7;s*G1.(q' );
define( 'AUTH_SALT',        'DT,.KJEi:E@fhwkP%])&n5k$RAv#`+e|Vt%&hx[n?wL8tK?IpT< jaYYn4q&S6U4' );
define( 'SECURE_AUTH_SALT', '-^5CY@-k_4QF%JB7?aTEV!3<8]$M-G4T/YHL_X]6KuvU|TzOXXYkG_`%)Z/Gh.b@' );
define( 'LOGGED_IN_SALT',   '2`*cxYpLm7EkcV9qQmfY5*VL_+v%L;Jiv+?$u1]~Nk/7D+JnlS{}x.IjZH-#9$f!' );
define( 'NONCE_SALT',       'jo)BsnT|YLOj$Y$nJ!Vb{PkQf>>=B};h_#{<MTm0(HZO| rKA.jo{JAt;o=O!{pX' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define('FS_METHOD','direct');


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
