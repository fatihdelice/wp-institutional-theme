<?php /* Template Name: Çalışanlar Sayfası */
include (TEMPLATEPATH . '/header.php'); ?>

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
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END --> 
                              
            <!-- TEAM STYLE ONE START -->
            <div class="section-full p-t80 p-b50 bg-gray">
                <div class="container">
                    <div class=" m-b70">
                        <!-- TITLE START -->
                        <div class="section-head text-center">
                           <h2 class="text-uppercase"><?php the_title(); ?></h2>
                           <div class="wt-separator-outer">
                               <div class="wt-separator style-square">
                                   <span class="separator-left bg-primary"></span>
                                   <span class="separator-right bg-primary"></span>
                               </div>
                           </div>
                           <?php echo $post->post_content; ?>
                        </div>
                        <!-- TITLE END -->
                    </div> 
                    <div class="section-content">
                        <div class="row">
                        
                            <!-- COLUMNS 1 -->
                            <?php
                            $query = new WP_Query(array(
                                'post_type' => 'calisanlar',
                                'post_status' => 'publish',
                                'order_by' => 'ID',
                                'order' => 'DESC',
                                'showposts' => -1,
                            ));
                            while($query->have_posts()){
                                $query->the_post();
                                $post_id = get_the_ID();
                            ?>
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                                <div class="wt-team-one bg-white p-a10">
                                    <div class="wt-team-media">
                                        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post_id,'calisan')?></a>
                                    </div>
                                    <div class="wt-team-info text-center bg-white p-a10">
                                        <h4 class="wt-team-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <p><?php echo get_post_meta($post_id,"unvani",true); ?></p>
                                        <ul class="social-icons social-square social-dark">
                                            <?php if($face = get_post_meta($post_id,"facebook", true)){ ?>
                                            <li><a href="<?php echo $face ?>" class="fab fa-facebook"></a></li>
                                            <?php } if($twitter = get_post_meta($post_id,"twitter", true)){ ?>
                                            <li><a href="<?php echo $twitter ?>" class="fab fa-twitter"></a></li>
                                            <?php } if($youtube = get_post_meta($post_id,"youtube", true)){ ?>
                                            <li><a href="<?php echo $youtube ?>" class="fab fa-youtube"></a></li>
                                            <?php } if($insta = get_post_meta($post_id,"instagram", true)){ ?>
                                            <li><a href="<?php echo $insta ?>" class="fab fa-instagram"></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           <?php } ?>
                        </div>
                    </div>
                    <?php the_pagination($query->max_num_pages); ?>
                </div>
            </div>
            <!-- TEAM STYLE ONE END -->   
                     
           
        </div>

<?php include (TEMPLATEPATH . '/footer.php'); ?>