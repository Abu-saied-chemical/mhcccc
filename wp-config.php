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
define( 'DB_NAME', 'admin' );

/** MySQL database username */
define( 'DB_USER', 'admin panel' );

/** MySQL database password */
define( 'DB_PASSWORD', 'abusaied@@@123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'X0NBdWO^cw&,J^OT?AH1+Rs34xNGvIwkPW@X6}jK%_!}_1,_!2HJFX|E>1=MMM]}' );
define( 'SECURE_AUTH_KEY',  'A.oB1U@]HbBZ],*h-?<XxfA;Q:<u)3OJsy|/vj=6< w<w<pPDx$K/cb0E=WV}(5^' );
define( 'LOGGED_IN_KEY',    'o-gJrM|jlFA7VIls,He.GKn*bC]GD>&VFip99+6Uu&|BpuFVmADWr+Vgkyi+%uLN' );
define( 'NONCE_KEY',        '^)WDGf;!Nq.++/#}B%~dTpA9W80`z{|oZ/(erX~55sTDOA5GV|S+dGboI!_Fn@8`' );
define( 'AUTH_SALT',        'VQtm>Be+8&}.r$Tfm$dviZ~q7(26%2p1u@NN#Dbf+pjr8KT!x@.yB}STjb#G]|f_' );
define( 'SECURE_AUTH_SALT', 'ZS=4M$KE(^]^%V-:13|F=Wp-Oh/PE!%Y4V]!1i)3t:VO(%A!T/Q|PdDv@)PGrbb6' );
define( 'LOGGED_IN_SALT',   '^dx#Xt`xs1-r%eKe]47?8q37gn[1+E0Xlyq]$_z-21<O/0::s+oh6%c|l9**Ujk#' );
define( 'NONCE_SALT',       'K%snd@?y|:o8^Gi%^(3p>r9EALNJO&9Nt]KM+$9BE83#2Yoh%#!93:Gv#PO@D@{r' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
