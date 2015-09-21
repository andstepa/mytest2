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
define('DB_NAME', 'allees');

/** MySQL database username */
define('DB_USER', 'allees');

/** MySQL database password */
define('DB_PASSWORD', 'testing');

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
define('AUTH_KEY',         '~TN=Wg(=b:H:iK&7+h2kb65a84=z]!ek$rSkm2<%x52D%?bPy.7`G,=FS)&I;WYH');
define('SECURE_AUTH_KEY',  'pnlr)H{KKp>Z5{X&|QkFoPTW$RldTN1l,:,}gi]GPntDc0O aSJ+/(3|7<Q+BwI5');
define('LOGGED_IN_KEY',    'I{hUFXlge !l{|LiPwkkjU!06khqS:y,5$d!+qDCq|zo5lnm2IL-<p@eH6}&Zw,M');
define('NONCE_KEY',        '+rd~)@=N4pzNs 6$$6yC#_|1%:*xT/^rAY<YZi^! D+-N-qksVGW]_qt22kMb+-L');
define('AUTH_SALT',        '#ppO36-1?VNr_U?I3Az%:.+dUA@bAW]<*m[c~c2Ui8{_otOwVNZ>tLT?=hqcA1hp');
define('SECURE_AUTH_SALT', '] Jk{g=`^=oo4!MS3!11|{Gk?!NGql1mEp[Ja-q8)-@8xLs?DjQwiY,NJ[`f_Vxl');
define('LOGGED_IN_SALT',   'C|UcH?YHl[:c`Vx9COk4;/G/zQ,$Q:-.y0l]-pMu%]Hc Cw=t(H7x{yOk#:nOu+.');
define('NONCE_SALT',       'f|{!]LQ~.dcUks-|c<9^z@)a)g~=3f+~D$8A[3TN$ex*XSX=K+6Td>%,XlH/G.th');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'allei_';

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
