<?php

class SandboxSetup
{

    public function __construct()
    {
        add_action('admin_menu', [$this, 'create_sandbox']);
    }

    // ADMIN PAGE
    public function create_sandbox()
    {
        $page_title = 'Test Sandbox';
        $menu_title = 'Test Sandbox';
        $capability = 'edit_posts';
        $menu_slug = 'test-sandbox';
        $add_admin_view = [$this, 'add_admin_view'];
        $icon_url = 'dashicons-share';
        $position = 50;
        add_menu_page($page_title, $menu_title, $capability, $menu_slug, $add_admin_view, $icon_url, $position);
    }

    // VIEW
    public function add_admin_view()
    {
        require_once get_template_directory() . '/test-sandbox/view.php';
    }
}
