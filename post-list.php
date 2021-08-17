/**
 * Plugin Name:       custom-shortcode
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */


<?php
add_shortcode('custom-shortcode','post-list');
function post-list(){
$args = array(
'post_status' => 'publish',
'orderby' => 'post_date',
$old_post - new WP_Query( $args);
print_r( $old_post->post);
