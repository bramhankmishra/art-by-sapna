<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'art-by-sapna' );

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
define( 'AUTH_KEY',         '5.>3hlI6l^d(5 2x2z`T!:&@v1b_bF_fPc0FuNniRrem.lpCy16TKoAk(`[w%]B}' );
define( 'SECURE_AUTH_KEY',  'oW]E)MP{S<4]$6~gPkI}lojHptlDW`70LUl#M2^(p_c`ht))Kxw$O[4]5]jHazp`' );
define( 'LOGGED_IN_KEY',    'FvvL-OvP`wnabIxPfvFT$lpX?~Og{ashFf!DHe9m]]]>Gh)dRJbb0]g4<<iHG(<G' );
define( 'NONCE_KEY',        'MLkvL{]8w-3wyTwCP^8-(*&Bo%1s@$C[B{0o4YBt>OhAy_QP=~NPZR!]o$g2I}Bs' );
define( 'AUTH_SALT',        'IbA%| `&]C+&Pk1AsELQlqF99_JeWawGDEDCO]qszUFC~GEukbmwH]frIz;$qZmZ' );
define( 'SECURE_AUTH_SALT', 'C|cbk.g`7Sr6~G2~g<jhU53 WaWGC5iJs^lCS@p0W.|)H09yQsh@H_mRqPF,`Wz!' );
define( 'LOGGED_IN_SALT',   'YTn5,}l,?ta3TZqLTyD@AEyi8qc{47molJ0zo9m19OJ5r{.iktN+4nhYnO;zy[br' );
define( 'NONCE_SALT',       'Z$L]xN`%|AXzW]0uXL,%4<[gBv0ELz!AJ$p&5q+zfaj@~mJ*IGDSl6kY5#)+O%:!' );

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
