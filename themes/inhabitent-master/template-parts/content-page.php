<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<!-- <div class="map">
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzrok3qRFEJwJ4jHAssO24CB4isaz0PQY&callback=initMap"
	type="text/javascript"></script>
</div> -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
