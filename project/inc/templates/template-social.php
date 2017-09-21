<?php 
	require_once( get_template_directory() . '/inc/config.php');
	?>
	<h1><?php echo _e('Social options','webove') ?></h1>
		    <div class="wrap">
        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options') ?>


            <?php 
            foreach($options as $option){
            	$text = get_option($option['id']);
            	echo '<table class="form-table"><tbody ><tr>';
            	echo '<th>' . $option['title'] . '</th>';
            	echo '<td><input type="' . $option['type'] . '" id="' . $option['id'] . '" name="' . $option['id'] . '" size="45" value="' . $text . '" /></td>';
            	echo '</tr></tbody></table>';
            };
            ?>
                    <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="<?php foreach($options as $option){echo $option['id'] . ',';}; ?>" />

            <?php submit_button(); 
              ?>	

        </form>
    </div>