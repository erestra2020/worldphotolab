<?php
if (!defined('ABSPATH')) exit;

function wpl_registration_shortcode() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['wpl_register_nonce']) && wp_verify_nonce($_POST['wpl_register_nonce'], 'wpl_register')) {
        $name = sanitize_text_field($_POST['wpl_full_name'] ?? '');
        $studio = sanitize_text_field($_POST['wpl_studio_name'] ?? '');
        $email = sanitize_email($_POST['wpl_email'] ?? '');
        $phone = sanitize_text_field($_POST['wpl_phone'] ?? '');
        $country = sanitize_text_field($_POST['wpl_country'] ?? '');
        $state = sanitize_text_field($_POST['wpl_state'] ?? '');
        $city = sanitize_text_field($_POST['wpl_city'] ?? '');
        $price = sanitize_text_field($_POST['wpl_starting_price'] ?? '');
        $about = sanitize_textarea_field($_POST['wpl_about'] ?? '');

        if ($name && $email) {
            $post_id = wp_insert_post([
                'post_type' => 'wpl_photographer',
                'post_title' => $studio ? $studio : $name,
                'post_content' => $about,
                'post_status' => 'pending'
            ]);
            if ($post_id) {
                update_post_meta($post_id, 'wpl_status', 'pending');
                update_post_meta($post_id, 'wpl_full_name', $name);
                update_post_meta($post_id, 'wpl_studio_name', $studio);
                update_post_meta($post_id, 'wpl_email', $email);
                update_post_meta($post_id, 'wpl_phone', $phone);
                update_post_meta($post_id, 'wpl_country', $country);
                update_post_meta($post_id, 'wpl_state', $state);
                update_post_meta($post_id, 'wpl_city', $city);
                update_post_meta($post_id, 'wpl_starting_price', $price);
                update_post_meta($post_id, 'wpl_verified', 'no');
                update_post_meta($post_id, 'wpl_featured', 'no');
                echo '<div class="wpl-form"><strong>Thank you!</strong> Your profile has been submitted for admin approval.</div>';
            }
        }
    }

    ob_start(); ?>
    <form class="wpl-form" method="post">
      <?php wp_nonce_field('wpl_register', 'wpl_register_nonce'); ?>
      <div class="wpl-form-grid">
        <p><label>Full Name</label><input name="wpl_full_name" required></p>
        <p><label>Studio / Business Name</label><input name="wpl_studio_name"></p>
        <p><label>Email</label><input type="email" name="wpl_email" required></p>
        <p><label>Phone / WhatsApp</label><input name="wpl_phone"></p>
        <p><label>Country</label><input name="wpl_country"></p>
        <p><label>State</label><input name="wpl_state"></p>
        <p><label>City</label><input name="wpl_city"></p>
        <p><label>Starting Price</label><input name="wpl_starting_price" placeholder="₹10,000"></p>
        <p class="full"><label>About / Bio</label><textarea name="wpl_about"></textarea></p>
        <p class="full"><button class="wpl-btn gold" type="submit">Submit for Approval</button></p>
      </div>
    </form>
    <?php return ob_get_clean();
}
add_shortcode('wpl_photographer_registration', 'wpl_registration_shortcode');

function wpl_directory_shortcode() {
    $args = [
        'post_type' => 'wpl_photographer',
        'post_status' => 'publish',
        'posts_per_page' => 12
    ];
    $q = new WP_Query($args);
    ob_start(); ?>
    <form class="wpl-search" method="get">
        <input name="city" placeholder="City">
        <input name="category" placeholder="Category">
        <input name="budget" placeholder="Budget">
        <select name="verified"><option value="">Any</option><option value="yes">Verified only</option></select>
        <button>Search</button>
    </form>
    <div class="wpl-cards" style="margin-top:28px;">
    <?php if($q->have_posts()): while($q->have_posts()): $q->the_post(); ?>
      <article class="wpl-card">
        <div class="wpl-card-body">
          <span class="wpl-badge"><?php echo esc_html(get_post_meta(get_the_ID(),'wpl_verified',true)==='yes'?'Verified':'Approved'); ?></span>
          <h3><?php the_title(); ?></h3>
          <p class="wpl-muted"><?php echo esc_html(get_post_meta(get_the_ID(),'wpl_city',true)); ?>, <?php echo esc_html(get_post_meta(get_the_ID(),'wpl_country',true)); ?></p>
          <p>Starting: <?php echo esc_html(get_post_meta(get_the_ID(),'wpl_starting_price',true)); ?></p>
          <a class="wpl-btn" href="<?php the_permalink(); ?>">View Profile</a>
        </div>
      </article>
    <?php endwhile; wp_reset_postdata(); else: ?>
      <p>No approved photographers found yet.</p>
    <?php endif; ?>
    </div>
    <?php return ob_get_clean();
}
add_shortcode('wpl_photographer_directory', 'wpl_directory_shortcode');
