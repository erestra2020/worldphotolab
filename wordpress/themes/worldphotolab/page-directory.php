<?php
/*
Template Name: Find Photographers
*/
get_header(); ?>
<main class="wpl-section">
  <div class="wpl-container">
    <div class="wpl-section-title">
      <h2>Find Photographers</h2>
      <p>Search approved photographers by location, category and budget.</p>
    </div>
    <?php echo do_shortcode('[wpl_photographer_directory]'); ?>
  </div>
</main>
<?php get_footer(); ?>
