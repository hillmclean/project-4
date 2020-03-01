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
			<div class="single-product-img">
				<img src="<?php the_field('image'); ?>" />
			</div>
		<?php endif; ?>

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<div class="entry-content">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<p>$ <?php the_field('price'); ?></p>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>

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
