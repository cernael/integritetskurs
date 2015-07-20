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
define('DB_USER', 'cernael');

/** MySQL database password */
define('DB_PASSWORD', 'thSP9OfhK6drbs2iYcGM1p3N4qKGzWDdz7WX!E$r');

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
define('AUTH_KEY',         'TbBU)Cu]aY8YLkcs-JStsi2A<bUW23#Si-I.$qj&hzzA$av<DZhl~m&OOl{Mf/O0');
define('SECURE_AUTH_KEY',  '{F!sus8_`wqEM{g>]@+U<K7![I>LsF${V?rw1m$[_=CGvv`}o-H&&}OP gp_WID%');
define('LOGGED_IN_KEY',    'Ba:.KIXBII1g8ZxxoX}a1NKu^{rn@Eo<NF:EX3O*n;ja=m&s=qBf$m,LGX1^b%.-');
define('NONCE_KEY',        'b]M$<-|?l&VP?B_Qw 1BKO9Q<-%Umm`r>RsQ-wObKVvh<Z/^@^w^`A*e!dS7p/]$');
define('AUTH_SALT',        'O5D8nl`QEId7Qzcb2f@e,oi#v=kkrDkD=Cx}=Ld M]4S(CnKPxWck;xv.|$$^J] ');
define('SECURE_AUTH_SALT', '+u:U^kn2#Q${BBNv}bRN<n|el~v2]-CRB+iYPSV_wCz46.dDutY07.=oxd{;h+5m');
define('LOGGED_IN_SALT',   'zvAZ94s:lW*zx)5^MYSN#Aa;>@-X0gxs5(H_[|<@Z6V%B(M+j*eIlw:G:f#J)9.5');
define('NONCE_SALT',       '75ac<^Ua:+jlP+7q<e~<Qiv]p_A%s%mi` REtjILR7N]zv9comAp}0~m:_gOP~`r');

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
