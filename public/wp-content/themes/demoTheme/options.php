<?php
add_action('admin_menu', 'awesome_page_create');
function awesome_page_create() {
    $page_title = 'My Awesome Admin Page';
    $menu_title = 'Awesome Admin Page';
    $capability = 'edit_posts';
    $menu_slug = 'awesome_page';
    $function = 'my_awesome_page_display';
    $icon_url = 'dashicons-share';
    $position = 24;

    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
}

function my_awesome_page_display() {
    // echo '<h1>My Page!!!</h1>';
    include get_template_directory() . '/demo-options-view.php';
}