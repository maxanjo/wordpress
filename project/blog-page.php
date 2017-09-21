<?php
    /*
    Template Name: Blog
    */
    get_header(); ?>
    <!-- Content -->    
    <div class="row">
      <div class="container">
        <main class="col-sm-8">
          <?php
     // set the "paged" parameter (use 'page' if the query is on a static front page)
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
     // the query
          $the_query = new WP_Query( 'category_name=blog&paged=' . $paged ); 
          ?>
          <?php if ( $the_query->have_posts() ) : ?>
            <?php
     // the loop
            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <article class="article">
              <div class="section-title text-center">
                <div class="h2" ><?php the_title(); ?></div>
              </div>
              <div class="media">
                <div class="media-img"><?php the_post_thumbnail(array(100, 100)); ?></div>
                <div class="media-body">
                  <?php the_content(); ?>
                </div>
                <a href="<?php the_permalink() ?>" class="permalink">Learn more</a>
              </div>
            </article>
          <?php endwhile; else: ?>
        <?php endif; ?>

        <!-- Paginaton -->
        <div class="pagination">
        <?php 
          $pagination_args = array(
            'total'           => $the_query->max_num_pages,
            'current'         => $paged,
            'show_all'        => true,
            'end_size'        => 1,
            'mid_size'        => 2,
            'prev_next'       => true,
            'prev_text'       => __( 'Prev', 'Theme' ),
            'next_text'       => __( 'Next', 'Theme' ),
            'type'            => 'plain',
            'add_args'        => false,
            'add_fragment'    => ''
            );
           echo paginate_links( $pagination_args ); 
           ?>
          </div>
        </main>
        <?php get_sidebar(); ?>
      </div>
    </div>
    <?php get_footer(); ?>
