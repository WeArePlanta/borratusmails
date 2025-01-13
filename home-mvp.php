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

<!-- <h1 class="page-title">Campaña Delete your emails</h1> -->

<main>

  <section class="title-section">
    <h1>Borra tus mails, <strong>que no necesitas porque están impactando en el ambiente. </strong></h1>
    <a href="#programa-su-eliminacion">Programa su eliminación</a>
  </section>

  <section>
    <h2>Ese mail que nunca vas a abrir es basura digital. Y pesa.</h2><br><br>
    <p><span>Cada mail suma a tu huella de carbono digital</span> → el indicador ambiental que cuantifica cómo impactan nuestras actividades en Internet en la crisis climática, midiendo los gases de efecto invernadero. Pongamos un ejemplo:
    </p>
    <br>
    <p>
      <i>[COLUMNA 1: ILUSTRACIÓN MAIL]</i>
      140 mails al día
      Media de mails de una/un oficinista
      <br>
      <i> Ilustramos equivalencia o flecha </i>
      crean tanto CO2 como
    </p>
    <br><br>
    <p>
      <i>[COLUMNA 2: ILUSTRACIÓN BOLSA PLÁSTICO]</i>
      108 años usando 3 bolsas de plástico a la semana

    </p>
    <br><br>
  </section>

  <section>
  <a target="_blank" href="https://calendar.google.com/calendar/event?action=TEMPLATE&amp;tmeid=NzA1N3Y5b21ucjA0anE1bXRxaG42cTVoMnRfMjAyNDEwMjVUMjEwMDAwWiBjYW1pQHdlYXJlcGxhbnRhLmNvbQ&amp;tmsrc=cami%40weareplanta.com&amp;scp=ALL" class="calendar-btn">Agendate un recordatorio para todos los viernes eliminar mails</a>

  </section>



  <section id="programa-su-eliminacion">
    <?php echo do_shortcode('[email_script_generator]'); ?>
  </section>

  <br><br>
  <section>
    <h2>4. Las etiquetas ya están capturando tus mails. Ahora tan solo te queda borrarlos.</h2>
    <p>Revisa los mails etiquetados y elimínalos.</p>
    <br><br>

    <p>
      <i>
        [contador etiquetas, columna 1]
      </i>
      ¡Ya hemos capturado xxx mails!
      <br>
      <br>
      <i> [contador etiquetas, columna 2] </i>
      Eso son un ahorro del CO2 equivalente a xx bolsas de plástico.
    </p>
    <br><br>
    <p>
      <strong> Y tú, ¿cuántos mails capturaste y eliminaste?
      </strong>
    </p>

    <label for="input-number">Ingresa el número de cuantos mails eliminaste:</label>
    <input type="number" id="input-number" placeholder="Número" min="0">
    <button onclick="calcular()">Calcular</button>

    <p id="result-grco2e">GrCO2e: -</p>
    <p id="result-km">Kilómetros en auto: -</p>
    <br>
    <br> <br>
    <br> <br>
    <br>

  </section>

  <section>
    <h4>Compártenos tu mail para recibir más tips para mejorar tu huella de carbono digital. </h4>
    <i>[casilla para mail]</i>
    <br>
    <p>No te enviaremos bullshit, contenido promocional ni usaremos tu correo para usos comerciales. </p>
  </section>
  <br><br><br><br><br><br><br>

  
  <?php echo do_shortcode('[instagram-feed feed=1]'); ?>


</main>


</section>

<?php
get_sidebar();
get_footer();
