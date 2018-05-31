<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

show_admin_bar(true);

add_theme_support('post-thumbnails');

register_nav_menu('primary', 'Primary menu');
register_nav_menu('footer', 'Fotter menu');
add_theme_support('html5',array('search-form'));
add_filter( 'document_title_separator', function(){ return ' « '; } );

include(get_template_directory() . '/custom/widgets.php');

include(get_template_directory() . '/includes/custom-header.php');
include(get_template_directory() . '/includes/customizer.php');
include(get_template_directory() . '/includes/template-functions.php');
include(get_template_directory() . '/includes/template-tags.php');
include(get_template_directory() . '/includes/ajax.php');

if(defined('JETPACK_VERSION')){
    include(get_template_directory() . '/includes/jetpack.php');

}

if(class_exists('Woocommerce')){
    include(get_template_directory() . '/includes/woocommerce.php');
    include(get_template_directory() . '/woocommerce/includes/wc-functions-remove.php');
    include(get_template_directory() . '/woocommerce/includes/wc-functions.php');
}


// Load up our theme options
require  get_template_directory() . '/inc/function-admin.php';
require  get_template_directory() . '/inc/enqueue.php';
add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    load_theme_textdomain('webove', get_template_directory() . '/languages');
}

require  get_template_directory() . '/enqueue-script-style.php';

// SideBar
function true_register_wp_sidebars() {
 
    /* В боковой колонке - первый сайдбар */
   /* register_sidebar(
        array(
            'id' => 'homepage_sidebar', 
            'name' => 'Home page sidebar', 
            'description' => 'Your widgets', // 
            'before_widget' => '<div id="%1$s" class="">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        )
    ); */
 
    /* Sidebar Main */
    register_sidebar(
        array(
            'id' => 'sidebar_first',
            'name' => 'Sidebar',
            'description' => 'Your widgets.',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        )
    );
}
add_action( 'widgets_init', 'true_register_wp_sidebars' );



