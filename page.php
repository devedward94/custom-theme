<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
                <?php 
                 if(have_posts()):
                  while(have_posts()):
                   the_post();
                ?>
                <div class="ip-left">
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
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; endif; ?>
                <!-- ip left ends here -->
            </div>
        </section>
        <!-- ip atf detail ends -->

<?php

get_footer();