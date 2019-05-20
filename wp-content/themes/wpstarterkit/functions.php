<?php

// Enqueue scripts and styles.
require get_template_directory() . '/inc/enqueue.php';

// Sandbox for development testing
require get_template_directory() . '/test-sandbox/setup.php';

if (is_admin()) {
    $init_test_sandbox = new SandboxSetup();
}
