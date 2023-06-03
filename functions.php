<?php

function idaslet_register_styles() {
    wp_enqueue_style('idaslet', get_template_directory_uri() . "/assets/style/style.css", array(), '1.0', 'all');
}

function idaslet_register_scripts() {
    wp_register_script('idaslet-script', get_template_directory_uri() . "/assets/js/script.js", array(), '1.0', 'all', true);
    wp_enqueue_script('idaslet-script');
}

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action('wp_enqueue_scripts', 'idaslet_register_styles');
add_action('wp_enqueue_scripts', 'idaslet_register_scripts');
add_action('get_header', 'remove_admin_login_header');
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

?>