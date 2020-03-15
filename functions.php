<?php
/**
 * Where we declare the functions for our theme.
 *
 * @package simplebootstrap4
 */

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('automatic-feed-links');
add_theme_support('custom-logo');
add_theme_support('custom-header');
add_theme_support('custom-background');



/* TAGS */

add_action('after_setup_theme', 'theme_functions');
function theme_functions()
{
	/**
	 * add the support for the_tags() features.
	 */
	add_theme_support('title-tag');
}


/* TITLE */

add_filter('wp_title', 'custom_titles', 10, 2);
function custom_titles($title, $sep)
{

	// Check if custom titles are enabled from your option framework
	if (ot_get_option('enable_custom_titles') === 'on') {
		// Some silly example
		$title = "Some other title" . $title;
	}

	return $title;
}

/* SCRIPT */


function custom_enqueue_scripts()
{
	// JS
	wp_enqueue_script('jquery-ui-core');

	$js_directory = get_template_directory_uri() . '/assets/js/';
	wp_register_script('bootstrap', $js_directory . 'bootstrap.min.js', 'jquery', '1.0');

	wp_enqueue_script('bootstrap');
	// CSS
	wp_enqueue_style('scripts', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null, null);
	wp_enqueue_style('custom', get_template_directory_uri() . '/style.css', array(), null, null);
}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts', 101);


/* CONTAINER */

if (!isset($content_width)) $content_width = 900;


require_once('bs4navwalker.php');


// --- MENU
register_nav_menu('primary', __('Primary Menu', 'simplebootstrap4'));

// --- MENU SOCIAL
register_nav_menu('socialmenu', __('Social Menu', 'simplebootstrap4'));




// --- REGION/WIDGET
add_action('widgets_init', 'simplebootstrap4_init_sidebar'); // j'exécute la fonction nommé "simplebootstrap4_init_sidebar".
function simplebootstrap4_init_sidebar() // fonction qui contient la déclaration de mes régions.
{
	register_sidebar(array(
		'name'          => __('region-footer', 'simplebootstrap4'),
		'id'            => 'region-footer',
		'description'   => __('Add widgets here to appear in your region.', 'simplebootstrap4'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));
}

wp_get_sidebars_widgets();
