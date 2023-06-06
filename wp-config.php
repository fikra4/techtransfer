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
define( 'DB_NAME', 'techtransfer' );

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
define( 'AUTH_KEY',         '(Zs>pb5}P$8T>1%tKFOe4EEh+{]sUNW@Bg8McG{?u=L~+wfYAm,XZM#c-U67Aaf;' );
define( 'SECURE_AUTH_KEY',  '7_1}HWV5;}kX7n|+pZiR!G1&)!1i0yiTu$}kv7bSNs]`K>_&>~muJaqIEhA {&y6' );
define( 'LOGGED_IN_KEY',    'hs$,J8(t~+Bp!d7;nt$S#Qm/J9~&/aQcvad0(sz87+a~/^3m1[)6?ulaT&EL,F1!' );
define( 'NONCE_KEY',        'TC!%s&6y7/.LO1pFj@/o^{<:@EX,oVzD&,WEDNs6VYF)0v%03x/z~Hx]bsOBa^mk' );
define( 'AUTH_SALT',        'bEtT,F-M&;?eBnP[6#*U+1ztZ0_CVtKy$x91gAe8-ip&^~A(x&|}@T0,n>tUq5Hx' );
define( 'SECURE_AUTH_SALT', 'i8YEv&D8tkdceS{5>zO{zjv__+ea{F?YT= )[~>~t}p%0E-j[J)+kF)Y- Xf=et*' );
define( 'LOGGED_IN_SALT',   '[M8j19ZA;{M?2 %EiKI1pE7]QV@j2PEAPJj.M ]kgVW^@d$YE;*NkRX6$Rm$^@xM' );
define( 'NONCE_SALT',       '1Qwrce5AzW%8b{]kdoOA};GGoxE3~^v#Ogv2{j7yB8Ri4>z+;fWl^E7rWSN/)TSp' );

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
