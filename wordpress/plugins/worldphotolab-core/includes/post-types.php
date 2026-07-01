<?php
if (!defined('ABSPATH')) exit;

function wpl_register_photographer_cpt() {
    register_post_type('wpl_photographer', [
        'labels' => [
            'name' => 'Photographers',
            'singular_name' => 'Photographer',
            'add_new_item' => 'Add New Photographer',
            'edit_item' => 'Edit Photographer'
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'author'],
        'menu_icon' => 'dashicons-camera',
        'rewrite' => ['slug' => 'photographer'],
        'show_in_rest' => true
    ]);

    register_taxonomy('wpl_category', 'wpl_photographer', [
        'labels' => ['name' => 'Photography Categories'],
        'hierarchical' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'photography-category']
    ]);
}
add_action('init', 'wpl_register_photographer_cpt');
