<?php
/**
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
 */

add_shortcode('custom-shortcode','post-list');
function post-list(){
$args = array(
'post_status' => 'publish',
'orderby' => 'post_date',
$old_post - new WP_Query( $args);
print_r( $old_post->post);
