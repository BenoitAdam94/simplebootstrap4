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


					<!-- List Comments -->
					<div>
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

					<div>
						<?php comment_form(); ?>
					</div>

					<div>
						<?php if (is_singular()) wp_enqueue_script("comment-reply"); ?>
					</div>
					<!-- Pagination -->
					<div>
						<?php paginate_comments_links(); ?>
					</div>
				</div>


	</div>



</div>
<?php endwhile;
		else :
?>

<?php endif; ?>


</div>
</div>
<!-- FIN DE MAIN -->
<?php get_footer(); ?>