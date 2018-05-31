<?php
include( get_template_directory() . '/template-parts/options.php');
?>
 </div>
<footer>
    <div class="container">
        <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'id' => ''
            )) ?>
    </div><!-- container-area -->
</footer>
<?php wp_footer() ?>

</body>
</html>
