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
					if ( ! is_active_sidebar( 'sidebar-1' ) ) {
						return;
						}
				?>

				<div id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer' ); ?>
				</div><!-- #secondary -->


				<div class="site-info">
					<!-- <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'Hillary' ); ?></a> -->
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
