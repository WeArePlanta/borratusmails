<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Empty_Base
 */

get_header();
?>

<section class="error-section">
	<p>error</p>
	<h1>404</h1>
	<p>Esta página se tomó en serio la limpieza digital y desapareció.</p>
	<p>¿Tu inbox? No tanto. Es hora de igualarlo.</p>
	<img src="<?php echo esc_url(get_template_directory_uri() . '/img/error-homer.png'); ?>" alt="Imagen de Homero Simpson escondiendose en una pared de arbustos">
	<p> ¿No sabes por dónde empezar?</p>
	<a href="<?php bloginfo('url'); ?>#divider-take-action">Aquí tres pasos</a>
</section>


<?php

get_footer();
