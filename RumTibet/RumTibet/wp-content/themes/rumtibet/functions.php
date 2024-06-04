<?php
add_action('wp_enqueue_scripts', 'rumtibet_scripts');
add_action('wp_enqueue_scripts', 'rumtibet_styles');

function rumtibet_scripts()
{
    wp_enqueue_script(
        'rumtibet-scripts',
        get_template_directory_uri() . '/assets/script.js',
        [],
        null,
        true
    );
}

function rumtibet_styles()
{
    wp_enqueue_style('rumtibet-style', get_stylesheet_uri());
}

?>
