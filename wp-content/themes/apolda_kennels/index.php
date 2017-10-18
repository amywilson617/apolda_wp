<div class="grid-blog">

<?php get_header(); ?>


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


<!-- LOOP -->


<? php if ( have_posts ()) : while ( have_posts ()) : the_post (); ?>

<!-- PEOPLE FOOD POST -->

        <div class="blog blog1">

          <div class="blog__image">
            <img src="<?php bloginfo('template_url');?>/assets/src/img/shepard-pup.png" alt="German Shepard" title="German Shepard">
          </div>

          <div class="blog__content">
            <p class="blog-header"> People food to avoid!</p>

            <p class="blog-date"> August 29, 2017 </p>

            <p class="blog-content"> Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt ut laborequat.
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor.  </p>

              <a href="blog-post.html" target="blank">
               <img class="red-arrow" src="<?php bloginfo('template_url');?>/assets/src/img/red-arrow.svg" alt="Arrow" title="Arrow"></a>

          </div>

        </div>

  <? php endwhile ; endif ; ?>

<?php else: ?>

  No Posts Founds

<?php endif; ?>


<!-- BLOG ALERTS -->
<section class="alerts">

      <h3> Sign Up For Blog Alerts </h3>

  <div class="blog-search">

      <input class="text" type="text" name="search" value="Enter email here"><br><br>
      <input class="submit" type="submit" value="Submit">
  </div>

</section>

<?php get_footer(); ?>

</div>
