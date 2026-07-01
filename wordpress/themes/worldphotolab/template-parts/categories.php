<section class="wpl-section wpl-categories-section">
  <div class="wpl-container">
    <div class="wpl-section-title">
      <h2>Popular Categories</h2>
      <p>Discover professionals for every photography need.</p>
    </div>

    <div class="wpl-category-grid">
      <?php
      $categories = [
        ['Wedding', 'Find top wedding photographers.'],
        ['Pre-Wedding', 'Capture your love story beautifully.'],
        ['Fashion', 'Book professional fashion shoots.'],
        ['Product', 'Showcase your products with impact.'],
        ['Corporate', 'Hire photographers for business needs.'],
        ['Event', 'Cover parties, launches and functions.'],
        ['Drone', 'Aerial photography for premium projects.'],
        ['360 Photography', 'Virtual tours and immersive shoots.'],
      ];

      foreach ($categories as $category) :
      ?>
        <div class="wpl-category-card">
          <span><?php echo esc_html($category[0]); ?></span>
          <p><?php echo esc_html($category[1]); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>