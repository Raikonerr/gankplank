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
define( 'DB_NAME', 'gp' );

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
define( 'AUTH_KEY',         'w<)MzYAbhAC,*1FJv)mztEvk_N!3f`vG;pR6QS,e=/^].7|X;uf_2=O9)tB^4,x{' );
define( 'SECURE_AUTH_KEY',  'ptTiFVqo|LR0%)1IEQSshQd;lDA> #xdZg`c-To<$0#qVmUg1o(--v7ef!R`8XZ8' );
define( 'LOGGED_IN_KEY',    'S_=^*06$CQ(sov`yc&LziZCh?@Y5YO .gA1A+h`:R[3g5O`xlCQ0Vg[`Ko58:|+/' );
define( 'NONCE_KEY',        'NmrE6e`)P!S#Jg/yra&{ue8zU1x-!Ev98@H:_?,zp[F-2t{TuP:hbmh/yVcrDt8P' );
define( 'AUTH_SALT',        'q?o~Ih)bE=<_RL~ <C&guJFqPp7$Usz833^o./5?*?)9C08tCZq~{Nrl/_fooecF' );
define( 'SECURE_AUTH_SALT', '627FCe~06uy3|/fyIKZzXSZ8$z[6;tIoUkoDSv?#;L[G3v!`c8uNs)cl{=IC3#+E' );
define( 'LOGGED_IN_SALT',   'Ob~xHipK5X|Wt:dL8or4xs~nat$FBVbecQBk(a)h@}Ue)0S<upe53(NwBaP9;e[9' );
define( 'NONCE_SALT',       '|YjXlZIG~>2AHs{T$UsYTj+gM<$T894+FiTr.r {(@[|cPM4]=4d9B]BIq4}d6KG' );

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
