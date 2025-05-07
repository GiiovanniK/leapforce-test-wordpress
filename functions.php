<?php

// Enqueue scripts and styles
function leapforce()
{
    // styles
    wp_enqueue_style('main-style', '/wp-content/themes/leapforce/style.css', false);
    wp_enqueue_style('tailwind-style', '/wp-content/themes/leapforce/src/output.css', false);
    // scripts
    wp_register_script('jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', null, null, true);
    wp_enqueue_script('jQuery');
    wp_enqueue_script('main-script', '/wp-content/themes/leapforce/inc/js/script.js', false);
}
add_action('wp_enqueue_scripts', 'leapforce');

// Menu
function wpb_custom_new_menu()
{
    register_nav_menu('main-custom-menu', __('Custom menu'));
}
add_action('init', 'wpb_custom_new_menu');

// Custom logo
function leapforce_custom_logo_setup()
{
    $defaults = array(
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );

    add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'leapforce_custom_logo_setup');

// Enable post thumbnails
add_theme_support('post-thumbnails');

// Custom image sizes
if (function_exists('add_image_size')) {
    add_image_size('feature_image', 394, 592, true);
    add_image_size('collection_images', 321, 481, true);
    add_image_size('our_story_image', 349, 523, true);
    add_image_size('our_story_feature_image', 454, 534, true);
    add_image_size('our_story_collection_images', 286, 189, true);
}
