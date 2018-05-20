<?php
$config_generals = array(
		array(
			'title' => __('Logo','webove'),
			'settings'=>array(
				array(
					'type'=>'web_file',
					'id' => 'web_logo',
					'button'=> __('Upload a Logo', 'webove')
				)
			)
		),
		array(
			'title' => __('Footer Logo','webove'),
			'settings'=>array(
				array(
					'type'=>'web_file',
					'id' => 'web_footer_logo',
					'button'=> __('Upload a Footer logo', 'webove'),
					'desc'=>__('If your theme support footer logo, please upload it here', 'webove')
				)
			)
		),
		array(
			'title' => __('Favicon','webove'),
			'settings'=>array(
				array(
					'type'=>'web_file',
					'id' => 'web_favicon',
					'button'=> __('Upload a Favicon','webove'),
					'desc'=>__('Load a favicon: 16x16, 32x32, or 48x48','webove')
				)
			)
		),
		array(
			'title' => __('Show Preload','webove'),
			'settings'=>array(
				array(
					'type'=>'web_checkbox',
					'id' => 'web_preload_show',
				)
			)
		),
		array(
			'title' => __('Gif Preload','webove'),
			'settings'=>array(
				array(
					'type'=>'web_file',
					'id' => 'web_preload',
					'button'=> __('Upload a Preloader','webove'),
					'desc'=>__('Load a gif preloader','webove')
				)
			)
		),
		array(
			'title' => __('Copyright text','webove'),
			'settings'=>array(
				array(
					'type'=>'web_custom_textarea',
					'id' => 'web_copyright',
				)
			)
		)
	);