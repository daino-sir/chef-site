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
define( 'DB_NAME', 'chef' );

/** MySQL database username */
define( 'DB_USER', 'TestAdmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '}A]e/CC,M,+l8H$P@a*nQ{]$kPI!Sr00j>2TH|ZG&&A&/yOE^Sf`z%uf]P->M!ZT' );
define( 'SECURE_AUTH_KEY',  'GkSzk<,*,j&>l7D&Y;9CdU0|NX:BYYFbR|a[8):2szpRbgw~E_Nr!L)bpSvK&]4`' );
define( 'LOGGED_IN_KEY',    'md[^!QSz6s[Fod@ryzCq>n$Wm$/Il.0Na!nHw&w#M#BX9g&>Hz`d>DiNQ{bCLTx-' );
define( 'NONCE_KEY',        '#9,#%,#gJ}11Aq_2jgkAb1[/^R-o}!/.dq=~z-N`[Sxs&{[%opiuISMg.+5WaltS' );
define( 'AUTH_SALT',        '8bzk2G:qEmQREb!?-o>WJ%.i~=AA%ZD>7Wa:|]oo/z*w;.t%gTgl(6ZVU/UpUo1`' );
define( 'SECURE_AUTH_SALT', 'uEP2wi/L.Ey|ZOU*%umzB bcQLo,CF3I?6. S2yKo=I,lAc/>+?si0ZP4YzH$%!5' );
define( 'LOGGED_IN_SALT',   'n[:.hyZW5RBf|0dfqifo6T1HJI%VN,G^J;+|p<Lk*[a^EFHA32uxa!&k/$CCbqbA' );
define( 'NONCE_SALT',       'Ut!=y!0e]Db@g%o@BTw-{.6jpLe^*`HNDp3iijMPR~MHgT(h:)d& 01{}+h55Y~.' );

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
