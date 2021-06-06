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
define('ALLOW_UNFILTERED_UPLOADS',true);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_wchocicosbox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Y$Qn}EQg6a2m;p)(T[A}Tsa`jUc=4G-5Zxj]26*/m oZ>_,Q5oReTYSFqi*:.>x5' );
define( 'SECURE_AUTH_KEY',  '`.W{@t=Aq)dc5nZu<Ec.~qye_bo/t+(]g7ttxVnP0.E,)<{DYgJNkvFfMg.B.et}' );
define( 'LOGGED_IN_KEY',    'GS.CA2$UiO*?PSS2q@{y1DNsn5~TaE6lP.q@OJEzMg4iH]__1H;F+7F8w!u,xdYI' );
define( 'NONCE_KEY',        'i@&2P;IBCZhUyu!15Lt*o0YBQ38JYyc$S:JV(n.~W4/P=JPDcr:an&+0DSz.M:5=' );
define( 'AUTH_SALT',        'u]O6,sO%Ct[{H`wl4]Bc%foAcl3FtDo%LoCj!`|1eRO1iYYHe0;Xu&>SVwl8b*|W' );
define( 'SECURE_AUTH_SALT', 'KId*y:eW2?ih(0i]{n_puv38+_3Ego9;[z)Y4I)cJK`*fql)u~ Pia7DT~:TLJG:' );
define( 'LOGGED_IN_SALT',   '_vKL%:[j>^5@_X dw)i;A(,QnKRRT5?h9?3<!0#?+jC[JVJN0-#q)oF;?-#x4e[M' );
define( 'NONCE_SALT',       'j3p_mHoSz(2{Vo yEV^{bUj/G^K*1(m[?2FtO5@O~j6*m(@/T.5mU~-r{BM;,i&=' );

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
