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
/**
 * for case study
 */
require get_template_directory() . '/includes/post-types.php';
/**
 * dynamic navigation
 */
function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu'),
        )
    );
}
add_action('init', 'register_my_menus');




