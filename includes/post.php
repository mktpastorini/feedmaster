<?php
// Salva o post como rascunho
function feed_master_save_draft_post($title, $content, $image, $tags, $categories) {
  $post_id = wp_insert_post(array(
    'post_title' => $title,
    'post_content' => $content,
    'post_status' => 'draft',
    'post_author' => 1,
    'tags_input' => $tags,
    'post_category' => $categories
  ));

  // Adiciona a imagem como anexo
  if ($image) {
    $upload_dir = wp_upload_dir();
    $image_name = basename($image);
    $image_path = $upload_dir['path'] . '/' . $image_name;
    $image_url = $upload_dir['url'] . '/' . $image_name;
    copy($image, $image_path);
    $attachment = array(
      'guid' => $image_url,
      'post_mime_type' => 'image/jpeg',
      'post_title' => $image_name,
      'post_content' => '',
      'post_status' => 'inherit'
    );
    $attach_id = wp_insert_attachment($attachment, $image_path, $post_id);
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    $attach_data = wp_generate_attachment_metadata($attach_id, $image_path);
    wp_update_attachment_metadata($attach_id, $attach_data);
    set_post_thumbnail($post_id, $attach_id);
  }

  return $post_id;
}

// Publica o post
function feed_master_publish_post($post_id) {
  wp_publish_post($post_id);
}
?>
