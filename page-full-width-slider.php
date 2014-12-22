<?php
/*
Template Name: Full Width With Slider
*/

get_header(); ?>
	</div>

	<?php putRevSlider("homepage"); ?>

	<div class="container col-md-12">
	<div id="primary" class="full-width content-area col-md-12">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
