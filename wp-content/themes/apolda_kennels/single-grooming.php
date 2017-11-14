

<?php
/**
* WP Post Template: Grooming
*/
get_header(); ?>

<main class="grid-grooming">

<!-- RESERVATION SNIPPET -->
        <div class="reservations">

          <p> To make reservations: </p> <span class="phone">
            <?php the_field('reservation_phone'); ?> </span> or <a href="mailto:apoldakennels@mac.com">
          <span class="phone"> <?php the_field('reservation_email'); ?> </span></a> </p>
        </div>


<!-- RED INFO -->
        <section class="red-info">



          <h3> <?php the_field('red_section_head'); ?> </h3>

              <p class="body-copy"> <?php the_field('red_section_content'); ?> </p>

        </section>

        <!-- WHITE INFO -->
        <section class="white-info">

          <h3 class="gray-h3"><?php the_field('gray_section_head'); ?></h3>

              <p class="body-copy">
                <span class="red-bold"> <?php the_field('bath/groom'); ?></span> <?php the_field('gray_section_content'); ?>
                </p>

          <h3 class="gray-h3"> <?php the_field('gray_section_head_2'); ?> </h3>

              <p class="body-copy"> <?php the_field('gray_content_2'); ?> </p>

        </section>

        <!-- GRAY INFO -->
        <section class="gray-info">


          <h3> Rates </h3>

          <table class="rwd-table">
              <tr>
                <th class="avail-head"> Service </th>
                <th class="avail-head"> Price </th>
              </tr>

              <tr class="tr1">
                  <td data-th="Service"> Haircuts </td>
                  <td data-th="Price"> <?php the_field('haircuts'); ?> </td>
              </tr>

              <tr >
                  <td data-th="Service"> Baths </td>
                  <td data-th="Price"> <?php the_field('bath'); ?> </td>
              </tr>

              <tr class="tr1">
                  <td data-th="Service"> Nail Trims </td>
                  <td data-th="Price"> <?php the_field('nailtrim_price'); ?> </td>
              </tr>

              <tr>
                  <td data-th="Service"> Flea and Tick Baths </td>
                  <td data-th="Price"> <?php the_field('flea_and_tick_price'); ?> </td>
              </tr>
          </table>

                  <div class="quote">
                      <a href="mailto:apoldakennels@mac.com" class="white-contact"> Get a Quote </a>
                  </div>

        </section>


<?php get_footer(); ?>
