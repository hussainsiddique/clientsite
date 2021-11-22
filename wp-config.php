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
define( 'DB_NAME', 'clientsite' );

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
define( 'AUTH_KEY',         ';3U:qS]C!1l55VfFg.7ohxgVoXfsB./d@`a.k#{m }I10L.DfhwI^Ra>F#(@QEzx' );
define( 'SECURE_AUTH_KEY',  '`&.}~h)R?%9ZBq&{Mv/$1!b3Sf+H3nk5,7%,EGw8zp9NQ<l6w|kx]K:/&NF(=8!;' );
define( 'LOGGED_IN_KEY',    'w3A5H9[iaOq^_NX.OQ!k-94|<S,HfqieWT[1xUv=[O`*}=zDf-{?]/.z~On>aHbx' );
define( 'NONCE_KEY',        '{0c8+}SAVER<Zq4V:)qCV dmVBdHNW+U&j[?&<g6v1R5aFmGuT=;Q@p!^HEEkIz*' );
define( 'AUTH_SALT',        'JbI,,PgP2ef)rU k_8$#1@4y:Q<0g/r:E4~4Ix!FsoP<^JnU7SCsd _DIGmY=CTS' );
define( 'SECURE_AUTH_SALT', 'UFlg Zs~JMvJ /aUDIT7 sv05Re_$:-!=r=S(hTr;Pg {9:v{T9o>!##.N1f#`j+' );
define( 'LOGGED_IN_SALT',   'Sew&&~,dpQT#m.f-hQ_rU~*2bczgEUsdG*nO507toSP.68aiD!%>5&kqo4~A*RZJ' );
define( 'NONCE_SALT',       '6%jzZ|z/!?ZD|LyOS.Rk{Xq+H:-qXe~i6rFkjNvW{Yl&t:4Z*+!pt$eBgetW/,X-' );

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
