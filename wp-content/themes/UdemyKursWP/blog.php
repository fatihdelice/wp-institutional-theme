<?php /* Template Name: Yazılar Sayfası */
include (TEMPLATEPATH . '/header.php'); ?>
<div class="page-content">
        
            <!-- INNER PAGE BANNER --> 
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(<?php echo $temayolu ?>/images/banner/blog-banner.jpg);">
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
            <div class="section-full p-t80 p-b50">
                <div class="container">
                    <div class="row">
                    
                        <!-- BLOG GRID START -->
                        <div class="portfolio-wrap wt-blog-grid-3">
                        	<!-- COLUMNS 1 --> 
                            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $query = new WP_Query(array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'order_by' => 'ID',
                                'order' => 'DESC',
                                'showposts' => '2',
                                'paged' => $paged,
                            ));
                            while($query -> have_posts()){
                                $query -> the_post();
                                $post_id = get_the_ID();

                            ?>
                            <div class="post masonry-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="blog-post blog-grid date-style-3">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="<?php the_permalink(); ?>"><img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'onecikan')[0]; ?>" alt="<?php the_title(); ?>"></a>
                                    </div>
                                    <div class="wt-post-info p-tb30 p-m30">
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                        <div class="wt-post-meta ">
                                          <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong><?php echo get_the_date('d F'); ?></strong> <span> <?php echo get_the_date('Y'); ?></span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">Yazar <span><?php the_author(); ?></span></a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);"><?php echo get_comments_number(); ?> Yorum</a> </li>
                                          </ul>
                                        </div>
                                        <div class="wt-post-text">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <div class="clearfix">
                                    <div class="wt-post-readmore pull-left">
                                         <a href="<?php the_permalink(); ?>" title="READ MORE" rel="bookmark" class="site-button-link">Devamını Oku</a>
                                    </div>
                                    <div class="widget_social_inks pull-right">
                                        <ul class="social-icons social-radius social-dark m-b0">
                                            <li><a href="https://facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>" target="_blank" class="fab fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                            <li><a href="javascript:void(0);" class="fab fa-youtube"></a></li>
                                            <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                                        </ul>
                                   </div>
                                </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                        <!-- BLOG GRID END -->
                        
                        <!-- PAGINATION START -->
                        <?php the_pagination($query->max_num_pages); ?>
                        <!-- PAGINATION END -->
                        
                    </div>
                </div>
            </div>
            <!-- SECTION CONTENT END -->
        
        </div>
        
<?php include (TEMPLATEPATH . '/footer.php'); ?>