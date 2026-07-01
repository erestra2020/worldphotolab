<?php
if (!defined('ABSPATH')) {
    exit;
}

function worldphotolab_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'worldphotolab'),
            'footer'  => __('Footer Menu', 'worldphotolab'),
        )
    );
}
add_action('after_setup_theme', 'worldphotolab_setup');