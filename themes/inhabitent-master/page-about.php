<?php
/**
 * The template for displaying about page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			
			<?php if ( has_post_thumbnail() ) {
						$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "full");
						}  
					?>
				 
					<div class="front-header-wrap" style="background: url('<?php echo 	$backgroundImg[0]; ?>') no-repeat; background-size: cover;">
						 <header class="entry-header">
						 <h1 class="entry-title"><?php the_title(); ?></h1>
						 </header>
					</div> 

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
