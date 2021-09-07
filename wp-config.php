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
define( 'DB_NAME', 'testproject' );

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
define( 'AUTH_KEY',         'obKIE`.3a-d(Nvo)nx]YBJ 4;~PtYN37?;iF>7qj$S}8Y[ZW(NQ<`J?FIs#<=4Vb' );
define( 'SECURE_AUTH_KEY',  '=S4>Y.UFdd#{w*aG&lW[jbVTt.mQm8|srBR-6lfOhf-37wfR43+?d.Ga/ei_N8MB' );
define( 'LOGGED_IN_KEY',    'r3rQ3(! x^<&HgN`]w[Ov%vq8WBMu6C^>rqk6$R0N@ky~K/&)?XL0%knbZH|eGbi' );
define( 'NONCE_KEY',        'C!vR`PVQ|@;vpxO|er7=w(5%EdE&!*$v^V]zJN`j-zd7Uk!ocd9B70ZW.dL:}L%2' );
define( 'AUTH_SALT',        'o*Rje(jiJ^Msq[&nRb0;I] [|&P(b=&:hP;1^; &czw??F@]VMBFH*1>&6wI_>e)' );
define( 'SECURE_AUTH_SALT', '}83/k:2WzVT,>j,lWk^pttMG-fy@-IF^bNmu>T](>avEx0~v?4)-c%h8ZM<5PM;U' );
define( 'LOGGED_IN_SALT',   'HRE5Qh`RYW{7Mxr6ruq3x(P&yx?=@(J?VQ.vPOXdZx,`{y5nL%HykRbpfLZRDHo2' );
define( 'NONCE_SALT',       'lgr 7crp5UsB(<W:`lP>VPJ_dr*xfO|/0*m#NPnzj4r*=awi8LNgM[B.CBE{x0W&' );

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
