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
define('AUTH_KEY',         '%!||.0:^lALx<?>v^E}u+nC<1-Q|0?&&%Qtx|uG`H_;ft68g[uL9iE>gZFv`2;(&');
define('SECURE_AUTH_KEY',  '<7fhV-jNd(^H;rlwc8$&r7HoYbH[inh>|M i=1|KaOKn|X@Sn/>SO{rUg;u;sci(');
define('LOGGED_IN_KEY',    'h=xCu6Z0Kw*VI:M.D:AQ~FFS9Vgi-_WP_0YWU^@+Wi|`K7@CeKeoW%->|Atwo=KH');
define('NONCE_KEY',        '^xcT7-f>K|.0Jmg`%,#XR2E+C8alA2`%(K-NmD5c hzj:I<W@>[6UJ]+*<Zey^5R');
define('AUTH_SALT',        'U,cA&;M);L%IQaQxU_xuy>eS52XTx~cj t<^ny,lenf|B[HqTbrXvDi;yF-|Y(($');
define('SECURE_AUTH_SALT', 'd-(KPQEzW=@@rVgeVPv3=!zfU3Yp<-EmbV>QnRL8&)`la@hHRfaKrFW#G/U+[e7V');
define('LOGGED_IN_SALT',   '#n@b(DGoDVJ](#1vgg5|CVT8J9x>b@ss#!4u`J~{|89|-i@xPLwH+oO~QNR}MyuR');
define('NONCE_SALT',       '[9@)-=F_YC&;Wu`~X&/O!+pG+8dM-^Bukx&Nj7OXpv<q|:13}RlPGA.u2^Mfg_E#');

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
