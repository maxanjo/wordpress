<?php
get_header(); ?>
<!-- Content -->    
<div class="row">
  <div class="container">
    <main class="col-sm-8">
      <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
        <article class="article">
          <div class="section-title text-center">
            <div class="h2" ><?php the_title(); ?></div>
          </div>
          <div class="media">
            <div class="media-img"><?php the_post_thumbnail(array(100, 100)); ?></div>
            <div class="media-body">
              <?php the_content(); ?>
            </div>
          </div>
        </article>
      <?php endwhile; else: ?>
    <?php endif; ?>
  </main>
  <?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
