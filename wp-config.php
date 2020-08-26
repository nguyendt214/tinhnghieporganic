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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/ndotr/projects/tinhnghieporganic/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', "tinhnghieporganic");

/** MySQL database username */
define('DB_USER', "root");

/** MySQL database password */
define('DB_PASSWORD', "123456");

/** MySQL hostname */
define('DB_HOST', "localhost");

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4qKd}LT(5{xLU^v.O{SB}xr-VBOEP;wLj9a1J=(G~w5VSQ`U`ylb1%hPlJL|T0*&');
define('SECURE_AUTH_KEY',  '*/aLYeqa9i4#@CdMf_MOspGZFC}iH(3U988ySPEQWOm]Wmn2-=fabf%DZmkj6m12');
define('LOGGED_IN_KEY',    '+dE=!mNy!+uv9|~{Ji[vF}-cTxR[d=v13F3?Ia||ZVVx@WHP}mho_,%#S<eUcc3;');
define('NONCE_KEY',        'r`H4=b`Ehta6zwp-M#XL=Z7A^e,#LRzlD7pw^,>(OX{r([/*J&augbs=-A/7]25w');
define('AUTH_SALT',        '{n`_Tq0K*,EE,- P;|hsT}_+Jx.AowyU0-!%q[Shy+alaQ!=[9d%6`bwWn7d0$5{');
define('SECURE_AUTH_SALT', '808G)]ZX4|eT0^ES`hJ4/LR(F=?cX{f=xBQ~.;yz7QDE+F#0LcnYarfd$]gsfmMi');
define('LOGGED_IN_SALT',   '9;yhsFw,M!L_rDyyprop>QcFaq2xCw=-beZ$Gv)hjZ=~5Q_zm%/7Z^+Hkp0sl-|P');
define('NONCE_SALT',       'g+a1iT*2C;%U]IR=B^L6MNc[C-U:en]RXkMiv`)@W|!o  s6`VT+KpwcgGH,|[x5');
define( 'WP_MEMORY_LIMIT', '256M' );

// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
