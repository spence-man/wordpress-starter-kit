<?php

// Enqueue scripts and styles.
add_action('wp_enqueue_scripts', 'starter_kit_scripts');

function starter_kit_scripts()
{
    // Bootstrap
    wp_enqueue_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    //wp_enqueue_script( 'bootstrap_js', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ) );
    // Your css
    wp_enqueue_style('starter_kit_style', get_stylesheet_uri());
}
