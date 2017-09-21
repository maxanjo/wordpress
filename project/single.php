<?php get_header(); ?>
<!-- Content -->
<div class="row single-page">
    <div class="container">
        <main class="col-sm-8">

            <!-- Blog Caption -->
            <div class="blog-single-caption">
                <a class="backblog" href="<?php echo home_url(); ?>/blog"><?php _e('&lt; Back to the Blog','webove'); ?></a>
            </div>

            <!-- Article -->
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <article class="media">
                    <?php the_title(); ?>
                    <?php the_post_thumbnail(array(100, 100)); ?>
                    <?php the_content() ?>
                </article>
            <?php endwhile; else: ?>
            <?php endif; ?>
            <?php comments_template(); ?>
        </main>
        
        <!-- Sidebar -->
            <?php get_sidebar() ?>
    </div>
</div>

<?php get_footer(); ?>
