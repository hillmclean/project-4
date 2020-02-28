<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<?php	
					if ( ! is_active_sidebar( 'footer' ) ) {
						return;
						} ?>

				<div id="secondary" class="widget-area-footer" role="complementary">
					<?php dynamic_sidebar( 'footer' ); ?>
				</div>


				<div class="site-info">
					<img class="inhabitent-logo-text" src="<?php echo get_template_directory_uri(); ?>/logos/inhabitent-logo-text.svg" alt="Inhabitent Logo" />

					<!-- <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'Hillary' ); ?></a> -->
				</div><!-- .site-info -->
				
				<p>Copyright © 2019 Inhabitent</p>
			
			</footer><!-- #colophon -->
		
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
