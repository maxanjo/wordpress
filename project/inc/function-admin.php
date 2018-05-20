<?php
/*
@package we|bove theme
===================
      ADMIN PAGE
===================
*/
include( get_template_directory() . '/inc/init.php');

function web_add_admin_page(){

	//Generate Webove Admin Page
	//add_menu_page(title in browser, title in menu, access, page link(slug), Html or call function(in my case Webove_theme_create_page() ), icon, position)
	add_menu_page('Webove Theme Options', SITE_NAME, 'manage_options', 'my_theme', 'Webove_theme_create_page',  get_template_directory_uri() . '/inc/img/admin-icon.png',  111);

	//Generate Webove Admin Sub Pages
	//add_submenu_page(page link(slug) of menu you want it to be sub, title in browser, title in menu, access,  page link(slug), html or call function )
	//First sub(general) should be copy of main menu
 	add_submenu_page( 'my_theme', __('General options','webove'), __('General','webove'), 'manage_options', 'my_theme', 'Webove_theme_create_page' );
	add_submenu_page( 'my_theme',__('Social options','webove'), __('Social','webove'), 'manage_options', 'my_theme_social', 'Webove_theme_social_page' );
	add_submenu_page( 'my_theme', __('Custom css','webove'), __('Custom Css','webove'), 'manage_options', 'my_theme_css', 'Webove_custom_css_page' );
	add_submenu_page( 'my_theme', __('Theme Options', 'webove'), __('Theme Options', 'webove'), 'manage_options', 'my_theme_options', 'Webove_custom_options_page' );
	add_submenu_page( 'my_theme', __('Typography', 'webove'), __('Typography', 'webove'), 'manage_options', 'my_theme_typography', 'Webove_custom_typography_page' );

	//Activate Custom_Settings
	//add_action(initialization, function name)
	add_action('admin_init', 'webove_custom_settings');
}

// Html for menu page (General)
function Webove_theme_create_page(){
	echo '<h1>' . __('Theme Options','webove') . ' ' . SITE_NAME  . '</h1>';
	require_once( get_template_directory() . '/inc/templates/template-general.php');
}

// Html for Social Page
function Webove_theme_social_page()
{
	require_once( get_template_directory() . '/inc/templates/template-social.php');
};
function Webove_custom_options_page()
{
	require_once( get_template_directory() . '/inc/templates/template-options.php');
};
function Webove_custom_typography_page()
{
	require_once( get_template_directory() . '/inc/templates/template-typography.php');
};
function Webove_custom_test_page()
{
	require_once( get_template_directory() . '/inc/templates/template-test.php');
};
//Css Page
function Webove_custom_css_page()
{
	require_once( get_template_directory() . '/inc/templates/template-custom-css.php');
};

// Hook for admin menu
add_action ('admin_menu', 'web_add_admin_page' );

// Custom_Settings
function webove_custom_settings(){
	// add_settings_section(id of section, title, Section_function, slug of page(where you want these setting))
	add_settings_section('webove-general-css', __('Css Options', 'webove'), 'webove_general_css_page', 'my_theme_css');

	register_setting('custom-css-settings', 'web_custom_css', 'web_sunitize_custom_css');

	//add_settings_field(id, label, Setting_field_function, $slug of page, id of section)
	//Custom css
	add_settings_field('general-css', __('insert your Custom Css', 'webove'), 'webove_general_css', 'my_theme_css', 'webove-general-css');
	


// Section_function
function webove_general_options(){
	echo _e('Customize Your General Information', 'webove');
}
function webove_general_css_page(){
	echo _e('Write your own styles in the form below', 'webove') . ':';
}

//Setting_field_function (input)
function webove_general_css(){
$custom_css = get_option( 'web_custom_css');
$custom_css = (empty($custom_css) ? "/* Theme Custom Css */" : $custom_css);
echo '<div id="aceCss">' . $custom_css . '</div><textarea id="web_custom_css" name="web_custom_css" style="display: none; visibility: hidden;">' . $custom_css . '</textarea>';
}


// Sunitization
function web_sunitize_custom_css($input){
$output = esc_textarea($input);
return $output;
}
}
