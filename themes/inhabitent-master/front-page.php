<?php
/**
 * The template for displaying front page.
 *
 * @package Inhabitent_Theme
 */

get_template_part( 'template-parts/header', 'page-front' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="front-site-main" role="main">

		<h1 class="front-h1">Shop Stuff</h1>

<?php $terms = get_terms( array(
	'taxonomy'=>'product_taxonomy',
	'hide_empty' => 0,
));
if (! empty($terms) && ! is_wp_error($terms)) :
?>


	<div class="product-type-blocks">

		<?php foreach($terms as $term) : ?>
			<div class="product-type-box">
				<img class="product-type-img" src="<?php echo get_template_directory_uri(); ?>/product-type-icons/<?php echo $term->name?>.svg" />
				<p><?php echo $term->description ?></p>
				<button class="product-type-button"><a class="button-text" href="<?php echo get_term_link($term); ?>">
				<?php echo $term->name ?> Stuff</a>
				</button>
			</div> 
			<!-- product-type-box -->

		<?php endforeach; ?>
		<?php endif; ?>

	</div>
	<!-- product-type-blocks -->

	<h1 class="front-h1">Inhabitent Journal</h1>
				
		<?php
		$args = array( 
			'post_type' => 'post',
			'posts_per_page' => 3
		);
		$blog_posts = get_posts( $args ); 
		?>

		<div class="journal-grid" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php foreach($blog_posts as $post): setup_postdata ($post); ?>

					<?php if ( has_post_thumbnail() ) {
						$journalImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "full");} ?>
			
			<div class="journal-teaser">
					<div class="journal-img" style="background: url('<?php echo $journalImg[0]; ?>') no-repeat; background-size: cover;">
					</div>
				
					<div class="journal-teaser-info">
						<p><?php inhabitent_starter_posted_on(); ?> / <?php comments_number(); ?></p>
							<a href="<?php the_permalink()?>">
							<h2><?php the_title() ?></h2>
							</a>
						<button class="journal-button"><a class="button-text" href="<?php the_permalink()?>">Read Entry</a>
						</button>
					</div>
			</div>
	
			<?php endforeach; ?>
			<?php  wp_reset_postdata(); ?>
		</div> 	<!-- journal-grid -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
