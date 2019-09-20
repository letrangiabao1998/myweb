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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gb094' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ',T+Ox52s5r|Ec%#cs>_^{.GlAa8w}xBM^xHxPsnO@slHHq(r!6%`:^oFr+!KWBAQ' );
define( 'SECURE_AUTH_KEY',  '{DWx}={.ymT:_Nz:#h0cNt/%CB)s-;^aM31dJ$2&>aVa[5y: kSlkgM{OVTz*afp' );
define( 'LOGGED_IN_KEY',    'DbMt9E?LoXMl{pX*G4miM$%zpn^QaW*Z!}Wdx%Dt=<GaueCO>eHb]|9-xQ>}jd5(' );
define( 'NONCE_KEY',        '|_W:ni]&~}vFezv7EA=_<;DK?P+Y/ 0Q>@EVrrdZra>)IH_6i]$m#`y.64,9q?<,' );
define( 'AUTH_SALT',        ')%,a+;KYxU6b;MvMpf=SvJcFcalP:D*ORS9/_:C3yX@J3-`QpD|LXG@w>JR?6@e:' );
define( 'SECURE_AUTH_SALT', 'p3!Sr7-XE#`()GVh-n%&Icg,yLDq!e||)rG:D[J%0]axFmk ,@=6:(pRyB+Q4K2C' );
define( 'LOGGED_IN_SALT',   ']C=<y*{L)9>p+C6dfJ-$-EbU1jp3N!8~Yn]@mZWs?cJ#?EqL[U;0AKnK4{0&U?Ak' );
define( 'NONCE_SALT',       'L~FK~F[pe$3oGBP=@kboIIA]4))lY<])Q #Y-Jjfe]hi|I* bPUDesxSN@W^R0#2' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
