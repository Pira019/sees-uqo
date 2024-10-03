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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'N3cp)&xl.@&6$7N8:[Z@!q9;zQbkiVlqVY;NW9I:O9Dupe`He|o;ax9hD$p%_,`g' );
define( 'SECURE_AUTH_KEY',   'Ok^Kqg]N7 +sSn[BCe|EL{e,gr;RH)#@}l/QCl7}Bg7pBsQ)UptC_GTBt_9t;sd`' );
define( 'LOGGED_IN_KEY',     'bm[LEkY<icI_OT/N|O>^DyIH/h(8aSP8^cTP~P!OByLWM(.E^8:GMa|f1<vhMX:h' );
define( 'NONCE_KEY',         'qo9H,,j?U9WAaZ4E?t2jE{4n cI=l4Bb`f=!!XRB|{[OOnev5AC/_y9kL0;RwgH=' );
define( 'AUTH_SALT',         '*C)Km;xu07A-`C]oB?:*Cu%=<D;<O7>[+h+U>-xFhW09COW?S:?=0WG&Z8IeKxjR' );
define( 'SECURE_AUTH_SALT',  'E7f&)},{rtDag+@zEzq&7p-bHQhu*<zO^=EFG.^n ^1J.NUN+fv5a6WVa#K5y4XV' );
define( 'LOGGED_IN_SALT',    'c{vEuD:2J~/qCQJ~YoeHDqKJ?bi``h4i77$m35H(RGhcjD8^n(4fEO7TpJ($|<S[' );
define( 'NONCE_SALT',        '?Ebre5~/gMudxpYg#d}f$yE|n{lf?U9:Aq$=xo5KtK5T)/uEM<[d`I#=^=~i pZv' );
define( 'WP_CACHE_KEY_SALT', 'qd>S].WhESi*,zOc}Ls#j)HZEpj<~Am_ley3>roYowQ/QS+m5$%0-Ijva~IPsIeq' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
