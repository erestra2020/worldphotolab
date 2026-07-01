<?php
if (!defined('ABSPATH')) exit;

function wpl_photographer_columns($columns) {
    $columns['wpl_status'] = 'Status';
    $columns['wpl_city'] = 'City';
    $columns['wpl_verified'] = 'Verified';
    return $columns;
}
add_filter('manage_wpl_photographer_posts_columns', 'wpl_photographer_columns');

function wpl_photographer_column_content($column, $post_id) {
    if ($column === 'wpl_status') echo esc_html(get_post_meta($post_id, 'wpl_status', true));
    if ($column === 'wpl_city') echo esc_html(get_post_meta($post_id, 'wpl_city', true));
    if ($column === 'wpl_verified') echo esc_html(get_post_meta($post_id, 'wpl_verified', true));
}
add_action('manage_wpl_photographer_posts_custom_column', 'wpl_photographer_column_content', 10, 2);
