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
define( 'DB_NAME', 'projeto3' );

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
define( 'AUTH_KEY',         'Jwbr#@F[OjY3`nMQ.R (@q?;SZMz4=Ic=EtMTF=Aai@F0s7&QpymYVJX0fu~C/}t' );
define( 'SECURE_AUTH_KEY',  'PZ1TN%P77Ge}] N5Am{_-[7Og?csO*Nw-kg{~f-]q/@%3e$<RxC<0JV6`55(2JEy' );
define( 'LOGGED_IN_KEY',    'z:]`])+/Q,2[Th2@|4Y1:uawb0c~>FhNdz/m3o$nf>2( Ww=W{C|VfRhVD{No2&A' );
define( 'NONCE_KEY',        ']-9^Ihao7N=n>I2XPDA)-__oWC%,A3E07j,x;(A+Mpk?&W&.6fw)vcLmfD6^Qm21' );
define( 'AUTH_SALT',        '~}k#6a&i`|mMJ(=)m6z*rS>f).]:xmT+}?}_)&z/277zbngv$O-eo,?7qfmoo}/O' );
define( 'SECURE_AUTH_SALT', 'Mxfm)eMS]+o6`}< oi]O/dG[A,9%qH2-$0L1Digh<BEQnymom2_+|_`{#?Us<a*j' );
define( 'LOGGED_IN_SALT',   'TcliO`ix*?1[(etX>/f0_~$Ui=*}TyZFju5QEwwThH@GHq7g<:Qvd_M4.bC{.dgg' );
define( 'NONCE_SALT',       'HSFxO/L>BI7XijpBdLq,&)R^~bjH}uc8,&9Gjo(5M m]>uK9d64YW(wcOdnQ)++k' );

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
