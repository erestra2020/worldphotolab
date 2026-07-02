<section class="wpl-section">
    <div class="wpl-container">

        <div class="wpl-section-title">
            <h2>Top Photography Cities</h2>
            <p>Explore photographers from the world's most popular cities.</p>
        </div>

        <div class="wpl-category-grid">

            <?php

            $cities=[
                "Delhi",
                "Mumbai",
                "Dubai",
                "London",
                "New York",
                "Paris",
                "Singapore",
                "Sydney"
            ];

            foreach($cities as $city):

            ?>

            <div class="wpl-category-card">

                <span><?php echo $city; ?></span>

                <p>Professional photographers available.</p>

            </div>

            <?php endforeach; ?>

        </div>

    </div>
</section>