<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'RUSaJ1Zd#T,DSZAz0`]vk;3ONID*dCOx{5r_c~5|/Z~C]H%TVa/e2H`kuOJrp/UW' );
define( 'SECURE_AUTH_KEY',   'W8)~;K>63GBzbv~7J:{)f*<O0ifqJ2W7e3zzYe057 _x1#h`7(k8%{y,JT%&~:&I' );
define( 'LOGGED_IN_KEY',     'RwfiLR8dT{UB<0f>*+:HA-9Fq5781t:SW&$}F5#9+-=4L=ri43K&fh#xi4*/eEo/' );
define( 'NONCE_KEY',         'VDL?w/Vf~`C(a#&7ARNDE[5ib&aVo2d5e{d~nK9UnIZPkywFyoti!jj?d;0FgSG?' );
define( 'AUTH_SALT',         'hDsahFupvIh-aw*-|UJ1/$CS7LSo lL6*M/{SMAJLD:KZ8Gkg#sNxREt_dOxY5T?' );
define( 'SECURE_AUTH_SALT',  'hU U{c&w^tbo):eJ|F}O|j_vc]wdV<n;8DK!%Nl,<>|xcsUQ$]A3W`GTF?Ma4V(S' );
define( 'LOGGED_IN_SALT',    'Q(V<w*LL[)0<HE0T}xaSq|ue@)Wrl} .X5-g?8-OexM(B:zwwIue6m[oPW7[qvfG' );
define( 'NONCE_SALT',        'vPgG 20,n-;V*]x`C+*w2{QAOmzg|=KRhr(}  PSAkwSc/u:EN)QWTSib^THQ/`W' );
define( 'WP_CACHE_KEY_SALT', '~c=bR$53{5:98{yO]<(7+av,M)s`yUB,Y}b]8#;{m$V8itDnVha/p[pc9b``~=QJ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
