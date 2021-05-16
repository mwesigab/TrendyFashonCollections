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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '-E2ReF`UWHuJ-6-QI}D0heU {%63/w:nrJ*K^;,o{A:3x=UwmG4M`qIijy<66J~]');
define('SECURE_AUTH_KEY',  '4**?IST&_lI9AjR<%?@ $jk4w++un iw!Bk$z4+9r}WPEer?|FWvZIw<%vrfrv)i');
define('LOGGED_IN_KEY',    '-{@omp!V.=2#4m=z{ee4ROda]/+Z|cIzY>]El/)+9p[vnKyibySlqNS^k*>%)zld');
define('NONCE_KEY',        '9![k@90ij94VN@cfgtG]3fiE)k#(&w@vk`B4+e}`sAIQjv<j4E`+rzH*Sk2a0-e^');
define('AUTH_SALT',        '/MFUEj><F?Jv&-Q,4A~Va<{)m:6CkF2Wf[7#{36qM3TbyuuJJXK!f#OMf4d :RI$');
define('SECURE_AUTH_SALT', 'v0B#ZIQ(d3z+1aN>/xi+GfmBA02h`1#z$9-^!2!{j]|*yWpG6aG*3:lu|GBrwQ}4');
define('LOGGED_IN_SALT',   'wjXvVd#?{6m8.m7C9|=u{fe:4nG4ZW*ljW/>`P7+u,+@`s)4+aE^dT8hAg[{.J:#');
define('NONCE_SALT',       '@KF|ORsB+lwxxW,x}[R>+M#AQX=0|]|~V6O`Z=t+PMi&yvk}|ms3?`w~=s#QCvSf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

@ini_set('upload_max_size' , '256M' );

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

