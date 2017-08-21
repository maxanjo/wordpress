<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

show_admin_bar(false);

add_theme_support('post-thumbnails');

// Load up our awesome theme options
require  get_template_directory() . '/inc/function-admin.php';
