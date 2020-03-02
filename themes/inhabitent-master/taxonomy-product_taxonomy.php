<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
	$args = array( 
		'post_type' => 'product_type',
		'posts_per_page' => 16,
		'order' => 'ASC'
	);
	$products = new WP_Query($args);
	?>
		
	
	
	<div class="product-grid">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="product-item">

			<?php if( get_field('image') ): ?>
				<a href="<?php the_permalink()?>" <?php the_title(); ?>>
					<div class="product-img-box" style="background: url('<?php echo the_field('image'); ?>') no-repeat; background-size: cover;" >
			<?php endif; ?>	
					</div> 
				</a>

			<div class="product-info-box">
				<p class="product-title"><?php the_title(); ?></p>
				<p class="product-price">$ <?php the_field('price'); ?></p>
			</div> 

		</div> <!-- .product-item -->

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
	</div> <!-- .product-grid -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>