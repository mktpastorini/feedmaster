<?php
// Busca o melhor artigo na busca do Google em termos de SEO
function feed_master_search_best_article($query, $api_key, $language = 'en') {
  require_once(dirname(__FILE__) . '/google-custom-search-api/google-custom-search-api.php');
  $google = new Google_Custom_Search_API();
  $google->setAPIKey($api_key);
  $google->setSearchEngineId('012345678901234567890:abcdef');
  $google->setPageLimit(1);
  $google->setQuery($query);
  $results = $google->getResults();
  $title = $results[0]->title;
  $link = $results[0]->link;
  $content = file_get_contents($link);
  $content = feed_master_extract_article_content($content);
  $content = feed_master_rewrite_text($content, $language);
  return array('title' => $title, 'content' => $content);
}
?>
