<?php
add_shortcode('custom-shortcode','post-list');
function post-list(){
$args = array(
'post_status' => 'publish',
'orderby' => 'post_date',
$old_post - new WP_Query( $args);
print_r( $old_post->post);
