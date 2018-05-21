<?php 
include( get_template_directory() . '/template-parts/options.php');
include( get_template_directory() . '/template-parts/heading.php');
?>
<body>
    <?php
    if($preload_show == '1'){
        echo '<div id="loader"></div>';
    }
    ?>
    <div class="content-wrapper">
        <header>
            <menu id="menu" class="default">
                <div class="container">
                    <a href="/">
                        <?php
                        if(isset($logo) and $logo !=='') {?>
                        <div class="logo"><img src="<?php print($logo) ?>" alt="<?php bloginfo('name') ?>"/></div>
                        <?php } ?></a>
                        <div class="bar-mobile">
                            <span class="top"></span>
                            <span class="middle"></span>
                            <span class="bottom"></span>
                        </div>
                        <nav class="main-nav">
                            <?php wp_nav_menu(array(
                              'theme_location' => 'primary',
                              'id' => ''
                              )) ?> 
                          </nav>
                      </div><!-- container-area -->
                  </menu>
              </header>
