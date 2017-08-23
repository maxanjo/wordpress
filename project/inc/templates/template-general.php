<form method="post" action="options.php" class="web-form-general-form">
<?php settings_errors(); ?> 

	<!-- settings_fields(name of setting you registered(input))-->
	<?php settings_fields('options_settings'); ?>
	<!-- do_settings_section(calling settings you created on line 44) -->
	<?php do_settings_sections('my_theme'); ?>
	<?php submit_button('Save Changes', 'primary', 'btnSubmit'); ?>
</form>
