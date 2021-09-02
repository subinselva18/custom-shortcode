<?php
/**
 * Undocumented function
 * Plugin Name:       custom-shortcode
 * Plugin URI:        https://sb.hyphenate.in//plugins/post-list/
 * Description:       To list down last five post.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Subin Selva
 * Author URI:        https://sb.hyphenate.in
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       post-list
 * Domain Path:       /languages
 *
 * @since 0.0.0
 */


add_shortcode( 'custom_shortcode', 'post_list' );

// function to test php file to return the list of 5 old post

function post_list() {
	$args     = array(
		'post_status'   => 'publish',
		'post_per_page' => 5,
		'orderby'       => 'post_date',
		'order'         => 'DESC',
	);
	$old_post = new WP_Query( $args );
	print_r( $old_post->post );
}
