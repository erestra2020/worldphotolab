<?php
/**
 * Plugin Name: WorldPhotoLab Core
 * Description: Core functionality for photographer registration, profiles, approval workflow and directory search.
 * Version: 1.0.0
 * Author: WorldPhotoLab
 */

if (!defined('ABSPATH')) exit;

function wpl_register_photographer_cpt() {
    register_post_type('wpl_photographer', [
        'labels' => [
            'name' => 'Photographers',
            'singular_name' => 'Photographer'
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'author'],
        'menu_icon' => 'dashicons-camera',
        'rewrite' => ['slug' => 'photographer']
    ]);
}
add_action('init', 'wpl_register_photographer_cpt');

function wpl_register_photographer_role() {
    add_role('wpl_photographer', 'Photographer', [
        'read' => true,
        'upload_files' => true
    ]);
}
register_activation_hook(__FILE__, 'wpl_register_photographer_role');
