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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'o7bmBNauc|Qt~ICV0u?Z}fv}/+(O K=kn+ouw-~Cl}U7GN85Rfnfazz,DeX0M>1H');
define('SECURE_AUTH_KEY',  '%>aqX<44Try#fk-5X(`DgApB`359HHCO;etB7t8?DD^U!kB=nZ)_<plhoh2lP#Xl');
define('LOGGED_IN_KEY',    '3Lf{&u>chUOg`F*~F9)@V^udEc2xYeY6V:^,LWGp!ctM?z7 .PN(PYotw[qv$vQl');
define('NONCE_KEY',        'd+NuEAF@tkmzHrV]^4v}z+wH[h@H:}jd/,G?m]csQs70mSO.Q[Ff=[Vi%Ma49WwC');
define('AUTH_SALT',        'nh,Cq>78PPJF.dajw/.H2=_O`0%9aSr@;b@W%WT(66,Qi7Oc*I/C1^cJIadE[}W ');
define('SECURE_AUTH_SALT', 'jJurz?zt1hM8PySP]$)+u0hkF0*V:>$k0>}IK`?CwRW2^vDw8NA~gk.t(6mz{rWe');
define('LOGGED_IN_SALT',   'd~N}hrF^,?cD7-l$Gd^D*vKL#,o-^(]U`b1epL+9=uRnc&+55xvU~r{^WhDSXTf%');
define('NONCE_SALT',       ';z3Sbmz,Jovan2&Nxi1dJt^<.t xl{$T9QVS9;Hw5saoKV9BA]Z~pJC-rqy_p&)r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_crud';

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
