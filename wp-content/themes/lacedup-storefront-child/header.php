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
    <div class="header-logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo_Lacedup1.png" alt="LacedUp Logo" class="logo-header">
      </a>
    </div>

    <!-- Menu centré -->
    <nav class="main-navigation">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'menu_class' => 'nav-menu',
        'container' => false
      ));
      ?>
    </nav>

    <!-- Icônes à droite -->
    <div class="header-icons">
      <a href="#"><i class="fas fa-search"></i></a>
      <a href="<?php echo wc_get_cart_url(); ?>"><i class="fas fa-shopping-cart"></i></a>
      <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>"><i class="fas fa-user"></i></a>
    </div>

  </div>
</header>
