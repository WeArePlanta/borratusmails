<?php

/**
 * The header template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Empty_Base
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!-- Site favicon -->
	<!-- 		<link rel="icon" href="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/favicon.ico'); ?>" type="image/x-icon"> -->
	<?php wp_site_icon(); ?>
	<?php wp_head(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/calculator.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
</head>

<body <?php empty_base_print_body_class(); ?>>
	<header class="main-theme-header">
		<div class="inner-container">
			<a href="<?php bloginfo('url'); ?>" class="site-icon" aria-label="Ir a la sección de inicio del sitio">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo_web.png'); ?>">
			</a>
			<?php empty_base_print_menu('header'); ?>
			<button id="hamburger-menu-toggler">
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
			</button>
			<div id="hamburger-menu-container">
				<?php empty_base_print_menu('hamburger'); ?>
			</div>
		</div>
	</header>
	<main>