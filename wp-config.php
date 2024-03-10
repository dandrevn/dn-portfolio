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
define( 'DB_NAME', 'dnportfolio_db' );

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
define( 'AUTH_KEY',         '#hr0hd2Aeg):G2v`QwL~QnycD$]kE-fCd;e.WU&:]33b$!1y+oe(Ass#lsajiF|2' );
define( 'SECURE_AUTH_KEY',  ',t>_LU,>Ts0ImlLfMD8Vq}IlgxTP8A,W~%;7*q>g_E[wB:kWhFp/Hkrs*cy~r5xI' );
define( 'LOGGED_IN_KEY',    'mm]cGgBkYddTsH%SuT<GIR{_lZ[d@8:,jo5|RK`IGrp<bM5)Z[Gw!WoN^~k~.7MJ' );
define( 'NONCE_KEY',        '>#>#axUqu<JEtqGhh69*T)y>0nA7b&>G:&2sL-#-7T]TQXbgDU)Adv]B$yILNb-y' );
define( 'AUTH_SALT',        'a>l{/jNwHn;K]!j*o1N1U=Ieo^e5AP*SrSWb- s?:uk%_7=,5p]HZ2<= Z[q[ii&' );
define( 'SECURE_AUTH_SALT', '{8n[YWSWFRC@BH{]1aL0Rp-*Dm1Avk4_<a^mz@g{O?L5%717>q*H@[lm1+!8xr,7' );
define( 'LOGGED_IN_SALT',   '%$ycjdo@#<c.o_*^Oro)pX4$5Y61.fS7CU xe7-)G6}6JN)o~2if[(R~rIv83L>=' );
define( 'NONCE_SALT',       '}5;K$ToRFr7/L97D5pC>I6XqrrB/hJV38-Kcy}tke$75xo-l8<}OT%MN!u;eKH}0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dnp_';

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
