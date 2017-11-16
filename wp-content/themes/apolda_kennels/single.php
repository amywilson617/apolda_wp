<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- BLOG CONTENT -->

				<main class="blog-main">

				<div class="blog-full">

					<h3 class="blog-header"><?php the_title(); ?> </h3>

					<p class="blog-date"> Posted on <?php echo get_the_date(); ?> <br> by Apolda Kennels </p>

					<p class="blog-content"><?php the_content(); ?> </p>

					<img class="full-blog-image" src="<?php bloginfo('template_url');?>/assets/src/img/running-pup.png" alt="Shepard"
						title="Shepard">

				</div>


	<div id="pagination">
			<div class="prev_post"><?php next_post_link('%link', ' View Newer Posts') ?></div>
			<div class="next_post"><?php previous_post_link('%link', 'View Older Posts') ?></div><br
			clear="both" />
	</div>


<?php comments_template();?>

<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
