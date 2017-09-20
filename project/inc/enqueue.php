<?php
/*
@package we|bove theme
===================================
      ADMIN ENQUEUE FUNCTIONS
===================================
*/

function web_load_admin_scripts($current_){
	//echo $current_;
	if('toplevel_page_my_theme' == $current_){
		wp_enqueue_media();
		
		wp_register_style('web-admin', get_template_directory_uri() . '/inc/css/template.admin.css', array(), '1.0.0', 'all');
		wp_enqueue_style('web-admin');
		wp_register_script('web-jquery', get_template_directory_uri() . '/inc/js/jquery.min.js', '1.0.0', true);
		wp_enqueue_script('web-jquery');
		wp_register_script('web-editor', 'https://cdn.ckeditor.com/4.7.3/basic/ckeditor.js', '4.7.3', true);
		wp_enqueue_script('web-editor');
		wp_register_script('web-admin-script', get_template_directory_uri() . '/inc/js/template.admin.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script('web-admin-script');
		wp_localize_script('web-jquery', 'directory', array( 'url' => get_template_directory_uri() ));
		}else if('webove_page_my_theme_social' == $current_){		
		wp_register_style('web-admin', get_template_directory_uri() . '/inc/css/template.admin.css', array(), '1.0.0', 'all');
		wp_enqueue_style('web-admin');

		}else if('webove_page_my_theme_css' == $current_){
			wp_enqueue_script('ace', get_template_directory_uri() . '/inc/js/libs/ace/ace.js', array('jquery'), '1.2.8', true );
			wp_enqueue_script('custom-css', get_template_directory_uri() . '/inc/js/custom-css.admin.js', array('jquery'), '1.0.0', true);
			wp_register_script('web-jquery', get_template_directory_uri() . '/inc/js/jquery.min.js', '1.0.0', true);
			wp_enqueue_script('web-jquery');
			wp_register_style('web-admin', get_template_directory_uri() . '/inc/css/template.admin.css', array(), '1.0.0', 'all');
			wp_enqueue_style('web-admin');
			wp_enqueue_style('ace', get_template_directory_uri() . '/inc/css/ace.css', array(), '1.0.0', 'all');
		}
		else if('webove_page_my_theme_additional' == $current_){
			wp_register_script('web-jquery', get_template_directory_uri() . '/inc/js/jquery.min.js', '1.0.0', true);
			wp_enqueue_script('web-jquery');
			wp_register_style('web-admin', get_template_directory_uri() . '/inc/css/template.admin.css', array(), '1.0.0', 'all');
			wp_enqueue_style('web-admin');
		}
		else{return;};
	}
add_action ('admin_enqueue_scripts', 'web_load_admin_scripts');
