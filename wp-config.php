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
define( 'DB_NAME', 'detailing-division' );

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
define( 'AUTH_KEY',         '3=ig,:90m:p+HEm&V(>=/*lSqLq>B$G?RinXXXeyYMNWH#di>;2&`G=vFa!,3`>%' );
define( 'SECURE_AUTH_KEY',  'T.9St+?J`(3_&9rRW!<v,9T63|X%SD|%H@TGp~Lnk{hKbRyh>6s?A2*FP3nm/Kpe' );
define( 'LOGGED_IN_KEY',    'Ms+KBJ)Snxj8)*CD$S4BNnCebPn?|2+<aY3v0yb hP<fj_[ot[A%cjk{;JR=g<,/' );
define( 'NONCE_KEY',        'SA5XIVC|Nc-6w`pC*z8MlR|?y3+RzX&(xRspeaRS,YaVo01gR{GC1+XJ=~!lGjHn' );
define( 'AUTH_SALT',        ',Ga/le_[Za^M 4EQS[T&[Pk}M*HP?MKQ%%]gv.:^j3-Ub`a/iwxX7w.o1KB:YK4w' );
define( 'SECURE_AUTH_SALT', '_0{1_Ev0}x&(V9T5S{42s#:w6==B{,IS?%7^&}qUm;3/<ml jsMiO{T1%DZ{SA%c' );
define( 'LOGGED_IN_SALT',   '(}|9D9s*Su3U|T<+peTUIp>Grf!6*nm-Tj[03$id{P4,@_A7ag|9{xDT5qOyzD$!' );
define( 'NONCE_SALT',       'Pt!run.P7uZI*FJnVm>fUGD&|Pp7kO5mSAD?LMFZ?SY%(nq<,xQH(Y5njp!FG0!3' );

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
