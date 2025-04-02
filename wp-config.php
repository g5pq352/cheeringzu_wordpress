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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cheeringzu_wordpress' );

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
define( 'AUTH_KEY',         'w%nHu.1qk_mIToj$!=)K8iS7h),1$;T/TG-i9;T_W`T-KQQlhFCeK$qz8+#}q_(C' );
define( 'SECURE_AUTH_KEY',  'h2L3KLe2l=wzg5YvDwwO$q|LJ_FX4YEC[?o+}Xmq-{zdz(bvl3mC^BDFCK[=3u.&' );
define( 'LOGGED_IN_KEY',    '~mCai}xm#&/yN%:QpG<~aYcz[#sV-MdA8 fUGPDb2$DRqOA;gjoF>Y}s^;n7M}FP' );
define( 'NONCE_KEY',        'Uu/Pq:)Wr/c}cvV3aa=2!YwmyPj!H9)uoI5Z.aqWyqr:7yob0p]hR6P~+$(4z%_J' );
define( 'AUTH_SALT',        'yuGB~RI45X7g@Vv2^^mHeOgUF:jfFTcxRq*f)kovA.zga*cp_p;AmKY#J@2~_,4)' );
define( 'SECURE_AUTH_SALT', 'ln*r|50K9/o28:>b7%IHH>#-.2y7]c3QCn[a+[9aCm22I){q%bf_rfjSYPDgvLSS' );
define( 'LOGGED_IN_SALT',   '7w_V#)0^68:2,xF:x(<9BD<^1:Ytak3/%9|;Zp!6X7b8^iB`+r:@N7?E|R;7ugUv' );
define( 'NONCE_SALT',       'R8J|K_h[#w;M ;G2*t>b,yYKJz&YuWNpthvowx f|6@oOt_;|yFY4LO(b+k30bx_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
