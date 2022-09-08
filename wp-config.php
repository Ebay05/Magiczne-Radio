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
define( 'DB_NAME', 'test2' );

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
define( 'AUTH_KEY',         'FLCMGNOJI6ekHeaI2z[><-Ak:rVmw$]%qR@jJUWQDy3a>ESu;@Q 1NBvV>9F@Lrc' );
define( 'SECURE_AUTH_KEY',  'w:DXzpkDSmeSK(=ZwDOi$kXiT4~k8a<B[._~#;K&J`C<K[eKRn!h/4|?m];om) <' );
define( 'LOGGED_IN_KEY',    '+xV)8{dflqK6SwR16|EY!] z~_d3dyJ;UP+9]9peV8eZFq)Jl~-oRo7.-P>.i>>8' );
define( 'NONCE_KEY',        '71D!xX{Wi)wYe9*S?yr98|iRhk&LKMQP=608j}}t<2~lI<Mt.S0Ec.)cF8Ga~OA4' );
define( 'AUTH_SALT',        '>x=FjSX7yNTToC0t3,_t1[[j&_)99)+IFoyybS_dKGA/H[L>[;S)a:2uSP&ao}jF' );
define( 'SECURE_AUTH_SALT', '!j9jdq[aAiLw(2nXk=JViqv:j!u86snu<*@gX_q8Po#s3=PIo5Fo:aud9ZX~k}zT' );
define( 'LOGGED_IN_SALT',   'qN5F?Evv)37]`2y7Mf9>e$/R]e{./y(nh2[N|THy@-z`}km~o(`(|CHBUsG_s<FV' );
define( 'NONCE_SALT',       'q]wQ`F8oA1N^rpd[$7D#[^6g^iM~(k+Uc1d<UnBqVlj8lCj|9{f.op&/3zO4^6/l' );

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
