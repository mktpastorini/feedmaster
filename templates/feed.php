<?php
/**
 * Template do formulário para raspar feed de sites.
 *
 * @package Feed_Master
 */

?>

<form id="feed-form">
  <label for="feed-url"><?php _e('URL do feed', 'feed-master'); ?></label>
  <input type="url" id="feed-url" name="feed-url" required>
  <br>
  <label for="feed-language"><?php _e('Idioma', 'feed-master'); ?></label>
  <select id="feed-language" name="feed-language">
    <option value="en" selected><?php _e('Inglês', 'feed-master'); ?></option>
    <option value="pt"><?php _e('Português', 'feed-master'); ?></option>
    <option value="es"><?php _e('Espanhol', 'feed-master'); ?></option>
  </select>
  <br>
  <label for="feed-save-as"><?php _e('Salvar como', 'feed-master'); ?></label>
  <select id="feed-save-as" name="feed-save-as">
    <option value="draft" selected><?php _e('Rascunho', 'feed-master'); ?></option>
    <option value="publish"><?php _e('Publicado', 'feed-master'); ?></option>
  </select>
  <br>
  <label for="feed-tags"><?php _e('Tags', 'feed-master'); ?></label>
  <input type="text" id="feed-tags" name="feed-tags">
  <br>
  <label for="feed-categories"><?php _e('Categorias', 'feed-master'); ?></label>
  <input type="text" id="feed-categories" name="feed-categories">
  <br>
  <input type="submit" value="<?php _e('Raspar Feed', 'feed-master'); ?>">
</form>
