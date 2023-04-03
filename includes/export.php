<?php
/**
 * Arquivo PHP responsável pela exportação de dados do plugin.
 *
 * @package Feed_Master
 */

// Função para exportar dados
function feed_master_export_data() {
  // Obtém os dados a serem exportados
  $data = array(
    'feed_url' => get_option('feed_master_feed_url'),
    'feed_language' => get_option('feed_master_feed_language'),
    'feed_save_as' => get_option('feed_master_feed_save_as'),
    'feed_tags' => get_option('feed_master_feed_tags'),
    'feed_categories' => get_option('feed_master_feed_categories')
  );

  // Gera o arquivo de exportação
  $filename = 'feed-master-export-' . date('Y-m-d') . '.json';
  $file_path = ABSPATH . $filename;
  file_put_contents($file_path, json_encode($data));

  // Retorna o caminho do arquivo
  return $file_path;
}
?>
