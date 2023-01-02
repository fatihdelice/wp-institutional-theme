<?php /* Template Name: Projeler Sayfası */
include (TEMPLATEPATH. '/header.php') ?>
<div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/Portfolio.jpg);">
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
                        <li><?php the_title();?></li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->
            
            <!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b50">
            
                <?php $kategoriler = get_Terms(array(
                    'taxonomy' => 'projeler_kategori',
                    'hide_empty' => true,
                ))?>
                <!-- PAGINATION START -->
                <div class="filter-wrap p-a15">
                    <ul class="masonry-filter link-style  text-uppercase">
                        <li class="active"><a data-filter="*" href="#">Hepsi</a></li>
                        <?php foreach ($kategoriler as $kategori) {?>
                            <li><a data-filter=".<?php echo $kategori->slug; ?>" href="#"><?php echo $kategori->name ?></a></li>
                        <?php }?>
                    </ul>
                </div>
                <!-- PAGINATION END -->
            
                <!-- GALLERY CONTENT START -->
                 <div class="portfolio-wrap mfp-gallery no-col-gap clearfix">
                     <div class="container-fluid">
                 	      <div class="row">
                                <!-- COLUMNS -->
                                <?php 
                                $query = new WP_Query(array(
                                    'post_type' => 'projeler',
                                    'post_status' => 'publish',
                                    'order_by' => 'ID',
                                    'order' => 'DESC',
                                    'showposts' => -1,
                                ));
                                while($query->have_posts()){
                                    $query->the_post();
                                    $post_id = get_the_ID();
                                    $term = get_the_terms($post_id,'projeler_kategori');
                                ?>
                                    <div class="masonry-item <?php foreach($term as $key) echo $key->slug.' '; ?> col-lg-3 col-md-6 col-sm-6">
                                        <div class="wt-box">
                                            <div class="wt-thum-bx wt-img-overlay2 wt-img-effect zoom">
                                                <img src="<?php echo $temayolu ?>/images/portfolio/pic1.jpg" alt="">
                                                <!-- <?php echo get_the_post_thumbnail($post_id,array(500,313)); ?>  ekran görüntüsünü çekmek için kullanılan kod-->
                                                <div class="wt-info-has p-a20">
                                                <div class="wt-info p-tb10">
                                                    <h4 class="m-a0"><?php the_title(); ?></h4>
                                                </div>
                                                <div class="wt-info-has-text"><?php the_excerpt(); ?></div>
                                                <a href="<?php the_permalink(); ?>" class="site-button button-sm ">Devamı  <i class="fa fa-angle-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                  
                                <?php } wp_reset_query(); ?>                                                                                          
                            </div>
            			</div>
                    </div>
                <!-- GALLERY CONTENT END -->
            
            </div>
            <!-- SECTION CONTENT END  -->

        </div>
<?php include (TEMPLATEPATH. '/footer.php') ?>