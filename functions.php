<?php

function recipe_blog_setup() {
    // Add theme support for featured images
    add_theme_support('post-thumbnails');
    
    // Add theme support for title tag
    add_theme_support('title-tag');
    
    // Register navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'recipe-blog'),
    ));
}
add_action('after_setup_theme', 'recipe_blog_setup');


function recipe_blog_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style(
        'recipe-blog-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'recipe_blog_scripts');