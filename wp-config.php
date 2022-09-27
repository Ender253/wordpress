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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'dYGox^=%Qf:QZF$*LXswkNt=:~j6$`%_Q!iFVBL5~<YLM(DTMd-sLb<ysjtgp{F,' );
define( 'SECURE_AUTH_KEY',  'a3| Zloi(xvSjj@9Cs-YUI$hEj1mE{@iA2HKBi5E).K.#n4Y@<x{}QGwHqtBDH~*' );
define( 'LOGGED_IN_KEY',    'vxp7D&7@:`$xwQ|bLyC4?3G=wL,_J 7VkE._6)dyvfJ?ea=;:^=ok6$PE8YHe4{a' );
define( 'NONCE_KEY',        'T5{|`mFlt+I`_rWihk/9%^ Mm)lN :C5H]~V-=Pj+Nqt#Pio_Q]/dJt.]YE~C1!T' );
define( 'AUTH_SALT',        '5L(8/8`Z}:D3TYd}|m<d,cYNH`eFrDKy{BBaqS&_3bl#p%XGuIsmF6T[|n ]CUPH' );
define( 'SECURE_AUTH_SALT', '4rh<hg.8-9Tu ~CZa(b4ka*(27a>W  $A-~Q7z5h7g:b~k <)h0T9qWA(djQ:p@+' );
define( 'LOGGED_IN_SALT',   ')~kNK. 3|CgqK1?<Ejk?n9Uh,L9OJo59GokcFC6U1pmu6D_w*T-mpcj6$_oyugqi' );
define( 'NONCE_SALT',       't3^!G+WA5F}TKx[|ar@-Zn%*6:n5+Bzn|3Am/F~4tSuOPU$SCd0,-lJG0j^)zp!O' );

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
