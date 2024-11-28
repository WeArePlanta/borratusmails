<?php

/**
 * The template for displaying the blog.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Empty_Base
 */

get_header();
?>

<!-- <h1 class="page-title">Campaña Delete your emails</h1> -->

<main>


    <article id="programa-su-eliminacion">
        <?php echo do_shortcode('[email_script_generator]'); ?>
    </article>
    </section>


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

</main>




<?php
get_sidebar();
get_footer();
