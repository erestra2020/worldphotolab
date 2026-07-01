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
<section class="wpl-stats">
  <div class="wpl-container wpl-stats-grid">
    <div><strong>10,000+</strong><span>Photographers</span></div>
    <div><strong>190+</strong><span>Countries</span></div>
    <div><strong>350+</strong><span>Cities</span></div>
    <div><strong>50+</strong><span>Categories</span></div>
  </div>
</section>

<section class="wpl-section">
  <div class="wpl-container">
    <div class="wpl-section-title">
      <h2>Featured Photographers</h2>
      <p>Hand-picked professionals from the WorldPhotoLab network.</p>
    </div>

    <div class="wpl-featured-grid">
      <?php
      $photographers = [
        ['Aarav Studio', 'Lucknow, India', 'Wedding • Event', '₹15,000', 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=900&q=80'],
        ['Maya Lens', 'Delhi, India', 'Fashion • Portrait', '₹20,000', 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=900&q=80'],
        ['Global Frames', 'Dubai, UAE', 'Corporate • Product', '₹30,000', 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=900&q=80'],
      ];

      foreach ($photographers as $p) :
      ?>
        <article class="wpl-photographer-card">
          <img src="<?php echo esc_url($p[4]); ?>" alt="<?php echo esc_attr($p[0]); ?>">
          <div>
            <span class="wpl-verified">Verified</span>
            <h3><?php echo esc_html($p[0]); ?></h3>
            <p><?php echo esc_html($p[1]); ?></p>
            <p><?php echo esc_html($p[2]); ?></p>
            <strong>Starting <?php echo esc_html($p[3]); ?></strong>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="wpl-section wpl-soft">
  <div class="wpl-container">
    <div class="wpl-section-title">
      <h2>Top Photography Destinations</h2>
      <p>Explore photographers in popular cities around the world.</p>
    </div>

    <div class="wpl-city-grid">
      <?php
      $cities = [
        ['Delhi', 'https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=900&q=80'],
        ['Dubai', 'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=900&q=80'],
        ['London', 'https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=900&q=80'],
        ['Paris', 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=900&q=80'],
      ];

      foreach ($cities as $city) :
      ?>
        <div class="wpl-city-card" style="background-image:url('<?php echo esc_url($city[1]); ?>')">
          <h3><?php echo esc_html($city[0]); ?></h3>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="wpl-section">
  <div class="wpl-container wpl-why-grid">
    <div>
      <span class="wpl-kicker">Why WorldPhotoLab</span>
      <h2>Built for trust, discovery and professional growth.</h2>
      <p>Every profile is reviewed before going live. Customers get a better discovery experience, while photographers get a premium platform to showcase their work.</p>
    </div>

    <div class="wpl-why-list">
      <div><strong>Admin Approved Profiles</strong><span>Quality control before public listing.</span></div>
      <div><strong>Global Search</strong><span>Country, city, category and budget filters.</span></div>
      <div><strong>Future Paid Plans</strong><span>Free first year, scalable membership later.</span></div>
    </div>
  </div>
</section>

<section class="wpl-newsletter">
  <div class="wpl-container">
    <h2>Join WorldPhotoLab free for the first year.</h2>
    <p>Start building your global photography profile today.</p>
    <a href="<?php echo esc_url(home_url('/become-a-photographer')); ?>">Become a Photographer</a>
  </div>
</section>
<?php get_footer(); ?>
