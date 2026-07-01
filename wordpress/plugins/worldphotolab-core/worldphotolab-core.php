<?php
/**
 * Plugin Name: WorldPhotoLab Core
 * Description: Photographer registration, profile approval, directory and core platform functionality.
 * Version: 1.1.0
 * Author: WorldPhotoLab
 */
if (!defined('ABSPATH')) exit;

define('WPL_CORE_PATH', plugin_dir_path(__FILE__));

require_once WPL_CORE_PATH . 'includes/post-types.php';
require_once WPL_CORE_PATH . 'includes/shortcodes.php';
require_once WPL_CORE_PATH . 'includes/admin-columns.php';

function wpl_register_roles() {
    add_role('wpl_photographer', 'Photographer', [
        'read' => true,
        'upload_files' => true
    ]);
}
register_activation_hook(__FILE__, 'wpl_register_roles');
