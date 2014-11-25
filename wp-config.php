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
define('DB_NAME', 'sql459031');

/** MySQL database username */
define('DB_USER', 'sql459031');

/** MySQL database password */
define('DB_PASSWORD', 'lS5!uM9%');

/** MySQL hostname */
define('DB_HOST', 'sql4.freemysqlhosting.net');

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
define('AUTH_KEY',         'aXg|WWWr$orKG}mZ}N7zP{|Fmo48?-l&+&aTjIy}M*gOUh{R8n-2acwM6@rgAM?S');
define('SECURE_AUTH_KEY',  'z1H1$N.{TRohP$w9q-[h7Pf8;bCl2ZWKf]f7OO--Hz2>Dz;q2nO,Jm%>r*)8f+j3');
define('LOGGED_IN_KEY',    'UU~=~YpR8y}9$E!9D+&~v7Zq{q,0c:Do!(L<{<%/[h3tMh}365vI7<qh+MpDaC-{');
define('NONCE_KEY',        's{ &n8&w!I()9KI{sD]rD;/&G+{=bMU+n|+Y+TbXI=n4(dJW#K0Ga;IQROySCX4X');
define('AUTH_SALT',        'M>#8~iN92uPOFHy+9B`W+tx=X~;7M=<-y60?]^/jetbJjY9xY`T6`(L:rikt{xTr');
define('SECURE_AUTH_SALT', '3zOlk!5aekOH+vh%Nj=YrZ^4=$<clD~xHSUz1-Ts6C> >TfBu-KKrS-1#zIJpixn');
define('LOGGED_IN_SALT',   'BS{SrjZ4K;8+?kT,dH(rku)x*,y-V?|0*Sj8`/;c~L=wa{6@ei6;n(u::z=%q%~)');
define('NONCE_SALT',       'vX9J`Ti70hL4Lg9?}39UVS68ng-eu7uvO+mS!S9|)m %&i$?i(pXk%RwW)lAB8wy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aj_';

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
