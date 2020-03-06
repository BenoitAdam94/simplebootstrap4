<?php get_header(); ?>
<!-- DEBUT DE MAIN -->
<div class="container">
    <div class="row">
        <p>PAGE</p>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-md-12">
                    <h2 class="card-title">
                        <?php the_title(); ?>
                    </h2>
                    <div>
                        <?php the_content(); ?>
                    </div>

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