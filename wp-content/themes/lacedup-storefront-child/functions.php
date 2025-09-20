<?php
function lacedup_enqueue_assets() {
    // CSS principal
    wp_enqueue_style('lacedup-style', get_stylesheet_uri());

    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap'
    );

    // FontAwesome
    wp_enqueue_style(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css'
    );

    // JS Scroll Top
    wp_enqueue_script(
        'lacedup-scripts',
        get_stylesheet_directory_uri() . '/assets/js/scripts.js',
        array('jquery'),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'lacedup_enqueue_assets');

// Menus
function lacedup_register_menus() {
    register_nav_menus(array(
        'main-menu'   => __('Main Menu', 'lacedup'),
        'footer-menu' => __('Footer Menu', 'lacedup'),
    ));
}
add_action('init', 'lacedup_register_menus');
