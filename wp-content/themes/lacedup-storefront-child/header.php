<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="header-container">

    <!-- Logo -->
    <div class="site-logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Laced Up Logo">
      </a>
    </div>

    <!-- Menu -->
    <nav class="main-navigation" id="main-navigation">
      <?php
      wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'menu_class' => 'primary-menu',
          'container' => false,
      ));
      ?>
    </nav>

    <!-- Icônes -->
    <div class="header-icons">
      <a href="#"><i class="fas fa-search"></i></a>
      <a href="<?php echo wc_get_cart_url(); ?>"><i class="fas fa-shopping-cart"></i></a>
      <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>"><i class="fas fa-user"></i></a>
    </div>

    <!-- Hamburger (mobile) -->
    <div class="hamburger" id="hamburger" role="button" aria-label="Toggle menu" tabindex="0">
      <span></span><span></span><span></span>
    </div>

  </div>
</header>

<script>
  const hamburger = document.getElementById('hamburger');
  const nav = document.getElementById('main-navigation');
  if (hamburger && nav) {
    hamburger.addEventListener('click', () => {
      nav.classList.toggle('active');
    });
  }
</script>
