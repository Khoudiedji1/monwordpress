<?php
/**
 * Base configuration of WordPress
 */

// ** Réglages MySQL ** //
define( 'DB_NAME', 'wordpress' );      // nom de ta base de données
define( 'DB_USER', 'root' );           // utilisateur MySQL
define( 'DB_PASSWORD', 'root' );       // mot de passe MySQL (par défaut root sous MAMP)
define( 'DB_HOST', 'localhost' );      // hôte MySQL (localhost sous MAMP)
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ** URL du site ** //
define( 'WP_HOME', 'http://localhost:8888/monwordpress' );
define( 'WP_SITEURL', 'http://localhost:8888/monwordpress' );

// ** Clés uniques d’authentification ** //
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

// Préfixe des tables de la base de données
$table_prefix = 'wp_';

// Mode debug (désactive pour production)
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );


/* C'est tout, ne touchez pas à ce qui suit ! */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
