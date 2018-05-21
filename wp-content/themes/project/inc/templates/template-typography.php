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
                foreach($admin_settings['typographys'] as $typography){
                    echo '<tr>';
                    echo '<th>'.$typography['title'].'<p class="description">'.$typography['desc'].'</p></th>';
                    foreach($typography['settings'] as $settings){
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
       foreach($admin_settings['typographys'] as $typography){
        foreach($typography['settings'] as $settings){
            echo $settings['id'].', ';
        }
    }
    ?>
    " />

    <?php submit_button(); 
    ?>  

</form>
</div>