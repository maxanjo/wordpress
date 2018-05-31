<?php

// Register Scripts

add_action('wp_enqueue_scripts', 'no_more_jquery');
function no_more_jquery(){
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/assets/scripts/jquery.min.js', array(), '2.1.3', false);
	wp_enqueue_script('jquery');
}

function custom_front_scripts(){
	wp_register_script('ajax-search', get_template_directory_uri() . '/assets/scripts/ajax-search.js', array('jquery'), '1', true);
	wp_register_script('easy-pie-chart', get_template_directory_uri() . '/assets/scripts/jquery.easy-pie-chart.js', array('jquery'), '1.6.3', true);
	wp_register_script('easing', get_template_directory_uri() . '/assets/scripts/jquery.easing.1.3.js', array('jquery'), '1.3', true);
	wp_register_script('countdown', get_template_directory_uri() . '/assets/scripts/jquery.countdown.js', array('jquery'), '2.1.0', true);
	wp_register_script('waypoints', get_template_directory_uri() . '/assets/scripts/noframework.waypoints.js', array('jquery'), '2.0.5', true);
	wp_register_script('scrollTo', get_template_directory_uri() . '/assets/scripts/jquery.scrollTo-1.4.3.1.js', array('jquery'), '1.4.3.1', true);
	wp_register_script('parallax', get_template_directory_uri() . '/assets/scripts/jquery.parallax-1.1.3.js', array('jquery'), '1.1.3', true);
	wp_register_script('localscroll', get_template_directory_uri() . '/assets/scripts/jquery.localscroll-1.2.7-min.js', array('jquery'), '1.2.7', true);
	wp_register_script('nicescroll', get_template_directory_uri() . '/assets/scripts/jquery.nicescroll.min.js', array('jquery'), '3.2.0', true);
	wp_register_script('animate-css', get_template_directory_uri() . '/assets/scripts/animate-css.js', array('jquery', 'waypoints'), '1', true);
	wp_register_script('owl', get_template_directory_uri() . '/assets/scripts/owl.carousel.js', array('jquery'), '2.0.0', true);
	wp_register_script('parallax-scroll', get_template_directory_uri() . '/assets/scripts/jquery.parallax-scroll.js', array('jquery'), '1', true);
	wp_register_script('themepunch', get_template_directory_uri() . '/assets/scripts/jquery.themepunch.tools.min.js', array('jquery'), '4.6.4', true);
	wp_register_script('themepunchtools', get_template_directory_uri() . '/assets/scripts/jquery.themepunch.tools.min.js', array('jquery'), '1', true);
	wp_register_script('themepunchrevolution', get_template_directory_uri() . '/assets/scripts/jquery.themepunch.revolution.min.js', array('jquery', 'themepunchtools'), '4.6.4', true);
	wp_register_script('magnific-popup', get_template_directory_uri() . '/assets/scripts/jquery.magnific-popup.min.js', array('jquery'), '0.9.9', true);
	wp_register_script('odometer', get_template_directory_uri() . '/assets/scripts/odometer.js', array('jquery'), '1', true);
	wp_register_script('common-main', get_template_directory_uri() . '/assets/scripts/common.js', array('jquery'), '1', true);

	// Enqueue Scripts

	wp_enqueue_script('ajax-search');
	wp_enqueue_script('easy-pie-chart');
	wp_enqueue_script('easing');
	wp_enqueue_script('countdown');
	wp_enqueue_script('waypoints');
	wp_enqueue_script('scrollTo');
	wp_enqueue_script('parallax');
	wp_enqueue_script('localscroll');
	wp_enqueue_script('nicescroll');
	wp_enqueue_script('animate-css');
	wp_enqueue_script('owl');
	wp_enqueue_script('parallax-scroll');
	wp_enqueue_script('themepunchtools');
	wp_enqueue_script('themepunchrevolution');
	wp_enqueue_script('magnific-popup');
	wp_enqueue_script('odometer');
	wp_enqueue_script('common-main');

}


// Register Styles

function custom_front_styles(){
	wp_register_style('owl', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1', all );
	wp_register_style('odometer', get_template_directory_uri() . '/assets/css/odometer-theme-car.css', array(), '1', all );
	wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1', all );
	wp_register_style('settings', get_template_directory_uri() . '/assets/css/settings.css', array(), '5.0', all );
	wp_register_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1', all );
	wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '3.3.6', all );
	wp_register_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), '1', all );
	wp_register_style('header', get_template_directory_uri() . '/assets/css/header.css', array(), '1', all );
	wp_register_style('main-theme', get_template_directory_uri() . '/assets/css/main.css', array('bootstrap'), '1', all );


// Enqueue Styles

	wp_enqueue_style('odometer');
	wp_enqueue_style('owl');
	wp_enqueue_style('animate');
	wp_enqueue_style('settings');
	wp_enqueue_style('magnific-popup');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('fonts');
	wp_enqueue_style('main-theme');
}




// Localize Scripts

wp_localize_script('ajax-search', 'search_form', array(
	'url'=>admin_url('admin-ajax.php'),
	'nonce'=>wp_create_nonce('search-nonce')
));


add_action ('wp_enqueue_scripts', 'custom_front_scripts');
add_action ('wp_enqueue_scripts', 'custom_front_styles');