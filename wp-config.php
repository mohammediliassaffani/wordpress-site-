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
define( 'DB_NAME', 'kawtar' );

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
define( 'AUTH_KEY',         '}4!~NGAAQS74;OH;%ggi]Tj_+;E3NHue1b]~pgC(rte]jd/2@4q%VBq/~wA[Q7}:' );
define( 'SECURE_AUTH_KEY',  'E*Xt@i?t+0!MagB:4AUAmUd8C`E p%A%Nm$R<_}8`6)T@/U:xh xFj5YB*#:=bbX' );
define( 'LOGGED_IN_KEY',    '}zeHs!_C5y~M$tx/<RoE:::bO_#FqkUVZhD6L%;D.bO:eW}q`Gb#8}Ys?9^FjT]o' );
define( 'NONCE_KEY',        'X%%`miQEZhk#v`I9!,^,sj(&?8]?K_p%3}@=^Z=mB/@~_WG1J|~<!S$R`)W/Fetv' );
define( 'AUTH_SALT',        '31elx+j~Ui*,,y vM[{@/&<Xt;wEJn#wg2&k$w_l&g_6KhpQ9#H)*tB%BDe(]7qU' );
define( 'SECURE_AUTH_SALT', 'Q#T9~-{bC-^voxmx=^c.(d/D|@{[|!jniPzvG(Ahz}2-`A8iIcm?Re73<a%=U6{A' );
define( 'LOGGED_IN_SALT',   '1$OT*``oC.)EHIvfP6gd_-xz]5ruK{pyy[7#-w:tf!~v3!$(+EgABLE:d%S/eq!:' );
define( 'NONCE_SALT',       '26oqyEDEGHcpj=TE~<b734aP1M4y7oKk|r9E/(,i?J^!U]|GE3H6tdWm0jWOAvLf' );

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
