<?php
get_header(); ?>



<div class="row">
    <div class="container">
        <main id="main">
            <?php if ( have_posts() ) : 
      // Start the loop.
            while ( have_posts() ) : the_post();?>
            <article class="article">
                <div class="section-title text-center">
                    <div class="h2" ><?php the_title(); ?></div>
                </div>
                <div class="media">
                    <div class="media-img"><?php the_post_thumbnail(array(100, 100)); ?></div>
                    <div class="media-body">
                        <?php the_content(); ?>
                    </div>
                    <a href="<?php the_permalink() ?>" class="permalink"><?php _e('Learn more','webove'); ?></a>
                </div>
            </article>

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

<?php get_footer(); ?>
