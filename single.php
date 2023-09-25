<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package FischerReDavid
 */

get_header('inner');
?>
 <?php get_template_part('template-parts/page/ip-atf','inner'); ?>
    <!-- ip atf detail starts -->
        <section class="ip-detail-outer">
            <div class="ip-inner">
           
                <!-- ip left starts here -->
                <div class="ip-left blog-outer ip-left-single">
                  <?php 
                 while(have_posts()):
                    the_post();
                $posttitle = get_the_title();
                $posturl   = get_permalink();
                 ?>
                 
                    <div class="single-share-row flex wrap space-between align-center">
                        <div class="right flex">
                            <span><?php echo get_the_date(get_option('date_format')); ?></span>
                        </div>
                        <div class="left flex wrap align-center">
                            <span>Share</span>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($posturl); ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.634" height="31.868" viewBox="0 0 16.634 31.868">
                                          <path id="facebook_logo" d="M46.273,29.552c.985-.032,1.974,0,2.964,0h.4V24.407c-.529-.056-1.08-.13-1.631-.158-1.013-.045-2.024-.093-3.042-.073a7.429,7.429,0,0,0-4.29,1.329,6.422,6.422,0,0,0-2.577,4.286A14.573,14.573,0,0,0,37.912,32c-.032,1.151,0,2.307,0,3.456v.432H33v5.735h4.886v14.42H43.86V41.645h4.871c.251-1.91.493-3.8.747-5.768H43.816s.013-2.843.052-4.076C43.914,30.12,44.916,29.6,46.273,29.552Z" transform="translate(-33 -24.171)" fill-rule="evenodd"/>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($posttitle); ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="39.157" height="31.873" viewBox="0 0 39.157 31.873">
                                          <path id="twitter_logo" d="M20.394,33.02A8.092,8.092,0,0,1,12.9,27.442a7.961,7.961,0,0,0,3.456-.093c.024,0,.045-.024.114-.045a8.066,8.066,0,0,1-5.23-3.688,7.706,7.706,0,0,1-1.175-4.279,7.822,7.822,0,0,0,3.573.968,8.153,8.153,0,0,1-3.318-4.886,8.051,8.051,0,0,1,.853-5.833A22.979,22.979,0,0,0,27.772,18c-.045-.322-.093-.6-.138-.875a8.034,8.034,0,0,1,6.638-8.9,7.887,7.887,0,0,1,7.053,2.236.432.432,0,0,0,.432.114,16.267,16.267,0,0,0,4.679-1.8.232.232,0,0,1,.114-.045H46.6a8.319,8.319,0,0,1-3.435,4.379,14.94,14.94,0,0,0,4.472-1.2c.024.024.024.024.024.045-.3.415-.6.806-.922,1.2a15.269,15.269,0,0,1-2.927,2.789.289.289,0,0,0-.138.253,23.05,23.05,0,0,1-.138,3.573,23.507,23.507,0,0,1-2.074,7.168A23.011,23.011,0,0,1,37.1,33.279a21.52,21.52,0,0,1-11.058,6.148,24.411,24.411,0,0,1-4.472.529A22.748,22.748,0,0,1,8.684,36.5c-.045-.024-.093-.069-.184-.114a16.418,16.418,0,0,0,8.045-1.106,17.93,17.93,0,0,0,3.85-2.26Z" transform="translate(-8.5 -8.097)" fill-rule="evenodd"/>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h1><?php the_title(); ?></h1>
                    <div class="single-share-row flex wrap space-between align-center mobile">
                        
                        <div class="left flex wrap align-center">
                            <span>Share</span>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($posturl); ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.634" height="31.868" viewBox="0 0 16.634 31.868">
                                          <path id="facebook_logo" d="M46.273,29.552c.985-.032,1.974,0,2.964,0h.4V24.407c-.529-.056-1.08-.13-1.631-.158-1.013-.045-2.024-.093-3.042-.073a7.429,7.429,0,0,0-4.29,1.329,6.422,6.422,0,0,0-2.577,4.286A14.573,14.573,0,0,0,37.912,32c-.032,1.151,0,2.307,0,3.456v.432H33v5.735h4.886v14.42H43.86V41.645h4.871c.251-1.91.493-3.8.747-5.768H43.816s.013-2.843.052-4.076C43.914,30.12,44.916,29.6,46.273,29.552Z" transform="translate(-33 -24.171)" fill-rule="evenodd"/>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($posttitle); ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="39.157" height="31.873" viewBox="0 0 39.157 31.873">
                                          <path id="twitter_logo" d="M20.394,33.02A8.092,8.092,0,0,1,12.9,27.442a7.961,7.961,0,0,0,3.456-.093c.024,0,.045-.024.114-.045a8.066,8.066,0,0,1-5.23-3.688,7.706,7.706,0,0,1-1.175-4.279,7.822,7.822,0,0,0,3.573.968,8.153,8.153,0,0,1-3.318-4.886,8.051,8.051,0,0,1,.853-5.833A22.979,22.979,0,0,0,27.772,18c-.045-.322-.093-.6-.138-.875a8.034,8.034,0,0,1,6.638-8.9,7.887,7.887,0,0,1,7.053,2.236.432.432,0,0,0,.432.114,16.267,16.267,0,0,0,4.679-1.8.232.232,0,0,1,.114-.045H46.6a8.319,8.319,0,0,1-3.435,4.379,14.94,14.94,0,0,0,4.472-1.2c.024.024.024.024.024.045-.3.415-.6.806-.922,1.2a15.269,15.269,0,0,1-2.927,2.789.289.289,0,0,0-.138.253,23.05,23.05,0,0,1-.138,3.573,23.507,23.507,0,0,1-2.074,7.168A23.011,23.011,0,0,1,37.1,33.279a21.52,21.52,0,0,1-11.058,6.148,24.411,24.411,0,0,1-4.472.529A22.748,22.748,0,0,1,8.684,36.5c-.045-.024-.093-.069-.184-.114a16.418,16.418,0,0,0,8.045-1.106,17.93,17.93,0,0,0,3.85-2.26Z" transform="translate(-8.5 -8.097)" fill-rule="evenodd"/>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                     
                    <?php the_content(); ?>
                    <!-- Post Navigatioon -->
                     <div class="pagination post-detail">
                        <nav class="navigation post-navigation" role="navigation" aria-label="Posts">
                            <div class="nav-links">
                                 <div class="nav-previous">
                                 <?php $prev_post = get_previous_post();
                                    if ( ! empty( $prev_post ) ): ?>
                                        <a href="<?php echo get_permalink( $prev_post->ID ); ?>">
                                            <span class="screen-reader-text">Previous</span>
                                        </a>
                                </div>
                                <?php endif; ?>
                                <div class="nav-next">
                                 <?php $next_post = get_next_post();
                                if ( ! empty( $next_post ) ): ?>
                                    <a href="<?php echo get_permalink( $next_post->ID ); ?>">
                                        <span class="screen-reader-text">Next</span>
                                    </a>
                                <?php endif; ?>
                                </div>
                            </div>
                        </nav>
                    </div> 
                    <!-- /.Post Navigatioon -->
                     <?php endwhile; ?>
                </div>
                <!-- ip asidebar starts here -->
                <aside class="ip-asidebar">
                    <?php get_sidebar(); ?>
                </aside>
                <!-- ip asidebar ends here -->
            </div>
        </section>

<?php

get_footer();