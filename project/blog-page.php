<?php
    /*
    Template Name: Blog
    */

get_header(); ?>
<div class="blog-page">
    <div class="row">
        <div class="container">
            <main id="main">

          <?php
            $blog_posts = new WP_Query( array( 'category_name' => 'blog' ) );
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            if ( $blog_posts->have_posts() ) : while ( $blog_posts->have_posts() ) : $blog_posts->the_post();?>

                <article class="article">
                    <div class="section-title text-center">
                        <h2 class="heading"><?php the_title(); ?></h2>
                    </div>
                <div class="media">
                     <?php if ( has_post_thumbnail() ) :?>
                    <div class="media-img"><?php the_post_thumbnail(array(360, 230)); ?>
                        <div class="date">
                            <p class="day"><?php the_date('d') ?></p>
                            <p class="month"><?php echo get_the_date('m/Y'); ?></p>
                        </div>
                      <?php endif;?>
                        <div class="media-body">
                            <?php the_content(); ?>
                        </div><!-- media-body-area -->
                        <a href="<?php the_permalink() ?>" class="permalink button"><?php _e('Learn more','webove');?></a>
                    </div><!-- media-area -->
                </article>

            <?php
                endwhile; else: endif;?>
           <!-- Paginaton -->
            <div class="pagination-wrapper">
              <div class="pagination">
              <?php 
                $pagination_args = array(
                  'total'           => $blog_posts->max_num_pages,
                  'current'         => $paged,
                  'show_all'        => true,
                  'end_size'        => 1,
                  'mid_size'        => 2,
                  'prev_next'       => true,
                  'prev_text'       => __( 'Prev', 'webove' ),
                  'next_text'       => __( 'Next', 'webove' ),
                  'type'            => 'plain',
                  'add_args'        => false,
                  'add_fragment'    => ''
                  );
                 echo paginate_links( $pagination_args ); 
                 ?>
                </div><!-- End Pagination -->
            </div><!-- End Pagination Wrapper -->


            </main><!-- .site-main -->
            <?php get_sidebar(); ?>
        </div><!-- .container-area -->
    </div><!-- .row-area -->
</div>    

<?php get_footer(); ?>
