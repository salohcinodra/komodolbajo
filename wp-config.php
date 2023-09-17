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
define( 'DB_NAME', 'komodolbajopermai' );

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
define( 'AUTH_KEY',         'Mh/VOHZE$y}GvRcuXsyKkNZG4XA1=K<?umrz[f+=CS_uThy_IBKV7K5>h.G8mbZq' );
define( 'SECURE_AUTH_KEY',  '[=m%)ziUgH~,VvtROlaIL]GZMV8bMo 6Pn-:]w6^.XRnpvmvG| iQTx-tbw |r@)' );
define( 'LOGGED_IN_KEY',    'G;]*m|Norp?(/Za_=Y1DLO:aZ4H6uC!B.}@*aYHv!1_z#KS`,y`E/S$y6fntdxOM' );
define( 'NONCE_KEY',        'BQ@~cn:+<qzNKM30{P?+L!=2O7I2>UQL+2I@8agv`7+*P3$f=Q~MYIDKb{k=>v-=' );
define( 'AUTH_SALT',        'GgJ4`]ae00-XTF)Qq5&u)uPeQ7H<sIRKK:{QLq?rW&fFB;kPC6x]dWGE3MrN$3<?' );
define( 'SECURE_AUTH_SALT', '|2xULj@sb>GC[AHKtmvG&@1c38l^|f^w@1kJ<xu_7_wr2ux=B>O6AV>s3NEk_U7#' );
define( 'LOGGED_IN_SALT',   '6;~XsrdSkt>cayKe00c3e)={0B1+`!X8?!oA >U=> YG/@l&-V!po>yDh6O!Bzx%' );
define( 'NONCE_SALT',       '9QNDFwv@N7=K49XZc+2>X)=H?<uV=|Mtc(&S[T>AP!3BbO5L%QxxT33M|GC%$5U8' );

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
