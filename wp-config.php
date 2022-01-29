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
define( 'DB_NAME', 'hello7' );

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
define( 'AUTH_KEY',         'zl7V/AHnjJk+~V#e)m[ryZxS:F*{`S:1H@sEIPi_/L9^G!`f^qqcfv/zG-[^_H2I' );
define( 'SECURE_AUTH_KEY',  'z[)DR,!`a1&wMemWS7=HmkLW2BhO;(*uyK<Wt^AM/n@_-4g,t;K[m>VRI/jR8][O' );
define( 'LOGGED_IN_KEY',    'SAv-.-KtDlpygto 6K(F(8;_0 wV9Bn,DffE6^V]d!pPU<;v.PDWGP)0EwLmJKk|' );
define( 'NONCE_KEY',        '5wL,1Mt1~p3,UKEw)6vC%g{;wG&NPK&; @h+c)Q#7ow0fcMJJt:JeV|IG.3e|ufr' );
define( 'AUTH_SALT',        'OMd<|Rjw@0j%cA~c1on:*eiYBBuFlUG>zBQF}oL1c [(UKAqp!H^+}iZbhR)`Ti4' );
define( 'SECURE_AUTH_SALT', 'D*%PkWuJcpAUh(N?=IYb@68jJWA3?20R;?5{}!tH@jbPUCK9_c6>~}oW$;cm#qWw' );
define( 'LOGGED_IN_SALT',   '(oD5,&snp]`3U0r#l( xz*,exV4EfObKpr4XT}!9B.pr5ros=~,`ka+?kBN,zm-+' );
define( 'NONCE_SALT',       'X_=n;9O_jDPd2oZU o$BW48nNM!]F23>Z=lf{z{BK#q;>O~1R?VAb]z,>)GM*w7v' );

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
