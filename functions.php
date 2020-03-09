<?php
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('automatic-feed-links');
add_theme_support('custom-logo');
add_theme_support('custom-header');
add_theme_support('custom-background');



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
?>

