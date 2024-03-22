<?php
add_action('wp_enqueue_scripts', 'add_styles');

function add_styles()
{
    wp_enqueue_style('h-style', get_stylesheet_uri());
}

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

?>
