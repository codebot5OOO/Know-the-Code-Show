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
define('DB_NAME', 'knowthecDBdrjux');

/** MySQL database username */
define('DB_USER', 'knowthecDBdrjux');

/** MySQL database password */
define('DB_PASSWORD', 'PSd5GjrJRu');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '>vYIQET*ebLS#xhlW~RzoZoN8F^jE2*aO9e9]D~sdsFncIr6$mXeTD9lWGhG1G1');
define('SECURE_AUTH_KEY',  'aS5Z|kV@F0Y}$rfyL]SD:G1S@oZgVFU,bM6T<+mWSD;+lWHD;+lWSD;-lWHD:~pW');
define('LOGGED_IN_KEY',    '0F^rbMI3,rbMI3^qbXI3^qbXI3*qbXI{+mXE;*+mXH2*qmXH;*qaWH;_C:~olVG');
define('NONCE_KEY',        'iL;.mP;xmP;xaP;xLH2~paW:-kVG:@okVF}@oYVF0@oYUF}@nYUF0@nYUF0$nYJF');
define('AUTH_SALT',        '+aL5#xeO9]#xhS9]-lhSD[-lWGC:~oVG1:~oZG1!@oZK0!soZJ4!scZJ4!scNJ4,v');
define('SECURE_AUTH_SALT', '<<yiTPA{+iTEA{+iTEA]+iTDA]+mTD9]+iSD9]xhSD9]-lSD9]-lSD9[-lWC:~plV');
define('LOGGED_IN_SALT',   'q3^jM{ujM{uiL{ebL6.ueaL2.tqaL2_*paH2;*paH1;~paH1:~pWG1:~pWG1:~pVG');
define('NONCE_SALT',       '#S5~hW9~hK9~hW9~sW5~SC8[-hRC8[whRN8|wgdN8[wgRNrbI3^nXIE$njTE{$m');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
