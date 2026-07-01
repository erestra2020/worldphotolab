<?php
if (!defined('ABSPATH')) {
    exit;
}

function worldphotolab_enqueue_assets() {

    wp_enqueue_style(
        'worldphotolab-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'worldphotolab-main',
        WPL_THEME_URI . '/assets/css/main.css',
        array(),
        WPL_THEME_VERSION
    );

    wp_enqueue_script(
        'worldphotolab-main',
        WPL_THEME_URI . '/assets/js/main.js',
        array(),
        WPL_THEME_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'worldphotolab_enqueue_assets');