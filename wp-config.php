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
define( 'DB_NAME', 'quizz' );

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
define( 'AUTH_KEY',         'zyel=!rQ]H!IbGg2/?tNAs-[g{NsTFJa`ZosQ0XP([&&GD#@G!(*So!9z7{JKuIE' );
define( 'SECURE_AUTH_KEY',  'f<S@XwBxTA/TNpkKK$2&PUT1wh)NU`nWf~49ae|qfPZ;$ !W_U{`D/IP{q;k}lQd' );
define( 'LOGGED_IN_KEY',    'mw4m9A@Glx>oZVUC5DifLgb}R=kVZ>e/IQ/KvkeRxiv&?U^v1*LeAT{>}X-jI7}o' );
define( 'NONCE_KEY',        'm<!{/;w=)~5}_AxiCXm%Eu-!9r>zT=bJj}672V!:Z-W-R<d(UQT;m({cIq75/#ZR' );
define( 'AUTH_SALT',        '<GOaHqc<y;6 8Yz)pm<F7XHk&l3KdB(Ja|ND*1~:>Ga[!>BX2AOpfRgDS#;&OK|?' );
define( 'SECURE_AUTH_SALT', '5K,+~1>a^hDnW86fXB{i$qOAX9.5B)%n)D{FR/$Fc=n:zk5Np}>^yJ:Fqyow2V%m' );
define( 'LOGGED_IN_SALT',   'a<k>v~9h:+)Kyfxy v@5n?K*=l{oJGb,;nd<!xEjG`CHjxvf6x&JWa2=jujb@H{{' );
define( 'NONCE_SALT',       '@`R/,?vK$4o$0>JmyZ{QM*oE#D)esgWYgI9/1i2Mw7HC_l%fxm=sY@lz4|O6eB@z' );

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
