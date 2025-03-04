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
function my_theme_enqueue_styles() {
    // Load the main style.css file
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}

// Hook into WordPress to load styles properly
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
