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
define( 'DB_NAME', 'test02' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'JVOiPbag~ AMkt$DR1D%0aZL,[b`+KsQghIbrU0FiT9s%)Y&eH8F{Plq0qWgmP7@' );
define( 'SECURE_AUTH_KEY',  'V<5&]bbi5S:ooth1zj)![CA+U:Zd#2FahpO/y((Vr95M|[5}K%/hR9[q^-|{$./-' );
define( 'LOGGED_IN_KEY',    ',WmQuq4$>Mh%l3D{+:>)MvHI+JJQJRD:Ty%[/&Nz0)ZRy9={^{oBxgfiL;N3WL3j' );
define( 'NONCE_KEY',        'WP A=Ds0igOWh[*rzQNE+FzTEdW.&2J`X[eC2[5+l2ZY/<}3ncWTxr<&LCRYS|=s' );
define( 'AUTH_SALT',        '?[??lZZ[TFCJ(1$ 7sIN;k?$6@@dKs[iW$%XH=-psRoEwc!8mdPjG5RAfb,krqyq' );
define( 'SECURE_AUTH_SALT', 'Ahy.>cOqvgzxG.Rs$!)r;0eM xK4ty=}QdNpH;@z}m%oVud^jE5;;iYX<{d[#cZ|' );
define( 'LOGGED_IN_SALT',   'AB}9cp$Nd6{^cNY0~<IKIK4ly1dQB3LA8dZ>}nnVlK#zCsvJ/-C~V)]rVSwN+,?g' );
define( 'NONCE_SALT',       'gxE+:&57%<hPpS%-,_jt`ekFU:X,FJ<Y2[D%>?pkY=v>m)Oie1!dy][}`;95utlK' );

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
