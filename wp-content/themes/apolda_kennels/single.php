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

<!-- BLOG SEARCH -->

<div class="blog-search">

		<input class="text" type="text" name="search" value="Search here"><br><br>
		<input class="submit" type="submit" value="Search">

</div>

	<!-- RECENT POSTS -->

	<div class="recent-posts">

		<ul>

				<li class="body-copy" > Potty training essentials <a href="potty-post.html">
					<img src="<?php bloginfo('template_url');?>/assets/src/img/red-arrow.svg" class="red-arrow" alt="arrow"> </a></li>

				<li class="body-copy"> Caring for an aging pup <a href="aging-pup-post.html">
					<img src="<?php bloginfo('template_url');?>/assets/src/img/red-arrow.svg" class="red-arrow" alt="arrow"> </a></li>

		</ul>

	</div>

<?php get_sidebar(); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
