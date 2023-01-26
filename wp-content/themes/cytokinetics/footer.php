<?php
/**
 * Footer template
 *
 * @author   TF
 * @version  1.0.0
 * @package  
 */
?>

</main>
<footer class="footer">

  <div class="container">
    <div class="row-footer">
      <div class="col-logo">
        <img src="/wp-content/themes/cytokinetics/assets/images/logo-cytokinetics-footer.svg" alt="">
      </div>
      <div class="col-footer-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
      </div>
      <div class="col-social">
      <ul id="menu-social">
				<li>
					<a href="#">
						<img src="/wp-content/themes/cytokinetics/assets/images/icon-twitter-white.svg" alt="Twitter">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="/wp-content/themes/cytokinetics/assets/images/icon-linkedin-white.svg" alt="LinkedIn">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="/wp-content/themes/cytokinetics/assets/images/icon-facebook-white.svg" alt="Facebook">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="/wp-content/themes/cytokinetics/assets/images/icon-youtube-white.svg" alt="Youtube">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="/wp-content/themes/cytokinetics/assets/images/icon-glassdoor-white.svg" alt="Glassdoor">
					</a>
				</li>
			</ul>
      </div>
    </div>
  </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>
