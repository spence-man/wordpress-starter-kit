<?php
add_action('admin_menu', 'awesome_page_create');
function awesome_page_create() {
    $page_title = 'Test Sandbox';
    $menu_title = 'Test Sandbox';
    $capability = 'edit_posts';
    $menu_slug = 'test-sandbox';
    $function = 'page_display';
    $icon_url = 'dashicons-share';
    $position = 50;
    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
}
function page_display() {
    //view
    require_once get_template_directory() . '/rwa/test-dashboard.php';
    require_once get_template_directory() . '/models/test-model.php';
    require_once get_template_directory() . '/rwa/test-view.php';
}