<?php include (TEMPLATEPATH . '/header.php'); ?>

<div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/blog-banner.jpg);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white"><?php the_title();?></h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
            <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="<?php echo get_home_url();?>"><i class="fa fa-home"></i> Ana Sayfa</a></li>
                        <li><?php the_title();?></li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->                   
        
            <!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                
                    <!-- BLOG START -->
                    <div class="blog-post date-style-3 blog-post-single">
                        <div class="wt-post-media wt-img-effect">
                            <a href="javascript:void(0);"><img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'full')[0]; ?>" alt="<?php the_title(); ?>" alt="<?php the_title();?>"></a>
                        </div>
                        <div class="post-description-area p-t30">
                            <div class="wt-post-title ">
                                <h3 class="post-title"><a href="javascript:void(0);"><?php the_title();?> </a></h3>
                            </div>
                            <div class="wt-post-meta ">
                              <ul>
                                <li class="post-date"> <i class="fa fa-calendar"></i><strong><?php echo get_the_date('d F');?></strong> <span> <?php echo get_the_date('Y');?></span> </li>
                                <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">Yazar <span><?php the_author();?></span></a> </li>
                                <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);"><?php echo get_comments_number();?> Yorum</a> </li>
                              </ul>
                            </div>
                            <div class="wt-post-text">
                                <?php echo $post->post_content; ?>                            
                            </div>                            
                            <?php $tags = get_the_tags($post -> ID); 
                                if(!empty($tags)) {?>
                            <div class="widget bg-white  widget_tag_cloud">
                                <h4 class="tagcloud">Etiketler</h4>
                                <div class="tagcloud">
                                    <?php foreach ($tags as $tag) {?>
                                    <a href="javascript:void(0);"><?php echo $tag->name;?></a>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="wt-box">
                                <div class="wt-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
                                <div class="row  p-lr15">
                                    <h4 class="tagcloud pull-left m-t5 m-b0">Bu yazıyı paylaş:</h4>
                                    <div class="widget_social_inks pull-right">
                                        <ul class="social-icons social-md social-square social-dark m-b0">
                                            <li><a href="https://facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>" target="_blank" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                        </ul>
                                   </div>
                                </div>
                                <div class="wt-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="section-content p-t50">
                        <!-- TITLE START -->
                        <div class="section-head">
                            <h2 class="text-uppercase">Diğer Yazılar</h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator style-square">
                                    <span class="separator-left bg-primary"></span>
                                    <span class="separator-right bg-primary"></span>
                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->
                        
                      <!-- CAROUSEL -->
                            <div class="section-content">
                                <div class="owl-carousel blog-related-slider  owl-btn-vertical-center">
                                    <!-- COLUMNS 1 --> 
                                    <?php 
                                    $query = new WP_Query(array(
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'order_by' => 'ID',
                                        'order' => 'DESC',
                                        'showposts' => 4,
                                        'offset' => 0,
                                        'post__not_in' => array($post->ID),
                                    ));
                                    while($query->have_posts()){
                                        $query->the_post();
                                        $post_id = get_the_ID();
                                    ?>
                                    
                                    <div class="item">
                                         <div class="blog-post blog-grid date-style-3">
                                            <div class="wt-post-media wt-img-effect zoom-slow">
                                                <a href="<?php the_permalink(); ?>"><img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'onecikan')[0]; ?>" alt="<?php the_title(); ?>" alt="<?php the_title();?>"></a>
                                            </div>
                                            <div class="wt-post-info p-tb30 p-m30">
                                                <div class="wt-post-title ">
                                                    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                                                </div>
                                                <div class="wt-post-meta ">
                                                  <ul>
                                                    <li class="post-date"> <i class="fa fa-calendar"></i><strong><?php echo get_the_date('d M') ?></strong> <span> <?php get_the_date('Y')?></span> </li>
                                                    <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">Yazar <span><?php the_author();?></span></a> </li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);"><?php echo get_comments_number();?> Yorum</a> </li>
                                                  </ul>
                                                </div>
                                                <div class="wt-post-text">
                                                    <?php the_excerpt();?>
                                                </div>
                                                <div class="clearfix">
                                            <div class="wt-post-readmore pull-left">
                                                 <a href="<?php the_permalink(); ?>" title="READ MORE" rel="bookmark" class="site-button-link">Devamını Oku</a>
                                            </div>
                                            <div class="widget_social_inks pull-right">
                                                <ul class="social-icons social-radius social-dark m-b0">
                                                    <li><a href="https://facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>" target="_blank" class="fa fa-facebook"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                </ul>
                                           </div>
                                        </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <?php } wp_reset_query(); ?>
                                    
                                </div>
                            </div>
                    </div>
                    
                    <div class="clear" id="comment-list">
                        <div class="comments-area" id="comments">
                            <h2 class="comments-title"><?php echo comments_number('Henüz Yorum Yapılmamış','1 Yorum','% Yorum')?></h2>
                            <div class="p-tb30">
                            
                                <!-- COMMENT LIST START -->
                                <?php comments_template(); ?>
                                <!-- COMMENT LIST END -->
                                
                                <!-- LEAVE A REPLY START -->
                                <?php comment_form(array(
                                    "class_submit" => "site-button text-uppercase",
                                    "class_form" => "comment-form"
                                ));?>
                                
                            

                           </div>
                        </div>
                    </div>
                    <!-- BLOG END -->
                        
                </div>
            </div>
            <!-- SECTION CONTENT END -->
        
        </div>



<?php include (TEMPLATEPATH . '/footer.php'); ?>