<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package FischerReDavid
 */

get_header('inner');
get_template_part('template-parts/page/ip-atf','inner'); 
?>
<script>
    window.history.pushState("", "", '/notFound');
</script>
 <!-- ip atf detail starts -->
        <section class="ip-detail-outer ip-404-outer">
            <div class="ip-inner">
                <!-- ip-left starts here -->
                <div class="ip-left ip-error">
                    <div class="error-page">
                        <h1><?php the_field('title_error_page','options'); ?></h1>
                        <span class="find-page"><?php the_field('sub_title_error_page','options'); ?></span>
                        <p class="helpful-links"><?php the_field('links_error_page','options'); ?> </p>
                        <ul class="flex align-start wrap space-between">
                            <?php if(have_rows('practice_areas_icons_error','options')):
                        while(have_rows('practice_areas_icons_error','options')):
                        the_row(); ?>
                            <li><a href="<?php the_sub_field('title_link_prac_error','options'); ?>"><?php the_sub_field('title_prac_error','options'); ?></a></li>
                           <?php endwhile; endif; ?>
                        </ul>
                        <div class="blog-404">
                            <h3>Recent Blog Posts</h3>
                            <div class="blog-detail-row">
                                 <?php
                            $default_posts_per_page = get_field( 'posts_per_page', 'options' );
                            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                            $custom_args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 2,
                                'paged' => $paged,
                            );
                            $custom_query = new WP_Query( $custom_args ); 
                            if ( $custom_query->have_posts() ): ?>

                            <!-- the loop -->
                            <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                                <div class="blog-detail flex wrap">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if(has_post_thumbnail()) : the_post_thumbnail(); else: { echo "<img src=".get_template_directory_uri()."/images/blog-placeholder.png"." />";  } endif;?>
                                       
                                        <?php the_title( '<h2>', '</h2>' ); ?>
                                    </a>
                                    <span class="blog-date"><?php echo get_the_date( 'M d, Y' ); ?></span>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="blog-btn">Read More</a>
                                </div>
                               <?php endwhile; endif; wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                </div>                
                <!-- ip left ends here -->

            </div>
        </section>
        <!-- ip atf detail ends -->


<?php
get_footer();