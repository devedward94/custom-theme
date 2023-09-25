<?php global $wp_query; ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

    <!-- fonts awesome CSS -->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">


    <!-- slick CSS -->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css">

    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/header-footer.css" />
    
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ip-atf-after-load.css" />
    <?php if($wp_query->query['pagename']=='blog' || is_single() ){ ?>
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/blog.css" />
    <?php } else { ?>
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/inner-pages.css" />
    <?php } ?>
    
    <?php wp_head(); ?>
    <!--[if lte IE 8]>
    <link type="text/css" rel="stylesheet" href="assets/css/ie.css" />
    <script type="text/javascript" src="assets/js/modernizr.min.js"></script>
<![endif]-->

    <!--[if lte IE 6]>
    <script type="text/javascript" src="assets/js/belated.js"></script>
<![endif]-->

</head>
<?php if(is_page_template( 'template/template-contact.php' ) || is_page_template( 'template/template-thank_you.php' ) || is_404()){ 
$class_contact = 'contactpage-body'; 
} ?>
<?php
if(is_page_template('template/template-referral.php')):
    $class_ref='referral-body';
endif;
?>
<body class="ip-body <?php echo $class_contact; echo $class_ref; ?>">

    <div class="wrapper">

        <!-- atf fix buttons starts here -->
        <div class="atf-fix-buttons">
            <ul>
                <li>
                    <a id="bb2c488a8a75_inline" onclick="ccliface.openManual()"><?php the_field('live_chat','options'); ?></a>
                </li>            
                <li>
                    <a href="<?php the_field('send_msg_url','options'); ?>"><?php the_field('send_msg','options'); ?></a>
                </li>  
            </ul>
        </div>
        <!-- atf fix buttons ends here -->

        <!-- nav button starts here -->
        <div class="nav-button">
            <span></span>
        </div>
        <!-- nav button ends here -->

        <!-- header starts here -->
        <header class="header flex space-between" >
            <div class="logo flex">
                <a href="<?php echo site_url(); ?>">
                    <?php $logo_header=get_field('logo_header','options'); ?>
                    <img src="<?php echo $logo_header['url']; ?>" alt="">
                </a>
            </div>
            <nav class="nav flex">
                <?php 
              
              wp_nav_menu( array('theme_location' => 'header',
                'container'       => false,     

            )); ?>
            </nav>
            <div class="language-tab flex align-center">
                <span><?php the_field('espanol','options'); ?></span>
            </div>
            <div class="header-tel flex justify-center align-start wrap">
                <span class="headertel-title"><?php the_field('free_consultations','options'); ?></span>
                <ul class="flex wrap align-start">
                    <?php if(have_rows('number_rep','options')):
                   while(have_rows('number_rep','options')):
                       the_row(); ?>
                    <li>
                        <span><?php the_sub_field('area_contact','options'); ?></span>
                        <a href="tel:<?php the_sub_field('fl_num','options'); ?>"><?php the_sub_field('fl_num','options'); ?></a>
                    </li>
                    <?php endwhile; endif; ?>
                </ul>
            </div>
        </header>
        <!-- header ends here -->