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
define( 'DB_NAME', 'word' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Kunal@123' );

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
define( 'AUTH_KEY',         'w_IMw#a`1?v}17/W[(c*Au_m;]6H`~qxzK:1G8d(!ymNu<UCmMb!c1LP-oZA`F5 ' );
define( 'SECURE_AUTH_KEY',  'WgPR|KIHLX7_kCRfOLgE]&)SA[ W#{&n.PC#H#1w i`mbHuZ1i%&_wNVE2Bq2,F&' );
define( 'LOGGED_IN_KEY',    '`mP8F|Tn}Y]kxx5Z!8#. 6z~QZ^<35$-~E~r+Rq<8=b{lj5- dE!RyM^Gy+y29yX' );
define( 'NONCE_KEY',        'QIU$V(/b 2{YU|h71SH812t9{{N*lI|XHhh5~3t/|TXVqluU9-Sd]V0KCdEG}[%a' );
define( 'AUTH_SALT',        '`T{i6EeS19,Iv1v+#{)a,(P[WmO.cVDX~3PF5.#33b~lQ(ll+*sNg~R,MEy+pq%K' );
define( 'SECURE_AUTH_SALT', 'W1UBQPwo|qS-FO;el{>$YSbtaxlV}Q.T0=|Of l(X]W ^=eO`?26nNEakMf$5[sC' );
define( 'LOGGED_IN_SALT',   '<J+{q&O*-^.3L;W4A~B<;y+=Txbesv>wS<DQgw=d-)IZQ[JM}faOEhn8Kh>.8ADD' );
define( 'NONCE_SALT',       '7_Ls];q@%aazOH??5a &MEuY-LtPqk;X<phEw9A<A?5-KD8[WYWQ]5 HfbUV16y+' );

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
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
