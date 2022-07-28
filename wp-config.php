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
define('DB_NAME', 'newarchstudio');

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
define('AUTH_KEY',         '2Rw;G(zya`fXFzr.7#T7/q}(v|VSbx~%_@rhZmP&|z)gEJ4R0q*|ZD5}%b9HI(SW');
define('SECURE_AUTH_KEY',  'u6zhS~y<)1OESE[.xfc_B+8iHHOTALczt9@xH-}:dlrW|7QRPN~R?&/$cr{DNqcS');
define('LOGGED_IN_KEY',    'P$]uT/&2GX.1|:aX.i`+:n 8_0u)oVRhjgmWST.;^?szDi8s&Nb-0&)kEQ9G0J)4');
define('NONCE_KEY',        'MoG%?ks)G.<pU&7Y/%0QU[!{Y?e<jeRi]{R*^lSbgFq3D8r_*o+l3.%^eQN}&D1)');
define('AUTH_SALT',        'z4|#?[m_%7H=O->Gi[A=Zs%6RyC!ATVikQ|)+W.Xl3.(2gFPA]Q+K4(vx$;:U5s ');
define('SECURE_AUTH_SALT', 'D_&x4-RS;k)pKc|cr4o>u*o$$>nhz8W]<YvHj$Jt(a<aV[@)p?>1by_]Qz&V:=Ce');
define('LOGGED_IN_SALT',   '=u6{s(#H^@lg+Y5-{jE3Kd=LxBz#r6iuIl (w[2_RK/8FACnX[bEwHRB21Q#AD2O');
define('NONCE_SALT',       'wfJ[+yOD@JaYn.Ku`vbzYLHl&B3&0Y(S*tO]s7Gel8Y)Xh!B`pYM`;^|N@V7ro3;');

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
