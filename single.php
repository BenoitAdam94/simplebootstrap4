<?php get_header(); ?>
<!-- DEBUT DE MAIN -->
<div class="container">
    <div class="row">
        <p>SINGLE</p>
        <div class="col-12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <h2>

                        <?php the_title(); ?>
                        <?php the_author(); ?>

                    </h2>
                    <div>
                        <?php the_content(); ?>
                    </div>

                <?php endwhile;
            else : ?>

            <?php endif; ?>
        </div>

    </div>
</div>
<!-- FIN DE MAIN -->
<?php get_footer(); ?>