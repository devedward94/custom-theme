<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FischerReDavid
 */

get_header('inner');
?>
<?php get_template_part('template-parts/page/ip-atf','inner'); ?>
	  <!-- ip atf detail starts -->
        <section class="ip-detail-outer ip-blog-detail-outer">
            <div class="ip-inner">
                <!-- ip left starts here -->
                <div class="ip-left blog-outer">
                    <div class="ip-general-top flex space-between wrap align-start">
                        <div class="breadcrumb-inner blog-content-inner">
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                      yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );
                    }
                    ?>
                    
                </div>
                        <span class="ip-gen-date"><?php echo date('F j, Y'); ?></span>
                    </div>
                    <h1><?php single_post_title(); ?></h1>
                    <div class="blog-detail-row">
                        <?php
                            if ( have_posts() ) :
                            while ( have_posts() ) :
                            the_post();
                            ?>
                         <?php get_template_part('template-parts/post/content','post'); ?>
                        <?php endwhile; endif; ?>
                        
                    </div>
                </div>

                <!-- ip left ends here -->

                <!-- ip asidebar starts here -->
                <aside class="ip-asidebar">
                    <?php get_sidebar(); ?>
                </aside>
                <!-- ip asidebar ends here -->
                <div class="pagination">
                    <div class="pagination-inner">
                    <?php
                    global $wp_query;
                    $total_pages = $wp_query->max_num_pages; 
                    if ($total_pages > 1){ 
                      $current_page = max(1, get_query_var('paged'));
                      echo paginate_links(array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => '/page/%#%',
                        'current' => $current_page,
                        'total' => $total_pages,
                        'prev_text'    => __('<span class="read-prev">Previous</span>'),
                        'next_text'    => __('<span class="read-next">Next</span>'),
                      ));
                    }
              ?>
          </div>
              </div>
            </div>
        </section>
        <!-- ip atf detail ends -->

<?php

get_footer();