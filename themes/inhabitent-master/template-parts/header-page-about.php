  
<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="inhabitent-logo-box">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="inhabitent-logo" src="<?php echo get_template_directory_uri(); ?>/logos/inhabitent-logo-tent.svg" alt="Inhabitent Logo" />
					</a>
					</div>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?><i class="fas fa-search"></i>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
		
			<?php while ( have_posts() ) : the_post(); ?>
			
			<?php if ( has_post_thumbnail() ) {
						$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "full");
						}  
					?>
				 
			<div class="front-header-wrap" style="background: url('<?php echo 	$backgroundImg[0]; ?>') no-repeat; background-size: cover;">
					<h1 class="entry-title"><?php the_title(); ?></h1>
			</div> 

			<div class="about-entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
						) );
				?>
			</div><!-- .entry-content -->

			<?php endwhile; // End of the loop. ?>
			

			<div id="content" class="site-content">