<?php get_header(); ?>
<!-- DEBUT DE MAIN -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                    </h2>
                    <div>
                        <?php the_excerpt(); ?>
                    </div>

                <?php endwhile;
            else : ?>

            <?php endif; ?>
        </div>

    </div>
</div>
<!-- FIN DE MAIN -->
<?php get_footer(); ?>