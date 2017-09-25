<?php
get_header(); ?>


<div class="blog-page">
    <div class="row">
        <div class="container">
            <main id="main">
                <?php if ( have_posts() ) : 
          // Start the loop.
                while ( have_posts() ) : the_post();?>
                <?php get_template_part('template-parts/content') ?>
          <?php endwhile;?>
          <div class="pagination-wrapper">
            <div class="pagination">
              <?php the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'webove' ),
                'next_text'          => __( 'Next page', 'webove' ),

                ) );?>
              </div>
            </div>
          <?php else :
          echo '<div class="search-fail"><h2>' . __('Nothing found','webove') . '</h2>';
          echo '<p>' . __('Sorry, but nothing matched your search criteria. Please type again with some different keywords','webove') . '</p></div>';

          endif;
          ?>

            </main><!-- .site-main -->
            <?php get_sidebar() ?>
        </div><!-- .content-area -->
    </div><!-- .row-area -->
</div>
<?php get_footer(); ?>
