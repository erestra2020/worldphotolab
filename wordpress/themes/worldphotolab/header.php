<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="wpl-header">
    <div class="wpl-logo"><?php bloginfo('name'); ?></div>
    <?php wp_nav_menu(['theme_location' => 'primary']); ?>
</header>
