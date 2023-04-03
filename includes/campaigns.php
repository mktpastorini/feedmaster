<?php
/**
 * Arquivo PHP responsável pelas campanhas de email do plugin.
 *
 * @package Feed_Master
 */

// Função para criar campanha
function feed_master_create_campaign($subject, $message) {
  // Obtém a lista de emails dos usuários inscritos
  $users = get_users();

  // Loop pelos usuários
  foreach ($users as $user) {
    // Envia o email
    feed_master_send_notification($user->user_email, $subject, $message);
  }
}
?>
