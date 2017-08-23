<?php
/*
@package we|bove theme
===================
      ADMIN PAGE
===================
*/

function web_add_admin_page(){
	//Generate Webove Admin Page
	//add_menu_page(title in browser, title in menu, access, page link(slug), Html or call function(in my case Webove_theme_create_page() ), icon, position)
	add_menu_page('Webove Theme options', 'Webove', 'manage_options', 'my_theme', 'Webove_theme_create_page',  get_template_directory_uri() . '/inc/img/admin-icon.png',  110);

	//Generate Webove Admin Sub Pages
	//add_submenu_page(page link(slug) of menu you want it to be sub, title in browser, title in menu, access,  page link(slug), html or call function )
	//First sub(general) should be copy of main menu
 	add_submenu_page( 'my_theme', 'Webove Theme Options', 'General', 'manage_options', 'my_theme', 'Webove_theme_create_page' );
	// add_submenu_page( 'my_theme', 'Webove Css Options', 'Custom Css', 'manage_options', 'my_theme_css', 'Webove_theme_setting_page' );

	//Activate Custom_Settings
	//add_action(initialization, function name)
	add_action('admin_init', 'webove_custom_settings');
}

// Html for menu page (General)
function Webove_theme_create_page(){
	echo '<h1>Webove Theme Options </h1>';
	require_once( get_template_directory() . '/inc/templates/template-general.php');
}

// Html for Custom css page
function Webove_theme_setting_page(){
	echo '<h1>Webove Custom Css</h1>';
}

// Hook for admin menu
add_action ('admin_menu', 'web_add_admin_page' );

// Custom_Settings
function webove_custom_settings(){
	// add_settings_section(id of section, title, Section_function, slug of page(where you want these setting))
	add_settings_section('webove-general-options', 'General Options', 'webove_general_options', 'my_theme');

	//register_setting(name of setting, name of input)
	register_setting('options_settings', 'logo_picture');
	register_setting('options_settings', 'favicon_picture');
	register_setting('options_settings', 'twitter_handler');
	register_setting('options_settings', 'facebook_handler');
	register_setting('options_settings', 'google_handler');
	register_setting('options_settings', 'instagram_handler');
	register_setting('options_settings', 'vk_handler');

	//add_settings_field(id, label, Setting_field_function, $slug of page, id of section)
	//Logo
	add_settings_field('general-logo', 'Logo', 'webove_general_logo', 'my_theme', 'webove-general-options');
	//Favicon
	add_settings_field('general-favicon', 'Favicon', 'webove_general_favicon', 'my_theme', 'webove-general-options');

	//Twitter
	add_settings_field('general-twitter', 'Your twitter', 'webove_general_twitter', 'my_theme', 'webove-general-options');

	// Facebook
	add_settings_field('general-facebook', 'Your facebook', 'webove_general_facebook', 'my_theme', 'webove-general-options');

	// Google
	add_settings_field('general-google', 'Your google', 'webove_general_google', 'my_theme', 'webove-general-options');

	// Instagram
	add_settings_field(
		'general-instagram', '
		Your instagram', 
		'webove_general_instagram', 
		'my_theme',
		 'webove-general-options');
	// Vk
	add_settings_field('general-vk', 'Your vk', 'webove_general_vk', 'my_theme', 'webove-general-options');
}

// Section_function
function webove_general_options(){
	echo 'Customize Your General Information';
}

//Setting_field_function (input)

function webove_general_logo(){
	$logo_picture = esc_attr( get_option( 'logo_picture'));
	echo '
	<div class="web-logo-preview">
		<div id="web-logo" class="web-logo" style="background-image: url('. $logo_picture .') ">
		</div>
	</div>
	<input type="button" value="Upload Logo" class="button button-secondary" id="upload-button-logo">
	<input type="hidden" id="logo-picture" name="logo_picture" value="' . $logo_picture . '" >';
}

function webove_general_favicon(){
	$favicon_picture = esc_attr( get_option( 'favicon_picture'));
	echo '
		<div class="web-favicon-preview">
			<div class="web-favicon" id="web-favicon" style="background-image: url('. $favicon_picture .') "></div>
		</div>
		<input type="button" value="Upload Favicon" class="button button-secondary" id="upload-button-favicon">
		<input type="hidden" id="favicon-picture" name="favicon_picture" value="' . $favicon_picture . '" >
		<p class="description">Load a favicon icon: 16x16, 32x32, or 48x48</p>
		';
}



function webove_general_twitter(){
	$twitter_handler = esc_attr( get_option('twitter_handler'));
	echo '<input type="text" placeholder="Your twitter" name="twitter_handler" value="' . $twitter_handler . '" >';
}
function webove_general_facebook(){
	$facebook_handler = esc_attr( get_option('facebook_handler'));
	echo '<input type="text" placeholder="Your facebook" name="facebook_handler" value="' . $facebook_handler . '" >';
}
function webove_general_google(){
	$google_handler = esc_attr( get_option('google_handler'));
	echo '<input type="text" placeholder="Your google" name="google_handler" value="' . $google_handler . '" >';
}
function webove_general_instagram(){
	$instagram_handler = esc_attr( get_option('instagram_handler'));
	echo '<input type="text" placeholder="Your instagram" name="instagram_handler" value="' . $instagram_handler . '" >';
}
function webove_general_vk(){
	$vk_handler = esc_attr( get_option('vk_handler'));
	echo '<input type="text" placeholder="Your vk" name="vk_handler" value="' . $vk_handler . '" >';
}
