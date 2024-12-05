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
    </section>
    <section>
        <p>Somos un movimiento de personas que, como tú, acumula correos en sus bandejas de entrada que fueron útiles en su momento pero que ya no necesita. Estos correos requieren servidores funcionando 24/7, consumiendo energía y recursos. Empresas y personas unidas, podemos reducir este impacto</p>
    </section>
    <section class="section-what-how-why">

        <article>
            <h5>¿Qué queremos?</h5>
            <p>Que las marcas sean parte del cambio.</p>
        </article>
        <article>
            <h5>¿Cómo?</h5>
            <p>Adoptando diferentes iniciativas para reducir, medir y compensar este impacto.</p>
        </article>
        <article>
            <h5>¿Por qué?</h5>
            <p>Porque como usuaries, el almacenamiento de correos a los que nos suscribimos pero que ya no necesitamos contribuye al consumo de energía y emisiones de gases de efecto invernadero. Por ello la basura digital es basura.</p>
            <p>Si formas parte de una empresa que quiere tomar acción, escríbenos a <a href="mailto:borratusmails@weareplanta.com">borratusmails@weareplanta.com </a> </p>
        </article>

    </section>

    <section>
        <p>Súmate para que las empresas formen parte del movimiento. Agrega tu voz para impulsar prácticas digitales más sostenibles y motivar a las empresas a ser parte del cambio.</p>
    </section>



    <section class="counter-section">
        <form id="form-petitorio">
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
            <input type="email" id="email" name="email" placeholder="Tu email" required>
            <button type="submit">Firmar Petitorio</button>
        </form>

        <p id="contador-firmas">acá</p>

    </section>
</main>




<?php
get_sidebar();
get_footer();
