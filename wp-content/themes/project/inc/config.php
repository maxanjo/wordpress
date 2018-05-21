<?php 
require( get_template_directory() . '/inc/general.php');
require( get_template_directory() . '/inc/options/config-options.php');
require( get_template_directory() . '/inc/options/config-socials.php');
require( get_template_directory() . '/inc/options/config-generals.php');
require( get_template_directory() . '/inc/options/config-typography.php');

/* All Types:
 web_select, web_search_select, web_text, web_color, web_number, web_checkbox, web_file, web_custom_textarea*/

/*Example*/
// array(
// 	'title' => 'font body',
// 	'desc'=>'Description',
// 	'settings'=>array(
// 		array(
// 			'type'=>'web_select',
// 			'id' => 'web_font_weight',
// 			'label'=> 'font weight',
// 			'options'=> array(
// 				'bold' => 'Bold',
// 				'normal' => 'Normal'
// 			)
// 		)
// 	)
// ),


$admin_settings = array(
	'options'=> $config_options,
	'socials'=> $config_socials,
	'generals' => $config_generals,
	'typographys'=> $config_typography
);

	