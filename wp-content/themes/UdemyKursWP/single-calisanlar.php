<?php include (TEMPLATEPATH . '/header.php'); 
$post_id = get_the_ID();
?>

<div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(<?php echo $temayolu ?>/images/banner/our-team-banner.jpg);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END --> 
                       
            <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="<?php echo get_home_url(); ?>"><i class="fa fa-home"></i> Ana Sayfa</a></li>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->                   
            
            <!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b50 bg-gray">
            	<div class="container">
                    <!-- LEFT PART START -->
                        <div class="row">
                            <div class="col-md-4 col-sm-4  ">
                                <div class="wt-team-full-media">
                                 	<div class="wt-team-one bg-white p-a10">
                                        <div class="wt-team-media">
                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post_id)?></a>
                                        </div>
                                        <div class="wt-team-info text-center p-a10 p-t30">
                                            <ul class="social-icons social-square social-dark social-md">
                                                <?php if($face = get_post_meta($post_id,"facebook", true)){ ?>
                                                <li><a href="<?php echo $face ?>" class="fa fa-facebook"></a></li>
                                                <?php } if($twitter = get_post_meta($post_id,"twitter", true)){ ?>
                                                <li><a href="<?php echo $twitter ?>" class="fa fa-twitter"></a></li>
                                                <?php } if($youtube = get_post_meta($post_id,"youtube", true)){ ?>
                                                <li><a href="<?php echo $youtube ?>" class="fa fa-youtube"></a></li>
                                                <?php } if($insta = get_post_meta($post_id,"instagram", true)){ ?>
                                                <li><a href="<?php echo $insta ?>" class="fa fa-instagram"></a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>   
                                </div>
                                
                            </div>
                            <div class="col-md-7 col-sm-7">
                                <div class="wt-info wt-team-full-info">
                                    <h3 class="wt-title m-t0"><a href="javascript:void(0);"><?php the_title(); ?></a></h3>
                                    <div class="wt-member-position m-tb10"><?php echo get_post_meta($post_id,"unvani",true); ?></div>
                                    <?php echo $post->post_content;?>
                                </div>
                            </div>
                        </div>
                    <!--LEFT PART END -->
                </div>
            </div>
            <!-- SECTION CONTENT END -->
            
           
                   
        </div>

<?php include (TEMPLATEPATH . '/footer.php'); ?>