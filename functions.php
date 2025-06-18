<?php

/**
 * Sample Agency functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sample_Agency
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sample_agency_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Sample Agency, use a find and replace
		* to change 'sample-agency' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('sample-agency', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'sample-agency'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'sample_agency_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sample_agency_content_width()
{
	$GLOBALS['content_width'] = apply_filters('sample_agency_content_width', 640);
}
add_action('after_setup_theme', 'sample_agency_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sample_agency_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'sample-agency'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'sample-agency'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'sample_agency_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function sample_agency_scripts()
{
	// Google Fonts with preconnect
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto+Slab:wght@400;100;300;700&display=swap');
	wp_enqueue_style('sample-agency-style', get_stylesheet_uri(), [], _S_VERSION);
	wp_style_add_data('sample-agency-style', 'rtl', 'replace');

	// wp_enqueue_style('sample-agency-aos', get_template_directory_uri() . '/assets/libs/aos/aos.css', [], _S_VERSION);
	// wp_enqueue_style('sample-agency-glightbox', get_template_directory_uri() . '/assets/libs/glightbox/glightbox.min.css', [], _S_VERSION);
	// wp_enqueue_style('sample-agency-swiper', get_template_directory_uri() . '/assets/libs/swiper/swiper.min.css', [], _S_VERSION);
	// wp_enqueue_style('sample-agency-nouislider', get_template_directory_uri() . '/assets/libs/nouislider/nouislider.min.css', [], _S_VERSION);
	// wp_enqueue_style('sample-agency-flatpickr', get_template_directory_uri() . '/assets/libs/flatpickr/flatpickr.min.css', [], _S_VERSION);
	wp_enqueue_style('sample-agency-app', get_template_directory_uri() . '/assets/css/styles.css', [], _S_VERSION);

	// wp_enqueue_script('sample-agency-aos', get_template_directory_uri() . '/assets/libs/aos/aos.js', [], _S_VERSION, true);
	// wp_enqueue_script('sample-agency-glightbox', get_template_directory_uri() . '/assets/libs/glightbox/glightbox.min.js', [], _S_VERSION, true);

	// wp_enqueue_script('sample-agency-swiper', get_template_directory_uri() . '/assets/libs/swiper/swiper-bundle.min.js', [], _S_VERSION, true);
	// wp_enqueue_script('sample-agency-nouislider', get_template_directory_uri() . '/assets/libs/nouislider/nouislider.min.js', [], _S_VERSION, true);
	// wp_enqueue_script('sample-agency-flatpickr', get_template_directory_uri() . '/assets/libs/flatpickr/flatpickr.min.js', [], _S_VERSION, true);
	// wp_enqueue_script('sample-agency-flatpickr-ru', get_template_directory_uri() . '/assets/libs/flatpickr/l10n/ru.js', [], _S_VERSION, true);
	// wp_enqueue_script('sample-agency-inputmask', get_template_directory_uri() . '/assets/libs/inputmask/inputmask.min.js', [], _S_VERSION, true);
	// Font Awesome
	wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/releases/v5.15.3/js/all.js', [], _S_VERSION, true);
	wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', [], _S_VERSION, true);

	wp_enqueue_script('sample-agency-app', get_template_directory_uri() . '/assets/js/scripts.js', [], _S_VERSION, true);
	// wp_enqueue_script('sample-agency-custom', get_template_directory_uri() . '/assets/js/custom.js', ['jquery'], _S_VERSION, true);
	// wp_enqueue_script('sample-agency-loadmore', get_template_directory_uri() . '/assets/js/loadmore.js', [], _S_VERSION, true);

	// wp_enqueue_script('sample-agency-navigation', get_template_directory_uri() . '/js/navigation.js', [], _S_VERSION, true);

	// if (get_field('map_key', 'option')) {
	// 	wp_enqueue_script('sample-agency-map_api', wp_sprintf('//api-maps.yandex.ru/v3/?apikey=%s&lang=ru_RU', get_field('map_key', 'option')), [], null, true);
	// 	wp_enqueue_script('sample-agency-map-js', get_template_directory_uri() . '/assets/js/map.js', [], _S_VERSION, true);
	// } elseif (is_page('kontakty')) {
	// 	wp_enqueue_script('sample-agency-map_api', '//api-maps.yandex.ru/2.1/?lang=ru_RU', [], _S_VERSION, true);
	// 	wp_enqueue_script('sample-agency-map-js', get_template_directory_uri() . '/assets/js/map.js', [], _S_VERSION, true);
	// }
	// if (get_field('map_marker', 'option')) {
	// 	wp_add_inline_script('sample-agency-map-js', 'const markerUrl = ' . wp_json_encode(get_field('map_marker', 'option')), 'before');
	// }
	// wp_add_inline_script('sample-agency-map-js', 'const iconImageHref = "' . get_template_directory_uri() . '/assets/img/icon-map-dot.svg"', 'before');
	// wp_add_inline_script('sample-agency-map-js', 'const placemarkText = ' . wp_json_encode(get_field('map_placemark_text', 'option')), 'before');

	wp_localize_script(
		'sample-agency-custom',
		'siteData',
		[
			'ajax_url' => admin_url('admin-ajax.php'),
			'ajax_nonce' => wp_create_nonce('ajax-nonce'),
			'theme_uri' => THEME_URI,
		]
	);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'sample_agency_scripts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

require get_template_directory() . '/inc/helpers.php';
require get_template_directory() . '/inc/walkers/primary-menu.php';
require get_template_directory() . '/inc/walkers/mobile-menu.php';
require get_template_directory() . '/inc/walkers/footer-menu.php';
require get_template_directory() . '/inc/ajax/forms.php';
require get_template_directory() . '/inc/ajax/loadmore.php';
