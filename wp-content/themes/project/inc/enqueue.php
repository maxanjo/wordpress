<?php
/*
@package we|bove theme
===================================
      ADMIN ENQUEUE FUNCTIONS
===================================
*/

function web_load_admin_scripts($current_){
	$css = strpos($current_, 'my_theme_css');
	wp_register_style('web-admin', get_template_directory_uri() . '/inc/css/template.admin.css', array(), '1.0.0', 'all');
	wp_enqueue_style('web-admin');
	wp_enqueue_media();
	wp_register_script('web-jquery', get_template_directory_uri() . '/inc/js/jquery.min.js', '1.0.0', true);
	wp_enqueue_script('web-jquery');
	wp_register_script('web-select-script', get_template_directory_uri() . '/inc/js/main.admin.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('web-select-script');
	wp_register_script('web-select-admin', get_template_directory_uri() . '/inc/js/select.admin.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('web-select-admin');
	wp_register_style('web-bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('web-bootstrap');
	wp_register_style('web-bootstrap-dropselect', get_template_directory_uri() . '/inc/css/bootstrap-dropselect.css', array(), '1.0.0', 'all');
	wp_enqueue_style('web-bootstrap-dropselect');
	wp_register_script('web-bootstrap-dropselect', get_template_directory_uri() . '/inc/js/libs/bootstrap-dropselect.js', '1.0.0', true);
	wp_enqueue_script('web-bootstrap-dropselect');
	wp_register_script('web-bootstrap', get_template_directory_uri() . '/inc/js/libs/bootstrap.min.js', '1.0.0', true);
	wp_enqueue_script('web-bootstrap');
	wp_register_script('web-minicolors', get_template_directory_uri() . '/inc/js/libs/jquery.minicolors.min.js', '1.0.0', true);
	wp_enqueue_script('web-minicolors');
	wp_register_style('web-minicolors', get_template_directory_uri() . '/inc/css/jquery.minicolors.css', array(), '1.0.0', 'all');
	wp_enqueue_style('web-minicolors');
	wp_localize_script('web-jquery', 'directory', array( 'url' => get_template_directory_uri() ));
	//echo $current_;
	if('toplevel_page_my_theme' == $current_){
		wp_register_script('web-editor', 'https://cdn.ckeditor.com/4.7.3/basic/ckeditor.js', '4.7.3', false);
		wp_enqueue_script('web-editor');
		wp_localize_script('web-jquery', 'directory', array( 'url' => get_template_directory_uri() ));
	}else if(
		$css !== false
	){
			wp_enqueue_script('ace', get_template_directory_uri() . '/inc/js/libs/ace/ace.js', array('jquery'), '1.2.8', true );
			wp_enqueue_script('custom-css', get_template_directory_uri() . '/inc/js/custom-css.admin.js', array('jquery'), '1.0.0', true);
			wp_register_script('web-jquery', get_template_directory_uri() . '/inc/js/jquery.min.js', '1.0.0', true);
			wp_enqueue_script('web-jquery');
			wp_enqueue_style('ace', get_template_directory_uri() . '/inc/css/ace.css', array(), '1.0.0', 'all');
			function wpdocs_dequeue_script_main() {
			   wp_dequeue_script( 'web-select-script' );
			}
			add_action( 'wp_print_scripts', 'wpdocs_dequeue_script_main', 100 );
			function wpdocs_dequeue_script_select() {
			   wp_dequeue_script( 'web-select-admin' );
			}
			add_action( 'wp_print_scripts', 'wpdocs_dequeue_script_select', 100 );
		}else{return;};
	}
add_action ('admin_enqueue_scripts', 'web_load_admin_scripts');
