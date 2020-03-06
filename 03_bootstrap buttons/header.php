<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ;?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ;?>/style.css">

    <title><?php bloginfo('name'); wp_title('-', true, 'right') ?></title>

    <?php wp_head(); // intégrer des elements indispensable à Wordpress comme les fichiers CSS, JS, Admin bar ?>
</head>

<body <?php body_class(); ?>>
    <header class="container-fluid">
        <div class="row red">
            <div class="col-md-4"><?php get_custom_logo(); ?></div>
            <nav class="col-md-8">NAV</nav>
        </div>
    </header>
    <main>