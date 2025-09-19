<?php get_header(); ?>

<main class="site-main">

  <!-- Hero -->
  <section class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h1>Elevate your look, one pair at a time.</h1>
      <p>Premium sneakers — Lace up and stand out.</p>
      <div class="hero-buttons">
        <a href="#" class="btn-primary">Shop Now</a>
        <a href="#" class="btn-secondary">Explore Lookbook</a>
      </div>
    </div>
  </section>

  <!-- Categories -->
  <section class="categories">
    <h2>Shop by Category</h2>
    <div class="category-grid">
      <div class="category-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/men.jpg" alt="Men">
        <a href="#">Men</a>
      </div>
      <div class="category-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/women.jpg" alt="Women">
        <a href="#">Women</a>
      </div>
      <div class="category-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kids.jpg" alt="Kids">
        <a href="#">Kids</a>
      </div>
    </div>
  </section>

  <!-- Featured -->
  <section class="featured-products">
    <h2>🔥 Featured Drops</h2>
    <div class="product-grid">
      <div class="product-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sneaker1.jpg" alt="Sneaker 1">
        <h3>Air Zoom</h3>
        <p>$120</p>
      </div>
      <div class="product-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sneaker2.jpg" alt="Sneaker 2">
        <h3>Ultra Boost</h3>
        <p>$150</p>
      </div>
      <div class="product-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sneaker3.jpg" alt="Sneaker 3">
        <h3>Jordan Retro</h3>
        <p>$200</p>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <div class="cta-content">
      <h2>Join the Laced Up Community</h2>
      <p>Get early access to drops and exclusive deals.</p>
      <a href="#" class="btn-primary">Sign Up</a>
    </div>
  </section>

</main>

<?php get_footer(); ?>
