<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

show_admin_bar(false);

add_theme_support('post-thumbnails');

register_nav_menu('primary', 'Primary menu');

// Load up our awesome theme options
require  get_template_directory() . '/inc/function-admin.php';
require  get_template_directory() . '/inc/enqueue.php';
add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    load_theme_textdomain('webove', get_template_directory() . '/languages');
}

