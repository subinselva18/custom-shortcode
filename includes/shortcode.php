<?php
/**
 * Shortcode Plugin File
 *
 * @package custom-shortcode
 * @since 1.0.0
 * @version 1.0.0
 *
 * Undocumented function
 * Plugin Name:       Custom Shortcode
 * Plugin URI:        http://159.65.148.33/plugins/Custom-Shortcode/
 * Description:       To list down last five post.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Subin-Selva
 * Author URI:        http://159.65.148.33/
 * License:           GPL v2 or later
 * License URI:       http://159.65.148.33/licenses/gpl-2.0.html
 * Update URI:        http://159.65.148.33/my-plugin/
 * Text Domain:       post-list
 * Domain Path:       /languages
 **/

defined( 'ABSPATH' ) || exit;

// adds the custom shortcode.
add_shortcode( 'custom_shortcode', 'custom_shortcode_get_posts' );

// adds the custom stylesheet.
add_action( 'wp_enqueue_scripts', 'enqueue_style' );

/**
 * Fetches the oldest 5 posts.
 *
 * @since 1.0.0
 */
function custom_shortcode_get_posts() {
	// Declaring a $args variable and assigning the static values to the properties.
	$args     = array(
		'post_status'   => 'publish',
		'post_per_page' => 5,
		'orderby'       => 'post_date',
		'order'         => 'DESC',
	);
	$old_post = new WP_Query( $args );
	// Printing 5 oldest post.
	print_r( $old_post->posts );
	// Loops to get post from $old_post.
	foreach ( $old_post->posts as $old_post ) {
		/**
		 * Includes the template file.
		 *
		 * @since 1.0.0
		 */
		include CS_PATH . 'templates/custom-shortcode.php';
	}
}
/**
 * Adding custom css file name style.css.
 *
 * @since 1.0.0
 */
function enqueue_style() {

	// passing parameters to  wp_enqueue_style function.
	wp_register_style(
		'style',
		CS_URL . '/assets/css/style.css',
		array(),
		1,
		'all'
	);
}
