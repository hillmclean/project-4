<?php
/**
 * Template part for displaying posts.
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
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
	<button class="journal-button"><a class="button-text" href="<?php the_permalink()?>">Read More →</a>
						</button>

</article><!-- #post-## -->

