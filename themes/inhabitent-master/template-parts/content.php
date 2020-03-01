<?php
/**
 * Template part for displaying posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article class="journal-box" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header journal-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="journal-img-box">
			<img class="journal-img"><?php the_post_thumbnail(); ?>
		<?php endif; ?>
		</div>

		<div class="journal-title">
		<h2><?php the_title() ?><h2>
		</div>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php inhabitent_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
