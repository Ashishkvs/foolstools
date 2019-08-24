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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4DvFO3pT9FrjU02XJhqLDK51LIRol/0rb0H94Ny9f/TPnV/QhN9JuYXcxFtRueC2Kr43Ferw9FOf7hSHRk/zxQ==');
define('SECURE_AUTH_KEY',  '9/Il3I2J0ZEEQkW4sXO0Jo7b9d3d96iEQLisHI+GGbdxB0izDa6FkeateR2tn+kvCH4qsFudLA71/3gIww06Cg==');
define('LOGGED_IN_KEY',    'LFDwA50k87blHEkmsrcVYtW5vLsZRptRNQKGe31M8AALPXHQwfE/KtyUW/6Rv6LDCJ6ta/Oq+FhzURXlsd82Sg==');
define('NONCE_KEY',        'ZKM8kCd6035C5grOR54hzzDWpjT5VcO/WAQrVieJc44hBPbqIx5F19IvcCcblEy5HAwlHcV14H4pMFP4vrFl4w==');
define('AUTH_SALT',        'mHuuwDIpq/exbJ8aFBbK9BsGQog2gPRq2ZEXtRCKAMpPl+k66ciBtUp/S7kk0Qw/RJBVKwrppt1jovFSXKvAYg==');
define('SECURE_AUTH_SALT', 'S0ynaSTv8pD0YCI5j3+ebntcTK2wpZ++cWo2rYLPxq3iFZXwxd4WyQ4uUtgYK7a7z6PmjG4sSgm0LrKe3csVSQ==');
define('LOGGED_IN_SALT',   'g9Kf0uWxCUTcAf+dwycVtPhWRwd4qBXpI+/+4BbgcHWf73QhpncqPIx6egy18Xod8TdL+7hUAJ3JwydP8evBIA==');
define('NONCE_SALT',       'm4P2nmrQCumeSVmupJCa+D88Hh3MrVv8xs7caaSj4BSeQAsqBsB2u4lQsiZl34US2PQXe0MgOY8Btr2/4FucQw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
