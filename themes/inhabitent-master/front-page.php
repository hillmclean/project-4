<?php
/**
 * The template for displaying front page.
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
								 <img class="inhabitent-large-logo" src="<?php echo get_template_directory_uri(); ?>/logos/inhabitent-logo-full.svg" alt="Inhabitent Logo" />
						 </header>
					</div> 

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

				
	<?php
	$args = array( 
		'post_type' => 'post',
		'posts_per_page' => 3
	);
	$blog_posts = get_posts( $args ); 
	?>

		<?php foreach($blog_posts as $post): setup_postdata ($post); ?>

		<article>
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
				<img><?php the_post_thumbnail(); ?>
		</article>

	<?php endforeach; ?>
	<?php  wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
