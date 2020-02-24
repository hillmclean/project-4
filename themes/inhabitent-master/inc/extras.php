<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( is_singular( 'page' ) ) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_starter_body_classes' );

add_filter('login_headerurl','loginpage_custom_link');
function loginpage_custom_link($url) {
    return home_url();
}

add_action( 'login_head', 'new_login_logo' );
function new_login_logo() { 
echo '
	<style>
			#login h1 a, .login h1 a {
			background-image: url('.get_template_directory_uri().'/logos/inhabitent-logo-text-dark.svg) !important;
			background-size: 320px 50px !important; 
			width: 320px !important;
			background-position: center !important;
			}
	</style>
	';
 } ?>