<section class="wpl-section wpl-featured-section">
  <div class="wpl-container">
    <div class="wpl-section-title">
      <h2>Featured Photographers</h2>
      <p>Hand-picked professionals from around the world.</p>
    </div>

    <div class="wpl-featured-grid">
      <?php
      $featured = [
        ['Aarav Studio', 'Lucknow, India', 'Wedding • Event', '₹15,000', 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=900&q=80'],
        ['Maya Lens', 'Delhi, India', 'Fashion • Portrait', '₹20,000', 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=900&q=80'],
        ['Global Frames', 'Dubai, UAE', 'Corporate • Product', '₹30,000', 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=900&q=80'],
      ];

      foreach ($featured as $item) :
      ?>
        <article class="wpl-photographer-card">
          <img src="<?php echo esc_url($item[4]); ?>" alt="<?php echo esc_attr($item[0]); ?>">
          <div class="wpl-card-body">
            <span class="wpl-verified">Verified</span>
            <h3><?php echo esc_html($item[0]); ?></h3>
            <p><?php echo esc_html($item[1]); ?></p>
            <p><?php echo esc_html($item[2]); ?></p>
            <strong>Starting <?php echo esc_html($item[3]); ?></strong>
            <a class="wpl-btn gold" href="#">View Profile</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>