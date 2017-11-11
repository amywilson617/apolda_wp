

<?php
/*
Template Name: About
*/
get_header(); ?>

<!-- ABOUT -->

<main class="grid-about">

  <section class="about-sec">
    <h1> <?php the_field('blue_section_header'); ?> </h1>

        <p class="body-copy"> <?php the_field('blue_section_content'); ?> </p>

        <?php if(has_post_thumbnail()) :
          $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <img src="<?= $thumbnail[0]; ?>" class="sitting-dog" alt="Sitting Dogs" />
          </a>
        <?php endif; ?>

        <!-- <img class="sitting-dog" src="<?php bloginfo('template_url');?>/assets/src/img/sitting-dogs.png" alt="Sitting Dogs" title="Sitting Dogs" /> -->

  </section>

  <section class="home-away">
    <h1><?php the_field('red_section_header'); ?> </h1>

    <p class="body-copy"> <?php the_field('red_section_content'); ?> </p>

  </section>

<!-- CHECKS -->

  <section class="choose-us">
    <h4>  <?php the_field('choose_us_header'); ?> </h4>

    <div>
        <ul>
            <li> <?php the_field('choose_us_reason_1'); ?> </li>
            <li> <?php the_field('choose_us_reason_2'); ?> </li>
            <li> <?php the_field('choose_us_reason_3'); ?> </li>
        </ul>

    </div>

  </section>

  <aside>

      <p class="red-quote"> When staying with us, your pets become our pets. </p>

  </aside>

<?php get_footer(); ?>
