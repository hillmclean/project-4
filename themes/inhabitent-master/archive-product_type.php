<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="shop-header">
				<h1>Shop Stuff</h2>
			</header><!-- shop-header -->


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<div class="product-item">

				<a href="<?php the_permalink()?>" <?php the_title(); ?>>
					<?php if( get_field('image') ): ?>
						<img src="<?php the_field('image'); ?>" />
				</a>
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<p>$ <?php the_field('price'); ?></p>
			</div>
			
					<?php endif; ?>


			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>