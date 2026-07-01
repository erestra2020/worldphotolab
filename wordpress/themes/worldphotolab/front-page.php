<?php get_header(); ?>

<main class="wpl-home">

  <section class="wpl-hero">
    <div class="wpl-container wpl-hero-grid">
      <div>
        <span class="wpl-kicker">Global Photographer Directory</span>
        <h1>Find the Perfect Photographer Anywhere in the World.</h1>
        <p>Search verified photographers by country, city, category and budget. Join free for the first year.</p>

        <form class="wpl-search" action="<?php echo esc_url(home_url('/find-photographers')); ?>" method="get">
          <input type="text" name="country" placeholder="Country">
          <input type="text" name="city" placeholder="City">
          <select name="category">
            <option value="">Category</option>
            <option>Wedding</option>
            <option>Fashion</option>
            <option>Product</option>
            <option>Event</option>
            <option>360 Photography</option>
          </select>
          <button type="submit">Search</button>
        </form>
      </div>

      <div class="wpl-hero-card">
        <div class="wpl-hero-image"></div>
        <div class="wpl-floating-card">
          <strong>10,000+</strong>
          <span>Photographers coming soon</span>
        </div>
      </div>
    </div>
  </section>

  <section class="wpl-section">
    <div class="wpl-container">
      <div class="wpl-section-title">
        <h2>Popular Categories</h2>
        <p>Discover professionals for every photography need.</p>
      </div>

      <div class="wpl-category-grid">
        <?php
        $categories = ['Wedding', 'Pre-Wedding', 'Fashion', 'Product', 'Corporate', 'Event', 'Drone', '360 Photography'];
        foreach ($categories as $category) :
        ?>
          <div class="wpl-category-card">
            <span><?php echo esc_html($category); ?></span>
            <p>Find top <?php echo esc_html($category); ?> photographers.</p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>