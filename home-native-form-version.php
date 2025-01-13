<?php
/**
 * The template for displaying the blog.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package delete_youremails
 */

get_header();
?>

<h1 class="page-title">Campaña Delete your emails</h1>



<?php
// QUEDA COMENTADO EL CÓDIGO PARA PODER USARLO EN FUTURAS JUNTAS DE FIRMAS

// Función para verificar si un correo ya está registrado en el CSV
function isEmailAlreadyRegistered($email)
{
  $file = fopen('formulario_data.csv', 'r');
  while (($row = fgetcsv($file)) !== false) {
    if ($row[2] === $email) {
      fclose($file);
      return true;  // El correo ya está registrado
    }
  }
  fclose($file);
  return false;  // El correo no está registrado
}

if (
  isset($_POST['correo'])
  && (isset($_POST['nombre']))
  && (isset($_POST['pais']))
) {
  $success = false;

  if (
    !empty(strip_tags($_POST['correo'])) &&
    !empty(strip_tags($_POST['nombre'])) &&
    !empty(strip_tags($_POST['pais']))
  ) {
			// para staging/testeos
			// $to = 'naticiraolo@weareplanta.com';
			// para el vivo
	// Verificar si el correo ya está registrado
    $email = strip_tags($_POST['correo']);
    if (isEmailAlreadyRegistered($email)) {
      // El correo ya está registrado, mostrar mensaje de error
      $error_message = 'El correo ya está registrado. Por favor, proporciona un correo diferente.';
    } else {
      $to = 'ninasnomadres@gmail.com';
      $subject = 'Alguien Sumó su Firma';
      $message = 'Datos de la persona que firma:<br>
		Nombre: ' . strip_tags($_POST['nombre']) . '<br>
		Pais: ' . strip_tags($_POST['pais']) . '<br>
		Correo: ' . strip_tags($_POST['correo']) . '<br>
		IP: ' . $_SERVER['REMOTE_ADDR'];

      $headers  = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= "From: <noreply@ninasnomadres.org>" . "\r\n";

      // Enviar respuesta automática al correo ingresado
      $to_automatic_reply = strip_tags($_POST['correo']);
      $subject_automatic_reply = 'Respuesta Automática: Gracias por tu firma';
      $message_automatic_reply = 'Gracias por firmar';

      $headers_automatic_reply  = "MIME-Version: 1.0" . "\r\n";
      $headers_automatic_reply .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers_automatic_reply .= "From: <naticiraolo@weareplanta.com>" . "\r\n";

      if (mail($to, $subject, $message, $headers)) {
        $success = true;
        // Enviar la respuesta automática
        if (mail($to_automatic_reply, $subject_automatic_reply, $message_automatic_reply, $headers_automatic_reply)) {
          // Respuesta automática enviada con éxito
          error_log('Respuesta automática enviada con éxito.');
        } else {
          // Error al enviar la respuesta automática
          error_log('Error al enviar la respuesta automática: ' . error_get_last()['message']);
        }
      } else {
        // Error al enviar la respuesta principal
        error_log('Error al enviar la respuesta principal: ' . error_get_last()['message']);
      }


      if (mail($to, $subject, $message, $headers)) {
        $success = true;
      }
      // Escribir en un archivo CSV (Excel)
      $nombre = str_replace(',', '\,', $_POST['nombre']);  // Escapar comas
      $pais = str_replace(',', '\,', $_POST['pais']);  // Escapar comas
      $correo = $_POST['correo'];  // No escapar correo
      // acá debería verificar con un if si está el mail ya en el csv muestra mensaje de error y si no procede
      $csvData = '"' . $nombre . '","' . $pais . '","' . $correo . '","' . $_SERVER['REMOTE_ADDR'] . '"' . "\n";
      $file = fopen('formulario_data.csv', 'a');
      fwrite($file, $csvData);
      fclose($file);
    }
  }
}

?>



  <main>
    <div class="marquee-container one">
      <div class="marquee-content">
        <span>
         DELETE YOUR EMAILS
        </span>
        <img src="assets/img/triunfan/mob_niñasilueta.svg" alt="">
        <span>
         BORRA TUS MAILS
        </span>
        <span>
         DELETE YOUR EMAILS
        </span>
        <img src="assets/img/triunfan/mob_niñasilueta.svg" alt="">
        <span>
         BORRA TUS MAILS
        </span>
        <span>
         DELETE YOUR EMAILS
        </span>
        <img src="assets/img/triunfan/mob_niñasilueta.svg" alt="">
        <span>
         BORRA TUS MAILS
        </span>
        <span>
         DELETE YOUR EMAILS
        </span>
        <img src="assets/img/triunfan/mob_niñasilueta.svg" alt="">
        <span>
         BORRA TUS MAILS
        </span>
        <span>
         DELETE YOUR EMAILS
        </span>
        <img src="assets/img/triunfan/mob_niñasilueta.svg" alt="">
        <span>
         BORRA TUS MAILS
        </span>
        <span>
         DELETE YOUR EMAILS
        </span>
        <img src="assets/img/triunfan/mob_niñasilueta.svg" alt="">
        <span>
         BORRA TUS MAILS
        </span>
        <span>
         DELETE YOUR EMAILS
        </span>
        <img src="assets/img/triunfan/mob_niñasilueta.svg" alt="">
        <span>
         BORRA TUS MAILS
        </span>
        <span>
         DELETE YOUR EMAILS
        </span>
        <img src="assets/img/triunfan/mob_niñasilueta.svg" alt="">
        <span>
         BORRA TUS MAILS
        </span>
        <span>
         DELETE YOUR EMAILS
        </span>
        <img src="assets/img/triunfan/mob_niñasilueta.svg" alt="">
        <span>
         BORRA TUS MAILS
        </span>
        <span>
         DELETE YOUR EMAILS
        </span>
        <img src="assets/img/triunfan/mob_niñasilueta.svg" alt="">
        <span>
         BORRA TUS MAILS
        </span>
      </div>
    </div>
    <section class="title-section">
      <h1>Borra tus mails, <strong> #deleteyouremails</strong></h1>
    </section>
    <div class="inner-container-main-sections">



      <!-- 
    // formulario comentado para usar en futura junta de firmas -->

      <section id="formulario" class="formulario-section">
        <?php
        if (isset($success)) {
          if ($success) {
            echo '<br><h2 style="text-align: center;margin: 50px auto 30px; padding-bottom: 50px;" class="response good">Gracias por firmar a favor de la defensa de las infancias libres de violencia.
            <strong>
            ¡Nuestro llamado a los Estados se escuchará más fuerte gracias a ti!
            <strong>
            <strong class="color">
            Hoy y siempre ellas son Niñas, No Madres.
            <strong>
            </h2>';
          } else {
            echo '<br><h2 style="text-align: center;margin: 50px auto 30px; padding-bottom: 50px;" class="response bad">¡Algo salió mal! Por favor, vuelve a rellenar todos los campos para sumar tu firma a favor de las niñas.</h2>';
        
        ?>
            <form action="sumatufirma" id="form" method="POST">
              <?php if (isset($error_message)) : ?>
                <div class="error-message">
                  <?php echo $error_message; ?>
                </div>
              <?php endif; ?>
              <div class="info-label-container">
                <label for="nombre">Nombre:<input type="text" name="nombre" id="nombre" required></label>
                <label for="correo">Correo:<input type="mail" id="correo" name="correo" required></label>
                <label for="pais">País:<input type="text" id="pais" name="pais" required></label>
              </div>
           
              <a href="#" id="enviarFormulario" class="button">Sumate!</a>
              <p class="loading">Estamos procesando el envío</p>
            </form>

          <?php
            }
          } else {
          ?>
          <form action="sumatufirma" id="form" method="POST">
            <?php if (isset($error_message)) : ?>
              <div class="error-message">
                <?php echo $error_message; ?>
              </div>
            <?php endif; ?>
            <div class="info-label-container">
              <label for="nombre">Nombre:<input type="text" name="nombre" id="nombre" required></label>
              <label for="correo">Correo:<input type="mail" id="correo" name="correo" required></label>
              <label for="pais">País:<input type="text" id="pais" name="pais" required></label>
            </div>
         
            <a href="#" id="enviarFormulario" class="button">Sumate</a>
            <p class="loading">Estamos procesando el envío</p>
          </form>

        <?php
        }
        ?>
      </section>
    </div>
   
  </main>
  <script>
    document.getElementById('enviarFormulario').addEventListener('click', function() {
      document.getElementById('form').classList.add('submiting');
      document.getElementById('form').submit();
    });
  </script>
  <script src="js/contacto-min.js" async></script>

</body>

</html>

<?php

get_sidebar();
get_footer();
