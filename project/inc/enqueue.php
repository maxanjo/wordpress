<?php
/*
@package we|bove theme
===================================
      ADMIN ENQUEUE FUNCTIONS
===================================
*/

function web_load_admin_scripts($current_){
	// if('toplevel_page_my_theme' !== $current_){return;}

	wp_enqueue_media();
	
	wp_register_style('web-admin', get_template_directory_uri() . '/inc/css/template.admin.css', array(), '1.0.0', 'all');
	wp_enqueue_style('web-admin');

	wp_register_script('web-admin-script', get_template_directory_uri() . '/inc/js/template.admin.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('web-admin-script');
	wp_register_script('web-jquery', get_template_directory_uri() . '/inc/js/jquery.min.js', '1.0.0', true);
	wp_enqueue_script('web-jquery');
}
add_action ('admin_enqueue_scripts', 'web_load_admin_scripts');
