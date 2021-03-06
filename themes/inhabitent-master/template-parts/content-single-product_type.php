<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="shop-item-container">

		<?php if( get_field('image') ): ?>
			<div class="single-product-img" style="background: url('<?php echo the_field('image'); ?>') no-repeat center; background-size: cover; " >
		<?php endif; ?>
		</div>

	

		<div class="entry-content">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<p class="single-price">$ <?php the_field('price'); ?></p>
		<p class="single-product-content"><?php the_content(); ?></p>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>

		<div class="social-button-container">
		<button class="single-product-social"><a class="button-text" href="#"><i class="fab fa-facebook-f social-button"></i>Like</a>
		</button>

		<button class="single-product-social"><a class="button-text" href="#"><i class="fab fa-twitter social-button"></i>Tweet</a>
		</button>

		<button class="single-product-social"><a class="button-text" href="#"><i class="fab fa-pinterest social-button"></i>Pin</a>
		</button>

		</div>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif; ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php inhabitent_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
			</div>
</article><!-- #post-## -->
