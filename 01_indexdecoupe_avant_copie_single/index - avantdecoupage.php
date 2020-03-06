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
            <div class="col-md-4">LOGO</div>
            <nav class="col-md-8">NAV</nav>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">CONTENU</div>
            </div>
        </div>
    </main>
    <?php wp_footer(); ?>
    <footer class="container-fluid">
        <div class="row">
            <div class="col-md-4">FOOTER 1</div>
            <div class="col-md-4">FOOTER 2</div>
            <div class="col-md-4">FOOTER 3</div>            
        </div>
    </footer>



    <h1>Hello, world!</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>