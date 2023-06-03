<?php

function idaslet_register_styles() {
    wp_enqueue_style('idaslet', get_template_directory_uri() . "/assets/style/style.css", array(), '1.0', 'all');
}

// Remove p tags from category description
remove_filter('term_description','wpautop');

add_action('wp_enqueue_scripts', 'idaslet_register_styles');

?>