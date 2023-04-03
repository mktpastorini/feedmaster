<?php
// Adiciona a página de configurações no menu do WordPress
function feed_master_add_menu() {
  add_options_page('Feed Master', 'Feed Master', 'manage_options', 'feed-master', 'feed_master_options_page');
}
add_action('admin_menu', 'feed_master_add_menu');

// Cria o formulário de configurações e os campos necessários
function feed_master_options_page() {
  ?>
  <div class="wrap">
    <h1>Feed Master Settings</h1>
    <form method="post" action="options.php">
      <?php settings_fields('feed_master_settings'); ?>
      <?php do_settings_sections('feed_master_settings'); ?>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">ChatGPT API Key</th>
          <td><input type="text" name="feed_master_chatgpt_api_key" value="<?php echo esc_attr(get_option('feed_master_chatgpt_api_key')); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Google API Key</th>
          <td><input type="text" name="feed_master_google_api_key" value="<?php echo esc_attr(get_option('feed_master_google_api_key')); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Google CX</th>
          <td><input type="text" name="feed_master_google_cx" value="<?php echo esc_attr(get_option('feed_master_google_cx')); ?>" /></td>
        </tr>
      </table>
      <?php submit_button(); ?>
    </form>
  </div>
  <?php
}

// Registra as opções do plugin
function feed_master_register_settings() {
  register_setting('feed_master_settings', 'feed_master_chatgpt_api_key');
  register_setting('feed_master_settings', 'feed_master_google_api_key');
  register_setting('feed_master_settings', 'feed_master_google_cx');
}
add_action('admin_init', 'feed_master_register_settings');
?>
