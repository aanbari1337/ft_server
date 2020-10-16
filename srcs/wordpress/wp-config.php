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
define( 'DB_USER', 'newuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'newuser' );

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
define( 'AUTH_KEY',         '[<8=JmnNzmS0$OZ$OOn,ebyfUFro2?)Aq_]OU[lxoi3^RCnx2efuy$5,=%2?o|4B' );
define( 'SECURE_AUTH_KEY',  '_2xQT!&^%tQ}Hbh/yrVuRb==,e-$4M&~{E[*QpJL1w,VGeh!khD)h|@l*U$rV.{p' );
define( 'LOGGED_IN_KEY',    'TR|s:@tTZEDP-3*4y af{=nbIuoVQ/kM#k!$S?rCR$OjX`QL2arR8Q _A<Il5`T@' );
define( 'NONCE_KEY',        '(4z{+k`}&pz@Bd`*Gp4*)SK5Pnu|b?3_01;Al0R=:;@2:XrS_uU=`UsJhTe/krd+' );
define( 'AUTH_SALT',        '%%G9/:xfFr_%,7[(|.M!PqpB^j}lZs Imdd6[#^EScPq}V%5K,m,RFd0Y?Vvy~=3' );
define( 'SECURE_AUTH_SALT', 'JP^Suw?o-jA+z|n+=CS4TN1wgqG`-7dJZrB ?%$A>YpzS=Qj3-JD}lac}Jz+!X>9' );
define( 'LOGGED_IN_SALT',   'voU>l9nbU.@8-svL{B-F2VW_jDE.T7b 0f%]]XY]>aQ(5^|yf#u!5=]:wCkYDDT}' );
define( 'NONCE_SALT',       '0KRZ4osy:]Uyl}rVW{I!E9mu{@lH5ChDy$r2|v<cq]EFY ySo`2X1(7+I4]H)cL5' );

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
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );