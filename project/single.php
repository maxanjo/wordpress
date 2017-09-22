<?php get_header(); ?>
<!-- Content -->
<div class="blog-page">
    <div class="row single-page">
        <div class="container">
            <main class="col-sm-8">
                <!-- Article -->
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <article class="article">
                      <div class="section-title text-center">
                         <h2 class="heading"><?php the_title(); ?></h2>
                    </div>
                    <div class="media">
                        <div class="media-img"><?php the_post_thumbnail(array(100, 100)); ?></div>
                        <div class="media-body">
                          <?php the_content(); ?>
                      </div>
                      <a class="backblog button" href="<?php echo home_url(); ?>/blog"><?php _e('Back','webove'); ?></a> 
                  </div><!-- Media-->
              </article>
          <?php endwhile; else: ?>
      <?php endif; ?>
      <?php comments_template(); ?>
            </main><!-- end Main -->

            <!-- Sidebar -->
            <?php get_sidebar() ?>
        </div><!-- end Container -->
    </div><!-- end Row -->
</div>
<?php get_footer(); ?>
