<?php
/**
 * Enable support for Post Thumbnails (Featured Images).
 */
add_theme_support('post-thumbnails');

/**
 * Enable excerpt support for pages.
 */
add_post_type_support('page', 'excerpt');

/**
 * Properly enqueue the theme's stylesheet.
 */
function theme_scripts_and_styles() {
    wp_enqueue_style('theme-main-css', get_template_directory_uri() . '/styles/main.css', array(), time(), 'all');
}
add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');



