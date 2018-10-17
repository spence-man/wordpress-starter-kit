<?php

#############################
# DATABASE CONFIGURATION
############################# 

$table_prefix  = 'wp_';
define('DB_NAME', 'wordpress_dev');
define('DB_USER', 'wordpress_user');
define('DB_PASSWORD', '6EQuZfuO');
define('DB_HOST', '127.0.0.1:8889');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

#############################
# AUTHENTICATION
#############################
define('AUTH_KEY',         'a(^n(g0i)vFQ(Jh>~g@9g5!fRYIn+)J]/f0GGx;16u`^j8I*l])_XZ99Vq{AC+,w');
define('SECURE_AUTH_KEY',  'o7rV]S~|y*<Tx[|Nb>>m  >m4OQMY*w/BmKUe^[a+Kes=?{nn~$S`b`B)mVhojTk');
define('LOGGED_IN_KEY',    '}rqj~iutyOiq6 pnv4c!,0,hoh_zzPR`[`_^o+a-U_*AXAE+$jiS=2)HJ}Vw/uA|');
define('NONCE_KEY',        '{+{j|H<=S4df.&&m|xb0[a;X{=#5RKO|p#-L6Y+?j&0C,?U6wEJ|`NQVj}#fT}M@');
define('AUTH_SALT',        'etIxe^yb=-;o1|*rxCVpaJsq[S VGy>^^vz:?;xE[nM;y_ i$GN3^)n!F7,++Ax~');
define('SECURE_AUTH_SALT', ':5bYivMQLKvUiSj5^lC[O89/n}Rb8ZB_45R(*Kb_zW|M|81P__J5H3!H*3p[T@bU');
define('LOGGED_IN_SALT',   'x?%7-44rZM*p7?i7mablCd_^fKFk))}PIq*v/Cbb:Vi%8H3msqW3*`SUX`*mrU7:');
define('NONCE_SALT',       'SIoZQfdDN?pFbX*1!0[cT8HJGxr+.F$k49D</[g7.d$XrvWY&:y]w`IehU{NDmmC');

#############################
# DEBUG
#############################

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true ); // wp-content/debug.log 
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );
// wonolog requirement
require __DIR__ . '/../vendor/autoload.php';

#############################
# PATHS AND URLS
#############################

# Absolute path to the WordPress directory.
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
# Sets up WordPress vars and included files.
require_once(ABSPATH . 'wp-settings.php');

#############################
# RESOURCES
#############################

// https://blog.runcloud.io/2018/02/01/introducing-wp-cli.html
// https://indigotree.co.uk/getting-wp-cli-work-mamp/
// https://developer.wordpress.org/cli/commands/config/create/
// https://github.com/chapmanu/chap-press
// https://torquemag.io/2017/10/logging-wordpress-bugs-wonolog/
// https://getcomposer.org/doc/01-basic-usage.md#autoloading