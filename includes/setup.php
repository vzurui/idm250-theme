<?php
/**
 * -------------------------
 * Handles theme support features like menus, post thumbnails, and general setup.
 */
function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu'),
            'footer-menu' => __('Footer Menu'),
        )
    );
}
add_action('after_setup_theme', 'register_my_menus');

function theme_scripts_and_styles() {
    // Correct path for main.css
    wp_enqueue_style('theme-main-css', get_template_directory_uri() . '/styles/main.css', array(), time(), 'all');
}
add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');


