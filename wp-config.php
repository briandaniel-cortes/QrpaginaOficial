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
define( 'DB_NAME', 'id17139363_cortes' );

/** MySQL database username */
define( 'DB_USER', 'id17139363_brayan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qSGI}omjAY/lT1g8' );

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
define( 'AUTH_KEY',         '/jXRlO%Io)+rBW=AghqDEczCXv8)+^nq-l0L#=wjX|c%Fc_&:G!y_E;7b4j+i_21' );
define( 'SECURE_AUTH_KEY',  '9qxh94d~Dn]{?7yY1l%Q6ME(7~7oeQ3}wF+!uh}`<#Go!eOOtF~Yoo6ILwbSSG[h' );
define( 'LOGGED_IN_KEY',    'sBe__63a$lZ#%q~Fic!~[6TD9kV<Q6W<R6^8.DA6P.6:Qh&o?tW~g+6IP@lFgnd9' );
define( 'NONCE_KEY',        '[/rxzF}}r?r&1Z@M29]mO@thuQ:wPG(a p]J`XD:|7,]3*1db>} -h0ztT1,j)?G' );
define( 'AUTH_SALT',        'vn3W2h!DWL*]_gN]I[GYL@<C6y!+d)!_&E[Yg-Jk9(HPNHKCv7niIz(Z0WDbc/!!' );
define( 'SECURE_AUTH_SALT', 'Oc-1!>arEsZA5B>EkdDO+hzw0_$>._7T+1YO2RFKkw7bv8{bW:qU~][aj:OrcvEf' );
define( 'LOGGED_IN_SALT',   '-Y[6vS%wMXvHcid=af_>v=IOJ]5K[F,%l_%bam~`JsZHZ~ |}Koe`hI%Oy&eva~Z' );
define( 'NONCE_SALT',       'F4e5Y*`SwjhJrq6,<;Kmt8X&LsXTsI[#-i54RQx&d`ZE|KZeCOiiU2%x=+v,v5Xi' );

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
