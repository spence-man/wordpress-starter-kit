<?php 

if ( ! is_admin() ) {
    // Runs only if this PHP code is in a file that displays outside the admin panels, like the theme template.
    echo '<div style="text-align: center">Welcome to our website.</div>';
} else {
    // Runs only if this code is in a file that displays inside the admin panels, like a plugin file.
    echo '<div style="text-align: center">Welcome to your Admin Panels.</div>';
}