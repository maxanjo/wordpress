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
	add_submenu_page( 'my_theme', 'Webove Social', 'Social', 'manage_options', 'my_theme_social', 'Webove_theme_setting_page' );

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
function Webove_theme_setting_page()
{
	require_once( get_template_directory() . '/inc/templates/template-social.php');
};

// Hook for admin menu
add_action ('admin_menu', 'web_add_admin_page' );

// Custom_Settings
function webove_custom_settings(){
	// add_settings_section(id of section, title, Section_function, slug of page(where you want these setting))
	add_settings_section('webove-general-options', 'General Options', 'webove_general_options', 'my_theme');

	//register_setting(name of setting, name of input)
	register_setting('options_settings', 'web_logo_picture');
	register_setting('options_settings', 'web_logo_footer');
	register_setting('options_settings', 'web_favicon_picture');
	register_setting('options_settings', 'web_copyright');

	//add_settings_field(id, label, Setting_field_function, $slug of page, id of section)
	//Logo
	add_settings_field('general-logo', 'Logo', 'webove_general_logo', 'my_theme', 'webove-general-options');
	//Logo Footer
	add_settings_field('general-logo-footer', 'Footer Logo', 'webove_general_logo_footer', 'my_theme', 'webove-general-options');
	//Favicon
	add_settings_field('general-favicon', 'Favicon', 'webove_general_favicon', 'my_theme', 'webove-general-options');
	//Favicon
	add_settings_field('general-copyright', 'Copyright text', 'webove_general_copyright', 'my_theme', 'webove-general-options');


// Section_function
function webove_general_options(){
	echo 'Customize Your General Information';
}

//Setting_field_function (input)

function webove_general_logo(){
	$logo_picture = esc_attr( get_option( 'web_logo_picture'));
	echo '
	<div class="web-logo-preview">
		<div id="web-logo" class="web-logo" style="background-image: url('. $logo_picture .') ">
		</div>
	</div>
	<input type="button" value="Upload Logo" class="button button-secondary" id="upload-button-logo">
	<input type="hidden" id="logo-picture" name="web_logo_picture" value="' . $logo_picture . '" >';
}

function webove_general_logo_footer(){
	$logo_footer = esc_attr( get_option( 'web_logo_footer'));
	echo '
	<div class="web-logo-preview">
		<div id="web-logo-footer" class="web-logo-footer" style="background-image: url('. $logo_footer .') ">
		</div>
	</div>
	<input type="button" value="Upload Footer Logo" class="button button-secondary" id="upload-button-logo-footer">
	<input type="hidden" id="logo-footer" name="web_logo_footer" value="' . $logo_footer . '" >';
}

function webove_general_favicon(){
	$favicon_picture = esc_attr( get_option( 'web_favicon_picture'));
	echo '
		<div class="web-favicon-preview">
			<div class="web-favicon" id="web-favicon" style="background-image: url('. $favicon_picture .') "></div>
		</div>
		<input type="button" value="Upload Favicon" class="button button-secondary" id="upload-button-favicon">
		<input type="hidden" id="favicon-picture" name="web_favicon_picture" value="' . $favicon_picture . '" >
		<p class="description">Load a favicon icon: 16x16, 32x32, or 48x48</p>
		';
}



function webove_general_copyright(){
	$copyright = get_option('web_copyright');
	echo '<textarea rows="8"  class="copyright-text"  name="web_copyright" value="' . $copyright . '" >' . $copyright . '</textarea>';
}
}
