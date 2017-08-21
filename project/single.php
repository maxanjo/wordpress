<?php get_header(); ?>
<!-- Content -->
<div class="row single-page">
    <div class="container">
        <main class="col-sm-8">

            <!-- Blog Caption -->
            <div class="blog-single-caption">
                <a class="backblog" href="<?php echo home_url(); ?>/blog"><?php _e('&lt; Back to the Blog','aletheme'); ?></a>
            </div>

            <!-- Article -->
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <article class="media">
                    <?php the_content() ?>
                </article>
            <?php endwhile; else: ?>
            <?php endif; ?>
            <?php comments_template(); ?>
        </main>
        
        <!-- Sidebar -->
        <aside class="col-sm-4">
            <?php get_sidebar() ?>
        </aside>
    </div>
</div>

<?php get_footer(); ?>
