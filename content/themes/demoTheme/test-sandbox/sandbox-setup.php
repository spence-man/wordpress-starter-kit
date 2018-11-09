<?php
add_action('admin_menu', 'test_page_create');
function test_page_create() {
    $page_title = 'Test Sandbox';
    $menu_title = 'Test Sandbox';
    $capability = 'edit_posts';
    $menu_slug = 'test-sandbox';
    $function = 'page_display';
    $icon_url = 'dashicons-admin-site';
    $position = 51;
    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
}
function page_display() {
    require_once get_template_directory() . '/test-sandbox/sandbox.php';
    require_once get_template_directory() . '/test-sandbox/sandbox-view.php';
}
