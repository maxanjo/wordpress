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
    <!--build:js scripts/vendor.min.js-->
    <script src="<?php echo get_template_directory_uri() ?>/scripts/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/scripts/selectivizr-min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/scripts/jquery.easy-pie-chart.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/scripts/jquery.easing.1.3.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/scripts/jquery.countdown.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/scripts/noframework.waypoints.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/scripts/jquery.scrollTo-1.4.3.1.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/scripts/jquery.parallax-1.1.3.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/scripts/jquery.localscroll-1.2.7-min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/scripts/jquery.nicescroll.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/scripts/animate-css.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/scripts/owl.carousel.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/scripts/jquery.parallax-scroll.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/scripts/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/scripts/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/scripts/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/scripts/odometer.js"></script>
    <!--endbuild-->
    <script src="<?php echo get_template_directory_uri() ?>/scripts/common.js"></script>
    
    <script>
      function loadCss(hf){
        var ms=document.createElement("link"); ms.rel="stylesheet";ms.href=hf;document.getElementsByTagName("body")[0].appendChild(ms);
    }
    loadCss ("css/vendor.min.css");
    loadCss ("css/main.min.css");
</script>
<?php wp_footer() ?>

</body>
</html>