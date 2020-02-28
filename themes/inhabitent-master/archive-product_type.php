<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="shop-header">
				<h1>Shop Stuff</h2>

				<?php $terms = get_terms( array(
					'taxonomy'=>'product_taxonomy',
					'hide_empty' => 0,
				));
				if (! empty($terms) && ! is_wp_error($terms)) :
				?>
				
				<div class="product-type-blocks">
					<?php foreach($terms as $term) : ?>
						<p><a href="<?php echo get_term_link($term); ?>">
						<?php echo $term->name ?>
					</a>
					</p>
				</div>

					<?php endforeach; ?>
					<?php endif; ?>
			</header><!-- shop-header -->

			<?php
	$args = array( 
		'post_type' => 'product_type',
		'posts_per_page' => 16
	);
	// $productItem = get_posts( $args );
	$products = new WP_Query($args);
	?>

<?php if ( $products->have_posts() ) : ?>
	 <?php while ( $products->have_posts() ) : $products->the_post(); ?>
	 <div class="product-item">

<a href="<?php the_permalink()?>" <?php the_title(); ?>>
	<?php if( get_field('image') ): ?>
		<img src="<?php the_field('image'); ?>" />
	<?php endif; ?>
</a>
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<p>$ <?php the_field('price'); ?></p>
</div>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif;?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>