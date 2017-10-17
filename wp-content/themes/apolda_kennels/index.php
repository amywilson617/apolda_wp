<?php get_header(); ?>

	<main role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php endwhile; 

		else:
				echo 'Nothing Found';
		endif; ?>


	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
