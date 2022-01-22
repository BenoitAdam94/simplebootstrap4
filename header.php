<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">





	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	    
	<header class="container-fluid">

		<nav class="navbar navbar-expand-lg navbar-light bg-light">

			<?php the_custom_logo(); ?>
			&nbsp;
			<?php bloginfo('name'); ?>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>



			<?php



			if (has_nav_menu('primary')) {


				wp_nav_menu(
					array(
						'theme_location'  => 'top',
						'container'       => 'div',
						'container_id'    => 'bs4navbar',
						'container_class' => 'collapse navbar-collapse',
						'menu_id'         => false,
						'menu_class'      => 'navbar-nav mr-auto',
						'depth'           => 2,
						'fallback_cb'     => 'bs4navwalker::fallback',
						'theme_location' => 'primary',
						'walker'          => new bs4navwalker()
					)
				);
			} else {
			?>

				<div id="bs4navbar" class="collapse navbar-collapse"></div>

			<?php
			}
			?>
			
			<div class="d-none d-lg-block">
				<?php echo get_bloginfo('description'); ?>
			</div>
		</nav>






	</header>

	<main>
		<?php if (is_active_sidebar('region-footer')) :

			echo '';

		endif;
		?>