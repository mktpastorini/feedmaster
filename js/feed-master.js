/**

Arquivo JavaScript responsável pela funcionalidade do formulário de raspar feed de sites.
@package Feed_Master
*/
jQuery(document).ready(function($) {

// Captura o evento de envio do formulário
$('#feed-form').submit(function(e) {
e.preventDefault(); // Previne o envio padrão do formulário

// Obtém os dados do formulário
var feedUrl = $('#feed-url').val();
var feedLanguage = $('#feed-language').val();
var feedSaveAs = $('#feed-save-as').val();
var feedTags = $('#feed-tags').val();
var feedCategories = $('#feed-categories').val();

// Faz a requisição AJAX para raspar o feed
$.ajax({
  url: ajaxurl,
  type: 'POST',
  dataType: 'json',
  data: {
    action: 'feed_master_scrape_feed',
    feed_url: feedUrl,
    feed_language: feedLanguage,
    feed_save_as: feedSaveAs,
    feed_tags: feedTags,
    feed_categories: feedCategories
  },
  beforeSend: function() {
    // Exibe a mensagem de carregamento
    $('#feed-form').append('<p class="loading-message"><?php _e("Raspando o feed...", "feed-master"); ?></p>');
  },
  success: function(response) {
    if (response.success) {
      // Exibe a mensagem de sucesso
      $('#feed-form').append('<p class="success-message">' + response.data.message + '</p>');
    } else {
      // Exibe a mensagem de erro
      $('#feed-form').append('<p class="error-message">' + response.data.message + '</p>');
    }
  },
  error: function(xhr, status, error) {
    // Exibe a mensagem de erro
    $('#feed-form').append('<p class="error-message">' + error + '</p>');
  },
  complete: function() {
    // Remove a mensagem de carregamento
    $('.loading-message').remove();
  }
});
});

});