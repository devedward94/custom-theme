<?php
/*
*Template Name: Bio
*/
get_header('inner');
?>

<?php get_template_part('template-parts/page/ip-atf','inner'); ?> 

        <!-- ip atf detail starts -->
        <section class="ip-detail-outer">
            <div class="ip-inner">
                <div class="bio-outer">  

                                  
                    <div class="bio-detail flex wrap">
                        <div class="bio-thumbnail-row flex wrap space-between">
                            <div class="bio-left flex wrap">
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
                                <h1><?php the_field('name_attorney'); ?></h1>
                                <span class="bio-partner"><?php the_field('designation'); ?></span>
                                <?php the_field('content_bio'); ?>
                                <div class="bio-mobile-content">
                                <?php the_field('description_bio_mobile'); ?>
                            </div>
                            </div>

                            <div class="bio-thumbnail">
                                <?php $bio_img = get_field('image_bio'); ?>
                                <img src="<?php echo $bio_img['url']; ?>" alt="">
                                <div class="bio-slider">
                                    <?php if(have_rows('career_rep')):
                                    while(have_rows('career_rep')):
                                    the_row(); ?>
                                    <div>
                                        <?php the_sub_field('paragraph_career'); ?>
                                    </div>
                                    <?php endwhile; endif; ?>
                                </div>
                                
                                <?php the_field('description_bio'); ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ip atf detail ends -->
        

<?php get_footer(); ?>