

<?php
/*
Template Name: Contact
*/
get_header(); ?>

<main class="grid-contact">

<!-- Give Us A Shout -->
  <img class="mica-looking" src="<?php bloginfo('template_url');?>/assets/src/img/mica-looking.png" alt="Mica" title="mica">

        <section class="shout">
          <h3> Give Us A Shout. </h3>

              <ul class="contact-methods">
                <li> <a href="mailto:apoldaken@sbcglobal.net"> <img src="<?php bloginfo('template_url');?>/assets/src/img/email.svg" alt="email"> apoldaken@sbcglobal.net </a> </li>
                <li> <img src="<?php bloginfo('template_url');?>/assets/src/img/phone.svg" alt="phone"> 630.898.2947  </li>
                <li> <img src="<?php bloginfo('template_url');?>/assets/src/img/home.svg" alt="location"> 2380 E NY St, Aurora, IL 60502 </li>
              </ul>
      </section>

    <!-- FORM -->
  <?php the_content(); ?>

					<!-- messing with widgets -->

					<aside id="%1$s" class="widget %2$s">
									<div id="footer-sidebar" class="secondary">
														<div id="footer-sidebar1">
														<?php
														if(is_active_sidebar('footer-sidebar-1')){
														dynamic_sidebar('footer-sidebar-1');
														}
														?>
														</div>
									</div>
					</aside>

<?php get_footer(); ?>
