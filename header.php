<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/style.css">

    <title><?php wp_title('-', true, 'right') ?></title>

    <?php wp_head(); // intégrer des elements indispensable à Wordpress comme les fichiers CSS, JS, Admin bar 
    ?>
</head>

<body <?php body_class(); ?>>
    <header class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <?php the_custom_logo(); ?>
            &nbsp;
            <?php bloginfo('name'); ?>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
			 <span class="navbar-toggler-icon"></span>
		   </button>
           


            <?php
            
            
            
            if (has_nav_menu('primary')) {


                wp_nav_menu(
                    array(

                        'theme_location'  => 'top',
                        'container'       => 'div',
                        'container_id'    => 'bs4navbar',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_id'         => false,
                        'menu_class'      => 'navbar-nav mr-auto',
                        'depth'           => 2,
                        'fallback_cb'     => 'bs4navwalker::fallback',
                        'theme_location' => 'primary',
                        'walker'          => new bs4navwalker()
                    )
                );
            } elseif (!has_nav_menu('expanded')) {

                echo 'else';

                wp_list_pages(
                    array(
                        'match_menu_classes' => true,
                        'show_sub_menu_icons' => true,
                        'title_li' => false,
                        'walker'          => new bs4navwalker()
                    )
                );
            }
            ?>
        </nav>
        <div class="d-none d-lg-block">
            <?php // echo get_bloginfo('description'); 
            ?>
        </div>





    </header>

    <main>
        <?php if (is_active_sidebar('region-footer')) :

        endif;
        ?>