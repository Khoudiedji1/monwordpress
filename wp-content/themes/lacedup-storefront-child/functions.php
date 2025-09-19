<?php
/**
 * Functions and definitions for Laced Up Theme
 */

// Charger les CSS et JS
function lacedup_enqueue_assets() {
    // Style principal du thème
    wp_enqueue_style('lacedup-style', get_stylesheet_uri());

    // Google Fonts (Poppins pour titres + Helvetica/Arial fallback)
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap',
        array(),
        null
    );

    // Font Awesome (icônes header/footer)
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );

    // JS du thème (si besoin)
    wp_enqueue_script(
        'lacedup-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'lacedup_enqueue_assets');


// Déclarer menus
function lacedup_register_menus() {
    register_nav_menus(array(
        'main-menu'   => __('Main Menu', 'lacedup'),
        'footer-menu' => __('Footer Menu', 'lacedup'),
    ));
}
add_action('init', 'lacedup_register_menus');


// Support des images à la Une (produits / blog)
add_theme_support('post-thumbnails');

// Support du titre automatique
add_theme_support('title-tag');

// WooCommerce support
function lacedup_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'lacedup_add_woocommerce_support');
