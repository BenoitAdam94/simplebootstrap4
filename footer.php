</main>
<?php wp_footer(); ?>
<footer class="container-fluid">
	<div class="row bleu">
		<div class="col-md-4 p-3 d-flex justify-content-center align-item align-items-center">


			<img src="<?php header_image(); ?>" alt="" class="img-fluid">





		</div>
		<div class="col-md-4 p-3 d-flex justify-content-center align-item align-items-center">


			<?php dynamic_sidebar( 'region-footer' ); ?>



		</div>
		<div class="col-md-4 p-3 d-flex justify-content-center align-item align-items-center">

			<?php
			wp_nav_menu(
				[
					'container_class' => 'social-menu',
					'menu_class'      => 'social-icons',
					'link_before'     => '<span>',
					'link_after'      => '</span>',
					'theme_location'  => 'socialmenu',
				]
			);
			?>
		</div>
	</div>
</footer>

</body>

</html>
