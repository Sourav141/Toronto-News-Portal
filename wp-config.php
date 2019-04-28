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
define('DB_NAME', 'torontoOnline');

/** MySQL database username */
define('DB_USER', 'toronto');

/** MySQL database password */
define('DB_PASSWORD', 'swe4401');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CX8:++&aM<rCwyry(7y{`zhpP?52}(#ZEx6/l93JdK-kW.&Mkh(qc!)}$1tWAyAK');
define('SECURE_AUTH_KEY',  'ODq@>.eHKG]tsj<0g|q@)+EED2x?5%66okiWT~Hf^<VObWIG~fw=Yl!Pl/xF$]9R');
define('LOGGED_IN_KEY',    '?,ilnM|YP~=FF#l&v;nrrja]^w{%.TXz2qc7vh:<Jj^qr_PD7qag-w2O^7j(#3#(');
define('NONCE_KEY',        'ylK)N7Ma4knD<2J08ioq.u(WnzqG1S+Og,[6lZpK&GvBT^N/|n)(pvj{bT]VO+)L');
define('AUTH_SALT',        '<IyFa^yE2:{4 Xh}J#,1d7`Ju7+Z5C0t(YSj/)]J,G@FOdr)&.}s}CLS@)p0#<_f');
define('SECURE_AUTH_SALT', 'D/wRq+7(suB/>=A3V|)QFAAaq5F&^Sr]Yt_]Qo$qq&bK`Qhp2O.F3@Qj(EV7~3[}');
define('LOGGED_IN_SALT',   '1q*pv,J 5ruuQ-)YP6%_=?k?K76|7k{3@kJ({<F#;QVLq.=p_vy4 Fn.QDcm*u[k');
define('NONCE_SALT',       ';1[TWRst=t)qA~4?M68BGzJjU2$1 c?t+EA IOo%([-NN=SKNvw?DvU0wozyQ0QY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
