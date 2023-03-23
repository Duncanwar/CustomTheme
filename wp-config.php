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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'custom_theme' );

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
define( 'AUTH_KEY',         'cW2ef~9_Dkk__qzh9(TsohQn: ey[HH(jbh^f#k*,=#CQ65!?qkx=+/}GiY+0e,t' );
define( 'SECURE_AUTH_KEY',  'rAl1b*RN6oTxr>8>jo+tOM{3ndsq11K}zn*_Qj~UzA~1Sn7/]a[&5p87!jqdmjWV' );
define( 'LOGGED_IN_KEY',    'bnd2f:D=ai@}*F|TbKhi,$2k(v R1AToM^I]qa[@u`x{F&Q,k@x4.73po=, !+0E' );
define( 'NONCE_KEY',        '%r+>J~cyW;M@?mDX K)?QJ=)}[5bcsV;n)ftQ,5(dOubC!zo/Zb^NpA|U%7FUQ~4' );
define( 'AUTH_SALT',        'kk-d]y]~T9,;||O[i`LYti1AsXfGqnX98bxyv8tH@~ojos;A3a<GH!o:={lfOy^M' );
define( 'SECURE_AUTH_SALT', 'V7`(ol:,FXpcjYX?|w4CoS`yMa*M!5x(q<ZKMAZ|]b,&{qNt8wmI0-IEah`kPsJ>' );
define( 'LOGGED_IN_SALT',   '} 1;L*oiQ+)tNSk1XHrn=zF*AE)&huetCh=={Z^f!@sl%z&5P,YIeDKsE,spny@[' );
define( 'NONCE_SALT',       'n]M1N(?GX|)XgyDmmi[1,X[dLx^kH)oE!K_,l:4jwQ[35f!p>7E= %[2?X~ /C[(' );
define('FS_METHOD', 'direct');
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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
