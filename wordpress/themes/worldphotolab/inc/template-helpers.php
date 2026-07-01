<?php
if (!defined('ABSPATH')) {
    exit;
}

function wpl_asset($path) {
    return esc_url(WPL_THEME_URI . '/assets/' . ltrim($path, '/'));
}