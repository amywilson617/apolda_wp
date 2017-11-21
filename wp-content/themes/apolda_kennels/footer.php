		<?php wp_footer(); ?>

		<!-- TODO: ADD GOOGLE ANALYTICS -->

			<!-- Global site tag (gtag.js) - Google Analytics -->
							<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109983956-1"></script>
							<script>
							  window.dataLayer = window.dataLayer || [];
							  function gtag(){dataLayer.push(arguments);}
							  gtag('js', new Date());

							  gtag('config', 'UA-109983956-1');
							</script>

		<footer class="footer">

				<?php html5blank_nav_footer(); ?>

				<p> Apolda Kennels, 2380 E New York St., Aurora, IL 60502 <br>
				Tel: 630.898.2947 <br> &copy; <?= date('Y'); ?> Apolda Kennels, All Rights Reserved </p>

				<div class="footer-icons">

						<a  href="https://www.facebook.com/Apolda-Kennels-148943101815749/">
							<img  class="foot-f" target="_blank" src="<?php bloginfo('template_url');?>/assets/src/img/facebook.svg" alt="Facebook Icon" title="Facebook Icon"/></a>

						<a  href="https://plus.google.com/+ApoldaKennelsAurora?hl=en">
							<img class="foot-g" target="_blank" src="<?php bloginfo('template_url');?>/assets/src/img/googleplus.svg" alt="Google+ Icon" title="Google+ Icon"/></a>

						<a  href="https://www.yelp.com/biz/apolda-kennels-aurora-2">
							<img class="foot-y" target="_blank" src="<?php bloginfo('template_url');?>/assets/src/img/yelp.svg" alt="Yelp Icon" title="Yelp Icon"/></a>

				</div>

		</footer>

	</main>

	</body>
</html>
