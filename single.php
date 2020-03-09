<?php get_header(); ?>
<!-- DEBUT DE MAIN -->
<div class="container">
    <div class="row">
        <!-- SINGLE -->
        <div class="col-12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <h2>

                        <?php the_title(); ?>
                    </h2>
                    <h3>
                        <?php the_author(); ?>
                    </h3>
                    </h2>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    </div>
                    <div>
                        <?php the_content(); ?>
                    </div>
                    <div>
                        <?php the_tags(); ?>
                    </div>
                    <div>
                        <?php wp_list_comments(); ?>
                    </div>
                    <div>
                    <?php comments_template(); ?>
                    </div>
                    <div>
                    <?php comment_form(); ?>
                    </div>
                    <div>
                        <?php if (is_singular()) wp_enqueue_script("comment-reply"); ?>
                    </div>
                    <div>
                        <?php paginate_comments_links(); ?>
                    </div>
                    <div>
                        <?php posts_nav_link(); ?>
                    </div>


                <?php endwhile;
            else : ?>

            <?php endif; ?>
        </div>

    </div>
</div>

<!-- FIN DE MAIN -->
<?php get_footer(); ?>