<?php 

// Sample Options Admin
include get_template_directory() . '/options.php';

// Enqueue scripts and styles. 
function demoTheme_scripts() {
  // Theme stylesheet.
  wp_enqueue_style( 'demoTheme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'demoTheme_scripts' );
