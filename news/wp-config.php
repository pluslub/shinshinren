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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'LAA1670305-hztfsy' );

/** Database username */
define( 'DB_USER', 'LAA1670305' );

/** Database password */
define( 'DB_PASSWORD', '161lNvABMF8zHMHU' );

/** Database hostname */
define( 'DB_HOST', 'mysql320.phy.lolipop.lan' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'FO1@?}Rw9a&=^r;-p:~jNNw+$Tw65Wk`;6H !d/z%;.,z&IZ:ke|mUm}wVNo<Al;' );
define( 'SECURE_AUTH_KEY',   'z=/sPeLYg Vz}fUH?B,%G`Gy%h0j1Tx!+Cdef#.WRKXuip_AoZ1n/g?(Q?Sp&x-_' );
define( 'LOGGED_IN_KEY',     'axL+-VOB8EKx&2G[4%qrt5I&.#7zD@RT%[]5CFbmliC@Xb7S]} 9+*K+)}`<Y3RV' );
define( 'NONCE_KEY',         'B;KS(k4]M.SJ5pA+E9,ad6Bk%C`<FTV0kYh/UlPK2yD4J]r)$;;jwpga.nL2N PF' );
define( 'AUTH_SALT',         'v{}bKg|L4[} pUK6Y]d5cT+QLvyNL.SKT,>pA/Jn@5kU$/8i=P!aF].z=3JEZR,f' );
define( 'SECURE_AUTH_SALT',  'ml[+)W=7__s9,6]$k{[P:1=A_$nS9N^l+?W:Tzhu#JJmo7OLN$}Eknf*I)$nqV>~' );
define( 'LOGGED_IN_SALT',    '}HPrG5FQQ0->Zt];h~GPGQgDhw_kgZ~Z&p< Ixb<OG!#Zl&DI9p8yg4|bBHHG?)4' );
define( 'NONCE_SALT',        ')$vl-2/{/JG853}PjP7{yDxHCiqb$^>_v;+JF,(r|58g/1p7{{051R2_U:Xhj+Gf' );
define( 'WP_CACHE_KEY_SALT', '^/i-H80F~3%,d`aLyQA<Wsg6&OG;>xVFr6XxNiZsAs/-$;/_MnJgI&,,=!ft}XUe' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp20260213131625_';

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
