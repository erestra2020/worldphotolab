<?php get_header(); ?>
<main>
<section class="wpl-hero">
  <div class="wpl-container wpl-hero-grid">
    <div>
      <div class="wpl-kicker">Global Photographer Directory</div>
      <h1>Find the Perfect Photographer Anywhere in the World.</h1>
      <p>Discover professional photographers by country, state, city, category and budget. First year listing is free for photographers.</p>
      <form class="wpl-search" action="<?php echo esc_url(home_url('/find-photographers')); ?>" method="get">
        <input name="city" placeholder="City">
        <select name="category"><option value="">Category</option><option>Wedding</option><option>Fashion</option><option>Product</option><option>360 Photography</option></select>
        <input name="budget" placeholder="Budget">
        <select name="verified"><option value="">Any</option><option value="yes">Verified only</option></select>
        <button type="submit">Search</button>
      </form>
    </div>
    <div class="wpl-visual"></div>
  </div>
</section>

<section class="wpl-section">
  <div class="wpl-container">
    <div class="wpl-section-title">
      <h2>Popular Categories</h2>
      <p>Build SEO pages around high-value photography services and locations.</p>
    </div>
    <div class="wpl-grid-4">
      <?php foreach(['Wedding','Pre-Wedding','Fashion','Product','Event','Corporate','Drone','360 Photography'] as $cat): ?>
      <div class="wpl-category"><span class="wpl-badge"><?php echo esc_html($cat); ?></span><h3><?php echo esc_html($cat); ?></h3><p class="wpl-muted">Find top professionals.</p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="wpl-section">
  <div class="wpl-container">
    <div class="wpl-section-title">
      <h2>Featured Photographers</h2>
      <p>Approved and featured profiles will appear here.</p>
    </div>
    <div class="wpl-cards">
      <?php
      $imgs = [
        'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=800&q=80',
        'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=800&q=80',
        'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=800&q=80'
      ];
      foreach($imgs as $i=>$img): ?>
      <article class="wpl-card">
        <div class="wpl-card-img" style="background-image:url('<?php echo esc_url($img); ?>')"></div>
        <div class="wpl-card-body">
          <span class="wpl-badge">Verified</span>
          <h3>Photographer Name</h3>
          <p class="wpl-muted">Lucknow, India • Starting ₹10,000</p>
          <a class="wpl-btn" href="#">View Profile</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
</main>
<?php get_footer(); ?>
