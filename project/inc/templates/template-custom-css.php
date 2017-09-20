<h1>Custom css</h1>
<form method="post" action="options.php" class="web-form-css-form">
<?php settings_errors(); ?> 

	<!-- settings_fields(name of setting you registered(input))-->
	<?php settings_fields('custom-css-settings'); ?>
	<!-- do_settings_section(calling settings you created on line 44) -->
	<?php do_settings_sections('my_theme_css'); ?>
	<?php submit_button('Save Changes', 'primary', 'btnSubmit'); ?>
	
</form>