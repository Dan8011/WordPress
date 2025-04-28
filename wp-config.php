<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webovka' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'e/A3zQ rAl6z5ORC6Q.xL([DCg2)+uDjiIjI,&B7u[m=-:DLCUsO0E)3^BXOBeri' );
define( 'SECURE_AUTH_KEY',  'L!^AMO)/`;m@vFte=Zks.A`Zg.Ds3nu<q~E#y/eX[j<=%F}~[)K_`W]EzsMYg{/a' );
define( 'LOGGED_IN_KEY',    ' X&`:&R.8b1ZEg5`1FB=C$TS/JlchVJ`]2{J@mA)ycz}LLi}nYzpufoi&ZiZ&z4g' );
define( 'NONCE_KEY',        'H[sQ#rmY{<YhkJW?4b]SXui8DQa;Zhm<CV(*s7Hvv:u.{DM$PJsDAQ;0YlwHow|A' );
define( 'AUTH_SALT',        'u;6#T$_4)dxu-6<OC.F<TtFbAiT9IqsFoTS0I?!T!TOb{re/Ud5^AbDZ^pUcU|N,' );
define( 'SECURE_AUTH_SALT', 'ML6r%[wo?x?GE2s#EevpF6pLRkwNY7wh&w~HH?4]BkSM%2to+.-by{9+RQ/OVf0K' );
define( 'LOGGED_IN_SALT',   '}4&U6Vwg|%jgy{9xoZC.`Z%G{[u*L;2<_~s!HByKYuVe5*Vf&U0YmGH`d)Obn^kO' );
define( 'NONCE_SALT',       'nl#Sfl[=tRPUFi-*H0SJ&Or~]fg/8jXm!BIZ/dV;7+z=o#/+5gek0,Bz?%Th4X@[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
