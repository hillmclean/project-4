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

		<?php endforeach; ?>
		<?php endif; ?>

	</div>

	<h1 class="front-h1">Inhabitent Journal</h1>
				
	<?php
	$args = array( 
		'post_type' => 'post',
		'posts_per_page' => 3
	);
	$blog_posts = get_posts( $args ); 
	?>
		<div class="journal-container">
			<?php foreach($blog_posts as $post): setup_postdata ($post); ?>
				<div class="journal-teaser">
					<img class="journal-teaser-img"><?php the_post_thumbnail(); ?>
					<p><?php inhabitent_starter_posted_on(); ?> / <?php comments_number(); ?></p>
					<p><?php comments_number(); ?></p>
					<h2><?php the_title(); ?></h2>
					<button>Read Entry</button>
				</div>

			<?php endforeach; ?>
			<?php  wp_reset_postdata(); ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
