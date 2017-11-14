<?php
/*
Template Name: Services
*/
get_header(); ?>

<?php if (have_posts()): ?>
<section class="services">

    <?php while(have_posts()): the_post(); ?>
    <div class="service-card">

      <?php if(has_post_thumbnail()) :
        $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'small'); ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <img src="<?= $thumbnail[0]; ?>" class="icon" alt="Icon" />
        </a>
      <?php endif; ?>



        <!-- <img class="icon" src="<?php bloginfo('template_url'); ?>/assets/src/img/boarding.svg" alt="Home" title="Home"> -->

          <h3> <?php the_title(); ?> </h3>

                <p class="body-copy"><?php echo get_the_content(); ?></p>

                <div class="readmore-links">

                      <a href="<?php the_permalink(); ?>"> <img class="white-arrow" src="<?php bloginfo('template_url'); ?>/assets/src/img/red-arrow.svg" alt="arrow" title ="arrow"> </a>

                </div>
    </div>
  <?php endwhile; ?>



</section>
<?php endif; ?>

  <!-- LIST WITH CHECKS -->

    <section class="pet-lover">

      <h4>  The Pet Lover's Kennel </h4>

      <div>

      <ul class="body-copy">

          <li> Personalized </li>
          <li> Comfortable </li>
          <li> Affordable </li>

      </ul>

    </div>

    </section>

    <img class="golden" src="<?php bloginfo('template_url'); ?>/assets/src/img/golden.png" alt="Golden" title="Golden">


<?php get_footer(); ?>
