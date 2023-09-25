<?php
/*
**Template Name: Reviews
*/
get_header('inner');
?>
<?php get_template_part('template-parts/page/ip-atf','inner'); ?> 
  

      <!-- ip atf detail starts -->
        <section class="ip-detail-outer">
            <div class="ip-inner">
                <!-- ip left starts here -->
                <div class="ip-left client-testimonials">

                    <div class="ip-general-top flex space-between wrap align-start">
                        <div class="breadcrumb-inner blog-content-inner">
                            <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                              yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );
                            }
                            ?>
                        </div>
                        <div class="pagedate"><?php echo date("F d, Y");?></div>
                    </div> 


                    <h1><?php the_field('heading_reviews'); ?></h1>
                    <div class="client-testimonials-detail">
                        <?php if(have_rows('client_testimonial_rep')):
                        while(have_rows('client_testimonial_rep')):
                        the_row(); ?>
                        <div class="client-testimonial-row">
                            <div class="detail">
                                <?php the_sub_field('description_client_testimonial'); ?>
                                <div class="testimonial-author">
                                    <span><?php the_sub_field('author_client_testimonial'); ?></span>
                                </div>
                            </div>
                        </div>
                       <?php endwhile; endif; ?>
                      
                       
                    </div>
                </div>
                <!-- ip left ends here -->
            </div>
        </section>
        <!-- ip atf detail ends -->
        
<?php get_footer(); ?>