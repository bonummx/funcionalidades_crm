<?php
  /**
   * Enviar correo usando el paquete Mail de PEAR
   */
  class Correo {
    function __construct() {
      require '/usr/share/pear/Mail.php';
    }

    /**
     * @param $destinatario. Correos de destinarios separados por comas(,).
     * @param $asunto. Asunto del correo.
     * @param $mensaje. Cuerpo del mensaje en formato HTML, si se necesita enviar en texto plano modificar el valor de Content-Type.
     * @param $copias_ocultas. Correos de copias ocultas separados por comas(,).
     * Pendiente la implementacion y prueba de copias y archivos adjuntos.
     */
    function envia_correo($destinatario, $asunto, $mensaje, $copias_ocultas){
      //
      $from = "test@test.com";
      $to = $destinatario;
      $subject = $asunto;
      $body = $mensaje;

      $host = "smtp.server";
      $port = "587";
      $username = "test@test.com";
      $password = "password";

      $headers = array ('From' => $from,
        'To' => $to,
        'Subject' => $subject,
        'Content-Type' => 'text/html; charset=utf-8');
      $smtp = Mail::factory('smtp',
        array ('host' => $host,
          'port' => $port,
          'auth' => true,
          'username' => $username,
          'password' => $password));

      $recipients = $to.", ".$copias_ocultas;
      $mail = $smtp->send($recipients, $headers, $body);
      /*
      if (PEAR::isError($mail)) {
        echo("<p>" . $mail->getMessage() . "</p>");
      } else {
        echo("<p>Correo Enviado!</p>");
      }
      */
    }
  }
?>
