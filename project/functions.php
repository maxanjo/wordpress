<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

show_admin_bar(false);

add_theme_support('post-thumbnails');

// Load up our awesome theme options
require_once ( get_stylesheet_directory() . '/theme-options.php' );
