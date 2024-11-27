<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'regalosparatodos' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',          'AcLN,.$<f+8trqBCaE69z!;!m<`YPE_s;:~mN.!/:~x]>,QvFkk[@R7ii,)5CqoJ' );
define( 'SECURE_AUTH_KEY',   'h3;j!{UDa{LbPAy)uuO}8?FdgLy_P.BL/1!LW{8WU;%wu4u3L*{}78e%EWQtIan4' );
define( 'LOGGED_IN_KEY',     ' o}3L|x)R%h ViBq}2Pxp3->evs3W8x:x~l*%M3kzz-KTlXqRRf{P8}7ADEINZoC' );
define( 'NONCE_KEY',         '8>^aK^@yy>Ip#0%^55k9S2*YRD0A3S68I;CD;tUo2,tRVgS~aSfhCV0B~MQc149J' );
define( 'AUTH_SALT',         'pFhkY]TL<RdY)T+P(F~nYCClW/`(`V?q.hWSW<mz(WyD:W0MFh=0AYL 5#`Ik=!y' );
define( 'SECURE_AUTH_SALT',  'AV~1FNG9,*,mO~[?#*R)8xG`BzZ^VGkSu`LHlihYqDUgn3iLH&@sv[o2Yk=9.wb/' );
define( 'LOGGED_IN_SALT',    'E@k7p9xXf^tc|*RBKfdKYo)w>1$JuWzI8ihNW~8U{;92d.u$m^Nk-:IS^g/0rTvt' );
define( 'NONCE_SALT',        'J(Yf0 nNyEqKo~h%,c|8[|QYdgWYvP{>!#V~n3DrBbL[qfL3<kA0x:]e-?97}CEP' );
define( 'WP_CACHE_KEY_SALT', 'qto]By3,@1!u5!st2?f1;5`b6h3us2FJ!j/J)=bVp5jQi4mN% ooyj_JlWhKNH q' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
