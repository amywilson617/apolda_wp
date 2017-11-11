

<?php
/*
Template Name: Home
*/
get_header(); ?>

<!-- SECTION -->

<section class="grid">
<div class="phone-number">
  <h2> <?php the_field('phone_number'); ?> </h2>
</div>


    <section class="passion">

        <h1><?php the_field('h1'); ?> </h1>

            <p class="p"> <?php the_field('passion_text_snippet_1'); ?>


              <!-- <FEAT</FEATIRED> IMAGE -->
              <?php if(has_post_thumbnail()) :
                $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <img src="<?= $thumbnail[0]; ?>" class="mica" alt="Mica" />
                </a>
              <?php endif; ?>

             <p class="p"> <?php the_field('passion_text_snippet_2'); ?> </p>

            <a href="services.html"> <p class="call-to-action"> <?php the_field('check_out_our_services'); ?> </p></a>
    </section>

    <section class="connect">
        <h2> <?php the_field('h2'); ?></h2>

            <div class="home-icons">

              <a href="https://www.facebook.com/Apolda-Kennels-148943101815749/">
                <img class="big-f" target="_blank" src="<?php bloginfo('template_url');?>/assets/src/img/facebook.svg" alt="Facebook Icon" title="Facebook Icon"/></a>

              <a href="https://plus.google.com/+ApoldaKennelsAurora?hl=en">
                <img class="big-g" target="_blank" src="<?php bloginfo('template_url');?>/assets/src/img/googleplus.svg" alt="Google+ Icon" title="Google+ Icon"/></a>

              <a href="https://www.yelp.com/biz/apolda-kennels-aurora-2">
                <img class="big-y" target="_blank" src="<?php bloginfo('template_url');?>/assets/src/img/yelp.svg" alt="Yelp Icon" title="Yelp Icon"/></a>
            </div>

        <p class="body-copy"> <?php the_field('pets'); ?> </p>

        <p class="upper"> <?php the_field('experience'); ?>  </p>

    </section>

<!-- VIDEO -->

    <div class="movie">
      <div class="movie-content">
        <iframe  width="500" height="315" src="https://www.youtube.com/embed/BRv7MNqKPvA"
      frameborder="0"></iframe>
    </div>
    </div>

  </section>

<?php get_footer(); ?>
