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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'bNbB3p#@i<]P??W/!D{?==_#I$R{Uzu[z?)eBB0yzt9t+*O~>kEzzjmAQ%j<B|ej' );
define( 'SECURE_AUTH_KEY',  'a,~CPMm(Gq*)y^]sUy7[*&EvwBS{$G!S7Wy/]i$/Qw@n).1+(GMP,gN7Ry%u}h/F' );
define( 'LOGGED_IN_KEY',    '8H%YG2UK5V%mndR4A+irh]5jp`5^2uvgXfD6eN[)M;iJ&#rtqem%VOY!cZeWha~^' );
define( 'NONCE_KEY',        '@}P,xwKsmBx%Qs5#?Oz/Z=|*u@L]z8{sCYo^Z|hQ-[t(C&9YLaxC<m5_m2/&)pP2' );
define( 'AUTH_SALT',        ' 0rVGE;tHjqV<!G;xYj(Bv/rn(1]S.iuJ[A_BqNin)4Z.sJHvFV_$u#*QG,1Ho%&' );
define( 'SECURE_AUTH_SALT', '23b,@f+UVgfu.e+j_f%OXT0Ja5t.|P4A>]>wmh^[f[$%m@McC/!!?[Fma/sZD_cs' );
define( 'LOGGED_IN_SALT',   'z/UJ~mi4>%I|ENJsAGbe4-P>-aMmLaUSPK^B8UPk s0{99/kx74!BsUI?C4az<9[' );
define( 'NONCE_SALT',       '5kBP^j@SmNcm=vc;csvKpf#Er+hkj]IockHu2fu_pJ<I%4GCpW*jw-[(j/mvB@UT' );

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
