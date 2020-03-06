<?php get_header(); ?>
<!-- DEBUT DE MAIN -->
<div class="container">
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-md-4 card">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary"><span>&#x1F4F0</span></a>
                        </div>
                    </div>



                </div>
            <?php endwhile;
        else : ?>

        <?php endif; ?>


    </div>
</div>
<!-- FIN DE MAIN -->
<?php get_footer(); ?>