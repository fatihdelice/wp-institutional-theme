<?php 

// Dosyaların tema yolunu belirtiyoruz.
$temayolu = get_bloginfo('template_directory');
$siteyolu = get_bloginfo('siteurl');

include_once(TEMPLATEPATH.'/codestar-framework/codestar-framework.php');
include_once(TEMPLATEPATH.'/codestar-framework/samples/admin-options.php');


// Temaya custom menü sayfası ekleme fonksiyonu.
add_theme_support('nax-menus');
add_action('init','my_menus');
function my_menus(){
    register_nav_menus(array(
        'header-menu' => 'Header Menü',
        'footer-menu' => 'Footer Menü',
    ));
}


// Temaya öne çıkan içerik ekleme kısmını ekliyoruz.
add_theme_support('post-thumbnails');
add_image_size('onecikan',360,202);
add_image_size('calisan',242,363);
add_image_size('musteri',90,90);
add_image_size('homepage',458,560);

/*
// Menüyü aktif yapma
function nav_active($classes,$item){
    if(in_array('current-menu-item',$classes)){
       $classes[] = 'active ';
    }
    return $classes;
}
add_action('nav_menu_css_class','nav_active',10,2);
*/

// Site içi arama fonksiyonu
function aramaFiltresi($query){
    if($query->is_search && !$query->is_admin){
        $query->set('post_type','post');
    }
    return $query;
} 
add_filter('pre_get_posts', 'aramaFiltresi');

// Pagination include ediyoruz.
function the_pagination($num_pages = 0){
    //if(is_singular()) return;
    global $wp_query;
    if($num_pages != 0){
        $wp_query->max_num_pages = $num_pages;
    }
    if($wp_query->max_num_pages <= 1) return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);

    // for ($i=1; $i <= $max; $i++){
    //     $links[] = $i;
    // }

    if($paged > 1 && $paged < $max){
        $links[] = $paged - 1;
        $links[] = $paged;
        $links[] = $paged + 1;
    } elseif($paged == 1){
        $links[] = $paged;
        $links[] = $paged + 1;
    } elseif($paged == $max){
        $links[] = $paged - 1;
        $links[] = $paged;
    }

    echo '<div class="pagination-bx col-lg-12 clearfix "><ul class = "custom-pagination pagination">';

    if(get_previous_posts_link()){
        printf('<li>%s</li>',get_previous_posts_link());
    }

    if(!in_array(1,$links)){
        $class = 1 == $paged ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>', $class, esc_url(get_pagenum_link(1)), '1');
    }

    sort($links);
    foreach ((array) $links as $link){
        $class = $paged == $link ? ' class="active"' : "";
        printf('<li%s><a href="%s">%s</a></li>', $class,esc_url(get_pagenum_link($link)),$link);
    }

    if(!in_array($max,$links)){
        $class = $max == $paged ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>', $class, esc_url(get_pagenum_link($max)), $max);
    }

    if(get_next_posts_link()){
        printf('<li>%s</li>',get_next_posts_link());
    }

}

add_action('init', 'change_rewrite_rules');
if(!function_exists('change_rewrite_rules')){
    function change_rewrite_rules(){
        global $wp_rewrite;
        $wp_rewrite->pagination_base = 'sayfa';
    }
}


// Temaya yorum formu ekliyoruz.
function custom_comment_form_default_fields($fields){
    $fields = [
        'author' => '<p class="comment-form-author">
        <label for="author">Name <span class="required">*</span></label>
        <input type="text" value="" name="author"  placeholder="Adınız Soyadınız" id="author">
        </p>',
        'email' => '<p class="comment-form-email">
        <label for="email">Email <span class="required">*</span></label>
        <input type="text" value="" placeholder="E-posta Adresiniz" name="email" id="email">
        </p>',
        'comment_field' => '<p class="comment-form-comment">
        <label for="comment">Comment</label>
        <textarea rows="8" name="comment" placeholder="Yorumunuz..." id="comment"></textarea>
        </p>'
    ];
    return $fields;
}

// Yaptığımız formu wordpressin orjinali ile değiştiriyoruz.
add_filter('comment_form_default_fields', 'custom_comment_form_default_fields');



function custom_commentfield_delete($defaults){
if(isset($defaults['comment_field'])){
    $defaults['comment_field'] = '';
}
return $defaults;
}

add_filter('comment_form_defaults', 'custom_commentfield_delete',10,1);



// Custom Posttype eklemek için kullanılan fonksiyon.
add_action('init', 'calisanlar_posttype');
function calisanlar_posttype(){
    $labels = array(
        'name' => _x('Çalışanlar', 'Calisanlar'),
        'singular_name' => _x('Çalışan','Calisan'),
        'menu_name' => _x('Çalışanlar','Calisanlar'),
        'name_admin_bar' => _x('Çalışanlar','Calisanlar'),
        'add_new' => _x('Çalışan Ekle','calisan ekle'),
        'add_new_item' => __('Yeni Çalışan Ekle'),
        'new_item' => __('Yeni Çalışan'),
        'edit_item' => __('Çalışanı Düzenle'),
        'view_item' => __('Çalışanı Görüntüleme'),
        'all_items' => __('Tüm Çalışanlar'),
        'search_items' => __('Çalışanları Ara'),
        'not_found' => __('Çalışan Bulunamadı'),
        'not_found_in_trash' => __('Çalışan Çöp Kutusunda Bulunamadı'),
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Çalışanlar Post Type'),
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'calisanlar',
            'with_front' => false,
            'hierarchical' => true,
            'query_var' => true
        ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'show_in_nav_menus' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-businessman',
        'supports' => array('title', 'editor','thumbnail'),
    );

    register_taxonomy('calisanlar_tag', 'calisanlar',array(
        'hierarchical' => false,
        'label' => __('Çalışanlar Etiket'),
        'singular_name' => __('Etiket'),
        'rewrite' => true,
        'query_var' => true,
    ));


    register_post_type('calisanlar', $args); // Burada "calisanlar" olarak verilen isim oluşturulacak dosyayla aynı olmalıdır. **calisanlar.php
}

// Metabox ekleme fonksiyonu
function calisan_add_metabox(){
    add_meta_box('calisanBilgileri', 'Çalışan Bilgileri', 'calisan_bilgiler', 'calisanlar', 'normal', 'high', null); // normal yerinde side yazarsak ekranın sağına eklenir.
}

add_action("add_meta_boxes", "calisan_add_metabox");
function calisan_bilgiler($object){ 
    echo '<input type="hidden" name="calisanlar_metabox_nonce" value="',wp_create_nonce(basename(__FILE__)),'">'?>
    <div>
        <label for="gorev">Çalışanın Ünvanı</label><br>
        <input type="text" name="unvani" value="<?php if(get_post_meta($object->ID,"unvani",false)) { echo get_post_meta($object->ID,"unvani",false)[0]; }?>" class="regular-text">
    </div>
    <div>
        <label for="facebook">Facebook Linki</label><br>
        <input type="text" name="facebook" value="<?php if(get_post_meta($object->ID,"facebook",false)) { echo get_post_meta($object->ID,"facebook",false)[0]; }?>" class="regular-text">
    </div>
    <div>
        <label for="twitter">Twitter Linki</label><br>
        <input type="text" name="twitter" value="<?php if(get_post_meta($object->ID,"twitter",false)) { echo get_post_meta($object->ID,"twitter",false)[0]; }?>" class="regular-text">
    </div>
    <div>
        <label for="instagram">Instagram Linki</label><br>
        <input type="text" name="instagram" value="<?php if(get_post_meta($object->ID,"instagram",false)) { echo get_post_meta($object->ID,"instagram",false)[0]; }?>" class="regular-text">
    </div>
    <div>
        <label for="youtube">YouTube Adresi</label><br>
        <input type="text" name="youtube" value="<?php if(get_post_meta($object->ID,"youtube",false)) { echo get_post_meta($object->ID,"youtube",false)[0]; }?>" class="regular-text">
    </div>
<?php }


function posttype_save($post_id){
    global $meta_box;
    if (isset($_POST['calisanlar_metabox_nonce']) && !wp_verify_nonce($_POST['calisanlar_metabox_nonce'], __FILE__)){
        return $post_id;
    }

    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
        return $post_id;
    }

    if(isset($_POST['post_type']) == "page"){
        if(!current_user_can('edit_page', $post_id)){
            return $post_id;
        }
    }elseif(!current_user_can('edit_post', $post_id)){
        return $post_id;
    }

    if(isset($_POST['unvani'])){
        update_post_meta($post_id, 'unvani', $_POST['unvani']);
    }
    if(isset($_POST['facebook'])){
        update_post_meta($post_id, 'facebook', $_POST['facebook']);
    }
    if(isset($_POST['twitter'])){
        update_post_meta($post_id, 'twitter', $_POST['twitter']);
    }
    if(isset($_POST['instagram'])){
        update_post_meta($post_id, 'instagram', $_POST['instagram']);
    }
    if(isset($_POST['youtube'])){
        update_post_meta($post_id, 'youtube', $_POST['youtube']);
    }
    if(isset($_POST['name'])){
        update_post_meta($post_id, 'name', $_POST['name']);
    }
    if(isset($_POST['owner'])){
        update_post_meta($post_id, 'owner', $_POST['owner']);
    }


// Yüklenecek dosya tipini pdf olarak belirledik pdf harici yüklemelerde hata döndürdük.
    if(!empty($_FILES['pdf_file']['name'])){
        $supported_types = array("application/pdf");
        $file_type = wp_check_filetype(basename($_FILES['pdf_file']['name']));
        $uploaded_type = $file_type['type'];

        if(in_array($uploaded_type,$supported_types)){
            $upload = wp_upload_bits($_FILES['pdf_file']['name'], null, file_get_contents($_FILES['pdf_file']['tmp_name']));
            if($upload['error'] != 0){
                wp_die("PDF Yüklenirken hata oluştu : ".$upload['error']);
            }else{
                update_post_meta($post_id, 'pdf_file', $upload);
            }
        }else{
            wp_die("Bu Dosya PDF Dosyası Değildir.");
        }
        
    }

    // Yüklenecek dosya tipini word olarak belirledik word harici yüklemelerde hata döndürdük.
    if(!empty($_FILES['word_file']['name'])){
        $supported_types = array("application/pmsword","application/vnd.openxmlformats-officedocument.wordprocessingml.document");
        $file_type = wp_check_filetype(basename($_FILES['word_file']['name']));
        $uploaded_type = $file_type['type'];

        if(in_array($uploaded_type,$supported_types)){
            $upload = wp_upload_bits($_FILES['word_file']['name'], null, file_get_contents($_FILES['word_file']['tmp_name']));
            if($upload['error'] != 0){
                wp_die("Word Yüklenirken hata oluştu : ".$upload['error']);
            }else{
                update_post_meta($post_id, 'word_file', $upload);
            }
        }else{
            wp_die("Bu Dosya Word Dosyası Değildir.");
        }
        
    }

    // Yüklenecek dosya tipini powerpoint olarak belirledik powerpoint harici yüklemelerde hata döndürdük.
    if(!empty($_FILES['powerpoint_file']['name'])){
        $supported_types = array("application/vnd.ms-powerpoint","application/vnd.openxmlformats-officedocument.presentationml.presentation");
        $file_type = wp_check_filetype(basename($_FILES['powerpoint_file']['name']));
        $uploaded_type = $file_type['type'];

        if(in_array($uploaded_type,$supported_types)){
            $upload = wp_upload_bits($_FILES['powerpoint_file']['name'], null, file_get_contents($_FILES['powerpoint_file']['tmp_name']));
            if($upload['error'] != 0){
                wp_die("Power Point Sunumu Yüklenirken hata oluştu : ".$upload['error']);
            }else{
                update_post_meta($post_id, 'powerpoint_file', $upload);
            }
        }else{
            wp_die("Bu Dosya Power Point Sunumu Değildir.");
        }
        
    }


}
add_action("save_post", "posttype_save");


// Müşteri posttype  ekleme fonksiyonu
add_action('init', 'musteri_posttype');
function musteri_posttype(){
    $labels = array(
        'name' => _x('Müşteri Yorumları', 'Musteriler'),
        'singular_name' => _x('Müşteri Yorumu','Musteri Yorumuu'),
        'menu_name' => _x('Müşteri Yorumları','Calisanlar'),
        'name_admin_bar' => _x('Müşteri Yorumları','Calisanlar'),
        'add_new' => _x('Müşteri Yorumu Ekle','calisan ekle'),
        'add_new_item' => __('Yeni Müşteri Yorumu Ekle'),
        'new_item' => __('Yeni Müşteri Yorumu'),
        'edit_item' => __('Müşteri Yorumunu Düzenle'),
        'view_item' => __('Müşteri Yorumu Görüntüleme'),
        'all_items' => __('Tüm Müşteri Yorumları'),
        'search_items' => __('Müşteri Yorumu Ara'),
        'not_found' => __('Müşteri Yorumu Bulunamadı'),
        'not_found_in_trash' => __('Müşteri Yorumu Çöp Kutusunda Bulunamadı'),
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Müşteri Yorumları Post Type'),
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'musteri',
            'with_front' => false,
            'hierarchical' => true,
            'query_var' => true
        ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'show_in_nav_menus' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-comments',
        'supports' => array('title', 'editor','thumbnail'),
    );


    register_post_type('musteri', $args); // Burada "musteri" olarak verilen isim oluşturulacak dosyayla aynı olmalıdır. **calisanlar.php
}


// Başlık ekle kısmını değiştirme fonksiyonu
function title_change($title){
    $screen = get_current_screen();
    if('musteri' == $screen->post_type)
        $title = 'Yorum Yapan Kişinin Adı Soyadı';
    if('calisanlar' == $screen->post_type)
        $title = 'Çalışanın Adı Soyadı';
    return $title;
}
add_filter('enter_title_here', 'title_change');


// Metabox ekleme fonksiyonu
function musteri_add_metabox(){
    add_meta_box('musteriYorumlari', 'Müşteri Ünvanı', 'musteri_yorumlari', 'musteri', 'normal', 'high', null); // normal yerinde side yazarsak ekranın sağına eklenir.
}

add_action("add_meta_boxes", "musteri_add_metabox");

function musteri_yorumlari($object){
    echo '<input type="hidden" name="calisanlar_meta_box_nonce" value="',wp_create_nonce(basename(__FILE__)),'">'?>
    <div>
        <label for="unvani">Müşterinin Ünvanı</label><br>
        <input type="text" name="unvani" value="<?php if(get_post_meta($object->ID,"unvani",false)) { echo get_post_meta($object->ID,"unvani",false)[0]; }?>" class="regular-text">
    </div>

<?php } 



// projeler posttype  ekleme fonksiyonu
add_action('init', 'projeler_posttype');
function projeler_posttype(){
    $labels = array(
        'name' => _x('Projeler', 'Projeler'),
        'singular_name' => _x('Proje','Musteri Yorumuu'),
        'menu_name' => _x('Projeler','Calisanlar'),
        'name_admin_bar' => _x('Projeler','Calisanlar'),
        'add_new' => _x('Proje Ekle','calisan ekle'),
        'add_new_item' => __('Yeni Proje Ekle'),
        'new_item' => __('Yeni Proje'),
        'edit_item' => __('Proje Düzenle'),
        'view_item' => __('Proje Görüntüleme'),
        'all_items' => __('Tüm Projeler'),
        'search_items' => __('Proje Ara'),
        'not_found' => __('Proje Bulunamadı'),
        'not_found_in_trash' => __('Proje Çöp Kutusunda Bulunamadı'),
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Projeler Post Type'),
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'projeler',
            'with_front' => false,
            'hierarchical' => true,
            'query_var' => true
        ),
        'capability_type' => 'post',
        'hierarchical' => true,
        'show_in_nav_menus' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor','thumbnail','category'),
    );
    register_taxonomy('projeler_kategori', 'projeler',array(
        'hierarchical' => true,
        'label' => __('Proje Kategorileri'),
        'singular_name' => __('Proje Kategorisi'),
        'rewrite' => true,
        'query_var' => true,
    ));


    register_post_type('projeler', $args); // Burada "projeler" olarak verilen isim oluşturulacak dosyayla aynı olmalıdır. **calisanlar.php
}

// Metabox ekleme fonksiyonu
function proje_add_metabox(){
    add_meta_box('projeBilgileri', 'Proje Bilgileri', 'proje_bilgileri', 'projeler', 'normal', 'high', null); // normal yerinde side yazarsak ekranın sağına eklenir.
}

add_action("add_meta_boxes", "proje_add_metabox");

function proje_bilgileri($object){
    echo '<input type="hidden" name="calisanlar_meta_box_nonce" value="',wp_create_nonce(basename(__FILE__)),'">'?>
    <div>
        <label for="unvani">Müşteri Adı</label><br>
        <input type="text" name="name" value="<?php if(get_post_meta($object->ID,"name",false)) { echo get_post_meta($object->ID,"name",false)[0]; }?>" class="regular-text">
    </div>
    <div>
        <label for="unvani">Proje Yetkilisi</label><br>
        <input type="text" name="owner" value="<?php if(get_post_meta($object->ID,"owner",false)) { echo get_post_meta($object->ID,"owner",false)[0]; }?>" class="regular-text">
    </div>

<?php } 

// Metabox ekleme fonksiyonu
function dosya_add_metabox(){
    add_meta_box('dosyaBilgileri', 'Dosya Bilgileri', 'dosya_bilgileri', 'projeler', 'normal', 'high', null); // normal yerinde side yazarsak ekranın sağına eklenir.
}

add_action("add_meta_boxes", "dosya_add_metabox");


function dosya_bilgileri($object){
    echo '<input type="hidden" name="calisanlar_meta_box_nonce" value="',wp_create_nonce(basename(__FILE__)),'">'?>
    <div>
        <label for="unvani">PDF Dosyası : <?php if(get_post_meta($object->ID,"pdf_file",false)) { echo get_post_meta($object->ID,"pdf_file",true)['url']; }?></label><br>
        <input type="file" name="pdf_file" class="regular-text">
    </div>
    <div>
        <label for="unvani">Word Dosyası : <?php if(get_post_meta($object->ID,"word_file",false)) { echo get_post_meta($object->ID,"word_file",true)['url']; }?></label><br>
        <input type="file" name="word_file" class="regular-text">
    </div>
    <div>
        <label for="unvani">Power Point Dosyası : <?php if(get_post_meta($object->ID,"powerpoint_file",false)) { echo get_post_meta($object->ID,"powerpoint_file",true)['url']; }?></label><br>
        <input type="file" name="powerpoint_file" class="regular-text">
    </div>

<?php } 

function update_edit_form(){
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'update_edit_form');

include (TEMPLATEPATH . '/gallery-metabox-master/gallery.php');



// Custom Posttype eklemek için kullanılan fonksiyon.
add_action('init', 'musterilist_posttype');
function musterilist_posttype(){
    $labels = array(
        'name' => _x('Emailler', 'musteri-email'),
        'singular_name' => _x('Email','musteri-email'),
        'menu_name' => _x('Müşteri Portföy','musteri-email'),
        'name_admin_bar' => _x('Müşteri Portföy','musteri-email'),
        'all_items' => __('Tüm Emailler'),
        'search_items' => __('Email Ara'),
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Müşteri Email Post Type'),
        'public' => false,
        'has_archive' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'portfoy',
            'with_front' => false,
            'hierarchical' => true,
            'query_var' => true
        ),
        'capability_type' => 'post',
        'capabilities' => array(
            'create_posts' => 'do_not_allow' // false <==> do not allow
        ),
        'map_meta_cap' => true,
        'hierarchical' => false,
        'show_in_nav_menus' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-email',
        'supports' => array('title'),
    );

    register_post_type('portfoy', $args); // Burada "portfoy" olarak verilen isim oluşturulacak dosyayla aynı olmalıdır. **calisanlar.php
}

if(isset($_POST['news-letter'])){
    /*
    $data = array();
    $data['post_title'] = "Yeni Haber";
    $data['post_content'] = "İçerik Bölümü Burası";
    $data['post_status'] = "publish";
    $data['post_author'] = 1;
    $data['post_category'] = array(1,13);
    */


    $data = array();
    $data['post_title'] = $_POST['news-letter'];
    $data['post_status'] = "publish";
    $data['post_type'] = "portfoy";

    wp_insert_post($data);
}

?>