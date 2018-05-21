<?php get_header(); ?>
<!-- Content -->
<div class="blog-page">
    <div class="row single-page">
        <div class="container">
            <main class="col-sm-8">
                <!-- Article -->
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <?php get_template_part('template-parts/content') ?>
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
