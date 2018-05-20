<?php
$config_options = array(
		array(
			'title' => __('Main color','webove'),
			'desc' => __('Choose main color of your theme ', 'webove'),
			'settings'=>array(
				array(
					'type'=>'web_color',
					'id' => 'web_main_color',
					)
				)
			),
		array(
			'title' => __('Secondary color','webove'),
			'desc' => __('Choose secondary color of your theme ', 'webove'),
			'settings'=>array(
				array(
					'type'=>'web_color',
					'id' => 'web_second_color',
					)
				)
			),
		array(
			'title' => __('Buttons settings','webove'),
			'desc' => __('Choose style of your buttons ', 'webove'),
			'settings'=>array(
				array(
					'type'=>'web_search_select',
					'label' => __('Font Family','webove'),
					'id' => 'web_buttons_family',
					'options'=>$googleFonts
					),
				array(
					'type'=>'web_number',
					'label' => __('Font Size','webove'),
					'id' => 'web_buttons_size',
					'placeholder'=>'15px'
					),
				array(
					'type'=>'web_color',
					'label' => __('Font Color','webove'),
					'id' => 'web_buttons_color'
					)
				)
			),
		array(
			'title' => __('Background','webove'),
			'desc' => __('Choose background ', 'webove'),
			'settings'=>array(
					array(
					'type'=>'web_file',
					'label' => __('Background Image','webove'),
					'id' => 'web_bg_image',
					'button' => __('Choose Backgroung','webove')
					),
					array(
						'type'=> 'web_select',
						'label'=> __('Background Position','webove'),
						'id' => 'web_bg_position',
						
						'options'=>array(
							'left top' => 'Left Top',
							'left center'=>'Left Center',
							'left bottom'=>'left Bottom',
							'right top'=>'Right Top',
							'right center'=>'Right Center',
							'right bottom'=>'Right Botton',
							'center top'=>'Center Top',
							'center center'=>'Center Center',
							'center bottom'=>'Center Bottom'
							)
					),
					array(
						'type'=> 'web_select',
						'id' => 'web_bg_repeat',
						'label'=> __('Background Repeat','webove'),
						'options'=>array(
							'repeat' => 'Repeat',
							'repeat-x'=>'Repeat horizontally',
							'repeat-y'=>'Repeat vertically',
							'no-repeat'=>'No repeat'
							)
					)
				)
			),
		array(
			'title' => __('Background Color','webove'),
			'settings'=>array(
				array(
						'type'=> 'web_color',
						'id' => 'web_bg_color',
						'label'=> __('Background color','webove'),
					)
				)
			)
		);