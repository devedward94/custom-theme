<?php
/*
**Template Name: Referral
*/
get_header('inner');
?>
<?php get_template_part('template-parts/page/ip-atf','inner'); ?> 
  
  <!-- ip atf detail starts -->
        <section class="ip-detail-outer">
            <div class="ip-inner">
                <!-- attorney referral starts here -->
                <div class="attorney-referral flex align-start justify-end wrap">
                    <div class="left flex justify-center wrap">
                        <h3><?php the_field('heading_attorney_ref'); ?></h3>
                        <?php the_field('paragraph_attorney_ref'); ?>
                    </div>
                    <div class="right flex">
                    	<?php $attorney_img = get_field('image_attorney_ref');  ?>
                        <img src="<?php echo $attorney_img['url']; ?>" alt="">
                    </div>
                </div>
                <div class="referral-detail flex space-between wrap align-start">
                    <?php if(have_rows('content_attorney_ref')):
                    while(have_rows('content_attorney_ref')):
                    the_row(); ?>
                    <div class="left flex wrap">
                        <h3><?php the_sub_field('heading_attorney_ref_rep'); ?></h3>
                        <?php the_sub_field('paragraph_attorney_ref_rep'); ?>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
                <!-- attorney referral ends here -->               
            </div>
        </section>
        <!-- ip atf detail ends -->

        
<?php get_footer(); ?>