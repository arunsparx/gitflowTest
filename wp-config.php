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
define('DB_NAME', 'gitflowTest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'sparx');

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
define('AUTH_KEY',         'ELcly|cT0SG)+mJ=x)j77T8ZF:4qVt)+{R:fP*- W 0lM?U0 d`@H}l4(a|Xyaf)');
define('SECURE_AUTH_KEY',  '(&3E- M.zdW54GHjUN2C-.;]T D)+g?&^(f=IC2P~]fUvD,LNI0<&.0+V^ld_^:I');
define('LOGGED_IN_KEY',    'wce7V1$H+?d|-ie|e,$<`i-=pI/7P<,sJ4]1)&g3C@GP.fg[k[1-Y/h7K K}]Y(-');
define('NONCE_KEY',        'wl|hpV`Ig$eF)c,7?3(_#.OFl;~J/[?l,hc_A5o-kqz-V39$ywH&/`[qv(rh!.|4');
define('AUTH_SALT',        'O,0.T<I-9bdUf K=5xA|ML8g.p;/N_[`1gJ4L+s#0$)&2-2=&}1MM8oN;Im.Y8Y5');
define('SECURE_AUTH_SALT', 'Y1P1PmYE/(QV;7wmB]WHZ&mU!) NFW,ubGZ)gzI2#k*,nuRp-o+ePy+]!zgOyvPx');
define('LOGGED_IN_SALT',   '!|e+@u@ea5Z~lxW+?K^FqKGr?:s|9y6e~/@Z^(r75mg+TcE2EIj9Fj?}Uk6+:t4b');
define('NONCE_SALT',       'pMS,5_i)D_E:W-2I/@>Ut|!~&t_aQzg#7nj:;-Lvx9iP+EhjM86yCL~?r#O+X|2`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gft_';

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

