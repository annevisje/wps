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
define('AUTH_KEY',         '<v`HqO!n:Bjvjsdb.pPwhg-(}1f,CsfD~utFU-% q)i:a&rmx|8AD?riO/iC|m@L');
define('SECURE_AUTH_KEY',  '12MYVR8~>Dep>zM]`<(|z*/+P9ZyHD{aul*t/}-l{G:f21b4Ydfx@D-SlLEK@1,M');
define('LOGGED_IN_KEY',    ':Q^xNi}VH1EwqQy3z^G,bP?<F%tvyHf9AmC*!u~!kMjh%7O4z>>[/.wqT(w? Ju(');
define('NONCE_KEY',        'G,NN?IsS5bay=Ev|>kl=ph|i)e`*{ab<#{w.mAti8QG|>%`~_{^pd{ih?U0~i5cI');
define('AUTH_SALT',        'qd!L{cOAw@`4<-T,tY}.Lx_iYsyRL!w8K{)z#ra*j2H9=o/H^GfWt0YmA*@DgS/1');
define('SECURE_AUTH_SALT', '7>SXiUbrTpf,v KIHmS1k{+6c,5-3LCISh_1aL[D3DldFDq/7ov7)ub<Yj3JdMmp');
define('LOGGED_IN_SALT',   '!B?od#4|Uq}9p}7:=#x|:@ARaeW19-LSIM%.y4YAOwP7gW,?p9LF7C|(F2Z8 WL4');
define('NONCE_SALT',       'f;s=dzjf2E3/BjqR`HHG[,c.@w6KSN+5D]Z/%ticzxzuc^opK!}+eF]7Lr.L;:}]');

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
