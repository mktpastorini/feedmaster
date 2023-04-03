<?php
/**
 * Template da página de resultados de pesquisa.
 *
 * @package Feed_Master
 */

get_header();

if (have_posts()) :
  while (have_posts()) : the_post();
    // Exibe o título do post
    the_title('<h2>', '</h2>');
    // Exibe o conteúdo do post
    the_content();
  endwhile;
else :
  // Exibe uma mensagem de erro caso não haja posts
  echo '<p>Nenhum resultado encontrado.</p>';
endif;

get_footer();
?>
