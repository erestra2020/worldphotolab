<?php
if (!defined('ABSPATH')) {
    exit;
}

define('WPL_THEME_VERSION', '1.2.0');
define('WPL_THEME_DIR', get_template_directory());
define('WPL_THEME_URI', get_template_directory_uri());

require_once WPL_THEME_DIR . '/inc/setup.php';
require_once WPL_THEME_DIR . '/inc/enqueue.php';
require_once WPL_THEME_DIR . '/inc/template-helpers.php';