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

<p class="top-title-pages">desinstala tu script</p>

<section class="mobile-only">
   <h1><span>¿Necesitas</span> desinstalar tu script?</h1>
   <p>Para desinstalar el script, necesitas una computadora.</p>
   <p> Abre tu computadora para seguir los 3 pasos.</p>
</section>

<section class="delete-script">
   <article class="title">
      <h1>¿Necesitas desinstalar tu script?</h1>
      <p>Sigue estos sencillos pasos</p>
   </article>
   <div class="inner-article-delete-container">
      <article class="delete-container-article">
         <p>Empecemos</p>
         <h2>Desinstala tu script</h2>
         <p class="steps-titles">Paso 1.</p>
         <p class="steps-subtitles">Ve a mis proyectos</p>
         <p>Primero abre el menú de AppScript como vimos en el tutorial de instalación.</p>
         <a href="https://drive.google.com/drive/u/0/home" target="_blank">Abrir Google drive</a>

         <figure class="instructions-figure-container">
            <figcaption>
               <p class="instructions-text">A continuación haz clic en "Nuevo" en la esquina superior izquierda.</p>
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


         <figure class="instructions-figure-container">
            <figcaption>
               <p class="instructions-text">A continuación, pulsa el logo de Google Apps Script para acceder a la sección “Mis proyectos”.</p>
               <img src="<?php echo esc_url(get_template_directory_uri() . '/img/desinstalar-script/desinstalar1.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
            </figcaption>
         </figure>


         <figure class="instructions-figure-container">
            <figcaption>
               <p class="instructions-text">A continuación, pulsa “Mis proyectos” en el menú lateral. </p>
               <img src="<?php echo esc_url(get_template_directory_uri() . '/img/desinstalar-script/desinstalar2.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
            </figcaption>
         </figure>

         <p class="steps-titles">Paso 2.</p>
         <p class="steps-subtitles">Selecciona el proyecto</p>

         <figure class="instructions-figure-container">
            <figcaption>
               <p class="instructions-text">Encuentra el proyecto que quieras borrar y haz clic en los tres puntitos.</p>
               <img src="<?php echo esc_url(get_template_directory_uri() . '/img/desinstalar-script/desinstalar3.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
            </figcaption>
         </figure>


         <figure class="instructions-figure-container">
            <figcaption>
               <p class="instructions-text">Pulsa el botón de “Quitar”.</p>
               <img src="<?php echo esc_url(get_template_directory_uri() . '/img/desinstalar-script/desinstalar4.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
            </figcaption>
         </figure>

         <p class="steps-titles">Paso 3.</p>
         <p class="steps-subtitles">elimina el script</p>

         <figure class="instructions-figure-container">
            <figcaption>
               <p class="instructions-text">Ya casi estás: solo dale a “quitar”, confirma que quieres eliminarlo y listo.</p>
               <img src="<?php echo esc_url(get_template_directory_uri() . '/img/desinstalar-script/desinstalar5.jpg'); ?>" alt="Imagen ilustrativa de la indicación">
            </figcaption>
         </figure>

      </article>
      <div class="you-did-it">
         <p class="text-viva">¡lo conseguiste!</p>
         <p class="text-viva-card">Ya has desinstalado el script.</p>
      </div>
   </div>
</section>
</main>




<?php
get_sidebar();
get_footer();
