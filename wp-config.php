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
define( 'DB_NAME', 'gethubmeraliz_db' );

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
define( 'AUTH_KEY',         'nTjIRm%uG/xY<!Oq2jS@1UQkM}@n;5A,m A/5lfU_uQe4PZ17],O%9)|K`(?/! 2' );
define( 'SECURE_AUTH_KEY',  'VrGSc`YMM=^Avcu:!M{fn/BqT-TN!(~9{}[_Ff:MheaSoaOLC#W*&8xk2z+jr{@;' );
define( 'LOGGED_IN_KEY',    'x<QlO>IG0Nga]QDS:yG{L%r!i0AGp]IHO8UoNHHvJ[OqDdBupafA;%aamlCrCRo;' );
define( 'NONCE_KEY',        'hkJ=>ey%T;WTbprZ~8lm(5%gu5SS_1)#C#?V.]_nKn?v%x9]kZXoJkaQhM.8hbZK' );
define( 'AUTH_SALT',        'upDpAUHI<EQkbC!#.0J>.QQHv9j_AqP.wA2i$yZooz6i0OC}mvV !blW#e%7,^VN' );
define( 'SECURE_AUTH_SALT', '^`5]yQ=zY#wMt(`jD%1|%&<O/)kI0WlV+EZ_#r=omKl$+ta(uAuBj(!*/`tCz7)x' );
define( 'LOGGED_IN_SALT',   'n^O/H5(SYRP!e~opQrs@8HjC5@f,fH_A5B>+8ePx]I[+Mep^(SM]fPC*0oZ0;b,G' );
define( 'NONCE_SALT',       '6}4[^*[H+1nsC1V4{&z[[0Y_8s0fF8aG5s`AqkbWRCe4RUO*|4]eiQ`#HI@he,2B' );

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
