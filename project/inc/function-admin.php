<?php
/*
@package we|bove theme
===================
      ADMIN PAGE
===================
*/
define('SITE_NAME', 'Webove');

function web_add_admin_page(){

	//Generate Webove Admin Page
	//add_menu_page(title in browser, title in menu, access, page link(slug), Html or call function(in my case Webove_theme_create_page() ), icon, position)
	add_menu_page('Webove Theme Options', SITE_NAME, 'manage_options', 'my_theme', 'Webove_theme_create_page',  get_template_directory_uri() . '/inc/img/admin-icon.png',  110);

	//Generate Webove Admin Sub Pages
	//add_submenu_page(page link(slug) of menu you want it to be sub, title in browser, title in menu, access,  page link(slug), html or call function )
	//First sub(general) should be copy of main menu
 	add_submenu_page( 'my_theme', __('General options','webove'), __('General','webove'), 'manage_options', 'my_theme', 'Webove_theme_create_page' );
	add_submenu_page( 'my_theme',__('Social options','webove'), __('Social','webove'), 'manage_options', 'my_theme_social', 'Webove_theme_setting_page' );
	add_submenu_page( 'my_theme', __('Custom css','webove'), __('Custom Css','webove'), 'manage_options', 'my_theme_css', 'Webove_custom_css_page' );
	add_submenu_page( 'my_theme', __('Theme Options', 'webove'), __('Theme Options', 'webove'), 'manage_options', 'my_theme_additional', 'Webove_custom_additional_page' );

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
function Webove_theme_setting_page()
{
	require_once( get_template_directory() . '/inc/templates/template-social.php');
};
function Webove_custom_additional_page()
{
	require_once( get_template_directory() . '/inc/templates/template-additional.php');
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
	add_settings_section('webove-general-options', __('General Options', 'webove'), 'webove_general_options', 'my_theme');
	add_settings_section('webove-general-css', __('Css Options', 'webove'), 'webove_general_css_page', 'my_theme_css');

	//register_setting(name of setting, name of input)
	register_setting('options_settings', 'web_logo_picture');
	register_setting('options_settings', 'web_logo_footer');
	register_setting('options_settings', 'web_favicon_picture');
	register_setting('options_settings', 'web_copyright');
	register_setting('custom-css-settings', 'web_custom_css', 'web_sunitize_custom_css');

	//add_settings_field(id, label, Setting_field_function, $slug of page, id of section)
	//Custom css
	add_settings_field('general-css', __('insert your Custom Css', 'webove'), 'webove_general_css', 'my_theme_css', 'webove-general-css');
	//Logo
	add_settings_field('general-logo', __('Logo', 'webove'), 'webove_general_logo', 'my_theme', 'webove-general-options');
	//Logo Footer
	add_settings_field('general-logo-footer', __('Footer Logo', 'webove'), 'webove_general_logo_footer', 'my_theme', 'webove-general-options');
	//Favicon
	add_settings_field('general-favicon', __('Favicon', 'webove'), 'webove_general_favicon', 'my_theme', 'webove-general-options');
	//Favicon
	add_settings_field('general-copyright', __('Copyright text', 'webove'), 'webove_general_copyright', 'my_theme', 'webove-general-options');


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


function webove_general_logo(){
	$logo_picture = esc_attr( get_option( 'web_logo_picture'));
	echo '
	<div class="web-logo-preview">
		<div id="web-logo" class="web-logo" style="background-image: url('. $logo_picture .') ">
		</div>
	</div>
	<input type="button" value="' . __('Upload a Logo','webove') . '" class="button button-secondary" id="upload-button-logo">
	<input type="button" value="' . __('Remove Logo','webove') . '" class="button button-danger remove-logo" id="remove-button-logo">
	<input type="hidden" id="logo-picture" name="web_logo_picture" value="' . $logo_picture . '" >';
}

function webove_general_logo_footer(){
	$logo_footer = esc_attr( get_option( 'web_logo_footer'));
	echo '
	<div class="web-logo-preview">
		<div id="web-logo-footer" class="web-logo-footer" style="background-image: url('. $logo_footer .') ">
		</div>
	</div>
	<input type="button" value="' . __('Upload a Footer Logo','webove') .'" class="button button-secondary" id="upload-button-logo-footer">
	<input type="button" value="' . __('Remove Footer Logo','webove') .'" class="button button-secondary remove-logo-footer button-danger">
	<input type="hidden" id="logo-footer" name="web_logo_footer" value="' . $logo_footer . '" >
	<p class="description">' . __('If your theme support footer logo, please upload it here', 'webove') . '</p>
	';

}

function webove_general_favicon(){
	$favicon_picture = esc_attr( get_option( 'web_favicon_picture'));
	echo '
		<div class="web-favicon-preview">
			<div class="web-favicon" id="web-favicon" style="background-image: url('. $favicon_picture .') "></div>
		</div>
		<input type="button" value="' . __('Upload a Favicon','webove') . '" class="button button-secondary" id="upload-button-favicon">
		<input type="button" value="'. __('Remove Favicon', 'webove') . '" class="button  button-secondary button-danger remove-favicon" id="remove-button-favicon">
		<input type="hidden" id="favicon-picture" name="web_favicon_picture" value="' . $favicon_picture . '" >
		<p class="description">' . __('Load a favicon icon: 16x16, 32x32, or 48x48', 'webove') . '</p>
		';
}

function webove_general_copyright(){
	$copyright = get_option('web_copyright');
	echo '<textarea rows="8"  class="copyright-text"  name="web_copyright" value="' . $copyright . '" >' . $copyright . '</textarea>';
}

// Sunitization
function web_sunitize_custom_css($input){
$output = esc_textarea($input);
return $output;
}
}
