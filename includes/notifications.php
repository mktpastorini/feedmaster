<?php
/**
 * Arquivo PHP responsável por enviar notificações do plugin.
 *
 * @package Feed_Master
 */

// Função para enviar notificação
function feed_master_send_notification($to, $subject, $message) {
  // Cabeçalhos do email
  $headers = array('Content-Type: text/html; charset=UTF-8');

  // Envia o email
  wp_mail($to, $subject, $message, $headers);
}
?>
