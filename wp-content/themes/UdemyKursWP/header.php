<!DOCTYPE html>
<html lang="tr">

<head>
    <?php $ayar = get_option('my_settings'); ?>
	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php if(is_single()){ $tags = get_the_terms($post->ID, 'calisanlar_tag'); ?>
        <meta name="keywords" content="<?php echo $ayar['site_keywords']; ?>,<?php if(!empty($tags)){foreach($tags as $tag){ echo $tag->name.",";}} ?>" />   
    <?php } else{?>
        <meta name="keywords" content="<?php echo $ayar['site_keywords']; ?>" />
    <?php } ?>
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="<?php echo $ayar['site_favicon']['url']; ?>" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $ayar['site_favicon']['url']; ?>" />
    
    <!-- PAGE TITLE HERE -->
    <?php if(is_single() or is_page()){?>
        <title><?php get_bloginfo('name')." | ".get_the_title(); ?></title>
    <?php }else{ ?>
        <title><?php get_bloginfo('name'); ?></title>
    <?php } ?>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif] -->
    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo $temayolu ?>/css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo $temayolu ?>/css/fontawesome-new/css/all.css" />
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo $temayolu ?>/css/flaticon.min.css">
    <!-- ANIMATE STYLE SHEET --> 
    <link rel="stylesheet" type="text/css" href="<?php echo $temayolu ?>/css/animate.min.css">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo $temayolu ?>/css/owl.carousel.min.css">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo $temayolu ?>/css/bootstrap-select.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo $temayolu ?>/css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo $temayolu ?>/css/loader.min.css">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo $temayolu ?>/css/style.css">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="<?php echo $temayolu ?>/css/skin/skin-1.css">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo $temayolu ?>/css/custom.css">
   

    
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $temayolu ?>/plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="<?php echo $temayolu ?>/plugins/revolution/revolution/css/navigation.css">
    
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">
    
</head>

<body>

	<div class="page-wraper"> 
       	
        <!-- HEADER START -->
        <header class="site-header header-style-3 ">
        	<!-- MAIN BAR START -->
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-primary">
                    <div class="container">
                    	<!-- SITE LOGO -->
                        <div class="logo-header mostion">
                            <a href="<?php echo get_home_url(); ?>">
                                <img src="<?php echo $ayar['site_logo']['url'] ?>" width="171" height="49" alt="" />
                            </a>
                        </div>
                        <!-- NAV TOGGLE BUTTON -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- EXTRA NAV -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <a href="#search" class="site-search-btn"><i class="fa fa-search"></i></a>
                            </div>
                         </div>
                        <!-- SITE Search AREA -->
                        <?php get_search_form(); ?>
                        <!-- MAIN NAV -->
                        <div class="header-nav navbar-collapse collapse ">
                            <?php $args = array(
                                'theme_location' => 'header-menu',
                                'echo' => 'true',
                                'fallback_cb' => 'header-menu',
                                'depth' => 0,
                                'walker' => '',
                                'items_wrap' => '<ul class=" nav navbar-nav">%3$s</ul>',
                            );           
                            wp_nav_menu($args);                  
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER END -->