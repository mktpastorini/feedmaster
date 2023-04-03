<?php
// Captura as URLs do feed do site inserido pelo usuário
function feed_master_fetch_feed($feed_url) {
  $feed = fetch_feed($feed_url);
  if (is_wp_error($feed)) {
    return false;
  }
  $max_items = $feed->get_item_quantity(10);
  $items = $feed->get_items(0, $max_items);
  $urls = array();
  foreach ($items as $item) {
    $urls[] = $item->get_permalink();
  }
  return $urls;
}

