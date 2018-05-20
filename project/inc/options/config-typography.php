<?php
require( get_template_directory() . '/inc/general.php');
$config_typography =array(
		array(
			'title' => __('Font Body settings','webove'),
			'desc'=>__('Choose a font family, a size and a color','webove'),
			'settings'=>array(
				array(
					'type'=>'web_search_select',
					'id' => 'web_font_family',
					'label'=> __('Font Family','webove'),
					'options'=> $googleFonts
				),
				array(
					'type'=>'web_number',
					'id' => 'web_font_size',
					'label'=> __('Font Size','webove'),
					'placeholder' => '14px'
				),
				array(
					'type'=>'web_color',
					'id' => 'web_font_color',
					'label'=> __('Font Color','webove')
				)
			)
		),
		array(
			'title' => __('Enable default body font','webove'),
			'settings' => array(
				array(
					'type'=>'web_checkbox',
					'id'=>'web_default_body_font'
				)
			)
		),
		array(
			'title' => __('Heading h1 settings','webove'),
			'desc'=>__('Choose h1 heading family, size and color','webove'),
			'settings'=>array(
				array(
					'type'=>'web_search_select',
					'id' => 'web_heading_h1_family',
					'label'=> __('Heading h1 Family','webove'),
					'options'=> $googleFonts
				),
				array(
					'type'=>'web_number',
					'id' => 'web_heading_h1_size',
					'label'=> __('Heading h1 Size','webove'),
					'placeholder' => '14px'
				),
				array(
					'type'=>'web_color',
					'id' => 'web_heading_h1_color',
					'label'=> __('Heading h1 Color','webove')
				)
			)
		),
		array(
			'title' => __('Heading h3 settings','webove'),
			'desc'=>__('Choose h3 heading family, size and color','webove'),
			'settings'=>array(
				array(
					'type'=>'web_search_select',
					'id' => 'web_heading_h3_family',
					'label'=> __('Heading h3 Family','webove'),
					'options'=> $googleFonts
				),
				array(
					'type'=>'web_number',
					'id' => 'web_heading_h3_size',
					'label'=> __('Heading h3 Size','webove'),
					'placeholder' => '14px'
				),
				array(
					'type'=>'web_color',
					'id' => 'web_heading_h3_color',
					'label'=> __('Heading h3 Color','webove')
				)
			)
		),
		array(
			'title' => __('Heading h5 settings','webove'),
			'desc'=>__('Choose h5 heading family, size and color','webove'),
			'settings'=>array(
				array(
					'type'=>'web_search_select',
					'id' => 'web_heading_h5_amily',
					'label'=> __('Heading h5 Family','webove'),
					'options'=> $googleFonts
				),
				array(
					'type'=>'web_number',
					'id' => 'web_heading_h5_size',
					'label'=> __('Heading h5 Size','webove'),
					'placeholder' => '14px'
				),
				array(
					'type'=>'web_color',
					'id' => 'web_heading_h5_color',
					'label'=> __('Heading h5 Color','webove')
				)
			)
		),
		array(
			'title' => __('Enable default heading fonts','webove'),
			'settings' => array(
				array(
					'type'=>'web_checkbox',
					'id'=>'web_default_heading'
				)
			)
		)
	);