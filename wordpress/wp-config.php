<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bpolk');

/** MySQL database username */
define('DB_USER', 'bp');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'vdPT4(2KwUN:)a};.qD;3!9{q)PoH_z;r`)2TxaClIf]HzdQ/Fa*~+yu*<dNue3i');
define('SECURE_AUTH_KEY',  'O8VEnbg]U]+-Ci13|+^{<;Y_(Q-[hK}fHbgHWWBp0wF37~Sgv7kJB|NE6*3HpD@p');
define('LOGGED_IN_KEY',    '^-Y6xcr-!U9V:I*:&DZhZ7h<LG*li*Ze1&ms;QpcjPtx)#FG=n][Z3^+?20-2o@8');
define('NONCE_KEY',        '6ctVkyW=#HB[kPSNy%RS4I#}/rTI)J0.ITrZ&11r8V-kSO`Ak1Sh?f,bR,_BHcTy');
define('AUTH_SALT',        'pP|=ctuC9GsH%DmV+B@f}b6#AzW_,Q-jvdH<{ ;O#z=Ix!RM`)6 X%`tnoaLkFiw');
define('SECURE_AUTH_SALT', ')WVXVK+$~R/.)E.|akSK>Z-Qm_IGHIAlcu+<f{|,j6gsqK-oE2G<U9pg%|z O$<c');
define('LOGGED_IN_SALT',   '<Rt%mP;}=&A?+he2 4q,~l)m#)T.H_ qHi?oYM|W}d.U$J)dvpc Tx9Z+x4qWa%@');
define('NONCE_SALT',       '~e&7-$NLoG/UMxjW-b]+T*FK{|~vE7BP_3jRH)-&B#.=jRQ!wG6H>2/O_+Y)o3f0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
