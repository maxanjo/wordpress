<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

show_admin_bar(false);

add_theme_support('post-thumbnails');

register_nav_menu('primary', 'Primary menu');

// Load up our awesome theme options
require  get_template_directory() . '/inc/function-admin.php';
require  get_template_directory() . '/inc/enqueue.php';


