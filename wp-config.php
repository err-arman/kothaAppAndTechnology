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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kotha apps & technologies ltd' );

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
define( 'AUTH_KEY',         '<%_gIhnF]@2wVg8x):m}k~q?}b;rvSfp@p.88uS54/:_wK|l1aI1?6PxI$;oX#m:' );
define( 'SECURE_AUTH_KEY',  'l+PgRUQko^6v<+BrwH#JR!arP {:M]?G4J@J5<j$GN)?~CJEp)4;l5C3k.zS*e3m' );
define( 'LOGGED_IN_KEY',    '+)^da?cktx:lPcWB_;Jf@byEHUnM`eS^VKH9)#0T=eW O_2P|lY~IJP<nF -<69+' );
define( 'NONCE_KEY',        '&pxVl_9!i*s-hfLeK=t9*2*A|(h?Ie8lC?J~F0H8Ge+* k Ud6zsD8i Vbr@*~%%' );
define( 'AUTH_SALT',        'o8)A82M2jYPS32<|mQYHA;rGv&C`hm3$|t.zgvB+s}iJ]A@+;y*VuP.@f$K|FU8A' );
define( 'SECURE_AUTH_SALT', 'c!qL%m.+s1k)R5k)+zDS;Y*V_PF@xdT>*03`B)oN2]%i@lCy}mg>JG.JH2SRW=M}' );
define( 'LOGGED_IN_SALT',   ' 4Kl.^JW<wgw,u~z(Rl[[+0?VI|~3b%wz;!%WM@&2KuAo$1ZR1BR?Hc@4JF,hkQQ' );
define( 'NONCE_SALT',       'p[XTI|b2X+>pD{.2fB>b_j/4pnNbzB25kwpzws7 Vf/W_M~?%#xgC]P46h&u:vj{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kothaAppTechnologiesLtd_';

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
