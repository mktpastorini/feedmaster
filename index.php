<?php
/**
 * Plugin Name: Feed Master
 * Plugin URI: https://www.feedmaster.com
 * Description: Um plugin para raspar feeds de sites, criar posts automaticamente e muito mais!
 * Version: 1.0.0
 * Author: Feed Master Inc.
 * Author URI: https://www.feedmaster.com
 * Text Domain: feed-master
 * Domain Path: /languages
 *
 * @package Feed_Master
 */

// Define o caminho absoluto para a raiz do plugin
define( 'FEED_MASTER_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// Inclui os arquivos necessários
require_once( FEED_MASTER_PLUGIN_DIR . 'config/menu.php' );
require_once( FEED_MASTER_PLUGIN_DIR . 'config/sanitize.php' );
require_once( FEED_MASTER_PLUGIN_DIR . 'includes/rss.php' );
require_once( FEED_MASTER_PLUGIN_DIR . 'includes/extract.php' );
require_once( FEED_MASTER_PLUGIN_DIR . 'includes/rewrite.php' );
require_once( FEED_MASTER_PLUGIN_DIR . 'includes/post.php' );
require_once( FEED_MASTER_PLUGIN_DIR . 'includes/external_links.php' );
require_once( FEED_MASTER_PLUGIN_DIR . 'template/search.php' );
require_once( FEED_MASTER_PLUGIN_DIR . 'template/feed.php' );
require_once( FEED_MASTER_PLUGIN_DIR . 'js/feed-master.js' );
require_once( FEED_MASTER_PLUGIN_DIR . 'css/feed-master.css' );
require_once( FEED_MASTER_PLUGIN_DIR . 'includes/export.php' );
require_once( FEED_MASTER_PLUGIN_DIR . 'includes/notifications.php' );
require_once( FEED_MASTER_PLUGIN_DIR . 'includes/campaigns.php' );

// Inclui as bibliotecas necessárias
require_once( FEED_MASTER_PLUGIN_DIR . 'vendor/autoload.php' );
require_once( FEED_MASTER_PLUGIN_DIR . 'vendor/simplepie/simplepie/library/simplepie.php' );
require_once( FEED_MASTER_PLUGIN_DIR . 'vendor/gpt3-php-wrapper/src/OpenAI.php' );
require_once( FEED_MASTER_PLUGIN_DIR . 'vendor/php-html-parser/php-html-parser/src/Parser.php' );

// Registra o hook de ativação do plugin
register_activation_hook( __FILE__, 'feed_master_activate' );

// Registra o hook de desativação do plugin
register_deactivation_hook( __FILE__, 'feed_master_deactivate' );

// Função de ativação do plugin
function feed_master_activate() {
    // Adicione código de ativação aqui
}

// Função de desativação do plugin
function feed_master_deactivate() {
    // Adicione código de desativação aqui
}
