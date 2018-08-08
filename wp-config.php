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
//$test = '%CliqrTier_DB_IP%';
//$test2 = '%CliqrTier_Database_IP%';
//$test3 = '%DB_TIER_IP%';
//$test4 = '%MyDatabase_TIER_IP%';
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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
define('AUTH_KEY',         ':AO<aRY)LpDzNp$xZ{THNY 5z( .n+47% F^#W@M`KEaYMW1yxPgdSH-3~!F36n`');
define('SECURE_AUTH_KEY',  '=&}egKcXR(idz8l7_>fd} EBdQC8AFB<@ZGNz[8I3LP`wB/_Z6OQHutBxAhBJ`xp');
define('LOGGED_IN_KEY',    'yzI<(b4?h1OQ +*l~4G8C[mQkys4R0%&!yZVGY,`mvcTx`IVY8q9RHqL!GhMn`pw');
define('NONCE_KEY',        '5q`PE~/3Ce/x&7_eJi07+e=N+t?iWTHspdv3s+j7:f?SlDs6wq_=Fo5d]oUW`(ol');
define('AUTH_SALT',        ',P1Xoe]aMg`}?SxmpV)mJnIYa8wZKYF((5NP3:VXk:<7y|vVUT SHw%sgXL-*qcx');
define('SECURE_AUTH_SALT', '@pu~mV&adw{c}VaZPl2f:2h#aF{^ZOZU?V&rnb aF3YF]Cgf=V@(?Bex4,0J4<j}');
define('LOGGED_IN_SALT',   'k] y_LG]r(if;uV3@N@W|!R1;%VJxL#/xTTuz5U-+#.=[<6/E6`bUWdn-Dg vw<v');
define('NONCE_SALT',       '67+LS)tA<9h+%H#hGh*a+)@S8*,5*vhv26pOe6]WDobg6rMnq#>1YlP ?x!i)$>`');

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
