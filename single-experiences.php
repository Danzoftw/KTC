<?php
get_header();
while ( have_posts() ) : the_post();
?>

<section class="experiences-section news-section">
    <section class="theme bg-unique-living-section pt-5">
        <div class="container pt-5">
            <div class="row pt-5">
                <div class="col-12">
                    <div class="previous-post-main py-3 d-flex">
                        <?php
                            if ( is_attachment() ) :
                                previous_post_link( '%link', __( '<span class="meta-nav">Published in</span>', 'news' ) );
                            else :
                                previous_post_link( '%link', __( '<span class="meta-nav mr-5 previous-post"></span>', 'news' ) );
                                next_post_link( '%link', __( '<span class="meta-nav next-post"></span>', 'news' ) );
                            endif;
                        ?>
                    </div>
                    <?php if ( has_post_thumbnail() ){ ?>
                    <div class="experiences-banner-image">
                        <a class="image-main d-block" href="<?php the_permalink(); ?>" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                        </a>
                    </div>
                    <?php }else{ ?>
                    <div class="experiences-banner-image">
                       
                    </div>
                    <?php } ?>
                    <div class="author-details py-5 d-flex justify-content-between">
                        <div class="left-auth-details">
                            <p class="author-name theme color-black-color residnetial_small font-family-Nexa-Bold m-0">
                                <span><?php the_author_meta('first_name') ;?></span>
                                <span><?php the_author_meta('last_name') ;?></span>
                            </p>
                            <span class="my-3 experiences-line d-block"></span>
                            <div class="date font-family-roboto font-weight-300 theme color-location-color-2 team_small">
                                <?php the_date( 'F Y' ); ?>
                            </div>
                        </div>
                        <div class="right-social">
                            <div class="pb-3 share-button position-relative">
                                <img class="" src="<?php echo get_template_directory_uri(); ?>/img/share.png"/>
                                <div class="social position-absolute">
                                    <?php dynamic_sidebar( 'Sidebar-1' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="first-event-section theme bg-unique-living-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title office_big font-family-nexa-light theme color-experiences-color-1">
                        <?php the_field('main_title'); ?>
                    </div>
                    <div class="pl-sm-0 col-12 col-sm-10">
                        <div class="opacity-60 py-5 content residential_medium font-family-roboto font-weight-300 text-center text-sm-left">
                            <?php the_field('main_title_content'); ?>
                        </div>
                    </div>
                    <div class="col-0 col-sm-2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="second-event-section theme bg-unique-living-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="text-center text-sm-left experiences_32 font-family-Nexa-Bold event-two-title theme color-black-color">
                        <?php the_field('sub_title'); ?>
                    </div>
                    <div class="col-12 col-sm-11 pl-sm-0 margin-0-auto m-sm-0">
                    <?php if( $test1 = get_field('sub_title_content_1') ) { ?>
                        <div class="text-center text-sm-left pt-4 pb-5 event-two-content-1 theme color-location-color-2 residential_small font-family-roboto font-weight-300">
                            <?php the_field('sub_title_content_2'); ?>
                        </div>
                    <?php } else{?>
                        <div></div>
                    <?php } ?>
                    <?php if( $test1 = get_field('sub_title_content_2') ) { ?>
                        <div class="text-center text-sm-left pt-4 pb-5 event-two-content-1 theme color-location-color-2 residential_small font-family-roboto font-weight-300">
                            <?php the_field('sub_title_content_2'); ?>
                        </div>
                    <?php } else{?>
                        <div></div>
                    <?php } ?>
                    <?php if( $test1 = get_field('sub_title_content_3') ) { ?>
                        <div class="text-center text-sm-left pt-4 pb-5 event-two-content-1 theme color-location-color-2 residential_small font-family-roboto font-weight-300">
                            <?php the_field('sub_title_content_3'); ?>
                        </div>
                    <?php } else{?>
                        <div></div>
                    <?php } ?>
                    </div>
                    <div class="col-0 col-sm-1"></div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="sub_title_image mb-3">
                        <img class="img-fluid" src="<?php the_field('sub_title_image'); ?>">
                    </div>
                    
                    <div class="">
                        <?php if(get_field('sub_title_image_content_1')){
                        ?>
                        <div class="text-center text-sm-left py-5 event-image-content-1 theme color-location-color-2 residential_small font-family-roboto font-weight-300">
                            <?php the_field('sub_title_image_content_1'); ?>
                        </div>
                        <?php 
                        }
                        else{
                        ?>
                        <div></div>
                        <?php }?>
                        <?php if(get_field('sub_title_image_content_2')){
                        ?>
                        <div class="text-center text-sm-left event-image-content-1 theme color-location-color-2 residential_small font-family-roboto font-weight-300">
                            <?php the_field('sub_title_image_content_2'); ?>
                        </div>
                        <?php 
                        }
                        else{
                        ?>
                        <div></div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="third-event-section theme bg-unique-living-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-9 text-center margin-0-auto">
                    <?php if(get_field('final_section_title')){
                    ?>
                    <div class="py-5 third-event-title experiences_32 font-family-Nexa-Bold event-two-title theme color-experiences-color-1">
                        <?php the_field('final_section_title'); ?>
                    </div>
                    <?php 
                    }
                    else{
                    ?>
                    <div></div>
                    <?php }?>
                    </div>
                <div class="col-2 d-none"></div>
                <div class="d-sm-flex">
                    <div class="col-12 col-sm-6">
                        <div class="pl-0 col-12 col-sm-11">
                            <div class="text-center text-sm-left event-two-content-1 theme color-location-color-2 residential_small font-family-roboto font-weight-300">
                                <?php the_field('final_section_content_1'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="pl-0 col-12 col-sm-11">
                            <div class="text-center text-sm-left event-two-content-1 theme color-location-color-2 residential_small font-family-roboto font-weight-300">
                                <?php the_field('final_section_content_2'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="more-events-section theme bg-unique-living-section py-5">
        <div class="container">
            <div class="row">
                <div class="w-100 text-center text-sm-left pl-3 py-4 Latest-news experiences_32 theme color-location-color-2"><?php the_field('news_section_slider_title',910); ?></div>
                    <div class="col-12 d-flex expeciences-slick">
                        <?php 
                            $args = array('post_type' => 'experiences','post_status' => 'publish','posts_per_page' => 4,'order' => 'DESC');
                            $loop = new WP_Query( $args ); 
                            while ( $loop->have_posts() ) : $loop->the_post();
                        ?>
                        <div class="main-post-image">
                            <div class="imgwrap mr-1 mr-sm-4 position-relative theme bg-experiences-color-3">
                                <a class="image-main d-block" href="<?php the_permalink(); ?>" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                                </a>
                                <?php if ( has_post_thumbnail() ) { ?>
                                <div class="img-opacity position-absolute w-100 h-100 top left"></div>
                                <?php } else {?>
                                <div class="img-opacity-1 position-absolute w-100 h-100 top left"></div>
                                <?php } ?>
                                <div class="w-100 px-2 top-50 transform-translateY-50 main-title position-absolute top left">
                                <div class="post-date theme color-experiences-color-2 experiences_small_date font-weight-100">
                                    <?php echo get_the_date('F Y'); ?>
                                </div>
                                <div class="py-2 post-title">
                                    <a class="outline-none theme color-experiences-color-2 experiences_32 font-family-Nexa-Bold" href="<?php the_permalink();?>">
                                        <?php the_title();?>
                                    </a>
                                </div>
                                <div class="post-excerpt theme color-experiences-color-2 experiences_small font-family-roboto font-weight-300">
                                    <?php the_excerpt();?>
                                </div>
                                <div class="deco-none">
                                    <a href="<?php the_permalink(); ?>" class="outline-none">
                                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>
</section>
<?php
endwhile;
get_footer(); ?>