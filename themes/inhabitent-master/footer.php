<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-container">
						<?php	
							if ( ! is_active_sidebar( 'footer' ) ) {
								return;
								} ?>

						<div id="secondary" class="widget-area-footer" role="complementary">
							<?php dynamic_sidebar( 'footer' ); ?>
						</div>

						<img class="inhabitent-logo-text" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="Inhabitent Logo" />

				</div>


				<div class="site-info">
					<p>Copyright © 2019 Inhabitent</p>
				</div><!-- .site-info -->
				
			
			</footer><!-- #colophon -->
		
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
