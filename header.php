<?php

/**
 * The header template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package delete_youremails
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_site_icon(); ?>
	<?php wp_head(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/calculator.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/scroll.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:url" content="<?php echo home_url(); ?>" />
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/logo_nube_430x196.png" />
</head>

<body <?php delete_youremails_print_body_class(); ?>>
	<header class="main-theme-header">
		<div class="inner-container">
			<a href="<?php bloginfo('url'); ?>" class="site-icon" aria-label="Ir a la página de inicio del sitio Borra tus Mails" title="Ir a la página de inicio">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo_web.png'); ?>" alt="Logotipo de Borra tus Mails, compuesto por bloques geométricos en colores rojo, amarillo y gris.">
			</a>
			<?php delete_youremails_print_menu('header'); ?>
			<section class="social-media-footer header">

				<div class="languages">
					<p>Idioma:</p>
					<details>
						<summary>
							<img src="<?php echo esc_url(get_template_directory_uri() . '/img/icono-espanol.png'); ?>" alt="Español">
							Español
							<img src="<?php echo esc_url(get_template_directory_uri() . '/img/Icon-arrow.png'); ?>" alt="Flecha que indica apertura de un menú desplegable" class="arrow-icon">
						</summary>
						<ul>
							<li><a href="https://deleteyouremails.weareplanta.com" aria-label="Cambiar a la versión en inglés del sitio" title="Versión en inglés">
								<img src="<?php echo esc_url(get_template_directory_uri() . '/img/icono-ingles.png'); ?>" alt="English" class="en">English</a></li>
						</ul>
					</details>
				</div>
			</section>

			<button id="hamburger-menu-toggler" aria-label="Abrir el menú de navegación">
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
			</button>
			<div id="hamburger-menu-container">
				<?php delete_youremails_print_menu('hamburger'); ?>
				<section class="social-media-footer">
					<div class="languages">
						<p>Idioma:</p>
						<details>
							<summary>
								<img src="<?php echo esc_url(get_template_directory_uri() . '/img/icono-espanol.png'); ?>" alt="Español">
								Español
								<img src="<?php echo esc_url(get_template_directory_uri() . '/img/Icon-arrow.png'); ?>" alt="Flecha que indica apertura de un menú desplegable" class="arrow-icon">
							</summary>
							<ul>
								<li><a href="https://deleteyouremails.weareplanta.com" aria-label="Cambiar a la versión en inglés del sitio" title="Versión en inglés">
									<img src="<?php echo esc_url(get_template_directory_uri() . '/img/icono-ingles.png'); ?>" alt="English" class="en">English</a></li>
							</ul>
						</details>
					</div>

					<ul>
						<li><a href="https://www.facebook.com/people/Borra-Tus-Mails/" target="_blank" aria-label="Visitar la página de Facebook de Borra tus Mails" title="Facebook">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/img/facebook.png'); ?>" alt="Facebook"></a></li>
						<li><a href="https://www.instagram.com/borratusmails/" target="_blank" aria-label="Visitar el perfil de Instagram de Borra tus Mails" title="Instagram">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/img/instagram.png'); ?>" alt="Instagram"></a></li>
						<li><a href="https://bsky.app/profile/borratusmails.bsky.social" target="_blank" aria-label="Visitar el perfil de Bluesky de Borra tus Mails" title="Bluesky">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/img/bluesky-logo.png'); ?>" alt="Bluesky"></a></li>
					</ul>
				</section>
			</div>
		</div>
	</header>
	<main>
