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

	
	<?php $terms = get_terms( array(
		'taxonomy'=>'product_taxonomy',
		'hide_empty' => 0,
		));

		if (! empty($terms) && ! is_wp_error($terms)) :
			?>
		

	<div class="product-grid">
		<?php foreach($terms as $term): setup_postdata ($term); ?>
			 
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

		<?php endforeach; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>

	
	</div> <!-- .product-grid -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>