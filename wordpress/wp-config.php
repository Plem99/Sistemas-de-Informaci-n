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
define('DB_NAME', 'SI_Plem');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'L@sWeTVJq= =p>]OkXf9j`UzuOuMac(MCy0]rx?TAjhecqNwE#->+.qb#kqja~ZR');
define('SECURE_AUTH_KEY',  'n2?f(J#R6d>Cl,y&d<]:<3=fPy<.71 9$5y7Gth7y@@JFf6Vm|yL]4l;|~<:Rgna');
define('LOGGED_IN_KEY',    '/<I6RtFhV&vd:y?~E9339qeMZ]mLdMh6>^5.}O0Y`p(s(eR|FrFfLH@+J#MeTxc]');
define('NONCE_KEY',        ':A,?D;^$ibMhPXl/,|RsDE%4n4-{J]XXLG u`LlQPSL7swT6[)l<%4j ~W(.L84Q');
define('AUTH_SALT',        '[X#?}-,xQ!U:L0}+?/x,6n!2=<nbm}t(Pum<E.l-%}F3!Uz{W(4$;;OdTR/Ht0pg');
define('SECURE_AUTH_SALT', 'X;QW7A|`&gBaFo]~7;qD1E|#[YC=E.ry|l$7| %DCF(9#+ZZh%qC y=G;-OA@]gQ');
define('LOGGED_IN_SALT',   '#re~9Jzm H;j/Ht1G R*L-zELD2p{E+`mocyN%s&UL*D%w:k2DtA$W*|huHTh rh');
define('NONCE_SALT',       'K?XOjYV^=.[G%&6o]?~61&5.rLiDK;NSqBZ,-X<LmO`mE3o2I_oar#pvL&{#+l4O');

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
