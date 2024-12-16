<?php

/**
 * Empty Base Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Empty_Theme
 */

if (! defined('EMPTY_BASE_VERSION')) {
	define('EMPTY_BASE_VERSION', '1.6.6');
}

add_action('wp_enqueue_scripts', function () {
	// Encolar el estilo principal
	wp_enqueue_style('empty_base', get_stylesheet_directory_uri() . '/style.min.css', array(), EMPTY_BASE_VERSION);

	// Encolar el script principal
	wp_enqueue_script('empty_base', get_stylesheet_directory_uri() . '/js/main.js', array(), EMPTY_BASE_VERSION, true);

	// Encolar el script del formulario de peticiones
	wp_enqueue_script('firma_petitorio', get_stylesheet_directory_uri() . '/js/firma-petitorio.js', array(), EMPTY_BASE_VERSION, true);

	// Encolar el script del scroll de create your script
	wp_enqueue_script('firma_petitorio', get_stylesheet_directory_uri() . '/js/scroll.js', array(), EMPTY_BASE_VERSION, true);

	// Obtener el contador actual de firmas
	$contador_firmas = get_option('contador_firmas', 0);

	// Localizar datos para el script
	wp_localize_script('firma_petitorio', 'ajax_obj', array(
		'ajax_url' => admin_url('admin-ajax.php'),
		'contador_firmas' => $contador_firmas, // Agrega el contador aquí
	));
});


add_action(
	'init',
	function () {
		// all actions related to emojis.
		remove_action('admin_print_styles', 'print_emoji_styles');
		remove_action('wp_head', 'print_emoji_detection_script', 7);
		remove_action('admin_print_scripts', 'print_emoji_detection_script');
		remove_action('wp_print_styles', 'print_emoji_styles');

		remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
		remove_filter('the_content_feed', 'wp_staticize_emoji');
		remove_filter('comment_text_rss', 'wp_staticize_emoji');

		// filter to remove TinyMCE emojis.
		add_filter(
			'tiny_mce_plugins',
			function ($plugins) {
				if (is_array($plugins)) {
					return array_diff($plugins, array('wpemoji'));
				} else {
					return array();
				}
			}
		);
	}
);

add_action(
	'after_setup_theme',
	function () {
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain('empty-base', get_template_directory() . '/languages');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/**
		 * Declare Woocommerce compatibilty.
		 */
		add_theme_support('woocommerce');

		add_theme_support('wc-product-gallery-zoom');

		add_theme_support('wc-product-gallery-lightbox');

		add_theme_support('wc-product-gallery-slider');

		register_nav_menus(
			array(
				'header'    => esc_html__('Header Menu', 'empty-base'),
				'hamburger' => esc_html__('Hamburger Menu (Mobile)', 'empty-base'),
				'footer'    => esc_html__('Footer Menu', 'empty-base'),
			)
		);
	}
);

/*
 * Remove filter in order to prevent the unwanted addition of p tags in the frontend.
 */
add_action(
	'template_redirect',
	function () {
		remove_filter('the_content', 'wpautop');
	}
);

add_action(
	'widgets_init',
	function () {
		register_sidebar(
			array(
				'name'          => 'Empty Base',
				'id'            => 'empty-base',
				'class'         => '',
				'before_widget' => '<div class="widget empty-base">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>',
			)
		);
	}
);

/**
 * Disabling Gutenberg.
 */
$disable_gutenberg = false;

if ($disable_gutenberg) {
	add_filter('use_block_editor_for_post', '__return_false');
}


/**
 * Returns a menu.
 *
 * @param string $location The menu location.
 *
 * @return array The menu.
 */
function empty_base_get_menu($location)
{
	global $wp;
	$menu = null;

	if ($location) {
		$locations = get_nav_menu_locations();

		if (
			$locations &&
			isset($locations[$location])
		) {
			$object = wp_get_nav_menu_object($locations[$location]);

			if ($object) {
				$items = wp_get_nav_menu_items($object->term_id);
				$menu  = array();

				if (! empty($items)) {
					foreach ($items as $item) {
						$menu_item = array();

						$menu_item['item_id'] = $item->ID;
						$menu_item['title']   = $item->title;
						$menu_item['url']     = $item->url;
						$menu_item['target']  = $item->target;
						$menu_item['parent']  = $item->menu_item_parent;
						$menu_item['classes'] = $item->classes;

						$menu_item['classes'][] = 'menu-item';

						if ((home_url($wp->request) . '/') === $item->url) {
							$menu_item['classes'][] = 'current-menu-item';
						}

						$menu_item['submenu'] = array();

						if (isset($menu[$menu_item['parent']])) {
							$menu[$menu_item['parent']]['submenu'][$item->ID] = $menu_item;
						} else {
							$menu[$item->ID] = $menu_item;
						}
					}
				}
			}
		}
	}

	return $menu;
}

/**
 * Returns post excerpt.
 *
 * @param WP_Post $post      Post object.
 * @param int     $num_words Optional. Maximum number of words to return.
 *                           Default 55.
 *
 * @return string Post excerpt.
 */
function empty_base_get_excerpt($post, $num_words = 55)
{
	if (! empty($post->post_excerpt)) {
		$excerpt = $post->post_excerpt;
	} else {
		$excerpt = strip_shortcodes($post->post_content);
		$excerpt = wp_strip_all_tags($excerpt);
	}

	$excerpt = wp_trim_words($excerpt, $num_words);

	return $excerpt;
}

/**
 * Prints the menu body class.
 */
function empty_base_print_body_class()
{
	global $wp_query;

	$classes = array();

	/* 
	*	is_home returns true if it's the blog page
	*/
	if (is_home()) {
		$classes[] = 'page blog-page';
	}

	if (is_category()) {
		$cat = $wp_query->get_queried_object();

		if (isset($cat->term_id)) {
			$classes[] = 'category-' . sanitize_html_class($cat->slug);
		}
	}

	if (is_archive()) {
		$classes[] = 'archive';

		if (is_post_type_archive()) {
			$post_type = get_query_var('post_type');

			if (is_array($post_type)) {
				$post_type = reset($post_type);
			}

			$classes[] = 'archive-' . sanitize_html_class($post_type);
		}
	}

	if (is_page() || is_singular('page_es_es')) {
		global $post;

		$classes[] = 'page page-' . sanitize_html_class($post->post_name);
	}

	if (is_single()) {
		global $post;

		$classes[] = 'single';

		if (isset($post->post_type)) {
			$classes[] = 'single-' . sanitize_html_class($post->post_type, $post->ID);
		}
	}

	if (is_search()) {
		$classes[] = 'search-results';
	}

	if (is_404()) {
		$classes[] = 'page error404';
	}

	echo 'class="' . esc_attr(join(' ', $classes)) . '"';
}

/**
 * The following function takes an id for argument, such as 'main' or 'footer'
 * and outputs them in html, in <ul> and <li> tags.
 *
 * @param int $menu_id The ID identifying the menu.
 */
function empty_base_print_menu($menu_id)
{
	$menu   = empty_base_get_menu($menu_id);
	$output = '';

	if ($menu) {
		$output  = '<nav id="menu-' . esc_attr($menu_id) . '">';
		$output .= empty_base_print_menu_object($menu);
	}

	$output .= '</nav>';

	echo wp_kses_post($output);
}

/**
 * The following function takes a menu array for argument, and recursively
 * concatenates the menus and submenus in a string of html code organized by
 * <ul> and <li> tags.
 *
 * @param array $menu The menu to print.
 *
 * @return string The HTML representing the menu.
 */
function empty_base_print_menu_object($menu)
{
	$output = '<ul>';

	foreach ($menu as $item) {
		$output .= '<li';

		if (! empty($item['classes'])) {
			$output .= ' class="' . esc_attr(implode(' ', $item['classes'])) . '"';
		}

		$output .= '>';

		if (! empty($item['url'])) {
			$output .= '<a href="' . esc_url($item['url']) . '"';

			if (! empty($item['target'])) {
				$output .= ' target="' . esc_attr($item['target']) . '"';
			}

			$output .= '>' . esc_html($item['title']) . '</a>';
		} else {
			$output .= esc_html($item['title']);
		}

		if (! empty($item['submenu'])) {
			$output .= empty_base_print_menu_object($item['submenu']);
		}

		$output .= '</li>';
	}

	$output .= '</ul>';

	return $output;
}

/**
 * Prints a post.
 *
 * @param int   $post_id Optional. The post to print. If null it will be print
 *                       the current post. Default null.
 * @param array $atts {
 *  Optional. Extra arguments to be sent to the function.
 *
 *  @type string  $thumbnail_size Which thumbnail size to use. Default large.
 *  @type boolean $output         Whether to output the content or not. Default
 *                                true.
 * }
 *
 * @return void|string The HTML representing the post if $atts['output'] is
 *                     true.
 */
function empty_base_print_post($post_id = null, $atts = array())
{
	$html = '';

	$atts = shortcode_atts(
		array(
			'thumbnail_size' => 'large',
			'output'         => true,
		),
		$atts
	);

	if (empty($post_id)) {
		$post_id = get_the_ID();
	}

	$post = get_post($post_id);

	if ($post) {
		/* $image = get_the_post_thumbnail( $post_id, $atts['thumbnail_size'] ); */
		$link  = get_permalink($post_id);
		$title = $post->post_title;
		$date  = get_the_date(get_option('date_format'), $post_id);

		$html .= '<article id="article-' . esc_attr($post_id) . '">';

		/* 	if ( ! empty( $image ) ) {
			if ( ! is_single() ) {
				$html .= '<a href="' . esc_url( $link ) . '" title="' . esc_attr( $title ) . '">' . wp_kses_post( $image ) . '</a>';
			} else {
				if ( get_post_type( $post_id ) === 'post' ) {
					$html .= wp_kses_post( $image );
				}
			}
		} */

		if (! is_single()) {
			$html .= '<h2><a href="' . esc_url($link) . '" title="' . esc_attr($title) . '">' . esc_html($title) . '</a></h2>';
		}

		if (get_post_type($post_id) === 'post') {
			$html .= '<div class="toolbar">';
			$html .= '<p> ' . esc_html($date) . '</p>';
			$html .= '</div>';
		}

		if (is_singular(array('post'))) {
			$html .= '<div class="content">';

			$html .= wp_kses_post(apply_filters('the_content', $post->post_content));

			$html .= '</div>';
			$html .= '<div class="tags">';

			the_tags('', '');
			$html .= '</div>';
		} else {
			if ($post->post_excerpt) {
				$html .= '<div class="content">';

				$html .= empty_base_print_excerpt($post, 100, false);

				$html .= '<a href="' . esc_url($link) . '" title="' . esc_attr($title) . '" class="read-more">';
				$html .= esc_html__('More', 'empty-base') . '</a>';
				$html .= '</div>';
			} elseif ($post->post_content) {
				$html .= '<div class="content">';

				$html .= wp_kses_post(apply_filters('the_content', $post->post_content));

				$html .= '<a href="' . esc_url($link) . '" title="' . esc_attr($title) . '" class="read-more">';
				$html .= esc_html__('More', 'empty-base') . '</a>';
				$html .= '</div>';
			}
		}

		$html .= '</article>';
	}

	if ($atts['output']) {
		echo wp_kses_post($html);
	} else {
		return $html;
	}
}

/**
 * Prints current post excerpt.
 *
 * @param WP_Post $post      Post object.
 * @param int     $num_words Optional. Maximum number of words to return.
 *                           Default 100.
 * @param boolean $output    Optional. Whether to output the content or return
 *                           it. Default true.
 *
 * @return void|string Post excerpt if $output is true.
 */
function empty_base_print_excerpt($post, $num_words = 100, $output = true)
{
	if ($output) {
		echo esc_html(empty_base_get_excerpt($post, $num_words));
	} else {
		return esc_html(empty_base_get_excerpt($post, $num_words));
	}
}

add_filter(
	'wp_kses_allowed_html',
	function ($allowed, $context) {
		if ('post' === $context) {
			$allowed['select']   = array(
				'name'     => true,
				'id'       => true,
				'required' => true,
			);
			$allowed['option']   = array(
				'value' => true,
			);
			$allowed['textarea'] = array(
				'name'        => true,
				'placeholder' => true,
				'id'          => true,
				'class'       => true,
				'required'    => true,
			);
			$allowed['input']    = array(
				'type'        => true,
				'name'        => true,
				'placeholder' => true,
				'value'       => true,
				'id'          => true,
				'class'       => true,
				'checked'     => true,
				'required'    => true,
			);

			$allowed['script'] = array(
				'type' => true,
				'src'  => true,
			);

			$allowed['link'] = array(
				'rel'  => true,
				'href' => true,
			);

			$allowed['div']['data-value'] = true;
			$allowed['div']['data-mask']  = true;
			$allowed['div']['onclick']    = true;
			$allowed['a']['download']     = true;

			$allowed['iframe']                = array();
			$allowed['iframe']['class']       = true;
			$allowed['iframe']['width']       = true;
			$allowed['iframe']['height']      = true;
			$allowed['iframe']['frameborder'] = true;
			$allowed['iframe']['src']         = true;
			$allowed['iframe']['scrolling']   = true;
		}

		return $allowed;
	},
	10,
	2
);
// Enqueue del JavaScript y la URL de admin-ajax
function enqueue_email_script_generator_assets()
{
	// Registrar el archivo JS
	wp_register_script('email-script-generator-js', get_template_directory_uri() . '/js/script-generator.js', array('jquery'), null, true);

	// Localizar la URL de admin-ajax.php
	wp_localize_script('email-script-generator-js', 'emailScriptAjax', array(
		'ajax_url' => admin_url('admin-ajax.php'), // URL para las solicitudes Ajax
		'ajax_nonce' => wp_create_nonce('generate_script_nonce') // Nonce para la seguridad
	));

	// Encolar el script
	wp_enqueue_script('email-script-generator-js');
}
add_action('wp_enqueue_scripts', 'enqueue_email_script_generator_assets');

// Shortcode para mostrar el formulario y el textarea
function email_script_generator_shortcode()
{
	$html = '';
	$html .= '<div class="email-script-generator">';
	$html .= '<p>¡Comencemos!</p>';
	$html .= '<h2>Crea tu script</h2>';
	$html .= '<form id="email-script-form" action="" method="post">';
	$html .= '<p>Paso 1.</p>';
	$html .= '<p>Elige las palabras clave</p>';
	$html .= '<p>y detecta los mails que ya no te sirven</p>';
	$html .= '<p>Aquí tienes una lista de las palabras clave más habituales de mails que no aportan nada y que se pueden utilizar para detectar el mail que puedes borrar.</p>';
	$html .= '<div class="checkboxs-div">';
	$html .= '<label for="promo" id="labelPromo"><input type="checkbox" id="promo" name="keywords[]" value="promociones"> Promociones</label>';
	$html .= '<label for="oferta" id="labelOfer"><input type="checkbox" id="oferta" name="keywords[]" value="Oferta"> Oferta</label>';
	$html .= '<label for="boletin" id="labelBol"><input type="checkbox" id="boletin" name="keywords[]" value="Boletín"> Boletín</label>';
	$html .= '<label for="publicidad" id="labelPubli"><input type="checkbox" id="publicidad" name="keywords[]" value="Publicidad"> Publicidad</label>';
	$html .= '<label for="reunion" id="labelReu"><input type="checkbox" id="reunion" name="keywords[]" value="Reunión"> Reunión</label>';
	$html .= '<label for="novedades" id="labelNove"><input type="checkbox" id="novedades" name="keywords[]" value="novedades"> Novedades</label>';
	$html .= '<label for="evento" id="labelEvento"><input type="checkbox" id="evento" name="keywords[]" value="Evento"> Evento</label>';
	$html .= '<label for="newsletter" id="labelNews"><input type="checkbox" id="newsletter" name="keywords[]" value="Newsletter"> Newsletter</label>';
	$html .= '<label for="descuentos" id="labelDesc"><input type="checkbox" id="descuentos" name="keywords[]" value="Descuentos"> Descuentos</label>';
	$html .= '<label for="invitacion" id="labelInvitacion"><input type="checkbox" id="invitacion" name="keywords[]" value="Invitación"> Invitación</label>';

	$html .= '</div>';
	$html .= '<div class="more-words-div">';
	$html .= '<p>¿Se te ocurre alguna más? Agrégala aquí:</p>';
	$html .= '<p>Por ejemplo, aquel gurú que ya te aburre, una marca que ya no va contigo, o el nombre de tu ex.</p>';
	$html .= '<div class="more-words-div-conteiner">';
	$html .= '<label>Añade tus palabras</label>';

	for ($i = 1; $i <= 4; $i++) {
		$html .= '<input type="text" name="additionalKeyword[]" placeholder="Añade tu palabra ' . $i . '">';
	}
	$html .= '</div>';
	$html .= '</div>';

	$html .= '<label class="condition-label"><input type="checkbox" id="generate-script-acept" value="Aceptar" required>Aceptas enviar una notificación cuando uses el script.</label>';
	$html .= '<input type="submit" id="generate-script-button" value="Generar Script">';
	$html .= '</form>';
	$html .= '<h3 id="horabuena"></h3>';
	$html .= '<textarea id="generated-script" readonly style="width: 100%;"></textarea>';
	$html .= '<button id="copy-script-button" type="button" >Copiar al portapapeles</button>';
	$html .= '<p id="copy-success-message" ></p>';
	$html .= '<div id="copy-container">';
	$html .= '<p id="text-viva"></p>';
	$html .= '<p id="text-viva-card"></p>';
	$html .= '</div>';
	$html .= '</div>';


	return $html; // Devolver el HTML concatenado
}
add_shortcode('email_script_generator', 'email_script_generator_shortcode');

// Registrar el Custom Post Type para los registros de las sumisiones
function create_custom_post_type_registro()
{
	$labels = array(
		'name'               => 'Registros',
		'singular_name'      => 'Registro',
		'menu_name'          => 'Registros',
		'name_admin_bar'     => 'Registro',
		'add_new'            => 'Agregar nuevo',
		'add_new_item'       => 'Agregar nuevo registro',
		'new_item'           => 'Nuevo registro',
		'edit_item'          => 'Editar registro',
		'view_item'          => 'Ver registro',
		'all_items'          => 'Todos los registros',
		'search_items'       => 'Buscar registros',
		'not_found'          => 'No se encontraron registros',
		'not_found_in_trash' => 'No se encontraron registros en la papelera',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array('slug' => 'registro'),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'editor', 'custom-fields'),
	);

	register_post_type('registro', $args);
}
add_action('init', 'create_custom_post_type_registro');

// Manejar la solicitud Ajax para generar el script y registrar la sumisión
function handle_generate_email_script()
{
	// Verificar el nonce de seguridad
	if (!isset($_POST['security']) || !wp_verify_nonce($_POST['security'], 'generate_script_nonce')) {
		wp_send_json_error('Error de seguridad.');
	}

	// Obtener las palabras clave seleccionadas
	$keywords = isset($_POST['keywords']) ? $_POST['keywords'] : [];

	// Obtener las palabras clave adicionales (asegúrate de que se manejan como un array)
	$additionalKeywords = isset($_POST['additionalKeywords']) ? array_filter($_POST['additionalKeywords']) : [];

	// Combinar todas las palabras clave
	$allKeywords = array_merge($keywords, $additionalKeywords);

	// Crear la consulta de búsqueda
	$query = implode(' OR ', $allKeywords);

	// Generar el script con las palabras clave
	$script = "
function labelEmailsFromInput() {
  var query = '$query';
  var labelName = 'BORRAR notificaciones viejas'; // Nombre de la etiqueta

  // Obtener la etiqueta, si no existe, crearla
  var label = GmailApp.getUserLabelByName(labelName);
  if (!label) {
    label = GmailApp.createLabel(labelName);
  }

  // Buscar correos que coinciden con la consulta
  var threads = GmailApp.search(query);

  // Etiquetar cada hilo de correo encontrado
  for (var i = 0; i < threads.length; i++) {
    threads[i].addLabel(label);
  }

  // Enviar un correo de notificación con la cantidad de hilos etiquetados
  GmailApp.sendEmail('info@borratusmails.weareplanta.com', 'Correos Etiquetados', 'Se etiquetaron ' + threads.length + ' correos con la etiqueta ' + labelName);

  Logger.log('Etiquetados ' + threads.length + ' correos con la etiqueta ' + labelName);
}
";

	// Crear un nuevo post en el Custom Post Type 'registro'
	$post_id = wp_insert_post(array(
		'post_title'   => 'Registro de script generado', // Puedes agregar más detalles si lo deseas
		'post_content' => $script, // Guardamos el script generado como contenido del post
		'post_type'    => 'registro',
		'post_status'  => 'publish', // Publicamos el registro inmediatamente
		'meta_input'   => array(
			'keywords' => json_encode($allKeywords), // Guardamos todas las palabras clave
		),
	));

	// Verificar si el post fue creado con éxito
	if ($post_id) {
		wp_send_json_success($script);
	} else {
		wp_send_json_error('No se pudo guardar el registro.');
	}
}

// Hooks para usuarios autenticados y no autenticados
add_action('wp_ajax_generate_email_script', 'handle_generate_email_script');
add_action('wp_ajax_nopriv_generate_email_script', 'handle_generate_email_script');



/* código para la primera opción del contador que va a quedar nula probablemente */

function crear_tabla_firmas()
{
	global $wpdb;
	$tabla_firmas = $wpdb->prefix . 'firmas';
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE IF NOT EXISTS $tabla_firmas (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        nombre varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        fecha datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);
}
add_action('after_setup_theme', 'crear_tabla_firmas');



function menu_admin_firmas()
{
	add_menu_page(
		'Firmas del Petitorio',
		'Firmas Petitorio',
		'manage_options',
		'admin_firmas',
		'mostrar_firmas_admin',
		'dashicons-admin-users',
		20
	);
}
add_action('admin_menu', 'menu_admin_firmas');

function mostrar_firmas_admin()
{
	global $wpdb;
	$tabla_firmas = $wpdb->prefix . 'firmas';

	$firmas = $wpdb->get_results("SELECT * FROM $tabla_firmas ORDER BY fecha DESC");

	echo '<div class="wrap"><h1>Firmas del Petitorio</h1>';
	echo '<table class="wp-list-table widefat fixed striped">';
	echo '<thead><tr><th>ID</th><th>Nombre</th><th>Email</th><th>Fecha</th></tr></thead>';
	echo '<tbody>';

	if ($firmas) {
		foreach ($firmas as $firma) {
			echo '<tr>';
			echo '<td>' . esc_html($firma->id) . '</td>';
			echo '<td>' . esc_html($firma->nombre) . '</td>';
			echo '<td>' . esc_html($firma->email) . '</td>';
			echo '<td>' . esc_html($firma->fecha) . '</td>';
			echo '</tr>';
		}
	} else {
		echo '<tr><td colspan="4">No hay firmas registradas aún.</td></tr>';
	}

	echo '</tbody></table></div>';
}

function cargar_script_petitorio()
{
	wp_enqueue_script('firma-petitorio', get_template_directory_uri() . '/js/firma-petitorio.js', array('jquery'), null, true);

	// Pasar la URL de AJAX
	wp_localize_script('firma-petitorio', 'ajax_obj', array(
		'ajax_url' => admin_url('admin-ajax.php')
	));
}
add_action('wp_enqueue_scripts', 'cargar_script_petitorio');

function procesar_formulario_firma()
{
	global $wpdb;

	$nombre = sanitize_text_field($_POST['nombre'] ?? '');
	$email = sanitize_email($_POST['email'] ?? '');

	if (empty($nombre) || empty($email)) {
		wp_send_json_error(array('mensaje' => 'Por favor, completa todos los campos.'));
	}

	// Guardar la firma en la base de datos
	$tabla_firmas = $wpdb->prefix . 'firmas';
	$wpdb->insert(
		$tabla_firmas,
		array(
			'nombre' => $nombre,
			'email' => $email,
			'fecha' => current_time('mysql')
		)
	);

	// Actualizar contador de firmas
	$contador_firmas = (int) get_option('contador_firmas', 0) + 1;
	update_option('contador_firmas', $contador_firmas);

	// Enviar respuesta al cliente
	wp_send_json_success(array(
		'mensaje' => '¡Gracias por firmar el petitorio!',
		'contador_firmas' => $contador_firmas
	));
}
add_action('wp_ajax_procesar_formulario_firma', 'procesar_formulario_firma');
add_action('wp_ajax_nopriv_procesar_formulario_firma', 'procesar_formulario_firma');

//*hasta acáa*/ */



function count_custom_forms()
{
	$args = array(
		'post_type'   => 'custom-form',
		'post_status' => array('draft', 'publish'), // Incluye tanto draft como publish
		'numberposts' => -1 // Para obtener todos los posts
	);
	$posts = get_posts($args);
	$count_posts = count($posts);

	return "Ya firmaron el petitorio " . $count_posts . " personas.";
}
add_shortcode('count_forms', 'count_custom_forms');


/* FORM NEWSLETTER */

function correo_formulario_shortcode()
{
	global $wpdb;
	$mensaje = '';

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['correo_usuario'])) {
		$correo = sanitize_email($_POST['correo_usuario']);
		if (is_email($correo)) {
			$tabla_correos = $wpdb->prefix . 'correos';
			$resultado = $wpdb->insert($tabla_correos, ['email' => $correo]);

			if ($resultado) {
				$mensaje = '<p style="color: white; font-size: 20px; padding-top: 25px;">Correo guardado exitosamente, muchas gracias.</p>';
			} else {
				$mensaje = '<p style="color: red; font-size: 20px; padding-top: 25px;">Error al enviar el correo.</p>';
			}
		} else {
			$mensaje = '<p style="color: red; font-size: 20px; padding-top: 25px;">Por favor, ingresa un correo válido.</p>';
		}
	}

	ob_start();
?>
	<form method="post" class="form-newsletter" id="form-newsletter" action="#form-newsletter">
		<input type="email" name="correo_usuario" placeholder="Ingresa tu correo" required>
		<p>Disclaimer: No te enviaremos bullshit, contenido promocional ni usaremos tu correo para usos comerciales. Te ayudaremos a entrenar buenas prácticas digitales: <a href=""> léela y bórrala.</a></p>
		<button type="submit">Añade tu correo</button>
	</form>
	<?php echo $mensaje; ?>
<?php
	return ob_get_clean();
}
add_shortcode('correo_formulario', 'correo_formulario_shortcode');



// Crear la tabla en la base de datos al activar el tema/plugin
function crear_tabla_correos()
{
	global $wpdb;
	$tabla_correos = $wpdb->prefix . 'correos';
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE IF NOT EXISTS $tabla_correos (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        email varchar(255) NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);
}
add_action('after_switch_theme', 'crear_tabla_correos'); // Cambiar a `register_activation_hook` si es un plugin

// Mostrar los correos en el admin
function agregar_pagina_admin_correos()
{
	add_menu_page(
		'Lista de Correos',       // Título de la página
		'Correos de Mas tips',                // Texto del menú
		'manage_options',         // Capacidad
		'lista_correos',          // Slug
		'mostrar_lista_correos',  // Callback
		'dashicons-email-alt',    // Icono
		20                        // Posición
	);
}
add_action('admin_menu', 'agregar_pagina_admin_correos');

// Callback para mostrar los correos
function mostrar_lista_correos()
{
	global $wpdb;
	$tabla_correos = $wpdb->prefix . 'correos';
	$correos = $wpdb->get_results("SELECT * FROM $tabla_correos");

	echo '<div class="wrap"><h1>Lista de Correos</h1><table class="widefat">';
	echo '<thead><tr><th>ID</th><th>Correo</th></tr></thead><tbody>';
	if ($correos) {
		foreach ($correos as $correo) {
			echo "<tr><td>{$correo->id}</td><td>{$correo->email}</td></tr>";
		}
	} else {
		echo '<tr><td colspan="2">No hay correos registrados.</td></tr>';
	}
	echo '</tbody></table></div>';
}

function crear_tabla_correos_manual()
{
	global $wpdb;
	$tabla_correos = $wpdb->prefix . 'correos';

	// Comprobar si la tabla ya existe
	$tabla_existe = $wpdb->get_var("SHOW TABLES LIKE '$tabla_correos'");

	// Si la tabla no existe, crearla
	if ($tabla_existe !== $tabla_correos) {
		$charset_collate = $wpdb->get_charset_collate();
		$sql = "CREATE TABLE $tabla_correos (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            email varchar(255) NOT NULL,
            PRIMARY KEY (id)
        ) $charset_collate;";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql); // Crear la tabla si no existe
	}
}
function ejecutar_creacion_tabla()
{
	if (isset($_GET['crear_tabla_correos']) && $_GET['crear_tabla_correos'] == '1') {
		crear_tabla_correos_manual();
		echo 'La tabla se ha creado exitosamente.';
		exit;
	}
}
add_action('wp_head', 'ejecutar_creacion_tabla');
