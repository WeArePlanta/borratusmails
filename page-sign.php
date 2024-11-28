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


    <section class="section-count-signers">
        <p>Ya somos más de</p>
        <?php echo do_shortcode('[count_forms]'); ?>

        <p>personas pidiendo a las empresas que tomen acción para unas bandejas de mail más limpias</p>
        <br>
        <br>
        <p>Somos un movimiento de personas que, como tú, acumula basura en sus bandejas de entrada con mails de empresas que ya no necesita. Eso lo estamos pagando con servidores refrigerados 24/7 que van consumiendo energía.</p>
    </section>

    <section class="section-what-how-why">

        <article>
            <h5>¿Qué queremos?</h5>
            <p>Que las marcas tomen acción, invirtiendo parte de sus ganancias en descarbonizar los servidores</p>
        </article>
        <article>
            <h5>¿Cómo?</h5>
            <p>En desarrollos de envíos de mails más ligeros, más limpios. 
                En este recordatorio en el cierre de sus mails: “Este mail no se autodestruirá, así que bórralo cuando ya no te sirva”.</p>
        </article>
        <article>
            <h5>¿Por qué?</h5>
            <p>Porque como usuaries, estamos emitiendo gases de efecto invernadero solo por recibir correos que no necesitamos, eso se traduce en quema de combustible fósil por la energía. Por ello la basura digital es basura.</p>
        </article>

    </section>



    <section>
        <?php echo do_shortcode('[codeable_test_form]'); ?>
        <!-- <div>
			Ya firmaron el petitorio <span id="form-count">0</span> personas.
		</div> -->

    </section>

    <br><br><br>
    <section class="counter-section">
        <form id="form-petitorio">
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
            <input type="email" id="email" name="email" placeholder="Tu email" required>
            <button type="submit">Firmar Petitorio</button>
        </form>
        <br><br>
        <p id="contador-firmas"></p>
        <br><br><br><br>
    </section>
</main>




<?php
get_sidebar();
get_footer();
