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
define('DB_NAME', 'coderzone');
define('FS_METHOD', 'direct');
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
define('AUTH_KEY',         '4]3}h>h)7Iwd>N[ek*bo Ey0=x,IY+_`ygE _5DC*y dFe >mqK.2M{Io1>X,Npl');
define('SECURE_AUTH_KEY',  'mXezux#n<7I5]Eq,e{Rh}3.@JmLb9BzpOxP[ 3x7q=&?DSL?w03h+kvSLCvdQ{jF');
define('LOGGED_IN_KEY',    '>F*W!I(PSe&Z[MR;/*qm(f=$fdc4XGOE58OAJP]fUP+z6E0kK@F[4`9vQi_Q@41y');
define('NONCE_KEY',        '[c15@+cF)iYB3]EzSLMZGjh~(M7th<gGkWBJ`ub:A@~$}oNr.a|^?M%+x: A~9zR');
define('AUTH_SALT',        'TqcP.I3$JP>1$hxv^yV1~pNREz+Yp#,&EA1D>5=ue{s/{H3X*g-)#Oek7V4{7u]7');
define('SECURE_AUTH_SALT', '^u9+]Ujt2&4(.2;I*P+7GBvWe<gD<i)%}K%qb^u9G{T}:%%;*Ys`uX:q!H;q4G}a');
define('LOGGED_IN_SALT',   'lwu){hQv*gUB)A`1O/v|eyk;5ZlN8 XI6.uC,/Ia ykc3Zf6 vp5/T8E%x_:h_Ld');
define('NONCE_SALT',       '*j<uY7f0Geum$X}(Fzj+)v1SlZLP^ly<2R>S8yG7K*sHOTd,pE3j@W=YY-3/*qG_');

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
