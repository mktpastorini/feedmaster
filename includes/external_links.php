<?php
// Remove os links externos do artigo
function feed_master_remove_external_links($content) {
  require_once(dirname(__FILE__) . '/simple-html-dom/simple_html_dom.php');
  $dom = str_get_html($content);
  foreach($dom->find('a') as $element) {
    if (strpos($element->href, home_url()) === false) {
      $element->outertext = $element->plaintext;
    }
  }
  $content = $dom->save();
  $dom->clear();
  return $content;
}

// Adiciona o atributo "nofollow" nos links externos do artigo
function feed_master_add_nofollow_external_links($content) {
  require_once(dirname(__FILE__) . '/simple-html-dom/simple_html_dom.php');
  $dom = str_get_html($content);
  foreach($dom->find('a') as $element) {
    if (strpos($element->href, home_url()) === false) {
      $element->rel = "nofollow";
    }
  }
  $content = $dom->save();
  $dom->clear();
  return $content;
}
?>
