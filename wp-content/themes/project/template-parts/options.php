<?php 
$logo = esc_attr( get_option('web_logo'));
$favicon = esc_attr( get_option('web_favicon'));
$font_family_string = esc_attr( get_option('web_font_family'));
$font_family = explode(', ',$font_family_string);
$font_size = esc_attr( get_option('web_font_size'));
$font_color = esc_attr( get_option('web_font_color'));
$heading_h1_family_string = esc_attr( get_option('web_heading_h1_family'));
$heading_h3_family_string = esc_attr( get_option('web_heading_h3_family'));
$heading_h5_family_string = esc_attr( get_option('web_heading_h5_family'));
$heading_h1_family = explode(', ',$heading_h1_family_string);
$heading_h5_family = explode(', ',$heading_h5_family_string);
$heading_h3_family = explode(', ',$heading_h3_family_string);
$heading_h1_size = esc_attr( get_option('web_heading_h1_size'));
$heading_h3_size = esc_attr( get_option('web_heading_h3_size'));
$heading_h5_size = esc_attr( get_option('web_heading_h5_size'));
$heading_h1_color = esc_attr( get_option('web_heading_h1_color'));
$heading_h3_color = esc_attr( get_option('web_heading_h3_color'));
$heading_h5_color = esc_attr( get_option('web_heading_h5_color'));
$custom_css = esc_attr( get_option('web_custom_css'));
$default_heading = esc_attr( get_option('web_default_heading'));
$default_body_font = esc_attr( get_option('web_default_body_font'));
$preload_show = esc_attr( get_option('web_preload_show'));
$preload = esc_attr( get_option('web_preload'));
$buttons_family = esc_attr( get_option('web_buttons_family'));
$preload_transparent = strpos($preload, "transparent");
$footer_logo = esc_attr( get_option('web_footer_logo'));
$bg_image = esc_attr( get_option('web_bg_image'));
$image_transparent = strpos($bg_image, "transparent");
$favicon_transparent = strpos($favicon, "transparent");
$bg_repeat_string = esc_attr( get_option('web_bg_repeat'));
$bg_position_string = esc_attr( get_option('web_bg_position'));
$bg_color = esc_attr( get_option('web_bg_color'));
$bg_repeat = explode(', ', $bg_repeat_string);
$bg_position = explode(', ', $bg_position_string);

?>