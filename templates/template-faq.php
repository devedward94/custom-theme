<?php
/*
**Template Name: FAQ
*/
get_header('inner');
?>
<?php get_template_part('template-parts/page/ip-atf','inner'); ?> 


<div class="wrapper">


    <!-- ip atf detail starts -->
    <section class="ip-detail-outer ip-faq-outer-detail">
        <div class="ip-inner">


            <div class="ip-faq">
               <h2><?php the_field('faq_title'); ?></h2>

               <?php 
               if( get_query_var('page') ) {
                  $page = get_query_var( 'page' );
              } else {
                  $page = 1;
              }

// Variables
        $row              = 0;
        $images_per_page  = 9; // How many images to display on each page
        $images           = get_field( 'videos_faq' );
        $total            = count( $images );
        $pages            = ceil( $total / $images_per_page );
        $min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
        $max              = ( $min + $images_per_page ) - 1;
        ?>


<section class="fisch-faq-page flex wrap align-start flex-start">

    <?php if(have_rows('videos_faq')): 
        while(have_rows('videos_faq')): 
            the_row(); 
            $row++;
    // Ignore this image if $row is lower than $min
            if($row < $min) { continue; }

    // Stop loop completely if $row is higher than $max
            if($row > $max) { break; } 
            ?>

            <div class="faq-video-item">
              <span class="wistia_embed wistia_async_<?php the_sub_field('video_url'); ?> popover=true popoverContent=link" style="display:inline;position:relative">
                <h4><a href="#"><?php the_sub_field('title_video'); ?></a></h4>
                <?php $video_img=get_sub_field('video_thumbnail'); ?>
                    <img src="<?php echo $video_img['url']; ?>">
              </span>
              
            </div>

            
        <?php endwhile; ?>

    <?php endif; ?> 

    <section class="video-modal">
        <!-- Modal Content Wrapper -->
        <div id="video-modal-content" class="video-modal-content">
            <div id="player">
                <iframe id="vdo" height="412" allowfullscreen="" style="width:100%; border:0" src=""></iframe>
            </div>
            <a href="#" class="close-video-modal">
                <!-- X close video icon -->
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" width="24" height="24">
                    <g id="icon-x-close">
                        <path fill="#ffffff" d="M30.3448276,31.4576271 C29.9059965,31.4572473 29.4852797,31.2855701 29.1751724,30.980339 L0.485517241,2.77694915 C-0.122171278,2.13584324 -0.104240278,1.13679247 0.52607603,0.517159487 C1.15639234,-0.102473494 2.17266813,-0.120100579 2.82482759,0.477288136 L31.5144828,28.680678 C31.9872448,29.1460053 32.1285698,29.8453523 31.8726333,30.4529866 C31.6166968,31.0606209 31.0138299,31.4570487 30.3448276,31.4576271 Z" id="Shape"></path>
                        <path fill="#ffffff" d="M1.65517241,31.4576271 C0.986170142,31.4570487 0.383303157,31.0606209 0.127366673,30.4529866 C-0.12856981,29.8453523 0.0127551942,29.1460053 0.485517241,28.680678 L29.1751724,0.477288136 C29.8273319,-0.120100579 30.8436077,-0.102473494 31.473924,0.517159487 C32.1042403,1.13679247 32.1221713,2.13584324 31.5144828,2.77694915 L2.82482759,30.980339 C2.51472031,31.2855701 2.09400353,31.4572473 1.65517241,31.4576271 Z" id="Shape"></path>
                    </g>
                </svg>
            </a>
        </div><!-- end modal content wrapper -->
        <!-- clickable overlay element -->
        <div class="overlay"></div>
    </section>
</section>
<div class="faq-pagination">
<?php
        // Pagination
            echo paginate_links( array(
                'base' => get_permalink() . '%#%' . '/',
                'format' => '?page=%#%',
                'current' => $page,
                'total' => $pages
        ) ); ?>
    </div>
</div>
<!-- ip left ends here -->
</div>
</section>
<!-- ip atf detail ends -->




</div>

<script charset="ISO-8859-1" src="<?php bloginfo('template_url'); ?>/js/E-v1.js" async></script>

<?php get_footer(); ?>