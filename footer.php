<footer class="position-relative">
<?php
    if( have_rows('experiences_section',14) ):
    while( have_rows('experiences_section',14) ) : the_row();
    $youtube_link = get_sub_field('youtube_link',14);
    $link_url = $youtube_link['url'];
    $link_title = $youtube_link['title'];
    $link = $link_url;
    $experiences_title = get_sub_field('experiences_title',14);
    $experiences_button_text_mobile = get_sub_field('experiences_button_text_mobile',14);
    $experiences_button_text_pc = get_sub_field('experiences_button_text_pc',14);
	$experiences_button_link = get_sub_field('experiences_button_link',14);
    $btn_link_url = get_sub_field('link',14);
    $preview_image = get_sub_field('preview_image',14);
    $youtube_name = get_sub_field('youtube_name',14);
    $youtube_designation = get_sub_field('youtube_designation',14);

    $video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...
    if (empty($video_id[1]))
    $video_id = explode("/v/", $link); // For videos like http://www.youtube.com/watch/v/..
    $video_id = explode("&", $video_id[1]); // Deleting any other params
    $video_id = $video_id[0];
?>
<section class="eme-home eme section-class py-sm-5 theme bg-sm-unique-living-section pt-5 pt-sm-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-5">
                <div class="people-speak">
                <p class="mb-1 mb-lg-4"><?php echo $link_title ?></p>
                    <div class="popup-iframe position-relative" href="<?php echo $link_url ?>">
                        <?php if($preview_image){
                         ?>
                         <div class="position-relative youtube-vtext">
                            <img class="" src="<?php echo $preview_image ?>">
                            <div class="position-absolute name"><p class="m-0"><?php echo $youtube_name ?></p></div>
                            <div class="position-absolute designation"><p><?php echo $youtube_designation ?></p></div>
                         </div>
                        <?php
                        }
                        else{
                        ?>
                        <img class="" src="http://img.youtube.com/vi/<?php echo $video_id?>/default.jpg">
                        <?php
                        }
                        ?>
                        <span class="position-absolute"><img src="<?php echo get_template_directory_uri(); ?>/img/Video_Play_button.svg" alt=""></span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-7">
                <div class="experiences mb-5 pb-1 ml-0">
                    <p class="mb-1 mb-lg-4 mt-5 mt-sm-0"><?php echo $experiences_title ?></p>
                    <div class="experiences-container experiences-container-footer d-flex my-0">
                        <?php
                            $showatfirst = -1;
                            $total_posts = wp_count_posts('news')->publish;
                            $args = array('post_type' => 'experiences','post_status' => 'publish','posts_per_page' => $showatfirst,'order' => 'ASC', 'offset' => 0);
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                        ?>
                        <ul class="p-0 img-main mr-3 mb-3 mb-lg-4 mb-sm-4">
                        <div class="position-relative">
                            <?php 
                            
                            if(has_post_thumbnail()){ ?>
                                <a href="<?php the_permalink(); ?>" class="d-block">
                                    <li style="background-image: url(<?php the_post_thumbnail_url(); ?>" class="bg-image"> </li>
                                    <p class="image-text position-absolute"><?php the_title(); ?></p>
                                </a>
                            <?php }else {?>
                                <a href="<?php the_permalink(); ?>" class="d-block">
                                    <li style="background-image: url(<?php the_post_thumbnail_url(); ?>" class="bg-image theme bg-experiences-color-3"> </li>
                                    <p class="image-text position-absolute"><?php the_title(); ?></p>
                                </a>
                            <?php }?>
                        </div>
                        </ul>
                        <?php
                            endwhile;
                            wp_reset_query();
                        ?>
                    </div>
                    <?php if($experiences_button_text_mobile) { ?>
                        <div class="eme mt-3 mt-sm-4 mt-md-4">
                            <a href="<?php echo $experiences_button_link; ?>"><p class="p-sm-2 text-left text-sm-center"><?php echo $experiences_button_text_mobile;?></p></a>
                        </div>
                    <?php } else{ ?>
                    <?php } ?>

                    <?php if($experiences_button_text_pc) { ?>
                        <div class="pt-sm-5 eme eme-pc py-2 position-relative">
                        <a href="<?php echo $experiences_button_link; ?>" class="position-absolute"><p class="py-2 px-3 text-center "><?php echo $experiences_button_text_pc;?></p></a>
                        </div>
                    <?php } else{ ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    endwhile;
    endif;
?>
<section class="main-section section-class p-4 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <div class="p-0 col-12">
                <p class="mb-2 precincts pt-2">Precincts</p>
                    <?php
                        wp_nav_menu(array(
                        'theme_location'=> 'secondary',
                        'container' => false,
                        'item_spacing' => 'discard',
                        'menu_class' => 'pt-sm-1 footer-items d-flex p-0 flex-wrap m-sm-0'));
                    ?>
                </div>
                <?php
                    wp_nav_menu(array(
                    'theme_location'=> 'secondary two',
                    'container' => false,
                    'item_spacing' => 'discard',
                    'menu_class' => 'pt-5 pt-sm-4 exp-news d-flex p-0 flex-column'));
                ?>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <div class="pt-4 pt-sm-0">
                    <?php echo FrmFormsController::show_form(1, $key = '', $title=true, $description=true); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sub-section section-class p-4">
    <div class="container">
        <div class="row flex-column-reverse  flex-sm-row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 px-2">
                <div class="address mt-5">
                    <span class="mb-0"><?php the_field('address_title',14); ?></span>
                    <p class="mt-2"><?php $address = the_field('address',14); echo $address?></p>
                    <div class="social mt-5">
                        <ul class="p-0 d-flex justify-content-around text-left footer-social-style">
                            <li><a href="<?php  the_field('facebook',14);  ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg"></a></li>
                            <li><a href="<?php the_field('youtube',14);  ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/yt.svg"></a></li>
                            <li><a href="<?php  the_field('instagram',14); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg"></a></li>
                            <li><a href="<?php the_field('linkedin',14);  ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/Linkedin.svg"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-md-3 col-lg-3 p-0">
                <div class="sales-enquires-main mt-sm-5">
                    <p class="pl-sm-0 mb-0 mt-4"><?php the_field('sales_enquiries',14); ?></p>
                    <div class="mb-4 sales-enquiries other-enquiries d-flex">
                        <a href="tel:<?php the_field('mobile_1',14); ?>" data-rel="external" class="d-flex">
                            <div class="call-img">
                                <?php include 'img/call.svg' ?>
                            </div>
                            <div class="mob-no pl-2">
                                <p><?php  the_field('mobile_1',14); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-md-3 col-lg-3 p-0">
                <div class="other-enquiries-main sales-enquires-main mt-sm-5">
                    <p class="pl-sm-0 mb-0 mt-5 mt-sm-4"><?php the_field('other_enquiries',14); ?></p>
                    <div class="other-enquiries d-flex">
                        <a href="tel:<?php the_field('mobile_2',14); ?>" data-rel="external" class="d-flex">
                            <div class="call-img">
                                <?php include 'img/call.svg' ?>
                            </div>
                            <div class="mob-no pl-2">
                                <p><?php the_field('mobile_2',14); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php wp_footer(); ?>
</footer>
