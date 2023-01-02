<?php include (TEMPLATEPATH . '/header.php'); ?>
<div class="page-content">
        
        <!-- SLIDER START -->
        <div class="main-slider style-two default-banner">
               <div class="tp-banner-container">
                <div class="tp-banner" >
                    <!-- START REVOLUTION SLIDER 5.4.1 -->
                    <div id="rev_slider_1077_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="scroll-effect136" data-source="gallery" style="background-color:#111111;padding:0px;">
                    <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                        <div id="rev_slider_1077_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                            <ul>	
                                <!-- SLIDE  -->
                                <?php $rs = 100; foreach ($ayar['slider'] as $slide) { ?>
                                <li data-index="rs-<?php echo $rs ?>" data-transition="slideoverhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"  data-thumb="<?php echo $slide['slider_image']['thumbnail'] ?>"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="<?php echo $slide['slider_baslik_1'];?>" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="<?php echo $slide['slider_image']['url'] ?>"  alt="<?php echo $slide['slider_image']['alt'] ?>"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper  " 
                                        id="slide-<?php echo $rs ?>-layer-1" 
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                        data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
                                        data-width="full"
                                        data-height="['400','400','400','550']"
                                        data-whitespace="nowrap"
                                        data-type="shape" 
                                        data-basealign="slide" 
                                        data-responsive_offset="off" 
                                        data-responsive="off"
                                        data-frames='[{"from":"opacity:0;","speed":100,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":0,"to":"opacity:0;","ease":"nothing"}]'
                                        data-textAlign="['left','left','left','left']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        style="z-index: 5;text-transform:left;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                        border-width:0px;background:linear-gradient(to top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.4) 100%);cursor:default;"> 
                                    </div>
                                    
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper  " 
                                        id="slide-<?php echo $rs ?>-layer-2" 
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
                                        data-width="full"
                                        data-height="['400','400','400','550']"
                                        data-whitespace="nowrap"
                                        data-type="shape" 
                                        data-basealign="slide" 
                                        data-responsive_offset="off" 
                                        data-responsive="off"
                                        data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                        data-textAlign="['left','left','left','left']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        style="z-index: 5;text-transform:left;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                        border-width:0px;background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 100%);cursor:default;"> 
                                    </div>
                            
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption BigBold-Title   tp-resizeme" 
                                        id="slide-<?php echo $rs ?>-layer-3" 
                                        data-x="['left','left','left','left']" data-hoffset="['50','50','30','17']" 
                                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['110','110','180','180']" 
                                        data-fontsize="['90','70','50','30']"
                                        data-lineheight="['100','90','60','60']"
                                        data-fontweight="['800','800','800','800']"
                                        data-width="['none','none','none','400']"
                                        data-height="none"
                                        data-whitespace="['nowrap','nowrap','nowrap','normal']"
                             
                                        data-type="text" 
                                        data-basealign="slide" 
                                        data-responsive_offset="off" 
                            
                                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},
                                        {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                        data-textAlign="['left','left','left','left']"
                                        data-paddingtop="[10,10,10,10]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[10,10,10,10]"
                                        data-paddingleft="[0,0,0,0]"
                            
                                        style="z-index: 6; 
                                        text-transform:uppercase;
                                        color:#fff;
                                        font
                                        "><span class="text-primary">  <?php echo $slide['slider_baslik_1'];?></span> <?php echo $slide['slider_baslik_1_2'];?> </div>
                            
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption BigBold-SubTitle  " 
                                        id="slide-<?php echo $rs ?>-layer-4" 
                                        data-x="['left','left','left','left']" data-hoffset="['55','55','33','20']" 
                                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','1','74','78']" 
                                        data-fontsize="['15','15','15','13']"
                                        data-lineheight="['24','24','24','20']"
                                        data-width="['410','410','410','280']"
                                        data-height="['60','100','100','100']"
                                        data-whitespace="normal"
                             
                                        data-type="text" 
                                        data-basealign="slide" 
                                        data-responsive_offset="off" 
                                        data-responsive="off"
                                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                        data-textAlign="['left','left','left','left']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                            
                                        style="z-index: 7; 
                                        color:#fff;
                                        "><?php echo $slide['slider_baslik_2'];?>
                                        </div>
                            
                                    <!-- LAYER NR. 5 -->
                                    <?php if($slide['slider_buton_switch'] == 1) { ?>
                                    <div class="tp-caption BigBold-Button rev-btn " 
                                        id="slide-<?php echo $rs ?>-layer-5" 
                                        data-x="['left','left','left','left']" data-hoffset="['480','480','30','20']" 
                                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['35','35','35','35']"  
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"
                             
                                        data-type="button" 
                                        data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                                        data-basealign="slide" 
                                        data-responsive_offset="off" 
                                        data-responsive="off"
                                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                        data-textAlign="['left','left','left','left']"
                                        data-paddingtop="[15,15,15,15]"
                                        data-paddingright="[50,50,50,50]"
                                        data-paddingbottom="[15,15,15,15]"
                                        data-paddingleft="[50,50,0,0]"
                            
                                        style="z-index: 8; "><a href="<?php echo $slide['slider_buton_url'];?>" class="site-button outline white"><?php echo $slide['slider_buton_text'];?></a> 
                                    </div>
                                    <?php } ?>
                                    
                                </li>
                                <?php $rs +=100;} ?>
                            </ul>
                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
                        </div>
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </div>
        </div>
        <!-- SLIDER END -->
        
        <!-- ABOUT COMPANY SECTION START -->
        <?php if($ayar['homepage']['homepage_hakkimizda_switch'] == 1) {?>
        <div class="section-full p-tb100">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-6 col-xs-100pc">
                        <div class="about-com-pic">
                            <img src="<?php echo $ayar['homepage']['homepage_hakkimizda_image']['url']; ?>" alt="Hakkımızda" class="img-responsive"/>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-6 col-xs-100pc">
                        <div class="section-head text-left">
                            <h2 class="text-uppercase"><?php echo $ayar['homepage']['homepage_hakkimizda_baslik']; ?></h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator style-square">
                                    <span class="separator-left bg-primary"></span>
                                    <span class="separator-right bg-primary"></span>
                                </div>
                            </div>
                            <?php echo $ayar['homepage']['homepage_hakkimizda_description']; ?>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="about-types row">
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc p-tb20">
                                <div class="wt-icon-box-wraper left">
                                    <div class="icon-sm text-primary">
                                        <a href="#" class="icon-cell p-t5 center-block"><i class="<?php echo $ayar['homepage']['homepage_hakkimizda_alan_1_icon']; ?>" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase m-b0"><?php echo $ayar['homepage']['homepage_hakkimizda_alan_1_text']; ?></h5>
                                        <?php echo $ayar['homepage']['homepage_hakkimizda_alan_1_aciklama']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc p-tb20 ">
                                <div class="wt-icon-box-wraper left">
                                    <div class="icon-sm text-primary">
                                        <a href="#" class="icon-cell p-t5 center-block"><i class="<?php echo $ayar['homepage']['homepage_hakkimizda_alan_2_icon']; ?>" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase m-b0"><?php echo $ayar['homepage']['homepage_hakkimizda_alan_2_text']; ?></h5>
                                        <?php echo $ayar['homepage']['homepage_hakkimizda_alan_2_aciklama']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc p-tb20 ">
                                <div class="wt-icon-box-wraper left">
                                    <div class="icon-sm text-primary">
                                        <a href="#" class="icon-cell p-t5 center-block"><i class="<?php echo $ayar['homepage']['homepage_hakkimizda_alan_3_icon']; ?>" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase m-b0 "><?php echo $ayar['homepage']['homepage_hakkimizda_alan_3_text']; ?></h5>
                                        <?php echo $ayar['homepage']['homepage_hakkimizda_alan_3_aciklama']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc p-tb20 ">
                                <div class="wt-icon-box-wraper left">
                                    <div class="icon-sm text-primary">
                                        <a href="#" class="icon-cell p-t5 center-block"><i class="<?php echo $ayar['homepage']['homepage_hakkimizda_alan_4_icon']; ?>" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase m-b0"><?php echo $ayar['homepage']['homepage_hakkimizda_alan_4_text']; ?></h5>
                                        <?php echo $ayar['homepage']['homepage_hakkimizda_alan_4_aciklama']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        <?php } ?>
        <!-- ABOUT COMPANY SECTION END -->   
                 
        <!-- LATEST PROJECT SECTION START -->
        <?php if($ayar['homepage']['homepage_proje_switch'] == 1) {?>
        <div class="section-full p-tb80 bg-no-repeat bg-black" style="background-image:url(images/background/bg5.jpg);">
            <div class="overlay-main"></div>
            
            <!-- IMAGE CAROUSEL START -->
            
            <!-- TITLE START -->
            <div class="container">
                <div class="section-head">
                    <div class="container">
                        <h2 class="text-uppercase text-white"><?php echo $ayar['homepage']['homepage_proje_baslik']; ?></h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square has-bg">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TITLE END -->
            <div class="section-content">
                <!-- CAROUSEL -->
                <div class="section-content ">
                    <div class="owl-carousel home-carousel-1 mfp-gallery gallery owl-btn-vertical-center">
                        <?php 
                        $query = new WP_Query(array(
                            'post_type' => 'projeler',
                            'post_status' => 'publish',
                            'order_by' => 'ID',
                            'order' => 'DESC',
                            'showposts' => $ayar['homepage']['homepage_proje_number'],
                        ));
                        while($query->have_posts()){
                            $query->the_post();
                            $post_id = get_the_ID();
                        ?>
                        <!-- COLUMNS -->
                        <div class="item">
                            <div class="flip-container">
                                <div class="wt-box">
                                    <div class="wt-thum-bx">
                                        <?php echo get_the_post_thumbnail($post_id,array(500,313)); ?>
                                    </div>
                                    <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                        <div class="wt-info-media-zoom">
                                            <a href="<?php echo $temayolu ?>/images/latest-projects/large/pic1.jpg"  class="mfp-link">
                                                <i class="fa fa-search-plus font-24 p-a10"></i>
                                            </a>
                                        </div>
                                        <a href="<?php the_permalink();?>">
                                            <div class="wt-info-text p-a30">
                                                <span><i  class="flaticon-golden-gate-bridge text-primary"></i></span>
                                                <h3 class="text-uppercase"><?php the_title(); ?></h3>                                                
                                            </div>
                                        </a>
                                     </div>
                                </div>
                            </div>
                        </div>
                        <?php } wp_reset_query(); ?> 
                    </div>
                </div>
            </div>
         </div>
       
         <?php } ?>
         <!-- LATEST PROJECT SECTION END -->
      
        <!-- WHY CHOOSE US SECTION START  -->
        <?php if($ayar['homepage']['homepage_neler_yapariz_switch'] == 1) {
            include(TEMPLATEPATH.'/neler-yapariz.php');
        }?>
        <!-- WHY CHOOSE US SECTION END -->              
       
        <!-- COMPANY DETAIL SECTION START -->
        <?php if($ayar['homepage']['homepage_ikonlar_switch'] == 1) {
                    include(TEMPLATEPATH.'/ikonlar.php');
        } ?>
        <!-- COMPANY DETAIL SECTION End --> 
        
        <!-- OUR TEAM MEMBER SECTION START -->
        <?php if($ayar['homepage']['homepage_calisanlar_switch'] == 1) {?>
        <div class="section-full wt-our-team bg-white p-t80 p-b50">
            <div class="container">
            
                <!-- TITTLE START -->
                <div class="section-head text-center">
                    <h2 class="text-uppercase"><?php echo $ayar['homepage']['homepage_calisanlar_baslik']; ?></h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left bg-primary"></span>
                            <span class="separator-right bg-primary"></span>
                        </div>
                    </div>
                    <?php echo $ayar['homepage']['homepage_calisanlar_aciklama']; ?>
                </div>
                <!-- TITLE END -->
                
                <div class="section-content">
                    <div class="row">
                    
                        <?php
                        $query = new WP_Query(array(
                            'post_type' => 'calisanlar',
                            'post_status' => 'publish',
                            'order_by' => 'ID',
                            'order' => 'DESC',
                            'showposts' => $ayar['homepage']['homepage_calisanlar_number'], 
                        ));
                        while($query->have_posts()){
                            $query->the_post();
                            $post_id = get_the_ID();
                        ?>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                            <div class="wt-team-four">
                                <div class="wt-team-media">
                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post_id,'calisan')?></a>
                                </div>
                                <div class="wt-team-info">
                                    <div class="wt-team-skew-block">
                                        <div class="social-icons-outer p-a20">
                                            <ul class="social-icons social-square social-dark white-border m-b0">
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
                                     <div class="p-a20">
                                        <h4 class="wt-team-title text-uppercase"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <p><?php echo get_post_meta($post_id,"unvani",true); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            
            </div>
        </div>
        <?php } ?>
        <!-- OUR TEAM MEMBER SECTION End -->
        
        <!-- SECTION CONTENT START -->
        <?php if($ayar['homepage']['homepage_sss_switch'] == 1 or $ayar['homepage']['homepage_grafik_switch'] == 1) {?>
        <div class="section-full bg-secondry no-col-gap">
            
            <div class="container-fluid">
                    
                    <div class="row">
                        <?php if($ayar['homepage']['homepage_sss_switch'] == 1) {?>
                        <div class="col-md-6">
                            <div class="section-content  p-tb50 p-r30">
                                <div class="wt-left-part">
                                    <div class="section-head">
                                        <h2 class="text-white"> <?php echo $ayar['sss_baslik']?></h2>
                                        <div class="wt-separator-outer">
                                            <div class="wt-separator style-square has-bg">
                                                <span class="separator-left bg-primary"></span>
                                                <span class="separator-right bg-primary"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-accordion acc-bg-primary acc-has-bg" id="accordion6">
                                    
                                    <?php  $a=1 ;foreach($ayar['sorular'] as $key) {?>
                                        <div class="panel wt-panel">
                                        
                                            <div class="acod-head <?php if($a == 1) echo 'acc-actives';?>">
                                                 <h6 class="acod-title text-uppercase">
                                                    <a data-toggle="collapse" href="#collapseOne<?php echo $a; ?>" data-parent="#accordion6" ><i class="<?php echo $key['sorular_fieldset']['sorular_fieldset_ikon']; ?>"></i>
                                                        <?php echo $key['sorular_fieldset']['sorular_fieldset_soru']; ?>
                                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                 </h6>
                                            </div>
                                            
                                            <div id="collapseOne<?php echo $a; ?>" class="acod-body collapse <?php if($a == 1) echo 'in';?>">
                                                <div class="acod-content p-tb15"><?php echo $key['sorular_fieldset']['sorular_fieldset_cevap']; ?></div>
                                            </div>
                                            
                                        </div>
                                    <?php $a+=1;} ?>
                                    </div>
                                </div>
                            </div>                               
                        </div>
                        <?php } if($ayar['homepage']['homepage_grafik_switch'] == 1) {?>
                        <div class="col-md-6">
                            <div class="section-content overlay-wraper p-tb50 p-l30 bg-cover"  style="background-image:url(<?php echo $temayolu?>/images/background/bg9.jpg);">
                                <div class="overlay-main bg-black opacity-07"></div>
                                <div class="wt-right-part">
                                    <div class="section-head">
                                        <h2 class="text-white"><?php echo $ayar['grafik_baslik']?></h2>
                                        <div class="wt-separator-outer">
                                            <div class="wt-separator style-square has-bg">
                                                <span class="separator-left bg-primary"></span>
                                                <span class="separator-right bg-primary"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php foreach ($ayar['grafik_bilgi'] as $key) { ?>
                                    <span class="progressText text-white"><B><?php echo $key['grafik_bilgi_fieldset']['grafik_bilgi_fieldset_text']?></B></span>
                                    <div class="progress wt-probar-1 with-overlay m-b30">
                                        <div class="progress-bar bg-primary " role="progressbar" aria-valuenow="<?php echo $key['grafik_bilgi_fieldset']['grafik_bilgi_fieldset_number']?>" aria-valuemin="0" aria-valuemax="100" >
                                            <span  class="popOver" data-toggle="tooltips" data-placement="top" title="<?php echo $key['grafik_bilgi_fieldset']['grafik_bilgi_fieldset_number']?>%"></span>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>                                
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                
            </div>
        </div>
        <?php } ?>
        <!-- SECTION CONTENT  END --> 
                 
        <!-- LATEST BLOG SECTION START -->
        <?php if($ayar['homepage']['homepage_blog_switch'] == 1) {?>
        <div class="section-full latest-blog bg-gray p-t80 p-b50">
            <div class="container">
                <!-- TITLE -->
                <div class="section-head text-center">
                    <h2 class="text-uppercase"><?php echo $ayar['homepage']['homepage_blog_baslik'] ?></h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left bg-primary"></span>
                            <span class="separator-right bg-primary"></span>
                        </div>
                    </div>
                    <?php echo $ayar['homepage']['homepage_blog_aciklama'] ?>
                </div>
                <!-- TITLE -->
                
                <div class="section-content ">
                    <div class="row equal-wraper">
                        <?php
                        $query = new WP_Query(array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'order_by' => 'ID',
                            'order' => 'DESC',
                            'showposts' => $ayar['homepage']['homepage_blog_number'],
                        ));
                        while($query -> have_posts()){
                            $query -> the_post();
                            $post_id = get_the_ID();

                        ?>
                        <!-- COLUMNS  -->
                        <div class="col-md-4 col-sm-4">
                            <div class="blog-post latest-blog-1 date-style-2">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="<?php the_permalink(); ?>"><img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'onecikan')[0]; ?>" alt="<?php the_title(); ?>"></a>
                                </div>
                                <div class="wt-post-info p-a30 p-b20 bg-white">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date"><i class="fa fa-calendar"></i><strong><?php echo get_the_date('d F'); ?></strong> <span> <?php echo get_the_date('Y'); ?></span></li>
                                            <li class="post-author"><i class="fa fa-user"></i>Yazar <a href="javascript:;"><?php the_author(); ?></a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;"><?php echo get_comments_number(); ?> Yorum</a> </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- LATEST BLOG SECTION END -->         
        
        <!-- TESTIMONIAL SECTION START -->
        <?php if($ayar['homepage']['homepage_musteri_switch'] == 1) {?>
        <div class="section-full p-t80 p-b50 overlay-wraper bg-parallax" data-stellar-background-ratio="0.5" style="background-image:url(<?php echo $temayolu ?>/images/background/bg2.jpg);">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="section-head text-white text-center">
                    <h2 class="text-uppercase">Müşteri Yorumları</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square has-bg">
                            <span class="separator-left bg-primary"></span>
                            <span class="separator-right bg-primary"></span>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="owl-carousel testimonial-three">
                    <?php 
                    $query = new WP_Query(array(
                        'post_type' => 'musteri',
                        'post_status' => 'publish',
                        'order_by' => 'ID',
                        'order' => 'DESC',
                        'showposts' => 4,
                        'offset' => 0,
                    ));
                    while($query->have_posts()){
                        $query->the_post();
                        $post_id = get_the_ID();
                    ?>
                        <div class="item">
                            <div class="testimonial-3 testimonial-bg">
                                <div class="quote-left"></div>
                                <div class="testimonial-text">
                                    <p><?php echo $post->post_content; ?></p>
                                </div>
                                <div class="testimonial-detail">
                                    <strong class="testimonial-name"><?php the_title(); ?></strong>
                                    <span class="testimonial-position"><?php echo get_post_meta($post_id,"unvani",false)[0]; ?></span>
                                </div>
                                <div class="testimonial-pic radius shadow"><img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'onecikan')[0]; ?>" alt="<?php the_title(); ?>" alt="<?php the_title();?>"></div>
                            </div>
                        </div>
                    <?php } wp_reset_query();?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- TESTIMONIAL  SECTION END -->
        
        <!-- OUR CLIENT SLIDER START -->
        <?php if($ayar['homepage']['homepage_musteri_switch'] == 1) {?>
        <div class="section-full p-t80 p-b50">
            <div class="container">
            
                <!-- TITLE START -->
                <div class="section-head text-center">
                    <h2 class="text-uppercase"><?php echo $ayar['homepage']['homepage_referans_baslik'] ?></h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left bg-primary"></span>
                            <span class="separator-right bg-primary"></span>
                        </div>
                    </div>
                    <?php echo $ayar['homepage']['homepage_referans_aciklama'] ?>
                </div>
                <!-- TITLE END -->
                <?php $logolar = $ayar['homepage']['homepage_referans_galeri'];
                $logolar = explode(',', $logolar); ?>
                <!-- IMAGE CAROUSEL START -->
                <div class="section-content">
                    <div class="owl-carousel client-logo-carousel">
                    
                    <?php foreach ($logolar as $logo) {?>
                        <!-- COLUMNS  --> 
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="javascript:void(0)"><img src="<?php echo wp_get_attachment_image_src($logo)[0]; ?>" alt=""></a>
                                </div>
                            </div>
                        </div>                       
                    <?php } ?>
                    </div>
                </div>
                <!-- IMAGE CAROUSEL START -->
            </div>
        
        </div>
        <?php } ?>
        <!-- OUR CLIENT SLIDER END -->             
          
    </div>

<?php include (TEMPLATEPATH . '/footer.php'); ?>