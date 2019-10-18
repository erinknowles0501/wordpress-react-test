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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_react_test' );

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
define( 'AUTH_KEY',         'DuW.>s`V{qS9D&RJ^m^0ia1Y~MQ2Qn~66#~`PGlH6^?t}:~6I)XP+W&=vV#eb7lw' );
define( 'SECURE_AUTH_KEY',  'Jq%JG/o7IdFXEEO)~kMV|ysSy@:e*c]uQxTbDU{Vo~x@{Ou?E3DMaC0^5My MSE[' );
define( 'LOGGED_IN_KEY',    'k/!];N2tq(L*q7D>2r-_<HF>+2[mwHn}.fuuWmKQKv*F ):{&C[6!zDX|=m2(<ie' );
define( 'NONCE_KEY',        '{|[)gt.Ff*n7f.(%Z*_zXxBYSC)Nqv1|9N#XacHJz|^Q~JrR=5:Z<j1i}CbD%SD<' );
define( 'AUTH_SALT',        'kn$Ok@H3XS_x$wA=}~xuI!k]y5(b>9JbZ:7-F4?^)J[U8`qq]S5rIJ,13PT5GTxy' );
define( 'SECURE_AUTH_SALT', '@C%!T]Z)Ty6)l.}9CEsH:D2},w<-hg7W?V*J20*daEny40q9UQ:21vlo[.)OCQ4|' );
define( 'LOGGED_IN_SALT',   '4;Z=7)xpcW.w*Wl~;7?+*Cu:W3F&0Rtp[Cc;;j1*W,]0C:-*p$d<W>Q?NR2:vX}p' );
define( 'NONCE_SALT',       '{DDLv!4^2<A[!,YbMh6wx*nO w=ftEWq4Tt8Fz^hT[$MRKU5_AiF~]R69R)K:8{?' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
