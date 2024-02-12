<?php
// Adding theme Surport files
add_theme_support('title_tag');
add_theme_support('post_thumbnails');
add_theme_support('post_format',['aside','gallery','link','image','quote','status','video','audio','chat']);
// add_theme_support('html5');
add_theme_support('automatic-feed-links');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-logo');
add_theme_support('starter-content');
add_theme_support('customize-selective-refresh-widgets');

// Loading function for CSS

function wphierarchy_enqueue_styles() {
    wp_enqueue_style('main-css', get_stylesheet_directory_uri().'/style.css', [], time(), 'all' );
}

add_action('wp_enqueue_scripts','wphierarchy_enqueue_styles');

// Adding Menu Locations
register_nav_menus([
    'main-menu'=> esc_html__('Main Menu','wphierarchy'),
    'footer-menu'=> esc_html__('Footer Menu','wphierarchy'),


]);

// <!-- Widgets or Sidebars areas -->

function wphierarchy_widgets_init() {
    register_sidebar( [
        'name' => esc_html__('Main Sidebar', 'wphierarchy' ),
        'id' => 'main-sidebar',
        'description' => esc_html( 'Add Widgets for main sidebar here', 'wphierarchy' ),
        'before_widget' => '<section class="widget">',
        'after_widget' => '<section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',

    ]);
    register_sidebar( [
        'name' => esc_html__('Footer Sidebar', 'wphierarchy' ),
        'id' => 'footer-sidebar',
        'description' => esc_html( 'Add Widgets for footer-widgets', 'wphierarchy' ),
        'before_widget' => '<section class="widget">',
        'after_widget' => '<section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',

    ]);
}

add_action( 'widgets_init', 'wphierarchy_widgets_init' );
?>

