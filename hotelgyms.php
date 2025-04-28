<?php
/**
 * Plugin Name: My Simple Plugin
 * Description: A very basic WordPress plugin.
 * Version: 1.0
 * Author: Harshal Jain
 */

// Hook into WordPress 'init' action
add_action('init', 'my_simple_plugin_function');

function my_simple_plugin_function() {
    // This will add a simple message to the admin footer
    add_filter('admin_footer_text', function() {
        return 'Thank you for using My Simple Plugin!';
    });
}
?>
