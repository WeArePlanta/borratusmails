<?php

/**
 * The template for displaying the blog.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();
?>


<main id="main-home">

    <section class="title-section">
        <p>Los mails que envías, recibes y guardas</p>
        <h1> consumen <br> energía </h1>
        <p>como las luces de tu casa encendidas todo el día.</p>
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/arrows-dkp.png'); ?>" alt="Flechas que indican seguir hacia abajo" class="only-dkp">
    </section>

    <section class="only-dkp-banner">
        <figure>
            <div class="first-figure-inner-container">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/cloud-dkp.png'); ?>"
                    alt="Ilustración de una nube con expresión facial">
                <figcaption>
                    <h2>Borra tus mails</h2>
                    <p>porque, aunque se llame “nube”, ni flota ni es ligera.</p>
                </figcaption>
            </div>
            <a href="#divider-take-action"
                title="Haz clic para empezar a limpiar tus correos"
                aria-label="Empieza a limpiar tus correos">Empieza a limpiar</a>
        </figure>
    </section>


    <section class="banners">
        <div class="paragraphs-inner-container">

            <section class="swiper generic-swiper">
                <div class="swiper-wrapper">
                    <!-- SLIDE 1 -->
                    <article class="swiper-slide">

                        <figure class="slider-one-figure">
                            <div class="first-figure-inner-container">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/not-cloude.png'); ?>" alt="Ilustración de una nube con expresión facial">
                                <figcaption>
                                    <h2>Borra tus mails</h2>
                                    <p> porque, aunque se llame “nube”, ni flota ni es ligera.</p>
                                </figcaption>
                            </div>
                        </figure>
                    </article>

                    <!-- SLIDE 2 -->
                    <article class="swiper-slide">


                        <figure class="slider-two-figure">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/sourprise-cloude.png'); ?>" alt="Ilustración de una nube con expresión facial">

                            <h2>Borra tus mails</h2>

                            <p> porque cada mail es como una luz encendida. Y puedes apagarla.</p>

                        </figure>
                    </article>


                    <!-- SLIDE 3 -->
                    <article class="swiper-slide">

                        <figure class="slider-three-figure">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/smiling-cloude.png'); ?>" alt="Ilustración de una nube con expresión facial">

                            <h2>Borra tus mails</h2>

                            <p>porque ordenar da un poquito de placer, y si tiene impacto positivo, mejor.</p>
                        </figure>
                    </article>



                </div>
                <div class="swiper-pagination"> swiper </div>

            </section>


            <a href="#divider-take-action"
                title="Haz clic para empezar a limpiar tus correos"
                aria-label="Empieza a limpiar tus correos">Empieza a limpiar</a>
        </div>

    </section>

    <section class="context-section">
        <div>
            <p>un poco de contexto</p>
        </div>
        <div>
            <p>Cada día se envían y reciben</p>
            <p>361,6 mil millones</p>
            <p>de mails</p>
        </div>
        <div>
            <p>cuyo consumo de energía equivale a</p>
            <p>tu refri funcionando</p>
            <p> 1,9 millones de años</p>
            <p>¿No te lo crees?</p>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('fuentes'))); ?>"
                title="Ir a la página de fuentes"
                aria-label="Aquí la fuente">Aquí la fuente.</a>
        </div>
    </section>

    <div class="divider">
        <picture>
            <!-- Desktop -->
            <source media="(min-width:1200px)" srcset="<?php echo esc_url(get_template_directory_uri() . '/img/divider-dkp.png'); ?>" alt="divider">
            <!-- Mobile  -->
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/divider.png'); ?>" alt="Lineas divisorias de un sector a otro">
        </picture>
    </div>

    <section class="section-alert">
        <span>SPOILER ALERT:</span>
        <p class="la-nube"> La nube no existe,</p>
        <p> son servidores refrigerados 24/7</p>
        <p>Es como si tu correo estuviera enchufado a la corriente. Cada mail que envías, recibes y guardas usa electricidad, y como resultado, lanza gases de efecto invernadero que calientan el planeta. ¿Te suena exagerado?
        </p>
        <p> Pues no lo es, tengo la data: </p>
    </section>


    <section class="section-statistics">
        <div>
            <p>Pongamos que envías </p>
            <span>50.000</span>
            <p>mails al año*</p>
            <p>Es el promedio oficinista, si no me crees </p>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('fuentes'))); ?>"
                title="Ir a la página de fuentes"
                aria-label="Aquí la fuente">Aquí la fuente.</a>
        </div>
        <div>
            <p>estos mails</p>
            <span>CONSUMEN ENERGÍA</span>
            <p>al escribirse, enviarse, leerse y almacenarse en servidores tan feos como este:</p>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/server_ESP.png'); ?>" alt="Fotografía aerea de un complejo que aloja servidores. Sale una flecha de adentro con la leyenda: Ese mail de tu ex que nunca mas vas a volver a abrir">
            <p>¿Sigues sin creerme? Sin problema, </p>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('fuentes'))); ?>"
                title="Ir a la página de fuentes"
                aria-label="Aquí la fuente">aquí la fuente</a>
        </div>
        <div class="years-div">
            <p>Equivale a dejar una bombilla LED de 10 W encendida durante</p>
            <p>4 años</p>
            <p>En serio, me sobran <a href="<?php echo esc_url(get_permalink(get_page_by_path('fuentes'))); ?>"
                    title="Ir a la página de fuentes"
                    aria-label="Aquí la fuente">las fuentes. </a></p>
        </div>
    </section>

    <div class="divider" id="divider-take-action">
        <picture>
            <!-- Desktop -->
            <source media="(min-width:1200px)" srcset="<?php echo esc_url(get_template_directory_uri() . '/img/divider-dkp.png'); ?>" alt="divider">
            <!-- Mobile  -->
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/divider.png'); ?>" alt="Lineas divisorias de un sector a otro">
        </picture>
    </div>

    <section class="section-actions" id="divider-take-action">
        <article class="intro-actions">
            <p>Tres formas de empezar a limpiar tu mail</p>
            <p>Descubre diferentes formas de tomar acción y empezar a reducir tu huella digital.</p>
        </article>
        <div class="inner-container-actions">
            <article class="novate">
                <figure>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/calendar.png'); ?>" alt="imagen referencial al calendar">
                    <figcaption>
                        <p> Opción 1.</p>
                        <p> Novata/o pero con calle:</p>
                        <p> Añade un recordatorio en tu calendario.</p>
                        <p>Si estás empezando en esto de limpiar tu basura digital, esto te tomará solo unos segundos. Compártelo con los tuyos y ya serás pro.</p>
                        <a target="_blank"
                            href="https://calendar.google.com/calendar/event?action=TEMPLATE&amp;tmeid=NzA1N3Y5b21ucjA0anE1bXRxaG42cTVoMnRfMjAyNDEwMjVUMjEwMDAwWiBjYW1pQHdlYXJlcGxhbnRhLmNvbQ&amp;tmsrc=cami%40weareplanta.com&amp;scp=ALL"
                            title="Crea tu evento en Google Calendar"
                            aria-label="Crea tu evento en Google Calendar"
                            rel="noopener noreferrer">Crea tu evento</a>
                    </figcaption>
                </figure>
            </article>


            <article class="hacker">
                <figure>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/script.png'); ?>" alt="imagen referencial al script">
                    <figcaption>
                        <p> Opción 2.</p>
                        <p> Hacker por un ratito: </p>
                        <p>Crea tu propio seleccionador automático de mails que no necesitas.</p>
                        <p>Elige las palabras y haz que automáticamente se seleccionen mails listos para ser borrados.</p>
                        <a target="_blank"
                            href="<?php echo esc_url(get_permalink(get_page_by_path('crea-tu-limpiador-de-mails'))); ?>"
                            title="Ir a la página para crear tu limpiador de mails"
                            aria-label="Crea tu limpiador de mails">Crea tu limpiador</a>
                    </figcaption>
                </figure>
            </article>



            <article class="activist">
                <figure>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/firmas.png'); ?>" alt="imagen referencial al activista digital">
                    <figcaption>
                        <p> Opción 3.</p>
                        <p> Una voz entre la multitud:</p>
                        <p>Firma la petición para que las grandes marcas tomen acción y reduzcan su huella </p>
                        <p>Demostremos que somos cada vez más quienes queremos reducir residuos digitales e invitemos a las marcas a comunicar prácticas sostenibles, como cuando nos piden reciclar un producto</p>
                        <a target="_blank"
                            href="<?php echo esc_url(get_permalink(get_page_by_path('sign'))); ?>"
                            title="Ir a la página para sumarte al contador"
                            aria-label="Súmate al contador">Súmate al contador</a>

                    </figcaption>
                </figure>
            </article>
        </div>
    </section>

    <div class="divider">
        <picture>
            <!-- Desktop -->
            <source media="(min-width:1200px)" srcset="<?php echo esc_url(get_template_directory_uri() . '/img/divider-dkp.png'); ?>" alt="Logo Carpinteria Zubillaga">
            <!-- Mobile  -->
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/divider.png'); ?>" alt="Lineas divisorias de un sector a otro">
        </picture>
    </div>

    <section class="instagram-section">
        <p>Comparte y presume </p>
        <p> de la limpieza de tu mail en tus redes con el hashtag</p>
        <p> #BorraTusMails</p>

        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>

    </section>

    <div class="cards-section">
        <article class="intro-cards">
            <p>Si todavía no te convencimos,
            <p> van 3 motivos más </p>
            <p> para que te pongas a borrarlos, en serio:</p>
        </article>
        <section class="swiper generic-swiper">
            <div class="swiper-wrapper">
                <!-- SLIDE 1 -->
                <article class="swiper-slide">

                    <div class="content-div one">
                        <p class="highlight-text">Porque se envían 361,6 mil millones de mails al día,</p>
                        <p> que equivalen a que pongas la lavadora 1600 millones de veces.</p>
                        <p>Que sí, que siempre tengo fuente, <a href="<?php echo esc_url(get_permalink(get_page_by_path('fuentes'))); ?>"
                                title="Ir a la página de fuentes"
                                aria-label="Aquí la fuente"> aquí. </a></p>
                    </div>
                </article>

                <!-- SLIDE 2 -->
                <article class="swiper-slide">

                    <div class="content-div two">
                        <p class="highlight-text">Porque la basura digital sigue siendo basura:</p>
                        <p>1000 mails consumen como una bombilla LED de 10W encendida durante 29 días. </p>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('fuentes'))); ?>"
                            title="Ir a la página de fuentes"
                            aria-label="Aquí la fuente">Y aquí la fuente.</a>
                    </div>
                </article>

                <!-- SLIDE 3 -->
                <article class="swiper-slide">

                    <div class="content-div three">
                        <p class="highlight-text">Porque Black Friday es el día del año que más mails se envían,</p>
                        <p> y cuando la promoción expire seguirá gastando energía.</p>
                        <p>Lee la fuente <a href="<?php echo esc_url(get_permalink(get_page_by_path('fuentes'))); ?>"
                                title="Ir a la página de fuentes"
                                aria-label="Aquí la fuente"> aquí </a> y ya tienes un motivo más para tomar acción. </p>
                    </div>
                </article>



            </div>
            <div class="swiper-pagination"> swiper </div>

        </section>
    </div>

    <section class="three-steps-section">
        <p> ¿No sabes por dónde empezar?</p>
        <a href="#divider-take-action"
            title="Haz clic para empezar a limpiar tus correos"
            aria-label="Empieza a limpiar tus correos">Aquí tres pasos</a>
    </section>


    <section class="fuentes-section">
        <h4> ¿Todavía no te lo crees? </h4>
        <p>Tranqui, tenemos las fuentes.</p>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('fuentes'))); ?>"
            title="Ir a la página de fuentes"
            aria-label="Aquí la fuente">Ver todas las fuentes</a>

    </section>
    <section class="sponsors">
        <h5> Marcas que forman parte del movimiento</h5>
        <div><img src="<?php echo esc_url(get_template_directory_uri() . '/img/calendar.png'); ?>" alt=""></div>

    </section>
    <section class="newsletter">
        <p> Compártenos tu mail para recibir </p>
        <p> más tips</p>
        <p> para mejorar tu huella de carbono digital. </p>
        <?php echo do_shortcode('[correo_formulario]'); ?>

    </section>



</main>


</section>

<?php
get_footer();
