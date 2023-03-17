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
define( 'DB_NAME', 'portfoliorishi' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'g!vbrAWD7y!MFG.J' );

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
define( 'AUTH_KEY',         'S7MY#X65kiQk][FV$?Ghu1qL7A9X7|uC?`8[;4+n3+gEZ,.l$3lJ`I[u=VF b9Z[' );
define( 'SECURE_AUTH_KEY',  's!@MCiRhieRJ:uCi$L*Da*CW4QP2wjb^-,.c7q({AYhDS/04%j7nTw5Baz>3F@7-' );
define( 'LOGGED_IN_KEY',    '4tJ#nMQo?n-4F 89IGs+`|V5KLsq$<:S,.Z#}sH+;ciaPr98/COe1GDc=D_^Txk>' );
define( 'NONCE_KEY',        'qW_!Y=mjSx+~g_zV8>xs}BRqMO=86=%x-9ZEW}Mfn|C3!#|V-nSS)qK<4@*,+aX2' );
define( 'AUTH_SALT',        'DmD-{Koi|;U,=d_OHp2SY^N_Pp~x-4!B>C pl[a^~]%[>PTL^,vXp65sQY3uCpO!' );
define( 'SECURE_AUTH_SALT', 'Z<zp/RC&Q~GMZ&yCn*CcchF!`wJSuht{qq*::Jl`kT.Nk4e N=<Qd%#0`Bj;q_B}' );
define( 'LOGGED_IN_SALT',   'EGS`SPZ>)[yPm,eW.(+F(loM2U~(nXWg#yqGtwh}3[;@A`B&LD=rZQBE{FAyMI1J' );
define( 'NONCE_SALT',       'j(^B<|?zjNys>}cCJ@AZq+aXnRH^|1YbEr^SJ0[P&hqtP6#E}oD9weylKhaKx[6w' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pr_';

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
