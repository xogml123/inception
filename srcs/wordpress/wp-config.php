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
define( 'DB_NAME', 'mariadb');

/** MySQL database username */
define( 'DB_USER', 'takim');

/** MySQL database password */
define( 'DB_PASSWORD', 'takim');

/** MySQL hostname */
define( 'DB_HOST', 'mariadb');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ib8-3tBO3,c_2<Gd~)S^-3;F1Nqu/Y|JrgUcjb<tYR{tEl3{xsZPT)Hl-lrtsl|w');
define('SECURE_AUTH_KEY',  'nln~uKUYWafdW}XN?+xy~b&#[Fq^OvZzY,|fiQ|*j!6,aa`Ylg|7+X#N]XeFOe].');
define('LOGGED_IN_KEY',    'EWgt+q^Y?+;p-B{Qi_inuQS t!?^P]=WRl35`XmW L;h:VMiGK6HL27u4|PHU|fg');
define('NONCE_KEY',        '*q52[%P<=S&pA#vp0Q(1#&7[{Ym!hkN}lprj+IyTgDa|7?7,n=,Wb#aZ+7BivEXR');
define('AUTH_SALT',        'ah{ +[n1),=9Icn|Yme56iYf~I(W{r?d+/Y<Oo`$~D2q76FSnmYYH=STG/i;V~<>');
define('SECURE_AUTH_SALT', '*7JgimG/x.|6kr8 (XO8=&RbipqCk;taU-jlant-BcBJ[}K4wuMgc.melA;-d+&n');
define('LOGGED_IN_SALT',   'E{O3#j;W^,h< Kf}*;bYCI7rRQ,PpiA5l-5}IMXi#23~;|24[3hE-hyCb+O9^}1b');
define('NONCE_SALT',       'ih5Pn_3V#<<X*T*<#kWiX8C[4Fwk(]9I[1$nxvk99Xcclk+^&50,Xba Xs=4yr&P');

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>
