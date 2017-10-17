<?php
/*
Template Name: Blog
*/
get_header(); ?>

<main>

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

            <!-- POTTY TRAINING POST -->

            <div class="blog blog2">

						  <div class="blog__image">
						    <img src="<?php bloginfo('template_url');?>/assets/src/img/boxer.png" alt="Boxer" title="Boxer">
						  </div>

						  <div class="blog__content">
						    <p class="blog-header"> Potty training essentials </p>

                <p class="blog-date"> August 10, 2017 </p>

                <p class="blog-content"> Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit, sed do eiusmod tempor incididunt ut laborequat.
                sed do eiusmod tempor incididunt ut laborequa
              sed do eiusmod tempor incididunt ut laborequa </p>

                <a href="blog-post.html">
                 <img src="<?php bloginfo('template_url');?>/assets/src/img/red-arrow.svg" class="red-arrow" alt="Arrow" title="Arrow"></a>

						 </div>

      	</div>

            <!-- AGING PUP POST -->

            <div class="blog blog3">

						  <div class="blog__image">
						    <img src="<?php bloginfo('template_url');?>/assets/src/img/lab.png" alt="Lab" title="Lab">
						  </div>

						  <div class="blog__content">
						    <p class="blog-header"> Caring for an aging pup</p>

                <p class="blog-date"> August 28, 2017 </p>

                <p class="blog-content"> Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit, sed do eiusmod tempor incididunt ut laborequat.
                  ed do eiusmod tempor incididunt ut labore sed do eiusmod
                tempor incididunt ut laborequa sed do eiusmod.  </p>

                <a href="blog-post.html">
                 <img src="<?php bloginfo('template_url');?>/assets/src/img/red-arrow.svg" class="red-arrow" alt="Arrow" title="Arrow"></a>

						  </div>

						</div>

            <!-- ALLERGY POST -->

            <div class="blog blog4">

						  <div class="blog__image">
						    <img src="<?php bloginfo('template_url');?>/assets/src/img/running-pup.png" alt="Running pup" title="Running pup">
						  </div>

						  <div class="blog__content">
						    <p class="blog-header"> Spring allergy tips</p>

                <p class="blog-date"> May 4, 2017 </p>

                <p class="blog-content"> Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit, sed do eiusmod tempor incididunt ut laborequat.
                  ed do eiusmod sed do eiusmod tempor incididunt ut laborequa
                  sed do eiusmod tempor ised do eiusmod
                  sed laborequancididunt ut laborequa </p>

                  <a href="blog-post.html">
  						     <img src="<?php bloginfo('template_url');?>/assets/src/img/red-arrow.svg" class="red-arrow" alt="Arrow" title="Arrow"></a>

						  </div>

						</div>

        </div>

    </main>

  <!-- BLOG ALERTS -->
    <section class="alerts">

          <h3> Sign Up For Blog Alerts </h3>

      <div class="blog-search">

          <input class="text" type="text" name="search" value="Enter email here"><br><br>
          <input class="submit" type="submit" value="Submit">
      </div>

    </section>


<?php get_footer(); ?>
