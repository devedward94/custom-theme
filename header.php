<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6">
<![endif]-->
<!--[if IE 7]>
<html id="ie7">
<![endif]-->
<!--[if IE 8]>
<html id="ie8">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html>
<!--<![endif]-->
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />

    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/fonts.css" />
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/aos.css" />
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/button.css" />
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/global.css" />

    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/atf-after-load.css" />
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/hp-desktop.css" />
	<?php if(wp_is_mobile()) { ?>
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/hp-mobile.css" />
	<?php } ?>
	<?php wp_head(); ?>
	
	<?php
	//date_default_timezone_set('US/Eastern');
	//echo date('H');
	?>
</head>

<body class="before-load home">


<header class="header">
    <div class="logo">
        <a href="#"></a>
    </div>
    <div class="nav-icon"><span></span></div>
    <div class="nav-wrap">
        <nav class="menu-main-menu-container" id="menu">
		<?php 
              
              wp_nav_menu( array('theme_location' => 'header',
                'container'       => false,     

            )); ?>
          
        </nav>
    </div>
    <div class="header-phone">
        <a href="te:877-203-0751">
            877-203-0751
        </a>
    </div>
</header><!-- /header -->