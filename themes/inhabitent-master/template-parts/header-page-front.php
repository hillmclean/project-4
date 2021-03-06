
  
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
						<img class="inhabitent-logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg" alt="Inhabitent Logo" />
					</a>
					</div>

					<div class="nav-search">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<a href="#" class="search-toggle"><i class="fa fa-search"></i></a>
					<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					
					<fieldset>
						<label>

								<input id="search-display" type="search" class="search-field" placeholder="Type and hit enter ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
						</label>
					</fieldset>
				</form>
				</div> <!-- nav-search -->

				</nav><!-- #site-navigation -->
			
			</header><!-- #masthead -->

			<?php while ( have_posts() ) : the_post(); ?>
			

			<?php if ( has_post_thumbnail() ) {
				 $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "full");
				 }  
			 ?>
			
			 <div class="front-header-wrap" style="background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)),#969696 url('<?php echo 	$backgroundImg[0]; ?>') no-repeat; background-size: cover;">
					<div class="entry-header">
							<img class="inhabitent-large-logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Logo" />
				</div>
			 </div> 

	 <?php endwhile; // End of the loop. ?>

			

			<div id="content" class="site-content">