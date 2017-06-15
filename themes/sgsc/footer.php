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
					<?php if( is_active_sidebar('customer_footer') ) {
						dynamic_sidebar('customer_footer');
					} ?>

					<div class="footer-icons">
						<a class="facebook" href="https://www.facebook.com/SouthGranvilleSeniorsCentre/" target="_blank"></a>
						<a class="twitter" href="https://twitter.com/sgseniors" target="_blank"></a> 
					</div>	
				</div>	
					<div class="copywrite">	
						<p>&copy; <?php echo date("Y"); ?> South Granville Seniors Centre is Registered Canadian Charity</p>
					</div>
				
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
