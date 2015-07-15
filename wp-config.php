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
define('DB_NAME', 'wordpress_4.2.2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin123');

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
define('AUTH_KEY',         '+bQU8P+pR^pR1EfJ|z46t1aac5{Bbf_j=+.eRKVNN./%mBKz;oA:oT<#=P&w/))P');
define('SECURE_AUTH_KEY',  '!s@hKa#*fsF-GSfrA9[kG!$(CxrT-sU]l{Eh5pe13-s9xLbRP:E|W&nK@-vX6woJ');
define('LOGGED_IN_KEY',    '|uBmxqndMWMu-UmN+%tEp`^HW^Dd1|^B-n>pXb a&9FC%>a$}pm[#:jkLweLZft-');
define('NONCE_KEY',        '&}EiK,*F!|/^Q:{OC,Iv5v@W_sK4o 3-1X`- RpCJ|4v9@#^o|qp{MfqcCQm)X[,');
define('AUTH_SALT',        '-c#3HLAVdvVTFsw|)GL*2b*k~eR)RH+dYKBf>){ufH|efNqgqEOT.G&tK 0YO%zC');
define('SECURE_AUTH_SALT', '|j%ig#gtQi.7--IM-f%Eg _w*O/zVi7idkE#qglaT8&[`&>xPqcMyhj=w:27.Wmm');
define('LOGGED_IN_SALT',   '9;f|;9WfnT$q0&&xcLStb.$E<+83^PA>5$Z $|]^Dx2xz*!lLzk@+$tO^Vc?&&|,');
define('NONCE_SALT',       '}vZ#Y/Ck! FUvuM8jM!E{F?:+~1D~1+hZRtubZH&@S7bqBS|4q*|[<zx}i9+|COx');

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
