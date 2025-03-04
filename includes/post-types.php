<?php
/**
 * Register Case Studies Custom Post Type
 */
function create_case_study_cpt() {
    register_post_type('case_study', array(
        'labels'      => array('name' => 'Case Studies', 'singular_name' => 'Case Study'),
        'public'      => true,
        'has_archive' => true,
        'menu_icon'   => 'dashicons-portfolio',
        'supports'    => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'     => array('slug' => 'case-studies'),
    ));
}
add_action('init', 'create_case_study_cpt');
