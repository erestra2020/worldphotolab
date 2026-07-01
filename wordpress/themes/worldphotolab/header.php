<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="wpl-header">
  <div class="wpl-container wpl-nav">
    <a class="wpl-brand" href="<?php echo esc_url(home_url('/')); ?>">World<span>Photo</span>Lab</a>
    <nav class="wpl-menu">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <a href="<?php echo esc_url(home_url('/find-photographers')); ?>">Find Photographers</a>
      <a href="<?php echo esc_url(home_url('/become-a-photographer')); ?>">Become a Photographer</a>
      <a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a>
      <a class="wpl-btn gold" href="<?php echo esc_url(home_url('/become-a-photographer')); ?>">Join Free</a>
    </nav>
  </div>
</header>
