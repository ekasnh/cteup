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
define( 'DB_NAME', 'cteup_db' );

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
define( 'AUTH_KEY',         'p?Q.kw((j0lw.B+PrH4.q<+e]HbD QHSd;Hk4x0G{6@gMkOdP:%t<:38*S E0eI7' );
define( 'SECURE_AUTH_KEY',  'i6BQs!gL4w )rT?=U7G5N[3*hxPum+0Z?eMl({AQuv85q}9RD(5Nm~4@TcrXFTQ9' );
define( 'LOGGED_IN_KEY',    '.D ~0~GHF2BvKAf8o|l{s/b}dv2P,kF!_.3MW#l/UM5Ez=-n{%CaV+bQ*RAW!S_/' );
define( 'NONCE_KEY',        'CjJBPZ8-j{9zk+G(87VD?I@S+nKICaCSr9|ig~9j7LF_DT02T%/!Ex&+G^Gva7d5' );
define( 'AUTH_SALT',        'jiA#eUj4hkxDPtWV~SnhKw)^!ojYv)5I4&E&c2I6q;[o(X& `LZjl)(wS(njkOO(' );
define( 'SECURE_AUTH_SALT', '75v(*ZZp1[,3u4WgJj6uE{u)]!* #w=AZ[@e{!N[2C[(2O0-baPmFyt-]FoSNe05' );
define( 'LOGGED_IN_SALT',   'UJ)l&onBk:r~en6eJ=2=O7VMs(v%*jw^_O1<T3$Y%I4+E4m_e!bB&O<$l,}|gI&u' );
define( 'NONCE_SALT',       'L!Cc7!j-4.5x$@c]YKZVm1c]t7!Eh9]~Rr j_Y:toeHjK%E(zUt2AI8!>8y^E[yM' );

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
