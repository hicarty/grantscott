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
define( 'DB_NAME', 'grantscott.com' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '!9wermvacs92' );

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
define( 'AUTH_KEY',         'iU&.*w{,LFiOJu}s6]&+s;YpYJvxCh2q1m9O[)AG=v+3=^|Qd&&<-!0=+/U|-tDR' );
define( 'SECURE_AUTH_KEY',  '[YUf%>iPF/4rR%GUEWTGkwC4;xr!Ox}j>}fee84&NkBxDXn+71;?J15U#e)~sH`*' );
define( 'LOGGED_IN_KEY',    'E2*nq_loeXC|z|%2EDX^L`4/8@t_b%BaDb-YA{,!1PAb&`$<6uCwgeRfZ=4dw1#.' );
define( 'NONCE_KEY',        '5>#0frD&ndJTT1h)3WN4])2wYL.gA!/z?0ZHs-bFX=<9OeZoyZRjaa<C?+Zm4p(o' );
define( 'AUTH_SALT',        'GC!V!bzVvYG$ii{btRXq iHZ=up],,c3k7pkHx8OSsw@Kt^A%&s`l>~J3M=eD|oP' );
define( 'SECURE_AUTH_SALT', '^E8koj~|mGjNL:1ho!{N4<;`,gGttVrSx1=*+HoWkZW8f0tXmwG=|!,K[R]yy[lu' );
define( 'LOGGED_IN_SALT',   'qg,/<.Q)/4i nTwj4dwsngGVH@Q9o!KR:`H7;P)?i<Uo}[BxBOyE2IR6,+~|H<RH' );
define( 'NONCE_SALT',       'zlZ~SR&Qbp9iCd/oM}b=xmd[!Vj!3{|-- <x]$S6dE0/t.SgH4aA]xecAb}FDdda' );

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
