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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_feiyi' );

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
define( 'AUTH_KEY',         'K]IjMF[/Yj:?TL*sa8QqCq#q,GcKfw=~L.O$dGndObH6)) Twz~!?$H_$5YPSJ).' );
define( 'SECURE_AUTH_KEY',  'y(_VF34lnsApwtdXay=_Y#1Ki3.|zPnrs}YsPH2*H9cHrcrtd0K8:1IzoY^x`N:5' );
define( 'LOGGED_IN_KEY',    '9$%Wr5L#F;]7Q iY10d]D.D.fYj %y8Id2!2l/,-V.X$,ZA#Xx!w-Fh>p{Nh0W7-' );
define( 'NONCE_KEY',        'J7^|_eZt_-H*#>kbw^,!Ac723f>yaYCT%=H,fy$_S,|f6Ii|EI(!Li+J-.u[]NvD' );
define( 'AUTH_SALT',        '=2;w$^oodKacqp)oOA~0J}MWVg?>|%=:EW(P-,zHN[ei%eRIdo,y,v2!z:)PFq-{' );
define( 'SECURE_AUTH_SALT', 'mHvE%H<qU$/>8T=gG3Jxi6@0_I5 Ow>ehb/pc`oA|p=5b8lp_Q/fC;9B5T7Aa=E9' );
define( 'LOGGED_IN_SALT',   'O|#d7})x~X?h?` K_&aBo@z%|e=.8~S8[T}YNFpl%v[py(Ot== RLQ$^}*[J+zKw' );
define( 'NONCE_SALT',       '-~M-@9Vr u#SY]D)K.^2vGRg~SD}mA<skny$;QH>PM<@dxQ*/?}kon#$+NPeW.rB' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
