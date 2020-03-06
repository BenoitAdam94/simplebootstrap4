<?php
add_theme_support('post-thumbnails');

require_once('bs4navwalker.php');

// --- MENU
add_action('init', 'nouveau_theme_init_menu'); // j'exécute la fonction nommé "nouveau_theme_init_menu".
function nouveau_theme_init_menu() // fonction qui contient la déclaration de mes régions.
{
    if (function_exists('register_nav_menu')) // si la fonction register_sidebar existe (c'est une fonction interne à wordpress), alors je déclare des régions.
    {
        register_nav_menu('primary', __('Primary Menu', 'nouveau_theme'));
    }
}

// --- REGION/WIDGET
add_action('widgets_init', 'nouveau_theme_init_sidebar'); // j'exécute la fonction nommé "nouveau_theme_init_sidebar".
function nouveau_theme_init_sidebar() // fonction qui contient la déclaration de mes régions.
{
    if (function_exists('register_sidebar')) // si la fonction register_sidebar existe (c'est une fonction interne à wordpress), alors je déclare des régions.
    {
        register_sidebar(array(
            'name'          => __('region-entete', 'nouveau_theme'),
            'id'            => 'region-entete',
            'description'   => __('Add widgets here to appear in your entete region.', 'nouveau_theme')
        ));
        register_sidebar(array(
            'name'          => __('colonne de droite', 'nouveau_theme'),
            'id'            => 'colonne-droite',
            'description'   => __('Add widgets here to appear in your colonne droite region.', 'nouveau_theme')
        ));
        register_sidebar(array(
            'name'          => __('region-footer', 'nouveau_theme'),
            'id'            => 'region-footer',
            'description'   => __('Add widgets here to appear in your region.', 'nouveau_theme'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));
    }
}
