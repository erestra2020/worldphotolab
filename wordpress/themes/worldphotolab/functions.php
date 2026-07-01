<?php
if (!defined('ABSPATH')) exit;

function worldphotolab_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus([
        'primary' => __('Primary Menu', 'worldphotolab'),
        'footer' => __('Footer Menu', 'worldphotolab'),
    ]);
}
add_action('after_setup_theme', 'worldphotolab_setup');

function worldphotolab_assets() {
    wp_enqueue_style('worldphotolab-google-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap', [], null);
    wp_enqueue_style('worldphotolab-style', get_stylesheet_uri(), [], '1.1.0');
}
add_action('wp_enqueue_scripts', 'worldphotolab_assets');
