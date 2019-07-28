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
define('DB_NAME', 'hotel_db');

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
define('AUTH_KEY',         '>Si^9qZ<}wV}sn.uXd2P}OgF%;0,=f@u?6T)`*FVx2d]GoDs$V4THe^E:o[]ZQm}');
define('SECURE_AUTH_KEY',  'X$7R@21#8fOT7y,m^?13qqp@e}{7]uH-y4$2~.Mjdu~0twAAqo}!guZw6h7}fg2H');
define('LOGGED_IN_KEY',    '|A}:v(/-)7p LgYL?sKSN@WCoybE}`ETq>St(Jn<wkJnS5o5?VCWf6=3V>gPRItw');
define('NONCE_KEY',        '3G7n+B,:eJJs^plRuG{9MF%JZG0y.hd[7M7?X6a*sPw@bLhj-A|?J5C ?1LUd7],');
define('AUTH_SALT',        '4f?S.9]x JRJur@[eIrK[e$S:C&[L&lhPE},]q+tM0I)^#Dtivd|4w}D2UsSn*~.');
define('SECURE_AUTH_SALT', 'cDV;n@-NP~o.Z};3#2B)y C,:G`)<FM2T2wbn/,iqA/Yz!ue0>ffyWO0WEiM=<ZA');
define('LOGGED_IN_SALT',   '+1mW.Ve*]_Y@H0IYNOls87:Fz}+g&^@NrI3D[Xyz1P`QW7C6d< Zi>rympn/)Uq,');
define('NONCE_SALT',       'K(NW=WhAQ`) H|3eB;7jVc+)+J^&!C4znQ`=-oq&f:f_48:8a)N|*?64PU5$`dAI');

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

@ini_set( 'upload_max_size' , '1024M' );
@ini_set( 'post_max_size', '1024M');
@ini_set( 'memory_limit', '1024M' );
@ini_set( 'max_input_time', '300000' );
