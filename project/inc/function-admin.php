<?php
/*
==================
      ADMIN PAGE
==================
*/

function web_add_admin_page(){
	add_menu_page('Webove Theme options', 'Webove', 'manage_options', 'Webove-panel', 'Webove_theme_create_page', get_template_directory_uri() . '/img/icons/Webove-icon.png',  110);
	add_submenu_page( 'Webove-panel', 'Webove Theme Options', 'General', 'manage_options', 'Webove-panel', 'Webove_theme_create_page' );
	add_submenu_page( 'Webove-panel', 'Webove Css Options', 'Custom Css', 'manage_options', 'Webove-panel_css', 'Webove_theme_setting_page' );
}
add_action ('admin_menu', 'web_add_admin_page' );

function Webove_theme_create_page(){
	echo '<h1>Webove Theme Options </h1>';
	require_once( get_template_directory() . '/inc/templates/template-general.php');
}
function Webove_theme_setting_page(){
	echo '<h1>Webove Custom Css</h1>';
}
