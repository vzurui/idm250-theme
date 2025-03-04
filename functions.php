<?php
/**
 * Enable support for Post Thumbnails (Featured Images).
 *
 * This allows adding featured images to posts and pages.
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 */
add_theme_support('post-thumbnails');

/**
 * Enable excerpt support for pages.
 *
 * By default, pages do not support excerpts, so we add it manually.
 */
add_post_type_support('page', 'excerpt');