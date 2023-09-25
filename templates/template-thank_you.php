<?php
/*
*Template Name: Thank You
*/
get_header('inner');
get_template_part('template-parts/page/ip-atf','inner'); 
?>

 <!-- ip atf detail starts -->
        <section class="ip-detail-outer">
            <div class="thankyou-practicearea">

                
                <div class="inner">
                    <h1><?php the_field('heading_thank_you'); ?></h1>
                    <span class="find-page"><?php the_field('content_thank_you'); ?></span>
                    <p class="helpful-links"><?php the_field('useful_resources'); ?></p>
                    <ul class="flex align-start wrap space-around">
                        <?php if(have_rows('practice_area_thank_u')):
                        while(have_rows('practice_area_thank_u')):
                        the_row(); ?>
                        <li><a href="<?php the_sub_field('title_url_prac_thank_u'); ?>"><?php the_sub_field('title_prac_thank_u'); ?></a></li>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
            </div>
            <div class="view-caseresults-row">
                <div class="inner flex wrap space-between">
                    <?php if(have_rows('ratios_rep')):
                        while(have_rows('ratios_rep')):
                        the_row(); ?>
                    <div class="results-detail">
                        <span class="result-numbers">
                            <?php the_sub_field('result_number_thank_you'); ?>
                        </span>
                        <span class="result-numbers-title"><?php the_sub_field('result_title_thank_you'); ?></span>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
            <div class="hp-testimonials thankyou-testimonials">
                <?php if(have_rows('slider_quote')):
                        while(have_rows('slider_quote')):
                        the_row(); ?>
                <div>
                    <div class="detail">
                        <span class="quote-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="49.677" height="36.329" viewBox="0 0 49.677 36.329">
                              <g id="Group_2132" data-name="Group 2132" transform="translate(0)">
                                <path id="Path_519" data-name="Path 519" d="M3.01,31.813A15.2,15.2,0,0,1,.9,27a23.4,23.4,0,0,1-.8-5.921A22.3,22.3,0,0,1,3.512,8.831,23.662,23.662,0,0,1,13.748.2l1.2,2.308A17.077,17.077,0,0,0,8.329,7.326a12.933,12.933,0,0,0-3.312,6.624,10.359,10.359,0,0,0-.4,3.011,6.929,6.929,0,0,0,.4,2.509,9.628,9.628,0,0,1,7.527-3.111,10.412,10.412,0,0,1,7.426,2.71,9.594,9.594,0,0,1,2.91,7.326,9.391,9.391,0,0,1-3.011,7.226,10.623,10.623,0,0,1-7.727,2.81C8.028,36.429,4.917,34.924,3.01,31.813Zm26.9,0A15.2,15.2,0,0,1,27.8,27a23.57,23.57,0,0,1-.8-6.021A22.3,22.3,0,0,1,30.408,8.731,23.662,23.662,0,0,1,40.644.1l1.2,2.308a17.077,17.077,0,0,0-6.624,4.817,12.933,12.933,0,0,0-3.312,6.624,10.359,10.359,0,0,0-.4,3.011,6.929,6.929,0,0,0,.4,2.509,9.628,9.628,0,0,1,7.527-3.111,10.412,10.412,0,0,1,7.426,2.71,9.594,9.594,0,0,1,2.91,7.326,9.391,9.391,0,0,1-3.011,7.226,10.623,10.623,0,0,1-7.727,2.81C34.823,36.429,31.813,34.924,29.906,31.813Z" transform="translate(-0.1 -0.1)"/>
                              </g>
                            </svg>
                        </span>
                        <?php the_sub_field('paragraph_quote'); ?>
                        <span class="author"><?php the_sub_field('author'); ?></span>
                    </div>
                </div>
             <?php endwhile; endif; ?>
            </div>
        </section>
        <!-- ip atf detail ends -->

<?php get_footer(); ?>