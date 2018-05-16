<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Coming_Soon
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function simple_html_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'simple_html_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function simple_html_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'simple_html_pingback_header' );
