<?php 
require_once( get_template_directory() . '/inc/config.php');
require( get_template_directory() . '/inc/init.php');
?>
<input type="hidden" class="default-color" value="<?php echo $default_color ?>">
<input type="hidden" class="default-second-color" value="<?php echo $default_secondary_color ?>">
<input type="hidden" class="default-button-family" value="<?php echo $default_buttons_family ?>">
<input type="hidden" class="default-button-size" value="<?php echo $default_buttons_size ?>">
<input type="hidden" class="default-button-color" value="<?php echo $default_buttons_color ?>">
<input type="hidden" class="default-background-color" value="<?php echo $default_background_color ?>">
<input type="hidden" class="default-background-position" value="<?php echo $default_background_position ?>">
<input type="hidden" class="default-background-repeat" value="<?php echo $default_background_repeat ?>">

<h2><?php _e('General Options', 'webove') ?></h2>
<p class="header-desc"><?php _e('Customize Your General Information', 'webove')?></p>
<div class="wrap">
    <form method="post" action="options.php" class="web-form">
        <?php wp_nonce_field('update-options') ?>
        <table class="form-table">
            <tbody >
                <?php 
                foreach($admin_settings['options'] as $option){
                    echo '<tr>';
                    echo '<th>'.$option['title'].'<p class="description">'.$option['desc'].'</p></th>';
                    foreach($option['settings'] as $settings){
                       require( get_template_directory() . '/inc/templates/partials/options-admin.php');
                   }
               }
               echo '</tr>';
               ?>


           </tbody>
       </table>
       <input type="hidden" name="action" value="update" />
       <input type="hidden" name="page_options" value="
       <?php 
       foreach($admin_settings['options'] as $option){
        foreach($option['settings'] as $settings){
            echo $settings['id'].', ';
        }
    }
    ?>
    " />

    <?php $other_attributes = array( 'id' => 'form-submit' );

submit_button( 'Save Settings', 'primary', 'save-settings', true, $other_attributes );
    ?>
    <input type="button" value="<?php _e('Default Settings','webove') ?>" class="button button-secondary default-button">

</form>
</div>