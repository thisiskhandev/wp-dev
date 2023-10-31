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
define( 'DB_NAME', 'wp-dev_db' );

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
define( 'AUTH_KEY',         '<sgv29a5(!fN@O{5?]=H{U:Jf}H9=G@[IeH*R-+3]sPqk4=30BZvf}fD_~8|Sn/z' );
define( 'SECURE_AUTH_KEY',  'gqd[22QX9LRAj@0DTYa1]f4w7/$GP}|HO8F<{O-L]yx0b%eU.Al_[yo8-GYJ$Z.z' );
define( 'LOGGED_IN_KEY',    '5(oc/_J2-v%KR]pV/,H0zxYdWYSc0e*TZS`3+i`^EdXbyX}*2/$GFE]DnK<}wNp*' );
define( 'NONCE_KEY',        'qedEFv>&Mp@Af=KMY.O#q6b/8eC(tW^&@Zy.)}RP>Qr#0DX=o>6,mF%vKgqs?K>8' );
define( 'AUTH_SALT',        'y!5PrX%08?x_#?Oc0wkkr/:*Tz+m?;MtaXCIL4W]F42E/dQ.i+4-B%z$&#e3Aaeq' );
define( 'SECURE_AUTH_SALT', '4uoe8qIPk[Wk>HErJcLG7YAm.du@|b#YYd`:DHYs^((36][]lu#M2oQTj^FR8w|(' );
define( 'LOGGED_IN_SALT',   '#$52PwZtn0k<}7@P{~j@.7zwqSsg[uT^r)S$Fm#(H#.7 >)P/erxW$<xTrF1]nKx' );
define( 'NONCE_SALT',       '-<&J;yB]@DhNES{9rV&/*T9@|`t;)xXB;%yh`jyFg (ohJk3p+S&#mI4wN6|=!6I' );

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
