<?php get_header(); ?>
<main class="wpl-section">
  <div class="wpl-container">
    <?php while(have_posts()): the_post(); ?>
      <article class="wpl-card">
        <?php if(has_post_thumbnail()): ?>
          <div class="wpl-card-img" style="background-image:url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(),'large')); ?>')"></div>
        <?php endif; ?>
        <div class="wpl-card-body">
          <span class="wpl-badge"><?php echo get_post_meta(get_the_ID(),'wpl_verified',true)==='yes'?'Verified':'Photographer'; ?></span>
          <h1><?php the_title(); ?></h1>
          <p class="wpl-muted"><?php echo esc_html(get_post_meta(get_the_ID(),'wpl_city',true)); ?>, <?php echo esc_html(get_post_meta(get_the_ID(),'wpl_country',true)); ?></p>
          <p><strong>Starting Price:</strong> <?php echo esc_html(get_post_meta(get_the_ID(),'wpl_starting_price',true)); ?></p>
          <div><?php the_content(); ?></div>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
</main>
<?php get_footer(); ?>
