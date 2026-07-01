<?php
/*
Template Name: Become a Photographer
*/
get_header(); ?>
<main class="wpl-section">
  <div class="wpl-container">
    <div class="wpl-section-title">
      <h2>Become a Photographer</h2>
      <p>Register free for the first year. Your profile will go live after admin approval.</p>
    </div>
    <?php echo do_shortcode('[wpl_photographer_registration]'); ?>
  </div>
</main>
<?php get_footer(); ?>
