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
define( 'AUTH_KEY',         '902YKdC%HG69lkehD==y9=][MTu@ktdPJ+^;v$%R7lr` E63Iy `E![95Yj>PJ<t' );
define( 'SECURE_AUTH_KEY',  'cAJ6JZ?lR2Ns$;6Jm_xm~^KHZS;C.CkI_-j].0~aOuEfFEj S*G*H*eS#o]L&Nnd' );
define( 'LOGGED_IN_KEY',    'S-vd*2A#(C3]z!&2rr$k`O-7|F<`k)G/?(<?ub,9K}3-0eMKe|H`/{T7)Fd~m,nx' );
define( 'NONCE_KEY',        'p%a.N<FNP&S/sp{F!n6cIkYQsqz4(EDM1o.W~j<FL.HL,7&ty|bJ;O6x8ruj*fj(' );
define( 'AUTH_SALT',        'Zfy-57,z0,X}:=f$Tfjst#kn+a<dE{7>Qf9NRN;cs,!EVR3@Z7t Kw;%)t,K~XA ' );
define( 'SECURE_AUTH_SALT', '0?58$-15JUb4J{.[iqNh!u1c[^$/9|5+xj):7N wA %`WnE=>E T:F*UnTC#]WTQ' );
define( 'LOGGED_IN_SALT',   'm/`=GSEI)?T#= vMRG[B*[t>+6:,X4&|*x~2;[p_!xgPSKa9>dyPchjDc~3;ic9T' );
define( 'NONCE_SALT',       '/KY|J9)F*h%(S7ea DQ=]+t9;(=UpJWjP?gyb&,(-6@<5Uy7uT:icvA*0S:H4&9I' );

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
