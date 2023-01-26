<?php
/**
 * Style functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

/**
 * Enqueue theme styles.
 */
function gulp_wp_theme_styles() {

	/**
	 * Set a script handle prefix based on theme name.
	 * Note that this should be the same as the `themePrefix` var set in your Gulpfile.js.
	 */
	$theme_handle_prefix = 'cytokinetics';

	wp_enqueue_style( $theme_handle_prefix . '-styles', get_template_directory_uri() . '/assets/css/' . $theme_handle_prefix .'.min.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'gulp_wp_theme_styles' );

	/**
	 * Add body class based on slug
	 */
function add_page_slug_to_the_body( $classes ) {

	global $post;
	if ( isset( $post ) ) {
			$classes[] = $post->post_type . '_' . $post->post_name;
		}
		return $classes;
	}
	add_filter( 'body_class', 'add_page_slug_to_the_body' );
