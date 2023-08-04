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

define( 'DB_NAME', 'dbs5706757' );
define( 'DB_USER', 'dbu2041711' );
define( 'DB_PASSWORD', 'aiZSk7UU35gQb9o)%O' );


/** The name of the database for WordPress */
#define( 'DB_NAME', 'burgar-mahals');
/** Database username */
#define( 'DB_USER', 'root');

/** Database password */
#define( 'DB_PASSWORD', '');

/** Database hostname */
define( 'DB_HOST', 'database-5006912083.ud-webspace.de');

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
define( 'AUTH_KEY',         ':wZ:ea2s}OHQ|~ dKC1Oa(E,30|^tF?:<Vk1^lM~rjxzL!okjW*w^V5rdq>vyqz{' );
define( 'SECURE_AUTH_KEY',  'K=zBYTmu_H+0JpH[T:[Z~cM8SO_*`/HI(dT5VqoftY&q]Q-k7OUP Uj%lbeU8lC<' );
define( 'LOGGED_IN_KEY',    '&p!$tN i u4FDCK;v}grq_~)l`uKWk+=c{<!6L_Att|E679Q`Flk7z.Q+E9Kl%r<' );
define( 'NONCE_KEY',        'Z4y!SwNUHK+Wj P&ekEL=6xg2WCX~M`AaF4-kska!1>V%u*k5_bHwuZ2zH^TJ+vH' );
define( 'AUTH_SALT',        '~Bt1Hb?&TUp,2rfelE%[F=c_LJg%QY Tu2kH)?M$TF9,Zdwjw$qWgFyjH&$] 2sZ' );
define( 'SECURE_AUTH_SALT', 'u;~$Tu}Qz.v_!|WFjGZbBZw_r6_z9zyexT0>[^|C)S*xI>z(jd>{ca%g)/}Akdd1' );
define( 'LOGGED_IN_SALT',   'P$#20c-=RKn<KN0L+?EQk)f3[u#a^dNZG g;B,9diAF@ujr!?x6(B_^|nR=Qdj]9' );
define( 'NONCE_SALT',       '|(k.W5qm 60rc0vf>A3G MjJJI9IMu,TSQJ_?RT_T|XV2CF#N(b%lKG(y7hT}QR1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Das_';

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
