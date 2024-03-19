<?php
add_action('wp_enqueue_scripts', 'childhood_scripts');
add_action('wp_enqueue_scripts', 'childhood_styles');

function childhood_scripts()
{
    wp_enqueue_script(
        'childhood-scripts',
        get_template_directory_uri() . '/assets/js/main.min.js',
        [],
        null,
        true
    );
}

function childhood_styles()
{
    wp_enqueue_style('childhood-style', get_stylesheet_uri());
}

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
?>
