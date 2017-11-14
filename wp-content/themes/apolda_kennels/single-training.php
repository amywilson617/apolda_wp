

<?php

/**
* WP Post Template: Training
*/


get_header(); ?>

<main class="grid-boarding">


<!-- RESERVATION SNIPPET -->
        <div class="reservations">
          <p> To make reservations: </p> <span class="phone">
            <?php the_field('reservation_phone'); ?> </span> or <a href="mailto:apoldakennels@mac.com">
          <span class="phone"> <?php the_field('reservation_email'); ?> </span></a> </p>

        </div>

<!-- RED INFO -->
        <section class="red-info">

          <h3> <?php the_field('red_section_head'); ?> </h3>

              <p class="body-copy"> <?php the_field('red_section_content'); ?></p>

        </section>

        <!-- WHITE INFO -->
        <section class="white-info">

          <h3 class="gray-h3"> <?php the_field('gray_section_head'); ?> </h3>

                <p class="body-copy"><?php the_field('gray_section_content'); ?></p>

        </section>

        <!-- GRAY INFO -->
        <section class="gray-info">

          <h3> Rates </h3>

                  <table class="rwd-table">
                      <tr>
                        <th> Private Lesson </th>
                        <th> <?php the_field('private_lesson_pricing'); ?> </th>
                      </tr>

                  </table>

                  <div class="quote">
                      <a href="mailto:apoldakennels@mac.com" class="white-contact"> Get a Quote </a>
                  </div>
        </section>

<?php get_footer(); ?>
