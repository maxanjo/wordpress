<?php 
require_once( get_template_directory() . '/inc/config.php');
?>
<h2><?php _e('General Options', 'webove') ?></h2>
<p class="header-desc"><?php _e('Customize Your General Information', 'webove')?></p>
<div class="wrap">
    <form method="post" action="options.php" class="web-form">
        <?php wp_nonce_field('update-options') ?>
        <table class="form-table">
            <tbody >
                <?php 
                foreach($admin_settings['socials'] as $social){
                    echo '<tr>';
                    echo '<th>'.$social['title'].'<p class="description">'.$social['desc'].'</p></th>';
                    foreach($social['settings'] as $settings){
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
       foreach($admin_settings['socials'] as $social){
        foreach($social['settings'] as $settings){
            echo $settings['id'].', ';
        }
    }
    ?>
    " />

    <?php submit_button(); 
    ?>  

</form>
</div>