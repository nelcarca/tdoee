<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'tdoee;2015');

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
define('AUTH_KEY',         'Db#kTB9 Yv>[f!R6<|Y,_N -_#2~:~Grjt6McdirP[+1-$o* >P`Tg.R1B@Fw2jr');
define('SECURE_AUTH_KEY',  'C{`Lav3Kn<%oaXsV~d|-:NOO61<rVrEftDR7kI=r>UWI^y!,D1P~Bz++oKY1[OF~');
define('LOGGED_IN_KEY',    'ei$Sh]-17Ms4&KD]KFiz~wAcCFv cAp& g/{,u+2`YF1!]NPg0$w#Wz+x-.Gf%tu');
define('NONCE_KEY',        '|JolMAS|2J9U=&y!xp9|*tC6_76n3S/B;P>H6+go2R6Dw(DfS-]ah*~f%.rZNhh{');
define('AUTH_SALT',        ' -@?891FSEIEP8;KH4B2Hcr]aM%@].:.gaQGo%X+(L^G@J+cpHT,eQ<D)woIhF,$');
define('SECURE_AUTH_SALT', 'XMICWy<Z..7dL@xZ=-gu]$8KVNNX*2oq7!XK,T+,AOA5f2#Pi`sCI-hjnw1WUZoV');
define('LOGGED_IN_SALT',   '%ds1JZg!;APHBB3OUWR9BA3I<<*Y~s<!0w<T//{/qr}>/q/)`(fk:|Px3{&3Y+ZZ');
define('NONCE_SALT',       '%l+Qc dX*W<K}_9m]d%nW^@)f 4Ly2] @<p:w&41Vjz)kp*eQ]?REw[lC?pNKHSd');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

if(is_admin()) {

add_filter('filesystem_method', create_function('$a', 'return "direct";' ));

define( 'FS_CHMOD_DIR', 0751 );

}

