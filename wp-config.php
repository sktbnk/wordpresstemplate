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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'saikat' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '@IHDTqwH)*Q6{ LpRfB/</;[(ge{4r/hgmt.jY{)M+7iy`Z%CoXE${&2)ch=0K)I' );
define( 'SECURE_AUTH_KEY',  'k}1z;/Gj>=v.NB>C#MH <!dz&K5n{R[&#f@a54|BLW4KGhm):` BTZzz *m{Dt*8' );
define( 'LOGGED_IN_KEY',    '$|b}aphN6^5fOcG:m^Aab}H{//m=h5sEpyDKC7Z$g2GMgc@k20SaK?.G6*;)BU+H' );
define( 'NONCE_KEY',        ';!VzPvo]GV[PF<+Ni>qziqF~e)=`a]r4yXN9(^0n;KsoGD%SkSpW?f+YW#w1DzoE' );
define( 'AUTH_SALT',        ')M?t{n__u/`G:fSUdX$g(3fafj},@Z(_xr:kiy+Q-heL3XMY5//hHk55f#WAsB%n' );
define( 'SECURE_AUTH_SALT', 'Mb470!H9e;NN4,^_.$9sl*.oARt,m>_&U`}lT>YMG&;&8Qge.#2e*z2EaBC<!/OM' );
define( 'LOGGED_IN_SALT',   ')!jb?PPN6PH^(]5[y8JjCU*o[FYTh@*B0{9T[l*mhuFxdAqZsBx3%t(Fc9D-|C7c' );
define( 'NONCE_SALT',       'Rbe71>RF+l#h{KLp1cnbAw9Svc: c5]tm>wFT #^@5a&UrO`4nDgd9V}_`moA{<?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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
