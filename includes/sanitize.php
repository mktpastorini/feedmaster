<?php
// Valida e sanitiza a chave API do ChatGPT
function feed_master_sanitize_chatgpt_api_key($input) {
  return sanitize_text_field($input);
}
add_filter('pre_update_option_feed_master_chatgpt_api_key', 'feed_master_sanitize_chatgpt_api_key');

// Valida e sanitiza a API Key do Google
function feed_master_sanitize_google_api_key($input) {
  return sanitize_text_field($input);
}
add_filter('pre_update_option_feed_master_google_api_key', 'feed_master_sanitize_google_api_key');

// Valida e sanitiza o Google CX
function feed_master_sanitize_google_cx($input) {
  return sanitize_text_field($input);
}
add_filter('pre_update_option_feed_master_google_cx', 'feed_master_sanitize_google_cx');
?>
