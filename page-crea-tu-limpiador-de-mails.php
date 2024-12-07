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

<p class="top-title-pages">crea tu limpiador de mails</p>


<section class="mobile-only">
    <p>Para ser hacker de la contaminación digital,</p>
    <p>necesitas una computadora.</p>
    <p>Abre tu computadora y</p>
    <p>sigue los 3 sencillos pasos.</p>
</section>

<section class="desktop-create-script">
    <article class="intro-article">
        <h1>
            vamos a Crear tu propio limpiador de mails automático
        </h1>
        <p>
            y reducir tu huella digital
        </p>
        <p>
            Hoy, en Hacker por un Ratito, aprenderás a hacer un script. ¿Y qué es eso? Tranqui, es más fácil de lo que parece: vas a darle unas indicaciones a tu computadora para que seleccione todos los correos con las palabras que tú elijas, (por ejemplo, “OFERTA” o el nombre de tu ex) los junte y te ponga fácil borrarlos.
        </p>
        <p>Tan solo tienes que seguir estos 3 pasos:</p>
        <div class="inner-intro-article-div">
            <div class="steps-inner-div">
                <p>1.</p>
                <p>Crea tu script</p>
            </div>
            <div class="steps-inner-div">
                <p>2.</p>
                <p>Pégalo en tu mail</p>
            </div>
            <div class="steps-inner-div">
                <p>3.</p>
                <p>Borra tus mails</p>
            </div>
        </div>
    </article>


    <div class="slide-container">
        <div class="slide" id="slide-1">
            <section id="programa-su-eliminacion">
                <?php echo do_shortcode('[email_script_generator]'); ?>
            </section>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
        <div class="slide" id="slide-2">
            <span>SLIDE 2</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum quas eaque molestias esse nemo quod in consectetur aliquam qui laborum repudiandae, quam unde nam, aut fugit placeat. Eligendi, culpa iusto.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum quas eaque molestias esse nemo quod in consectetur aliquam qui laborum repudiandae, quam unde nam, aut fugit placeat. Eligendi, culpa iusto.</p>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
        <div class="slide" id="slide-3">
            <span>SLIDE 3</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum quas eaque molestias esse nemo quod in consectetur aliquam qui laborum repudiandae, quam unde nam, aut fugit placeat. Eligendi, culpa iusto.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum quas eaque molestias esse nemo quod in consectetur aliquam qui laborum repudiandae, quam unde nam, aut fugit placeat. Eligendi, culpa iusto.</p>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
      
    </div>

    <ul class="bullets">
        <li class="slide-one-li"><a href="#slide-1">slide 1</a></li>
        <li class="slide-two-li"><a href="#slide-2">slide 2</a></li>
        <li class="slide-three-li"><a href="#slide-3">slide 3</a></li>
    </ul>










    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <article>
        <h2>4. Las etiquetas ya están capturando tus mails. Ahora tan solo te queda borrarlos.</h2>
        <p>Revisa los mails etiquetados y elimínalos.</p>

        <p>
            <i>
                [contador etiquetas, columna 1]
            </i>
            ¡Ya hemos capturado xxx mails!


            <i> [contador etiquetas, columna 2] </i>
            Eso son un ahorro del CO2 equivalente a xx bolsas de plástico.
        </p>
        <p>
            <strong> Y tú, ¿cuántos mails capturaste y eliminaste?
            </strong>
        </p>

        <label for="input-number">Ingresa el número de cuantos mails eliminaste:</label>
        <input type="number" id="input-number" placeholder="Número" min="0">
        <button onclick="calcular()">Calcular</button>

        <p id="result-grco2e">GrCO2e: -</p>
        <p id="result-km">Kilómetros en auto: -</p>
    </article>

</section>



</main>




<?php
get_sidebar();
get_footer();
