<?php
/*
==================
      ADMIN PAGE
==================
*/

function web_add_admin_page(){
	add_menu_page('Webove menu options', 'Webove', 'manage_options', 'webove', 'webove_theme_create_page', get_template_directory_uri() . '/img/icons/webove-icon.png',  110);
}
add_action ('admin_menu', 'web_add_admin_page' );

function webove_theme_create_page(){

}
