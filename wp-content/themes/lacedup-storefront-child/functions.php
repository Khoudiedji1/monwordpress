<?php
if ( ! defined( 'ABSPATH' ) ) exit;

// 1️⃣ Charger le style du parent + enfant
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('storefront-parent', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('lacedup-child', get_stylesheet_uri(), ['storefront-parent'], '0.1.0');
});

// 2️⃣ Ajouter le support WooCommerce
add_action('after_setup_theme', function() {
    add_theme_support('woocommerce');
});

// 3️⃣ Optionnel : template minimal pour la boutique si vide
add_action('template_redirect', function() {
    if ( is_shop() && ! have_posts() ) {
        echo '<div style="padding:2em;text-align:center;">
                <h2>Bienvenue dans la boutique LacedUp !</h2>
                <p>Aucun produit trouvé pour l’instant.</p>
              </div>';
        exit;
    }
});

