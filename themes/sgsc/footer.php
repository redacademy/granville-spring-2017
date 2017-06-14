<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<!--<div class="footer-links">
						<p>E-Newsletter</p>
						<p>Donate</p>
						<p>Contact Us</p>
						<p>Advertise With Us</p>
						<p class="join-us">Join Us</p>
					</div>-->
					<?php if( is_active_sidebar('customer_footer') ) {
						dynamic_sidebar('customer_footer');
					} ?>

					<div class="footer-icons">
						<a class="twitter" href="https://twitter.com/sgseniors" target="_blank"></a> 
					</div>	
				</div>	
					<div class="copywrite">	
						<p>&copy; 2017 South Granville Seniors Centre is Registered Canadian Charity</p>
					</div>
				
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
