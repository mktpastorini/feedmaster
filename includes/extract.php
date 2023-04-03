// Extrai o conteúdo e as imagens dos artigos do feed
function feed_master_extract_content($url) {
  $html = file_get_contents($url);
  $doc = new DOMDocument();
  @$doc->loadHTML($html);

  // Extrai o conteúdo do artigo
  $content = "";
  $elements = $doc->getElementsByTagName("div");
  foreach ($elements as $element) {
    if ($element->getAttribute("class") == "entry-content") {
      $content = $element->nodeValue;
      break;
    }
  }

  // Extrai a imagem principal do artigo
  $image = "";
  $elements = $doc->getElementsByTagName("img");
  foreach ($elements as $element) {
    if ($element->getAttribute("class") == "attachment-post-thumbnail") {
      $image = $element->getAttribute("src");
      break;
    }
  }

  // Redimensiona a imagem
  if ($image) {
    $image_resized = feed_master_resize_image($image);
    if ($image_resized) {
      $image = $image_resized;
    }
  }

  return array("content" => $content, "image" => $image);
}

// Redimensiona a imagem
function feed_master_resize_image($url) {
  require_once 'includes/src/OpenAI-php/Client.php';
  require_once 'php-image-magician/php_image_magician.php';
  require_once 'includes/src/php-simple-html-dom-parser/simple-html-dom.php';
  $magician = new imageLib($url);
  $magician->resizeImage(800, 600);
  $resized_url = dirname($url) . "/" . "feed-master-resized-" . basename($url);
  $magician->saveImage($resized_url);
  return $resized_url;
}
?>