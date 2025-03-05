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
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
/* custom post types
*/
require get_template_directory() . '/includes/post-types.php';
/*
* -------------------------
* Handles theme support features like menus, post thumbnails, and general setup.
*/
require get_template_directory() . '/includes/setup.php';

