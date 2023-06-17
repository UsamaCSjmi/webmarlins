<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u850314487_wfY66' );

/** Database username */
define( 'DB_USER', 'u850314487_069ZD' );

/** Database password */
define( 'DB_PASSWORD', 'dgO4dL84sB' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'wNFoJv%eHk=?-i&Kz;TkQ,FDy ;H-OG=60KR$=cWq$vx*OWqFhqgD+_UBxnX}to<' );
define( 'SECURE_AUTH_KEY',   'T_pdHr@=`gA:Dl}B=F^9l~]E1 4F.,j/-p%]WcZ-BmiM@s#rT>zj8wx`MWx0%fMH' );
define( 'LOGGED_IN_KEY',     '/9k(0x9)GNMs3rX^~d` g!3f6,8d2puNu.5gA|Czgm6S8{]`iu{/TfO%u4_H,( -' );
define( 'NONCE_KEY',         ';jbKdF>YGc:)b{_ts,p4#iplB<E(cj^_Oq,6~1WC2  rmj%1:&>CpA|Z2I?}[^=r' );
define( 'AUTH_SALT',         'n`MSz d7pbt3`/<WPg*^v,46qosR%gwp0XMzVXg-znh(~s;WjJ_>`f!X$~Bzr~rk' );
define( 'SECURE_AUTH_SALT',  'j*rn+BQ.l,W6cl)lu7ei0 xUXsEL^L+z?d?`-KZNffsD+jtwG8Jy/Nt_[7|{R$a2' );
define( 'LOGGED_IN_SALT',    '2KkROu<zuFQLhK){lvwL#^sI+]SMTrqW7L@3l8i[^gAyVI&>]wGgDRMQ}r`HRG@:' );
define( 'NONCE_SALT',        's@$BhjMBPbx:o8MR@.`KyC-*%C3j5odcJ>u4sW)w/[_ZN*r%PYFF:-[-|zf5qx>{' );
define( 'WP_CACHE_KEY_SALT', '3^;6R?qg.J/Q;sFs:Gl#WWN]2mOQ-#z-v77mE&nD8NHyBuWeip3t3>}EU(<<Fo}@' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
