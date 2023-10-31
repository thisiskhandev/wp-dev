<?php

function wpdocs_theme_name_scripts()
{
    wp_enqueue_style('bootstrap', get_stylesheet_uri() . '/b5/bootstrap.min.css');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/b5/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');
