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
				<h1 class="shop-header-text">Shop Stuff</h1>

				<?php $terms = get_terms( array(
					'taxonomy'=>'product_taxonomy',
					'hide_empty' => 0,
				));
				if (! empty($terms) && ! is_wp_error($terms)) :
				?>
				
				<div class="product-type">
					<?php foreach($terms as $term) : ?>
						<p><a href="<?php echo get_term_link($term); ?>">
						<?php echo $term->name ?>
					</a>
					</p>

					<?php endforeach; ?>
					<?php endif; ?>
				</div>

			</header>

<!-- Product Grid -->

	<?php
	$args = array( 
		'post_type' => 'product_type',
		'posts_per_page' => 16
	);
	$products = new WP_Query($args);
	?>

	<div class="product-grid">
		<?php if ( $products->have_posts() ) : ?>
	 	<?php while ( $products->have_posts() ) : $products->the_post(); ?>
			 
		<div class="product-item">
			<?php if( get_field('image') ): ?>
				<a href="<?php the_permalink()?>" <?php the_title(); ?>>
					<div class="product-img-box" style="background: url('<?php echo the_field('image'); ?>') no-repeat; background-size: cover;" >
			<?php endif; ?>	
					</div> 
				</a>

			<div class="product-info-box">
				<p><?php the_title(); ?></p>
				<p>$ <?php the_field('price'); ?></p>
			</div> 
		</div> <!-- .product-item -->

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php endif;?>
	
	</div> <!-- .product-grid -->
 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>