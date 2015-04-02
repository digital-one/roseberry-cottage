<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'roseberry_cottage');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'YpE~(qwzg4#,O;|1:-u=c|TRo<0Jdc;H=~pWs V*kBo#H2+@YPv;1>)K5*+-jj2t');
define('SECURE_AUTH_KEY',  '6A8d/Fa`JTX-IU-`}^t-`]{~!Y+/YpWY(~LoPl[Mc)vI2`Jc)OCk=+L,z-Ro3,}~');
define('LOGGED_IN_KEY',    'jN-k=< 3/V[)MJ ^~ A-Ih8+:apQ(9+Yl>gr24,`Be|L1[|ts|8N[!.r6`)N|.Z0');
define('NONCE_KEY',        '6m8|{6O!d3aK <gRD~-I3YX#&HxT-VFvY|f}#|F^ak??M1l d((|%M31pqqnHFDA');
define('AUTH_SALT',        'e[N%#2$IsTJUhl!eh;#*3Dno7C`Ss{TV8!U`(R%Ss.1@`GAo!n9%q[;2--0~*Zn9');
define('SECURE_AUTH_SALT', '`~NIA1o>?S{jk9bUZ+}=?2Qu?Ji;Xay1WFz)dl=(o~8j9`NSEB<,lO,~P*wZ,%:^');
define('LOGGED_IN_SALT',   'g(:AFe0N/j{igb)!A?O|bHiJ9%C-`UNYRT_N1; mcQ#18@DD@0XM$;.)N{6]->kQ');
define('NONCE_SALT',       'hTglf`<G+oA2a|^-W=^0,xV[Fu6EY.I?t<Q8<#k+sEHgbcRm_):Pr1TN*n~+Y|,|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
