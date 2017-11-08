

<?php get_header(); ?>

<div class="grid-blog">


<!-- MAIN -->

    <!-- LATEST POSTS -->

    <section class="latest-posts-section">

        <h3> Check out our latest posts </h3>

        <div class="latest-posts">

            <a target="_blank" href="ear-cleaning-post.html"> <p class="latest-title"> Ear-cleaning for new pup parents </p>

              <img src="<?php bloginfo('template_url');?>/assets/src/img/red-arrow.svg" alt= "Arrow" title="Arrow">

            </a>

        </div>

        <div class="latest-posts">

            <a target="_blank" href="gear-post.html"> <p class="latest-title"> Must-have gear to beat the heat </p>

                <img src="<?php bloginfo('template_url');?>/assets/src/img/red-arrow.svg" alt= "Arrow" title="Arrow">

            </a>

        </div>

        <div class="latest-posts">

              <a target="_blank" href="harper-post.html"> <p class="latest-title"> Harper's awesome photo shoot </p>

                  <img src="<?php bloginfo('template_url');?>/assets/src/img/red-arrow.svg" alt= "Arrow" title="Arrow">

              </a>

        </div>

    </section>

    <!-- BLOG POSTS -->

      <div class="blog-wrapper">


<!-- PEOPLE FOOD POST -->

<?php if (have_posts()) :
  while (have_posts()) :
    the_post (); ?>

        <div class="blog blog1">

          <div class="blog__image">
            <?php the_post_thumbnail(); ?>
          </div>

          <div class="blog__content">
            <p class="blog-header"> <?php the_title(); ?></p>

            <p class="blog-date"> <?php echo get_the_date(); ?> </p>

            <p class="blog-content"> <?php html5wp_excerpt('html5wp_index'); ?> </p>

              <a href="<? the_permalink();?>" target="blank">
               <img class="red-arrow" src="<?php bloginfo('template_url');?>/assets/src/img/red-arrow.svg" alt="Arrow" title="Arrow"></a>

          </div>

        </div>

<?php endwhile; ?>

<?php else: ?>

  <em> No Posts Found </em>

<?php endif; ?>


<!-- BLOG ALERTS -->
<section class="alerts">

      <h3> Sign Up For Blog Alerts </h3>

  <div class="blog-search">
      <input class="text" type="text" name="search" value="Enter email here"><br><br>
      <input class="submit" type="submit" value="Submit">
  </div>

</section>

</div>

<?php get_footer(); ?>
