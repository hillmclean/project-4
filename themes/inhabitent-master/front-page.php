<?php
/**
 * The template for displaying front page.
 *
 * @package Inhabitent_Theme
 */

get_template_part( 'template-parts/header', 'page-front' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="front-site-main" role="main">

		<h1>Shop Stuff</h2>

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
				<button class="product-type-button"><a href="<?php echo get_term_link($term); ?>">
				<?php echo $term->name ?> Stuff</a>
				</button>
			</div>

		<?php endforeach; ?>
		<?php endif; ?>

	</div>
				
	<?php
	$args = array( 
		'post_type' => 'post',
		'posts_per_page' => 3
	);
	$blog_posts = get_posts( $args ); 
	?>

		<?php foreach($blog_posts as $post): setup_postdata ($post); ?>

		<article>
				<h1>Inhabitent Journal</h1>
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
				<img><?php the_post_thumbnail(); ?>
		</article>

	<?php endforeach; ?>
	<?php  wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
