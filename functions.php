<?php

function sim_theme_support() {
    // Adds dynamic title tag support
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'sim_theme_support');

function sim_menus() {
    $locations = array(
        'primary' => "Desktop Navbar",
        'footer' => "Desktop Footer"
    );

    register_nav_menus($locations);
}

add_action('init', 'sim_menus');

function sim_register_styles() {

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('sim-custom-style', get_template_directory_uri() . "/style.css", array
    ('sim-bootstrap'), '1.0', 'all');
    wp_enqueue_style('sim-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), '5.1.3', 'all');
    wp_enqueue_style('sim-fontawesome', "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css", array(), '5.15.4', 'all');
    wp_enqueue_style('sim-ajax', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), '4.7.0', 'all');
}

add_action('wp_enqueue_scripts', 'sim_register_styles');

function sim_register_scripts() {
    wp_enqueue_script('sim-jquery', "https://code.jquery.com/jquery-3.3.1.slim.min.js", array(), '3.3.1', 'all', true);
    wp_enqueue_script('sim-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js", array(), '1.14.7', 'all', true);
    wp_enqueue_script('sim-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js", array(), '4.3.1', 'all', true);
    wp_enqueue_script('sim-custom-script', get_template_directory_uri()."/assets/js/main.js", array(), '3.3.1', 'all', true);
}

add_action('wp_enqueue_scripts', 'sim_register_scripts');

?>