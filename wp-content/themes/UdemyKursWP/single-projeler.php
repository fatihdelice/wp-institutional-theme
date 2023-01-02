<?php include (TEMPLATEPATH. '/header.php') ?>

<div class="page-content  bg-white">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(<?php echo $temayolu ?>/images/banner/services.jpg);">
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
                        <li><a href="<?php echo get_home_url();?>"><i class="fa fa-home"></i> Ana Sayfa</a></li>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END --> 
                              
            <!-- SECTION CONTENT -->         
            <div class="section-full  p-t80 p-b50  ">
                <div class="container  bg-white ">
                        <div class="row">
                        <!-- LEFT PART -->
                        <div class="col-md-3 col-sm-3 p-tb15">
                        <?php $pdf = get_post_meta($post->ID,'pdf_file',true);
                        $word = get_post_meta($post->ID,'word_file',true);
                        $ppt = get_post_meta($post->ID,'powerpoint_file',true); 
                        if(empty($pdf) && empty($word) && empty($ppt)){ 
                            //echo "";
                        }else{ ?>
                            <!-- BROCHURES -->
                            <div class="wt-box m-b30">
                                <div class="text-left m-b20">
                                         <h4>Broşür İndir</h4>
                                         <div class="wt-separator-outer">
                                             <div class="wt-separator style-square">
                                               <span class="separator-left bg-primary"></span>
                                               <span class="separator-right bg-primary"></span>
                                           </div>
                                        </div>
                                     </div>
                                <?php if(!empty($pdf)){ ?>
                                <div class="wt-icon-box-wraper left bdr-1 bdr-gray p-a15 m-b15">
                                    <a href="<?php echo $pdf['url']; ?>" download="<?php echo get_bloginfo(); ?>" class="btn-block">
                                        <span class="text-black m-r10"><i class="fa fa-file-pdf-o"></i></span>
                                        <strong class="text-uppercase text-black">PDF İNDİR</strong>
                                    </a>
                                </div>
                                <?php } if(!empty($word)){?>
                                <div class="wt-icon-box-wraper left bdr-1 bdr-gray p-a15 m-b15">
                                    <a href="<?php echo $word['url']; ?>" class="btn-block">
                                        <span class="text-black m-r10"><i class="fa fa-file-word-o"></i></span>
                                        <strong class="text-uppercase text-black"> WORD İNDİR</strong>
                                    </a>
                                </div>
                                <?php } if(!empty($ppt)){?>
                                <div class="wt-icon-box-wraper left bdr-1 bdr-gray p-a15 m-b15">
                                    <a href="<?php echo $ppt['url']; ?>" class="btn-block">
                                        <span class="text-black m-r10"><i class="fa fa-file-powerpoint-o"></i></span>
                                        <strong class="text-uppercase text-black">PPT İNDİR</strong>
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                            <?php } ?>
                            <!-- WHAT WE DO -->
                            <div class="wt-nav-block m-b30">
                            <?php $kategoriler = get_Terms(array(
                                'taxonomy' => 'projeler_kategori',
                                'hide_empty' => true,
                            ))?>
                                <h2 class="wt-nav-title">Kategoriler</h2>
                                <ul class="wt-nav wt-nav-pills">
                                    <?php foreach ($kategoriler as $kategori) { ?>
                                        <li><a href="javascript:void(0);"><?php echo $kategori->name; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>   
                                                         
                            <!-- CONTACT US -->
                            <div class="widget bg-white  widget_getintuch">
                                <h4 class="widget-title">Proje Bilgileri</h4>
                                <?php $term = get_the_terms($post->ID,'projeler_kategori'); 
                                $count = count($term);
                                $a=1?>
                                <ul>
                                  <li><i class="fa fa-calendar"></i><strong>Yayınlanma Tarihi</strong><?php echo get_the_date('d M Y'); ?></li>
                                  <li><i class="fa fa-user"></i><strong>Müşteri Adı</strong><?php echo get_post_meta($post->ID,'name',true); ?></li>
                                  <li><i class="fa fa-ship"></i><strong>Proje Yapımcısı</strong><?php echo get_post_meta($post->ID,'owner',true); ?></li>
                                  <li><i class="fa fa-ticket"></i><strong>Proje Kategorisi</strong>
                                    <?php foreach($term as $key) {
                                        
                                        echo $key->name;
                                        if($a == $count){
                                            echo "";
                                        }else{
                                            echo '-';
                                        }
                                        $a++;
                                    } 
                                    ?>
                                  </li>
                                </ul>
                            </div>
                        </div>
                        <!-- LEFT PART --> 
                        
                        <!-- RIGHT PART -->
                        <div class="col-md-9 col-sm-9 p-tb10">
                            <!-- BLOG POST CAROUSEL -->
                            <?php $images = get_post_meta($post->ID, 'vdw_gallery_id', true); ?>
                             <div class="section-content ">
                                <?php if(!empty($images)){ ?>
                                    <div class="owl-carousel service-detail-carousel owl-btn-vertical-center owl-dots-bottom-center">
                                    <?php foreach ($images as $image) { ?>
                                        <div class="item">
                                            <div class="aon-thum-bx">
                                                <img src="<?php echo wp_get_attachment_image_src($image,'full')[0]; ?>" alt="<?php the_title(); ?>">
                                            </div>
                                        </div>                                        
                                    <?php } ?>
                                    
                                    </div>
                                <?php } ?>
                                <div class="wt-box">
                                	<h2><?php the_title();?></h2>
                                    <?php echo $post->post_content;?>
                                </div>
                             </div>    
                         </div>
                        <!-- RIGHT PART -->
                    </div>
                </div>
             </div>
            <!-- SECTION CONTENT END -->  
            
        <!-- CONTENT END -->
        </div>

<?php include (TEMPLATEPATH. '/footer.php') ?>