                  <article class="article">
                  <div class="media">
                      <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink() ?>" class="permalink">
                        <div class="media-img"><?php the_post_thumbnail(array(360, 230)); ?>
                        </div>
                      </a>
                      <?php endif;?>
                        <div class="section-title text-center">
                          <h2 class="heading" ><?php the_title(); ?></h2>
                      </div>
                      <div class="media-body">
                        <?php the_content(); ?>
                    </div>
                    <?php if(is_single()) :?>
                    <a class="backblog button" href="<?php echo home_url(); ?>/blog"><?php _e('Back','webove'); ?></a> 
                  <?php else :?>
                    <a href="<?php the_permalink() ?>" class="permalink button"><?php _e('Learn more','webove');?></a>
                  <?php endif; ?>
                </div><!-- Media-->
            </article>
