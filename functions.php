<?php

/*
=============================================================
  Enqueue Scripts and Styles
=============================================================
*/
function theme_enqueue_scripts() {
    //CSS

     wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
     wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css', array(), '3.3.4', 'all');
     wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), '3.3.4', 'all');
     wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/css/jquery-ui.css', array(), '3.3.4', 'all');
     wp_enqueue_style('awesome', get_template_directory_uri() . '/css/awesome.css', array(), '5.12.0', 'all');
     wp_enqueue_style('slick',get_template_directory_uri() . '/css/slick.css', array(), '3.3.4', 'all');
    //  wp_enqueue_style('slick-theme',get_template_directory_uri() . '/css/slick-theme.css', array(), '3.3.4', 'all');

    //  wp_enqueue_style('loco',get_template_directory_uri() . '/css/locomotive-scroll.css', array(), '3.3.4', 'all');

     wp_enqueue_style('stylesheet', get_template_directory_uri() . '/css/stylesheet.css', array(), '3.3.4', 'all');

   	//JS
     wp_enqueue_script('jquery-min', get_stylesheet_directory_uri() . '/js/jquery-min.js', array('jquery'), false);
     wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false);
     wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/js/slick.js', array('jquery'), false);
     wp_enqueue_script('magnific-popup', get_stylesheet_directory_uri() . '/js/magnific-popup.js', array('jquery'), false);
     wp_enqueue_script('jquery-ui.min', get_stylesheet_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), false);
    //  wp_enqueue_script('jquery-parallax', get_stylesheet_directory_uri() . '/js/jquery.parallax.js', array('jquery'), false);
    //  wp_enqueue_script('parallax-min', get_stylesheet_directory_uri() . '/js/parallax.min.js', array('jquery'), false);

     wp_enqueue_script('waypoints', get_stylesheet_directory_uri() . '/js/jquery.waypoints.js', array('jquery'), false);
    //  wp_enqueue_script('sticky-min', get_stylesheet_directory_uri() . '/js/waypoint.js', array('jquery'), false);
     wp_enqueue_script('scrollify', get_stylesheet_directory_uri() . '/js/jquery.scrollify.js', array('jquery'), false);
    //  wp_enqueue_script( 'locomotive', 'https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js', array(), false, true );
    //  wp_enqueue_script( 'gasp', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js', array(), false, true );
     wp_enqueue_script( 'scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.min.js', array(), false, true );
    //  wp_enqueue_script('waypoint', get_stylesheet_directory_uri() . '/js/waypoint.js', array('jquery'), false);
     wp_enqueue_script('sticky', get_stylesheet_directory_uri() . '/js/sticky.js', array('jquery'), false);
     wp_enqueue_script( 'bannerscript', get_stylesheet_directory_uri() . '/js/bannerscript.js', array(), false, true );

    //  wp_enqueue_script( 'luxy', get_stylesheet_directory_uri() . '/js/luxy.js', array(), false, true );
     wp_enqueue_script( 'aos', get_stylesheet_directory_uri() . '/js/aos.js', array(), false, true );
     wp_enqueue_script('script-jquery', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), false);

 }
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');



/*
=============================================================
  Hide admin bar
=============================================================
*/
 function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
 }
 add_action('get_header', 'remove_admin_login_header');

function remove_admin_bar(){
    // if (!current_user_can('administrator') && !is_admin()) {
      show_admin_bar(false);
    // }
}
add_action('after_setup_theme', 'remove_admin_bar');


/*
=============================================================
  Register Menus
=============================================================
*/
function register_my_menus() {
    add_theme_support('menus');
    register_nav_menu('primary','Primary header navigation');
    register_nav_menu('primary two','Primary two header navigation');
    register_nav_menu('secondary','Secondary footer navigation');
    register_nav_menu('secondary two','Secondary two footer navigation');
}
add_action('init', 'register_my_menus');


/*
===================================
  Theme support function
===================================
*/
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'audio', 'gallery', 'status'));
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('align-wide');


/*
=============================================================
  Custom post type for Experiences  section
=============================================================
*/
function post_type_experiences() {
    register_post_type( 'experiences',
    // CPT Options
        array(
            'labels' => array(
            'name' => __( 'Experiences' ),
            'singular_name' => __( 'experience')),
            'public' => true,
            'has_archive' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'rewrite' => array('slug' => 'experiences'),
            'menu_icon' => 'dashicons-images-alt2',
            'taxonomies' => array('category'),
            'supports' => array(
                'title',
                'editor',
                'image',
                'thumbnail',
                'excerpt',
                'custom-fields',
                'page-attributes',
                'comments')
            )
    );
}
add_action('init', 'post_type_experiences');



/*
=============================================================
  Custom post type for News  section
=============================================================
*/
function post_type_news() {
    register_post_type( 'news',
    // CPT Options
        array(
            'labels' => array(
            'name' => __( 'News' ),
            'singular_name' => __( 'news')),
            'public' => true,
            'has_archive' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'rewrite' => array('slug' => 'news'),
            'menu_icon' => 'dashicons-images-alt2',
            'taxonomies' => array('post_tag'),
            'supports' => array(
                'title',
                'editor',
                'image',
                'thumbnail',
                'excerpt',
                'custom-fields',
                'page-attributes',
                'comments')
            )
    );
}
add_action('init', 'post_type_news');

/*
    ===================================
    Sidebar function
    ===================================
*/
function awesome_widget_setup1(){
    register_sidebar(
        array(
            'name'=>'Sidebar-1',
            'id' => 'sidebar-1',
            'class'=> 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        )
    );
}
add_action('widgets_init','awesome_widget_setup1');




if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));

}




// function filter_recent_get_posts($query) {
//     if (isset($_POST['tab']) && ($_POST['tab'] == 'recent')) {
//         $query->set('post_type', 'news');
//     }
// }
// add_action( 'pre_get_posts', 'filter_recent_get_posts' );

//remove Archive words from title example(tag, category, etc..)
add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;
        }
    return $title;

});
function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/* Ajax to set cookies */
add_action("wp_ajax_nopriv_the_cookies", "set_the_cookies");
add_action("wp_ajax_the_cookies", "set_the_cookies");

function set_the_cookies() {
  $cookie_name = "1";
  $cookie_value = "agreed";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
}



add_action("wp_ajax_nopriv_expcategory_items", "get_expcategory_items");
add_action("wp_ajax_expcategory_items", "get_expcategory_items");

function get_expcategory_items() {
  if($_REQUEST["post_id"] == 'all') {
    $cat_id = 'all';
  }else {
    $cat_id = $_REQUEST["post_id"];
  }

?>
<div class="col-12">
  <?php
    if($cat_id == 'all') {
      $args = array(
        'post_type' => 'experiences',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'order' => 'ASC',
      );
    }else {
      $args = array(
        'post_type' => 'experiences',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'order' => 'ASC',
        'tax_query' => array(
           array(
             'taxonomy' => 'category',
             'field' => 'term_id',
             'terms'    => $cat_id
           ),
        ),
      );
    }

    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
?>
    <a class="experiences-banner-image position-relative d-block h-100 w-100 theme bg-experiences-color-3" href="<?php the_permalink(); ?>">
        <div class="experiences-archive-main-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
        <div class="exp-banner-img-cover top left right bottom position-absolute"></div>
        <div class="px-3 px-sm-0 main-wrapper-contents position-absolute">
            <div class="title">
                <div class="py-3 py-sm-0 theme color-white-color NexaRegular office_big"><?php the_title(); ?></div>
            </div>
            <div class="content">
                <div class="d-none d-sm-block theme color-white-color Roboto font-weight-300 office_medium"><?php the_excerpt(); ?></div>
            </div>
            <div class="arrow py-2 py-sm-0">
                <img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png">
            </div>
        </div>
    </a>
</div>
<?php
endwhile;
wp_reset_query();
?>
<div class="d-flex flex-wrap">
    <div class="col-12 col-lg-4 pt-30">
        <?php
        if($cat_id == 'all') {
          $args = array(
            'post_type' => 'experiences',
            'post_status' => 'publish',
            'posts_per_page' => 1,
            'order' => 'ASC',
            'offset' => '1',
          );
        }else {
            $args = array(
              'post_type' => 'experiences',
              'post_status' => 'publish',
              'posts_per_page' => 1,
              'order' => 'ASC',
              'offset' => '1',
              'tax_query' => array(
                 array(
                   'taxonomy' => 'category',
                   'field' => 'term_id',
                   'terms'    => $cat_id
                 ),
              ),
            );
          }
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
        ?>
        <div class="single-post-wrapper h-100">
            <a class="experiences-banner-image position-relative d-block h-100 w-100" href="<?php the_permalink(); ?>">
                <div class="experiences-archive-main-image-2 h-100" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
                <div class="exp-banner-img-cover exp-banner-img-cover-2 top left right bottom position-absolute"></div>
                <div class="single-post-content position-absolute bottom p-3">
                    <div class="date font-family-roboto theme color-white-color experiences_small_date py-4"><?php echo get_the_date('F Y'); ?></div>
                    <div class="d-none d-sm-block title font-family-Nexa-Bold theme color-white-color experiences_32"><?php the_title(); ?></div>
                    <div class="d-blck d-sm-none office_big title font-family-Nexa-Bold theme color-white-color"><?php the_title(); ?></div>
                    <div class="d-none d-sm-block content font-family-roboto font-weight-100 theme color-white-color experiences_small py-4"><?php the_excerpt(); ?></div>
                    <div class="arrow py-2 py-sm-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png">
                    </div>
                </div>
            </a>
        </div>
        <?php
            endwhile;
            wp_reset_query();
        ?>
    </div>
    <div class="col-12 col-lg-8 d-flex flex-wrap pt-30">
        <div class="col-12 p-0 pb-30">
            <?php
            if($cat_id == 'all') {
              $args = array(
                'post_type' => 'experiences',
                'post_status' => 'publish',
                'posts_per_page' => 1,
                'order' => 'ASC',
                'offset' => '2',
              );
            }else {
                $args = array(
                  'post_type' => 'experiences',
                  'post_status' => 'publish',
                  'posts_per_page' => 1,
                  'order' => 'ASC',
                  'offset' => '2',
                  'tax_query' => array(
                     array(
                       'taxonomy' => 'category',
                       'field' => 'term_id',
                       'terms'    => $cat_id
                     ),
                  ),
                );
              }
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <div class="single-post-wrapper h-100">
                <a class="experiences-banner-image position-relative d-block" href="<?php the_permalink(); ?>">
                    <div class="experiences-archive-main-image-3 theme bg-experiences-color-3" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
                    <div class="exp-banner-img-cover exp-banner-img-cover-3 top left right bottom position-absolute"></div>
                    <div class="px-3 px-sm-5 py-sm-3 single-post-content position-absolute bottom-sm-0 right width-sm-50 bottom-top">
                    <div class="date font-family-roboto theme color-white-color experiences_small_date py-4"><?php echo get_the_date('F Y'); ?></div>
                    <div class="d-none d-sm-block title font-family-Nexa-Bold theme color-white-color experiences_32"><?php the_title(); ?></div>
                    <div class="d-block d-sm-none title font-family-Nexa-Bold theme color-white-color office_big"><?php the_title(); ?></div>
                    <div class="d-none d-sm-block content font-family-roboto font-weight-100 theme color-white-color experiences_small py-4"><?php the_excerpt(); ?></div>
                    <div class="arrow py-2 py-sm-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png">
                    </div>
                    </div>
                </a>
            </div>
            <?php
                endwhile;
                wp_reset_query();
            ?>
        </div>
        <div class="pl-0 pr-0 pr-lg-3 col-12 col-lg-6">
            <div class="theme bg-white-color px-3 h-100 single-post-wrapper">
                <?php
                if($cat_id == 'all') {
                  $args = array(
                    'post_type' => 'experiences',
                    'post_status' => 'publish',
                    'posts_per_page' => 1,
                    'order' => 'ASC',
                    'offset' => '3',
                  );
                }else {
                    $args = array(
                      'post_type' => 'experiences',
                      'post_status' => 'publish',
                      'posts_per_page' => 1,
                      'order' => 'ASC',
                      'offset' => '3',
                      'tax_query' => array(
                         array(
                           'taxonomy' => 'category',
                           'field' => 'term_id',
                           'terms'    => $cat_id
                         ),
                      ),
                    );
                  }
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="experiences-banner-image">
                    <a class="experiences-banner-image position-relative d-block" href="<?php the_permalink(); ?>">
                            <div class="single-post-content">
                            <div class="date font-family-roboto theme color-black-color experiences_small_date py-4"><?php echo get_the_date('F Y'); ?></div>
                            <div class="d-none d-sm-block title font-family-Nexa-Bold theme color-experiences-color-1 experiences_32 pr-3"><?php the_title(); ?></div>
                            <div class="d-block d-sm-none title font-family-Nexa-Bold theme color-experiences-color-1 office_big pr-3"><?php the_title(); ?></div>
                            <div class="d-none d-sm-block content font-family-roboto font-weight-100 theme color-location-color-2 experiences_small py-4"><?php the_excerpt(); ?></div>
                            <div class="arrow py-2 py-sm-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow-orange.png">
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </div>
        <div class="pl-lg-3 pl-0 pr-0 col-12 col-lg-6">
        <div class="theme bg-experiences-color-3 h-100 single-post-wrapper">
                <div class="">
                    <?php
                    if($cat_id == 'all') {
                      $args = array(
                        'post_type' => 'experiences',
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
                        'order' => 'ASC',
                        'offset' => '4',
                      );
                    }else {
                        $args = array(
                          'post_type' => 'experiences',
                          'post_status' => 'publish',
                          'posts_per_page' => 1,
                          'order' => 'ASC',
                          'offset' => '4',
                          'tax_query' => array(
                             array(
                               'taxonomy' => 'category',
                               'field' => 'term_id',
                               'terms'    => $cat_id
                             ),
                          ),
                        );
                      }
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <a class="h-100 experiences-banner-image position-relative d-block" href="<?php the_permalink(); ?>">
                        <div class="h-100 single-post-content px-3">
                            <div class="date font-family-roboto theme color-white-color experiences_small_date py-4"><?php echo get_the_date('F Y'); ?></div>
                            <div class="d-none d-sm-block title font-family-Nexa-Bold theme color-white-color experiences_32 pr-3"><?php the_title(); ?></div>
                            <div class="d-block d-sm-none title font-family-Nexa-Bold theme color-white-color office_big pr-3"><?php the_title(); ?></div>
                            <div class="d-none d-sm-block content font-family-roboto font-weight-100 theme color-white-color experiences_small py-4"><?php the_excerpt(); ?></div>
                            <div class="arrow py-2 py-sm-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png">
                            </div>
                        </div>
                    </a>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 pt-30">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="single-post-wrapper">
                    <?php
                    if($cat_id == 'all') {
                      $args = array(
                        'post_type' => 'experiences',
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
                        'order' => 'ASC',
                        'offset' => '5',
                      );
                    }else {
                        $args = array(
                          'post_type' => 'experiences',
                          'post_status' => 'publish',
                          'posts_per_page' => 1,
                          'order' => 'ASC',
                          'offset' => '5',
                          'tax_query' => array(
                             array(
                               'taxonomy' => 'category',
                               'field' => 'term_id',
                               'terms'    => $cat_id
                             ),
                          ),
                        );
                      }
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <a class="h-100 experiences-banner-image position-relative d-block" href="<?php the_permalink(); ?>">
                    <div class="experiences-archive-main-image-3" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
                        <div class="exp-banner-img-cover exp-banner-img-cover-4 top left right bottom position-absolute"></div>
                        <div class="single-post-content position-absolute bottom px-3 px-sm-2 px-lg-4 py-2 width-sm-50">
                            <div class="date font-family-roboto theme color-white-color experiences_small_date py-4"><?php echo get_the_date('F Y'); ?></div>
                            <div class="d-none d-sm-block title font-family-Nexa-Bold theme color-white-color experiences_32"><?php the_title(); ?></div>
                            <div class="d-block d-sm-none title font-family-Nexa-Bold theme color-white-color office_big"><?php the_title(); ?></div>
                            <div class="d-none d-sm-block content font-family-roboto font-weight-100 theme color-white-color experiences_small py-4"><?php the_excerpt(); ?></div>
                            <div class="arrow py-2 py-sm-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png">
                            </div>
                        </div>
                    </a>
                    <?php
                        endwhile;
                        wp_reset_query();
                    ?>
                </div>
            </div>
            <div class="col-12 col-lg-4 pt-30 pt-sm-0">
                <div class="h-100 px-3 px-sm-4 experiences-banner-image theme bg-white-color">
                    <?php
                    if($cat_id == 'all') {
                      $args = array(
                        'post_type' => 'experiences',
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
                        'order' => 'ASC',
                        'offset' => '6',
                      );
                    }else {
                        $args = array(
                          'post_type' => 'experiences',
                          'post_status' => 'publish',
                          'posts_per_page' => 1,
                          'order' => 'ASC',
                          'offset' => '6',
                          'tax_query' => array(
                             array(
                               'taxonomy' => 'category',
                               'field' => 'term_id',
                               'terms'    => $cat_id
                             ),
                          ),
                        );
                      }
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <a class="experiences-banner-image position-relative d-block" href="<?php the_permalink(); ?>">
                        <div class="single-post-content">
                            <div class="date font-family-roboto theme color-black-color experiences_small_date py-4"><?php echo get_the_date('F Y'); ?></div>
                            <div class="d-none d-sm-block title font-family-Nexa-Bold theme color-philosophy-color-3 experiences_32 pr-3"><?php the_title(); ?></div>
                            <div class="d-block d-sm-none title font-family-Nexa-Bold theme color-philosophy-color-3 office_big pr-3"><?php the_title(); ?></div>
                            <div class="d-none d-sm-block content font-family-roboto font-weight-100 theme color-location-color-2 experiences_small py-4"><?php the_excerpt(); ?></div>
                            <div class="arrow py-2 py-sm-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow-green.png">
                            </div>
                        </div>
                    </a>
                    <?php
                        endwhile;
                        wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
 wp_reset_postdata();
 die();
}



add_action("wp_ajax_nopriv_news_loadmore", "get_news_loadmore");
add_action("wp_ajax_news_loadmore", "get_news_loadmore");

function get_news_loadmore() {
  // if($_REQUEST["post_id"] == 'all') {
  //   $cat_id = 'all';
  // }else {
  //   $cat_id = $_REQUEST["post_id"];
  // }
  $offset = $_REQUEST["post_id"];

  $args = array(
    'post_type' => 'news',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'order' => 'ASC',
    'offset' => $offset
  );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
  ?>
   <div class="single_news_item col-12 col-sm-4 px-0 pt-30">
        <div class="main-post-image main-post-image-news position-relative">
            <div class="imgwrap mx-3 position-relative theme bg-black-color">
                <a class="image-main d-block" href="<?php the_permalink(); ?>" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                    
                </a>

                <?php if ( has_post_thumbnail() ) { ?>
                  
                <a href="<?php the_permalink(); ?>" class="d-block">
                  <div class="img-opacity position-absolute w-100 h-100 top left"></div>
                </a>
                <?php } else {?>
                <a href="<?php the_permalink(); ?>" class="d-block">
                  <div class="img-opacity-1 position-absolute w-100 h-100 top left"></div>
                </a>
                <?php } ?>
                <div class="px-4 pt-4 position-absolute top left">
                    <div class="d-flex">
                        <div class="pr-2 post-date theme color-experiences-color-2 experiences_small_date font-weight-100 d-flex align-items-center"><?php echo get_the_date('F Y'); ?></div>
                        <div class="pl-2 tags"><?php echo the_tags('','','<br>'); ?></div>
                    </div>
                    <div class="deco-none">
                      <a href="<?php the_permalink(); ?>" class="d-block">
                        <div class="py-sm-4 related-stories-title experiences_32 font-family-Nexa-Bold theme color-white-color"><?php the_title();?></div>
                      </a>
                    </div>
                    <div class="related-content theme color-experiences-color-2 font-family-roboto font-weight-100"><?php the_excerpt();?></div>
                    <a href="<?php the_permalink(); ?>" class="d-block">
                      <div class=""><img class="" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png"/></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
  <?php
  endwhile;

 wp_reset_postdata();
 die();
}
