<?php
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('automatic-feed-links');


if ( ! isset( $content_width ) ) $content_width = 900;


require_once('bs4navwalker.php');




// --- MENU
add_action('init', 'simple_bootstrap_4_init_menu'); // j'exécute la fonction nommé "simple_bootstrap_4_init_menu".
function simple_bootstrap_4_init_menu() // fonction qui contient la déclaration de mes régions.
{
    if (function_exists('register_nav_menu')) // si la fonction register_sidebar existe (c'est une fonction interne à wordpress), alors je déclare des régions.
    {
        register_nav_menu('primary', __('Primary Menu', 'simple_bootstrap_4'));
    }
}

// --- REGION/WIDGET
add_action('widgets_init', 'simple_bootstrap_4_init_sidebar'); // j'exécute la fonction nommé "simple_bootstrap_4_init_sidebar".
function simple_bootstrap_4_init_sidebar() // fonction qui contient la déclaration de mes régions.
{
    if (function_exists('register_sidebar')) // si la fonction register_sidebar existe (c'est une fonction interne à wordpress), alors je déclare des régions.
    {
        register_sidebar(array(
            'name'          => __('region-entete', 'simple_bootstrap_4'),
            'id'            => 'region-entete',
            'description'   => __('Add widgets here to appear in your entete region.', 'simple_bootstrap_4')
        ));
        register_sidebar(array(
            'name'          => __('colonne de droite', 'simple_bootstrap_4'),
            'id'            => 'colonne-droite',
            'description'   => __('Add widgets here to appear in your colonne droite region.', 'simple_bootstrap_4')
        ));
        register_sidebar(array(
            'name'          => __('region-footer', 'simple_bootstrap_4'),
            'id'            => 'region-footer',
            'description'   => __('Add widgets here to appear in your region.', 'simple_bootstrap_4'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));
    }
}
