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
                    <!-- Tag of the Post -->
                    <div>
                        <?php the_tags(); ?>
                    </div>
                    <!-- Navigation Between Post -->
                    <div>
                        <?php posts_nav_link(); ?>
                    </div>


                    <!-- List Comments -->
                    <div class="border">
                        <?php comments_template(); ?>
                        <ol class="comment-list">
                            <?php
                            wp_list_comments(array(
                                'avatar_size' => 60,
                                'max_depth'   => 5,
                                'style'       => 'ol',
                                'short_ping'  => true,
                                'type'        => 'comment',
                            ));
                            ?>
                        </ol>
                    </div>
                    <div>
                        <?php comments_template(); ?>
                    </div>

                    <div class="border">
                        <?php comment_form(array(
                            'class_submit' => 'btn btn-primary mb-2',
                        )); ?>
                    </div>

                    <div>
                        <?php if (is_singular()) wp_enqueue_script("comment-reply"); ?>
                    </div>
                    <!-- Pagination -->
                    <div>
                        <?php paginate_comments_links(); ?>
                    </div>



                <?php endwhile;
            else : ?>

            <?php endif; ?>
        </div>

    </div>
</div>

<!-- FIN DE MAIN -->
<?php get_footer(); ?>