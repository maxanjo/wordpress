<aside class="blog-sidebar">
    <?php if ( is_active_sidebar( 'sidebar_first' ) ) : ?>
        <div id="blog_sidebar" class="sidebar">
            <?php dynamic_sidebar( 'sidebar_first' ); ?>
        </div>
    <?php endif; ?>
</aside>