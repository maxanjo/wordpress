<?php 
	require_once( get_template_directory() . '/inc/config.php');
	?>
	<h1><?php _e('Theme Options', 'webove') ?></h1>
		    <div class="wrap">
        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options') ?>


            <?php 
            foreach($additionals as $additional){
            	$text = get_option($additional['id']);
            	echo '<table class="form-table"><tbody ><tr>';
            	echo '<th>' . $additional['title'] . '</th>';
            	echo '<td><input type="' . $additional['type'] . '" id="' . $additional['id'] . '" name="' . $additional['id'] . '" size="45" value="' . $text . '" /></td>';
            	echo '</tr></tbody></table>';
            };
            ?>
                    <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="<?php foreach($additionals as $additional){echo $additional['id'] . ',';}; ?>" />

            <?php submit_button(); 
              ?>	

        </form>
    </div>