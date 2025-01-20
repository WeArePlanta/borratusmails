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
        </div>
        <div class="slide" id="slide-2">
            <section class="slide-two-container" id="section-main-slide-two">
                <p>¡Seguimos!</p>
                <h2>PÉGALO en tu mail</h2>
                <p class="steps-titles" id="slide-two-first-step">Paso 1.</p>
                <p class="steps-subtitles">abre Google Apps Script</p>
                <p>Primero Abre Google Drive en tu navegador.</p>
                <a href="https://drive.google.com/drive/u/0/home" target="_blank" aria-label="Abrir Google Drive en una nueva pestaña" title="Abrir Google Drive en una nueva pestaña">Abrir Google drive</a>
                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">A continuación, haz clic en "Nuevo" en la esquina superior izquierda.</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script1.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>
                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">Ahora selecciona Más > Google Apps Script. Esto abrirá una nueva ventana o pestaña con el editor de Google Apps Script.</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script2.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>
                <p class="text-finished-first-step">¡Bien! Ya estás en <strong> Google Apps Script </strong></p>
                <p class="steps-titles" id="slide-two-second-step">Paso 2.</p>
                <p class="steps-subtitles">Crea un nuevo proyecto</p>
                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">Cuando se abra el editor de Google Apps Script, verás un archivo llamado Código.gs.</p>
                        <p class="instructions-text">Borra todo lo que esté escrito en ese archivo para que quede vacío.</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script3.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>
                <p class="steps-titles" id="slide-two-third-step">Paso 3.</p>
                <p class="steps-subtitles">Pega el script</p>
                <p class="instructions-text">Copia el script que has generado.</p>
                <a href="#generated-script" aria-label="Copiar el código generado" title="Copiar el código generado">Copiar el código</a>
                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">Pega el script en el archivo Código.gs que dejaste vacío en el paso anterior.</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script4.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>


                <p class="steps-titles">Paso 4.</p>
                <p class="steps-subtitles">Guarda el proyecto</p>


                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">Haz clic en el icono de guardar (el disquete o "Archivo > Guardar").</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script5.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>


                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">Asigna un nombre al proyecto, por ejemplo, "Borra tus mails".</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script6.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>


                <p class="steps-titles" id="slide-two-fifth-step">Paso 5.</p>
                <p class="steps-subtitles">ACEPTA permisos</p>
                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">Haz clic en el botón de "Ejecutar" (arriba del área del código) y elige la función BorraTusMails.</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script7.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>


                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">La primera vez que lo ejecutes, Google te pedirá permisos para que el script acceda a tu cuenta de Gmail.</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script8.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>


                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">Haz clic en "Revisar permisos" y selecciona tu cuenta de Google.</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script9.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>

                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">Autoriza el script haciendo clic en "Permitir".</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script10.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>

                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">Comprueba que el script se haya ejecutado correctamente.</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script11.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>
                <p class="text-finished-snd-step">¡Bieeen! Ya has ejecutado el script.</p>
                <p class="instructions-text">Revisa tu bandeja de entrada y busca una carpeta que tenga el nombre que le has asignado “borra tus mails”.</p>

                <p class="steps-titles" id="slide-two-sixth-step">paso 6 (opcional)</p>
                <p class="steps-subtitles" id="slide-two-sixth-step-subtitles">automatiza el script</p>

                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">Ve al menú lateral izquierdo y haz clic en el icono del "relojito" (o selecciona "Desencadenadores" desde el menú superior).</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script12.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>

                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">Haz clic en "Añadir un desencadenador" (un botón azul en la esquina inferior derecha).</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script14.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>

                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">Configura el desencadenador:</p>
                        <p class="instructions-text">1. En el primer menú desplegable, selecciona la función BorraTusMails.</p>
                        <p class="instructions-text">2. En el segundo menú, selecciona "Tiempo".</p>
                        <p class="instructions-text">3. En el tercer menú, selecciona la frecuencia con la que quieres que el script se ejecute (por ejemplo, "Diario" si quieres que se envíe un correo todos los días).</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script15.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>

                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">Haz clic en "Guardar".</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script16.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>

            </section>
        </div>
        <div class="slide" id="slide-3">
            <section class="slide-three-container" id="section-main-slide-three">
                <p>Acabemos con esto</p>
                <h2>BORRA TUS MAILS</h2>
                <p class="steps-titles" id="slide-three-first-step">Paso 1.</p>
                <p class="steps-subtitles">selecciona la carpeta</p>
                <p>Primero Abre Gmail en tu navegador.</p>
                <a href="https://mail.google.com/" target="_blank" aria-label="Abrir Gmail en una nueva pestaña" title="Abrir Gmail en una nueva pestaña">Abrir Gmail</a>
                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">A continuación selecciona la etiqueta “borra tus mails”.</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script17.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>

                <p class="steps-titles">Paso 2.</p>
                <p class="steps-subtitles">Selecciona los mails</p>
                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">Pulsa en el selector superior para se que aparezca con el “check” y los mails seleccionados.</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script18.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>

                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">Verás que aparece una barra encima de los mails donde aparece el texto “Seleccionar las [xxx] conversaciones...” haz clic ahí.</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script19.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>

                <p class="steps-titles" id="slide-three-third-step">Paso 3.</p>
                <p class="steps-subtitles">borra los mails</p>
                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">Pulsa el botón borrar.</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script20.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>

                <p class="steps-titles">Paso 4.</p>
                <p class="steps-subtitles">vacía la papelera</p>
                <figure class="instructions-figure-container">
                    <figcaption>
                        <p class="instructions-text">Sabemos que da pereza pero es necesario.</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/crear-script/crear-script21.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
                    </figcaption>
                </figure>

                <div class="you-did-it">
                    <p class="text-viva">¡lo conseguiste!</p>
                    <p class="text-viva-card">Mails eliminados. Porque cargar con tantos años de newsletters no era un hobby sostenible.</p>
                </div>
            </section>
        </div>

    </div>

    <ul class="bullets">
        <li class="slide-one-li">
            <a href="#slide-1" aria-label="Ir a la sección 1: Crea tu script" title="Ir a la sección 1: Crea tu script">1. Crea tu script</a>
        </li>
        <li class="slide-two-li">
            <a href="#section-main-slide-two" aria-label="Ir a la sección 2: Pégalo en tu mail" title="Ir a la sección 2: Pégalo en tu mail">2. Pégalo en tu mail</a>
        </li>
        <li class="slide-three-li">
            <a href="#section-main-slide-three" aria-label="Ir a la sección 3: Borra tus mails" title="Ir a la sección 3: Borra tus mails">3. Borra tus mails</a>
        </li>

    </ul>










    <article style="display: none;">
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


    <section class="newsletter">
        <p class="one-text"> Compártenos tu mail para recibir </p>
        <p class="two-text"> más tips</p>
        <p> para mejorar tu huella de carbono digital. </p>
        <?php echo do_shortcode('[correo_formulario]'); ?>

    </section>

</section>



</main>




<?php
get_sidebar();
get_footer();
