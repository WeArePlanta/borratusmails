<?php

/**
 * The footer template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Empty_Base
 */

?>
</main>

<footer id="colophon" class="site-footer">

	<section class="go-to-delete-footer">
		<p>Cada correo olvidado usa energía. ¿Borramos?</p>
	
			<a href="<?php bloginfo('url'); ?>#divider-take-action">Empezar</a>
	

	</section>
	<div class="inner-container-footer-sections">
		<section class="contact-footer">

			<p>¿Tienes preguntas?</p>

			<p>Escríbenos a <a href="mailto:borratusmails@weareplanta.com"> borratusmails@weareplanta.com</a>
				y cuando lo resolvamos, lo borramos ;) 
			</p>



		</section>

		<section class="menu-footer">
			<ul>
				<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('crea-tu-limpiador-de-mails'))); ?>">Crea tu limpiador de mails</a></li>
				<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('sign'))); ?>">Empresas, tomen acción</a></li>
				<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('fuentes'))); ?>">Fuentes e info</a></li>
				<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('desinstala-tu-script'))); ?>">Desinstala tu script</a></li>
			</ul>
		</section>
		<section class="social-media-footer">
			<div class="languages">
				<p>Idioma:</p>
				<details>
					<summary>
						<img src="<?php echo esc_url(get_template_directory_uri() . '/img/icono-espanol.png'); ?>" alt="Español" >
						Español
						<img src="<?php echo esc_url(get_template_directory_uri() . '/img/Icon-arrow.png'); ?>" alt="flecha que indica apertura de un elemento" class="arrow-icon">
					</summary>
					<ul>
						<li><a href="https://deleteryouremails.weareplanta.com/"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/icono-espanol.png'); ?>" alt="English" class="en">English</a></li>
						
					</ul>
				</details>
			</div>


			<ul>
				<li><a href="https://www.facebook.com/people/Borra-Tus-Mails/"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/facebook.png'); ?>" alt="Facebook"></a></li>
				<li><a href="https://www.instagram.com/borratusmails/"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/instagram.png'); ?>" alt="Instagram"></a></li>
				<li><a href="https://bsky.app/profile/borratusmails.bsky.social"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/bluesky-logo.png'); ?>" alt="bluesky"></a></li>
			</ul>
		</section>
	</div>
	<section class="copy-footer">
		<p>Sitio web creado en servidor renovable</p>
		<p>©2024 All rights reserved</p>
	</section>
</footer>
<?php wp_footer(); ?>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		// Función para desplazarse suavemente a la sección
		function scrollToSection(event, target) {
			event.preventDefault(); // Evita el comportamiento por defecto del enlace
			const section = document.querySelector(target);
			if (section) {
				section.scrollIntoView({
					behavior: 'smooth'
				});
			}
		}

		// Escuchar los clics en los enlaces que tienen el atributo 'data-scroll'
		const links = document.querySelectorAll('a[data-scroll]');
		links.forEach(link => {
			link.addEventListener('click', function(event) {
				const target = this.getAttribute('href'); // Obtener el destino del enlace
				scrollToSection(event, target); // Llamar a la función de desplazamiento
			});
		});
	});
</script>

</body>

</html>