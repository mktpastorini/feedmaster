<?php
// Reescreve o texto dos artigos usando a API do ChatGPT
function feed_master_rewrite_content($content, $api_key, $language = 'en') {
  require_once(dirname(__FILE__) . '/gpt3-php-wrapper/GPT3.php');
  $gpt3 = new GPT3($api_key, $language);
  $text = $gpt3->complete($content, array('temperature' => 0.5, 'max_tokens' => 2048, 'top_p' => 1, 'frequency_penalty' => 0, 'presence_penalty' => 0));
  return $text;
}

// Personaliza o título dos artigos
function feed_master_customize_title($title) {
  $title = "Feed Master: " . $title;
  return $title;
}
add_filter('the_title', 'feed_master_customize_title');
?>
