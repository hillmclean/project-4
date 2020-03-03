<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article class="journal-box" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if ( has_post_thumbnail() ) {
		$journalImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "full");
		}  
	?>
			
		<div class="journal-img" style="background: url('<?php echo $journalImg[0]; ?>') no-repeat; background-size: cover;">
	
				<div class="journal-title">
						<a href="<?php the_permalink()?>">
						<h2><?php the_title() ?></h2>
						</a>
				</div>

				<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta journal-meta">
					<h4><?php inhabitent_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_starter_posted_by(); ?>
					</h4>
				</div><!-- .entry-meta -->
				<?php endif; ?>
		</div> 


	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php inhabitent_starter_entry_footer(); ?>

		<div class="social-button-container">
			<button class="single-product-social"><a class="button-text" href="#"><i class="fab fa-facebook-f social-button"></i>Like</a>
			</button>

			<button class="single-product-social"><a class="button-text" href="#"><i class="fab fa-twitter social-button"></i>Tweet</a>
			</button>

			<button class="single-product-social"><a class="button-text" href="#"><i class="fab fa-pinterest social-button"></i>Pin</a>
			</button>

		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
