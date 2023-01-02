        
        <!-- FOOTER START -->
        <footer class="site-footer footer-dark">
            <!-- CONTACT INFO -->
            <div class="bg-primary">
                <div class="container">
                    <div class="row">
                       <div class="col-md-3 col-sm-6  p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md text-secondry">
                                    <span class="iconmoon-travel"></span>
                                </div>
                                <div class="icon-content text-secondry">
                                    <h5 class="wt-tilte text-uppercase m-b0">Adres</h5>
                                    <p><?php echo $ayar['iletisim_adres']; ?></p>
                                </div>
                           </div>
                        </div>
                       <div class="col-md-3 col-sm-6  p-tb20 ">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix ">
                                <div class="icon-md text-secondry">
                                    <span class="iconmoon-smartphone-1"></span>
                                </div>
                                <div class="icon-content text-secondry">
                                    <h5 class="wt-tilte text-uppercase m-b0">Telefon</h5>
                                    <p class="m-b0"><?php echo $ayar['iletisim_tel']; ?></p>
                                </div>
                           </div>
                       </div>
                       <div class="col-md-3 col-sm-6  p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md text-secondry">
                                    <span class="iconmoon-fax"></span>
                                </div>
                                <div class="icon-content text-secondry">
                                    <h5 class="wt-tilte text-uppercase m-b0">Fax</h5>
                                    <p class="m-b0">FAX: <?php echo $ayar['iletisim_fax']; ?></p>
                                </div>
                            </div>
                        </div>
                       <div class="col-md-3 col-sm-6 p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md text-secondry">
                                    <span class="iconmoon-email"></span>
                                </div>
                                <div class="icon-content text-secondry">
                                    <h5 class="wt-tilte text-uppercase m-b0">E-Posta Adresi</h5>
                                    <p class="m-b0"><?php echo $ayar['iletisim_email']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            <!-- FOOTER BLOCKES START -->  
            <div class="footer-top overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <!-- ABOUT COMPANY -->
                        <div class="col-md-3 col-sm-6">  
                            <div class="widget widget_about">
                                <h4 class="widget-title">Hakkımızda</h4>
                                <div class="logo-footer clearfix p-b15">
                                    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo $ayar['site_logo']['url'] ?>" width="171" height="49" alt="site logo"/></a>
                                </div>
                                <p><?php echo $ayar['site_footer_aciklama'];?></p>  
                            </div>
                        </div> 
                        <!-- RESENT POST -->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget recent-posts-entry-date">
                                <h4 class="widget-title">Son Yazılar</h4>
                                <div class="widget-post-bx">
                                <?php
                                $query = new WP_Query(array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'order_by' => 'ID',
                                    'order' => 'DESC',
                                    'showposts' => '3',
                                ));
                                while($query -> have_posts()){
                                    $query -> the_post();
                                    $post_id = get_the_ID();

                                ?>
                                <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                    <div class="wt-post-date text-center text-uppercase text-white p-t5">
                                        <strong><?php echo get_the_date('d'); ?></strong>
                                        <span><?php echo get_the_date('F'); ?></span>
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-header">
                                            <h6 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
                                        </div>
                                        <div class="wt-post-meta">
                                            <ul>
                                                <li class="post-author"><i class="fa fa-user"></i><?php the_author();?></li>
                                                <li class="post-comment"><i class="fa fa-comments"></i><?php echo get_comments_number();?> Yorum</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php } wp_reset_query();?>
                                </div>
                            </div>
                        </div>      
                        <!-- USEFUL LINKS -->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget widget_services">
                                <h4 class="widget-title">Faydalı Linkler</h4>
                                <?php $args = array(
                                    'theme_location' => 'footer-menu',
                                    'echo' => 'true',
                                    'fallback_cb' => 'footer-menu',
                                    'depth' => 0,
                                    'walker' => '',
                                    'items_wrap' => '<ul>%3$s</ul>',
                                );           
                                wp_nav_menu($args);                  
                                ?>
                            </div>
                        </div>
                        <!-- NEWSLETTER -->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget widget_newsletter">
                                <h4 class="widget-title">Abone Ol</h4>
                                <div class="newsletter-bx">
                                    <form role="search" method="post" action="">
                                        <div class="input-group">
                                            <input name="news-letter" class="form-control" placeholder="Abonelik için" type="text">
                                            <span class="input-group-btn">
                                                <button type="submit" class="site-button"><i class="fa fa-paper-plane"></i></button>
                                            </span>
                                        </div>
                                     </form>
                                </div>
                            </div>
                            <!-- SOCIAL LINKS -->
                            <div class="widget widget_social_inks">
                                <h4 class="widget-title">Social Links</h4>
                                <ul class="social-icons social-square social-darkest">
                                    <?php if($ayar['iletisim_facebook'] != ""){?>
                                    <li><a href="<?php echo $ayar['iletisim_facebook']?>" class="fab fa-facebook"></a></li>
                                    <?php } if($ayar['iletisim_youtube'] != ""){?>
                                    <li><a href="<?php echo $ayar['iletisim_youtube']?>" class="fab fa-youtube"></a></li>
                                    <?php } if($ayar['iletisim_twitter'] != ""){?>
                                    <li><a href="<?php echo $ayar['iletisim_twitter']?>" class="fab fa-twitter"></a></li>
                                    <?php } if($ayar['iletisim_instagram'] != ""){?>
                                    <li><a href="<?php echo $ayar['iletisim_instagram']?>" class="fab fa-instagram"></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <!-- <?php $ayar = get_option('my_settings'); ?> -->
            <div class="footer-bottom overlay-wraper">
                <div class="overlay-main"></div>
                <div class="constrot-strip"></div>
                <div class="container p-t30">
                    <div class="row">
                        <div class="wt-footer-bot-left">
                            <span class="copyrights-text"><?php echo get_option('my_settings')['site_footer'];?></span>
                        </div>
                        <div class="wt-footer-bot-right">
                            <?php $args = array(
                                'theme_location' => 'footer-menu',
                                'echo' => 'true',
                                'fallback_cb' => 'footer-menu',
                                'depth' => 0,
                                'walker' => '',
                                'items_wrap' => '<ul class="copyrights-nav pull-right">%3$s</ul>',
                            );           
                            wp_nav_menu($args);                  
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>
        
    </div>



<!-- GOOGLE ANALYTICS CODES --> 
<?php echo get_option('my_settings')['site_analytics'];?>


<!-- JAVASCRIPT  FILES ========================================= --> 
<script type="text/javascript"  src="<?php echo $temayolu ?>/js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
<script type="text/javascript"  src="<?php echo $temayolu ?>/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->

<script type="text/javascript"  src="<?php echo $temayolu ?>/js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script type="text/javascript"  src="<?php echo $temayolu ?>/js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->

<script type="text/javascript"  src="<?php echo $temayolu ?>/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->

<script type="text/javascript"  src="<?php echo $temayolu ?>/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script type="text/javascript"  src="<?php echo $temayolu ?>/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script type="text/javascript"  src="<?php echo $temayolu ?>/js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->

<script type="text/javascript" src="<?php echo $temayolu ?>/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->

<script type="text/javascript"  src="<?php echo $temayolu ?>/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->

<script type="text/javascript"  src="<?php echo $temayolu ?>/js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   --> 
<script type="text/javascript"  src="<?php echo $temayolu ?>/js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   --> 

<script type="text/javascript"  src="<?php echo $temayolu ?>/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script type="text/javascript"  src="<?php echo $temayolu ?>/js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->




<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="<?php echo $temayolu ?>/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo $temayolu ?>/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
<script type="text/javascript" src="<?php echo $temayolu ?>/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php echo $temayolu ?>/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo $temayolu ?>/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo $temayolu ?>/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo $temayolu ?>/plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php echo $temayolu ?>/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo $temayolu ?>/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?php echo $temayolu ?>/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo $temayolu ?>/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script type="text/javascript" src="<?php echo $temayolu ?>/js/rev-script-1.js"></script>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="loader">
            <span class="block-1"></span>
            <span class="block-2"></span>
            <span class="block-3"></span>
            <span class="block-4"></span>
            <span class="block-5"></span>
            <span class="block-6"></span>
            <span class="block-7"></span>
            <span class="block-8"></span>
            <span class="block-9"></span>
            <span class="block-10"></span>
            <span class="block-11"></span>
            <span class="block-12"></span>
            <span class="block-13"></span>
            <span class="block-14"></span>
            <span class="block-15"></span>
            <span class="block-16"></span>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->



</body>

</html>
