<?php
/*
Template Name: Blog Post
*/
get_header(); ?>

<main class="blog-main">

      <div class="blog-full">

        <h3 class="blog-header"> People food to avoid! </h3>

        <p class="blog-date"> Posted on August 29, 2017, 9:00 AM <br> by Apolda Kennels </p>

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

    </main>


<?php get_footer(); ?>
