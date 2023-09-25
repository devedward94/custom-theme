<?php
/*
*Template Name: Contact
*/

get_header('inner');
?>
<?php get_template_part('template-parts/page/ip-atf','inner'); ?> 
     <!-- ip atf detail starts -->
        <section class="ip-detail-outer">
            <div class="ip-inner contact-outer flex wrap">
                <h2><?php the_field('heading_contact'); ?></h2>
                <span class="contact-subtitle">
                   <?php the_field('sub_heading_contact'); ?>
                </span>
               
            </div>
        </section>
        <!-- ip atf detail ends -->
      <!-- site form starts here -->
        <div class="site-form contact-siteform">
            <div class="inner flex wrap space-between">
                <div class="left flex wrap">
                    <span><?php the_field('always_free_consultation','options'); ?></span>
                    <?php the_field('paragraph_free_consult','options'); ?>
                    <?php 
                    $fb=get_field('fb_david','options');
                    $linkdin=get_field('linkdin_david','options');
                    $twitter=get_field('twitter_david','options');
                    $youtube=get_field('youtube_david','options');
                    $google=get_field('google_david','options');
                    ?>
                    <ul class="flex wrap space-between">
                        <li>
                            <?php if(!empty($fb)): ?>
                            <a href="<?php echo $fb; ?>" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.279" height="38.851" viewBox="0 0 20.279 38.851">
                                  <path id="facebook_logo" d="M49.181,30.731c1.2-.039,2.407,0,3.613,0h.485V24.458c-.645-.068-1.317-.158-1.988-.192-1.235-.055-2.468-.113-3.708-.09a9.057,9.057,0,0,0-5.23,1.62,7.83,7.83,0,0,0-3.142,5.225,17.766,17.766,0,0,0-.221,2.689c-.039,1.4,0,2.813,0,4.214v.527H33v6.992h5.957V63.022h7.282V45.474h5.939c.305-2.328.6-4.63.911-7.032h-6.9s.016-3.466.063-4.97C46.305,31.424,47.527,30.795,49.181,30.731Z" transform="translate(-33 -24.171)" fill-rule="evenodd"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        </li>
                        <li>
                            <?php if(!empty($linkdin)): ?>
                            <a href="<?php echo $linkdin; ?>" target="_blank">
                                <svg id="linkedin_logo" xmlns="http://www.w3.org/2000/svg" width="38.925" height="38.867" viewBox="0 0 38.925 38.867">
                                  <path id="Path_5681" data-name="Path 5681" d="M9.571,19.834h8.075V45.793H9.571ZM13.608,6.94a4.68,4.68,0,1,1-3.313,1.367A4.677,4.677,0,0,1,13.608,6.94" transform="translate(-8.92 -6.94)"/>
                                  <path id="Path_5682" data-name="Path 5682" d="M14.667,12.674H22.4v3.542h.1a8.48,8.48,0,0,1,7.637-4.193c8.164,0,9.665,5.375,9.665,12.378V38.647H31.733V26.005c0-3.013-.047-6.895-4.193-6.895-4.193,0-4.846,3.279-4.846,6.652V38.61H14.62V12.674Z" transform="translate(-0.88 0.22)" />
                                </svg>
                            </a>
                        <?php endif; ?>
                        </li>
                        <li>
                            <?php if(!empty($twitter)): ?>
                            <a href="<?php echo $twitter; ?>" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="47.737" height="38.857" viewBox="0 0 47.737 38.857">
                                  <path id="twitter_logo" d="M23,38.481a9.865,9.865,0,0,1-9.133-6.8,9.705,9.705,0,0,0,4.214-.113c.029,0,.055-.029.14-.055a9.834,9.834,0,0,1-6.376-4.5A9.394,9.394,0,0,1,10.412,21.8a9.536,9.536,0,0,0,4.356,1.18,9.939,9.939,0,0,1-4.045-5.957,9.815,9.815,0,0,1,1.04-7.111A28.014,28.014,0,0,0,31.994,20.169c-.055-.392-.113-.73-.169-1.067A9.794,9.794,0,0,1,39.919,8.255a9.615,9.615,0,0,1,8.6,2.726.527.527,0,0,0,.527.14,19.831,19.831,0,0,0,5.7-2.191.283.283,0,0,1,.14-.055h.055a10.142,10.142,0,0,1-4.187,5.338,18.214,18.214,0,0,0,5.452-1.462c.029.029.029.029.029.055-.366.506-.73.982-1.125,1.462a18.614,18.614,0,0,1-3.569,3.4.353.353,0,0,0-.169.308,28.1,28.1,0,0,1-.169,4.356,28.658,28.658,0,0,1-2.528,8.738A28.053,28.053,0,0,1,43.366,38.8a26.236,26.236,0,0,1-13.481,7.5,29.761,29.761,0,0,1-5.452.645A27.732,27.732,0,0,1,8.724,42.723c-.055-.029-.113-.084-.224-.14a20.016,20.016,0,0,0,9.808-1.348A21.859,21.859,0,0,0,23,38.481Z" transform="translate(-8.5 -8.097)" fill-rule="evenodd"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        </li>
                        <li>
                            <?php if(!empty($youtube)): ?>
                            <a href="<?php echo $youtube; ?>" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55.454" height="38.855" viewBox="0 0 55.454 38.855">
                                  <path id="youtube_logo" d="M13.227,46.065a6.5,6.5,0,0,1-4.264-4.148C7.12,36.863,6.569,15.657,10.133,11.48a6.9,6.9,0,0,1,4.646-2.455c9.552-1.022,39.083-.877,42.5.35a6.655,6.655,0,0,1,4.187,4.032c2.015,5.228,2.073,24.274-.263,29.328A6.458,6.458,0,0,1,58.2,45.775C54.591,47.642,17.9,47.613,13.227,46.065Zm15.162-9.926C34.143,33.16,39.84,30.208,45.594,27.2c-5.794-3.008-11.48-5.989-17.205-9Z" transform="translate(-7.514 -8.347)" fill-rule="evenodd"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        </li>
                        <li>
                            <?php if(!empty($google)): ?>
                            <a href="<?php echo $google; ?>" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45.025" height="38.867" viewBox="0 0 45.025 38.867">
                                  <g id="XMLID_1_" transform="translate(-80.8 -90.4)">
                                    <g id="XMLID_2221_" transform="translate(80.8 90.4)">
                                      <path id="XMLID_2235_" d="M122.7,92.55a2.98,2.98,0,0,0-2.8-2.15H86.762a2.98,2.98,0,0,0-2.8,2.15L80.8,104.768a5.636,5.636,0,0,0,11.272,0h0a5.636,5.636,0,0,0,11.272,0h0a5.628,5.628,0,0,0,11.24.391,5.628,5.628,0,0,0,11.24-.391h0Z" transform="translate(-80.8 -90.4)" fill="#003365"/>
                                      <path id="XMLID_2222_" d="M122.158,145.262a6.679,6.679,0,0,1-1.271-1.629,6.679,6.679,0,0,1-1.271,1.629,6.376,6.376,0,0,1-8.862-.13,6.463,6.463,0,0,1-1.14-1.531,6.463,6.463,0,0,1-1.14,1.531,6.371,6.371,0,0,1-8.992,0,6.462,6.462,0,0,1-1.14-1.531,6.463,6.463,0,0,1-1.14,1.531,6.308,6.308,0,0,1-4.5,1.857,6.451,6.451,0,0,1-2.606-.554v15.508a3.2,3.2,0,0,0,3.193,3.193H125.84a3.2,3.2,0,0,0,3.193-3.193V146.467a6.3,6.3,0,0,1-2.574.554A6.445,6.445,0,0,1,122.158,145.262Zm-1.824,17.072a5.6,5.6,0,1,1,0-11.207,5.382,5.382,0,0,1,3.747,1.466l-1.531,1.466a3.184,3.184,0,0,0-2.215-.847,3.519,3.519,0,0,0,0,7.037,3.012,3.012,0,0,0,3.16-2.411h-3.16v-1.922h5.278a7.122,7.122,0,0,1,.1.912A5.2,5.2,0,0,1,120.334,162.333Z" transform="translate(-87.07 -126.268)"/>
                                    </g>
                                  </g>
                                </svg>
                            </a>
                        <?php endif; ?>
                        </li>
                    </ul>
                </div>
                <div class="right flex wrap">
                     <?php the_field('contact_form','options'); ?>
                    <p class="form-para"><span>*</span>All fields required</p>
                </div>
            </div>
        </div>
        <!-- site form ends here -->
        
        <div class="contact-site-location flex wrap align-start">
             <?php if(have_rows('location_david','options')):
                while(have_rows('location_david','options')):
                the_row(); ?>
            <div class="location-detail">
                <div class="location-detail-text">
                    <h3><a href="<?php the_sub_field('link_address','options'); ?>"><?php the_sub_field('area_location_david','options'); ?></a></h3>
                    <p><?php the_sub_field('address_david','options'); ?></p>
                    <span><?php the_sub_field('call_or_text','options'); ?>

                    <a href="tel:<?php the_sub_field('number_location_david','options'); ?>"><?php the_sub_field('number_location_david','options'); ?></a></span>
                </div>
                <div class="location-map">
                    <?php the_sub_field('contact_map_iframe'); ?>
                </div>
            </div>
        <?php endwhile; endif; ?>
        </div>

<?php get_footer(); ?>