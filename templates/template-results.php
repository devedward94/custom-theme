<?php
/*
**Template Name: Results
*/

get_header('inner');
?>
<?php get_template_part('template-parts/page/ip-atf','inner'); ?> 


 <!-- ip atf detail starts -->
        <section class="ip-detail-outer">
            <div class="ip-inner">
                <!-- ip left starts here -->
                <div class="ip-left case-results">
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
                    <h1><?php the_field('heading_results'); ?></h1>
                    <span class="tagline"><?php the_field('description_results'); ?></span>
                    <div class="case-results-row">
                        <?php if(have_rows('results_rep')):
                        while(have_rows('results_rep')):
                        the_row(); ?>
                    <div class="result-row">
                            <div class="result-left">
                                <span class="result-amount">
                                    <?php the_sub_field('result_count'); ?>
                                </span> 
                                <span class="result-title"><?php the_sub_field('result_title'); ?></span>  
                            </div>
                            <div class="result-detail">
                                <?php the_sub_field('result_detail'); ?>
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