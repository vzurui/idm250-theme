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
