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
define( 'DB_NAME', 'sideout' );

/** MySQL database username */
define( 'DB_USER', 'sideout' );

/** MySQL database password */
define( 'DB_PASSWORD', 'VFVSmjbG4aopzXx' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '&oMPz8Wnb84`h4.7ktQEL],$G>{A8+[249jv~.JF W_Vv9|]u9Z+a-k!l?NeQdG7' );
define( 'SECURE_AUTH_KEY',   '4p7]`(Y=}HlYg<k^>R/V6khKZuySQEuOnFI6KXX?>=aLwTsGd~{~i+DjGCz/rJ&0' );
define( 'LOGGED_IN_KEY',     'MC901A.TUVtiyaY]TVJ+wY7 8G[:4w:WDZr^<ClZcrykBZj5]2,fgxB%57VOCv+J' );
define( 'NONCE_KEY',         'LjO5wt82Q0B;VDvUM4U3{Dm^MaF&/##3]{roBD p?WV%*|WnH#cDi2Bu_&5/cI?Y' );
define( 'AUTH_SALT',         '%{XyA|NRFS!88unf0jZ3h6}BqX}i5Khq|_W;=SwCZr4(NfK8sA#!w*s3uqf9%nds' );
define( 'SECURE_AUTH_SALT',  'SMZ^C*r:1tPvLG97zV&5SM9Du>4y_c&iaT2oO@g0%pvUXn5~O~kP R;KJgE_L(VE' );
define( 'LOGGED_IN_SALT',    '8d!T,RoE @laWc{ly`60!C8iPY8}6nT$pJP>`Rua3_|kzmYvN%=!5M~cIl2aptpf' );
define( 'NONCE_SALT',        '$D4tp&iI fD!az!&yMw{+aAfUxP@Z3ol&{?_nzOFgYG4cm%)N[aD,<SXc<l+xmt|' );
define( 'WP_CACHE_KEY_SALT', '@duz,3to3/N#eq|k4`#I83yVz3EMl7$p~<EYk%@p8F)*ArR(uC{QuV:u%@5rD&_H' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
