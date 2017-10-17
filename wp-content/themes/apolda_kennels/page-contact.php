<?php
/*
Template Name: Contact
*/
get_header(); ?>

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

  <form class="contact-form">
      <p class="contact-head">Contact Apolda Kennels</p>

    <p>My
        <label for="your-name">name</label> is
        <input type="text" name="your-name" id="your-name" minlength="3" placeholder="(your name here)" required> and</p>

    <p>my

        <label for="email">email address</label> is
        <input type="email" name="your-email" id="email" placeholder="(your email address)" required>
    </p>

    <p> I have a <label for="your-message">message</label> for you,</p>

    <p>
      <textarea name="your-message" id="your-message" placeholder="(your msg here)" class="expanding" required></textarea>
    </p>

    <p>
        <button type="submit">

          <svg version="1.1" class="send-icn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="36px" viewbox="0 0 100 36" enable-background="new 0 0 100 36" xml:space="preserve">

                  <path d="M100,0L100,0 M23.8,7.1L100,0L40.9,36l-4.7-7.5L22,34.8l-4-11L0,30.5L16.4,8.7l5.4,15L23,7L23.8,7.1z M16.8,20.4l-1.5-4.3
	                   l-5.1,6.7L16.8,20.4z M34.4,25.4l-8.1-13.1L25,29.6L34.4,25.4z M35.2,13.2l8.1,13.1L70,9.9L35.2,13.2z" />
          </svg>

      </button>

  </p>

</form>

<!-- TABLE -->
          <table class="rwd-table">

              <tr>
                <th class="avail-head">Day </th>
                <th class="avail-head"> Hours </th>
              </tr>

              <tr class="tr1">
                  <td data-th="Day"> Monday </td>
                  <td data-th="Hours"> 8 am - 5 pm </td>
              </tr>

              <tr >
                  <td data-th="Day"> Tuesday </td>
                  <td data-th="Hours"> 8 am - 5 pm </td>
              </tr>

              <tr class="tr1">
                  <td data-th="Day"> Wednesday </td>
                  <td data-th="Hours"> 8:30 am - 10:30 am </td>
              </tr>

              <tr>
                  <td data-th="Day"> Thursday </td>
                  <td data-th="Hours"> 8 am - 5 pm </td>
              </tr>

              <tr class="tr1">
                  <td data-th="Day"> Friday </td>
                  <td data-th="Hours"> 8 am - 5 pm </td>
              </tr>

              <tr>
                  <td data-th="Day"> Saturday </td>
                  <td data-th="Hours"> 8 am - 1 pm </td>
              </tr>

              <tr class="tr1">
                  <td data-th="Day"> Sunday </td>
                  <td data-th="Hours"> 9 am - 10 am </td>
              </tr>
          </table>


<?php get_footer(); ?>
