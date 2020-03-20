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
define( 'DB_NAME', 'hello_academy_wordpress' );

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
define( 'AUTH_KEY',         'peffg5v_g<sI%i>(6O-e|t}-WQnZ{@hO!5S$Uh`;(BNuU^Gy~{4E6WSH<qT/?-Gn' );
define( 'SECURE_AUTH_KEY',  'L~uN~pCy:UFBCvNEuvXRG;Fc/-D9XCDP6{XCGVMyQ6k8gR.x3LD>S$Jp^MJ4@?6>' );
define( 'LOGGED_IN_KEY',    'sL(ts!s!>&*lmG%U~-9V#qw_*sQ~>BfZ|pNu]Q^.65z|a~)42aKewE{6L8^]6p:+' );
define( 'NONCE_KEY',        '1RB+UY!0ha@Y(KOO=fV%4rHMvFKtKe93&a5hU0DVx)v03! ]sH4@:1?419B#TLwd' );
define( 'AUTH_SALT',        'C8S/@0Bh9}/5~g|io7$.gw/g0(<rWNrOc8JDi5gDa@kY+:G|}=<HxIaCS07u2}%y' );
define( 'SECURE_AUTH_SALT', 'H-|vWeQ,0Zdl!cfb6:=tcZuUGj;T?$nrcPL,Y`zeNxqxR3Z$JZ5lyu_*TD]Q4~^h' );
define( 'LOGGED_IN_SALT',   'Rd$4vd0slw8Q~S28jx]G9OpRZDqBrX)mrSxusy7s8CV777pL_]7XKEctvqh>nY~*' );
define( 'NONCE_SALT',       '~#43wd0$Lw|}dmPjKx3]d7v2-36onWK@lbj^vN=$@#yA_]9H]HR(u nanVn 0YWK' );

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
