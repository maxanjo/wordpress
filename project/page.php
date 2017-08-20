<?php
    /*
    Template Name: Blog
    */
get_header(); ?>
<!-- Content -->
<div class="container">
    <article class="article">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="section-title text-center">
            <div class="h2" ><?php the_title(); ?></div>
          </div>
            <div class="media">
              <div class="media-body">
                <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; else: ?>
        <?php endif; ?>
    </article>
</div>
<?php get_footer(); ?>