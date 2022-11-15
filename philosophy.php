<?php
/*
 * Template Name: philosophy Template
*/
get_header();
// Start the loop.
while ( have_posts() ) :
    the_post();
?>

<section id="js-scroll" data-scroll-container class="second_sec overhidden position-fixed1 position-relative" data-section-name="banner_main" data-index="#4">

    <section class="main_scroller position-relative">
        <section class="residential_banner theme bg-leisure-entertainment-spaces pt-sm-5 cycle-svg">
            <div class="py-sm-5 r_precinct_orange o_precinct_orange position-relative philosophy-custom-mt">
                    <div class="container py-lg-5 main-container">
                        <div class="py-5 row flex-sm-row-reverse flex-column-reverse">
                            <div class="col-12 col-sm-6 p-0">
                                <div class="pl-sm-5 r_precinct_orange_main o_precinct_orange_main py-sm-5 h-100 d-flex align-items-center"  data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                    <div class="d-flex flex-column cust_width">
                                        <div class="main_title text-center text-sm-left"><p class="m-0 residential_medium theme color-black-color"><?php the_field('philosophy_section_better_city_titlte'); ?></p></div>
                                        <div class="mt-2 mb-5 r_precinct_orange_border ml-sm-0 philosophy-border"></div>
                                        <div class="sub_title text-center text-sm-left"><p class="m-0 office_big theme color-black-color hide-br-pc"><?php the_field('philosophy_section_better_city_sub_title'); ?></p></div>
                                        <div class="m-sm-0 margin-0-auto content text-center text-sm-left"><div class="office_medium py-4 theme color-philosophy-color-1"><?php the_field('philosophy_section_better_city_content'); ?></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 p-0 d-flex align-items-center">
                                <div class="common-svg-width margin-0-auto pt-sm-5 position-relative d-flex justify-content-center workplace-svg"  data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                    <?php include "img/Philosophy_main_visual_cycle.svg"; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="philosophy-main-image position-relative" id="philosophy-play-section">
            <div class="o-visible play-btn d-block position-absolute" id="yt_play">
                <?php include "img/Play_button_big_desk.svg"; ?>
            </div>
            <iframe class="opacity-0 w-100 h-100 position-absolute" id="video_main" src="//www.youtube.com/embed/<?php the_field('philosophy_section_video_link'); ?>?rel=0" autohide="1" frameborder="0" allowfullscreen></iframe>

            <div class="philosophy-image d-none d-sm-block" style="background-image: url('<?php the_field('philosophy_section_pc_image')?>')">
            </div>
            <div class="philosophy-image philosophy-image-mobile d-block d-sm-none" style="background-image: url('<?php the_field('philosophy_section_mobile_image') ?>')">
            </div>
        </section>
        <section class="residential_banner theme bg-leisure-entertainment-spaces">
            <div class="py-sm-5 r_precinct_orange o_precinct_orange position-relative">
                    <div class="container py-lg-5">
                        <div class="row flex-column flex-sm-row py-5 philosophy-custom-p-l-r">
                            <div class="col-12 col-sm-6 p-0">
                                <div class="r_precinct_orange_main o_precinct_orange_main py-sm-5 h-100 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                    <div class="d-flex flex-column cust_width">
                                        <div class="m-sm-0 margin-0-auto content text-center text-sm-left"><div class="office_medium py-4 theme color-philosophy-color-2"><?php the_field('philosophy_section_quadrants_content'); ?></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 p-0">
                                <div class="py-5 pl-sm-5 quadrants common-svg-width margin-0-auto py-sm-5 position-relative d-flex justify-content-center workplace-svg">
                                    <?php include "img/Quadrants_animation.svg"; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="residential_banner theme bg-philosophy-color-3">
            <div class="py-sm-5 r_precinct_orange o_precinct_orange position-relative">
                    <div class="container py-lg-5">
                        <div class="row flex-column flex-sm-row py-5 philosophy-custom-p-l-r">
                            <div class="col-12 col-sm-6">
                                <div class="text-center text-sm-left py-4 common-svg-width margin-0-auto position-relative workplace-svg">
                                    <?php include "img/Nurture_icon.svg"; ?>
                                </div>
                                <div class="text-center text-sm-left theme color-white-color nature-nurtured-title office_big font-family-nexa-light"><?php echo the_field('philosophy_section_nature_nurtured_title');?>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 p-0">
                                <div class="r_precinct_orange_main o_precinct_orange_main h-100 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                    <div class="d-flex flex-column cust_width">
                                        <div class="m-sm-0 margin-0-auto content text-center text-sm-left"><div class="pt-5 pt-sm-5 small-title theme color-white-color"><?php the_field('philosophy_section_nature_nurtured_content'); ?></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="eme residential_banner green_urbanism theme bg-leisure-entertainment-spaces">
            <div class="py-sm-5 r_precinct_orange o_precinct_orange position-relative">
                <div class="container py-lg-5">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="py-5 py-sm-0 social-animate pr-sm-5">
                                <div class="d-flex flex-wrap align-content-center">
                                    <?php
                                        if( have_rows('philosophy_section_green_nature_experience_urbanism_repeater') ):
                                        while( have_rows('philosophy_section_green_nature_experience_urbanism_repeater') ) : the_row();
                                        $svg_name = get_sub_field('svg_name');
                                        $text = get_sub_field('text');
                                        
                                    ?>
                                    <div class="col-6 d-flex flex-column green_urbanism-mt">
                                        <div class="custom-width">
                                            <div class="custom-align animate_1 common-height d-flex justify-content-center align-items-center">
                                                <?php include "img/$svg_name.svg"; ?>
                                            </div>
                                            <div class="nature-text">
                                                <p class="text-center pt-2 theme color-philosophy-color-2"><?php echo $text ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        endwhile;
                                        endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="experiences mb-5 pb-1 ml-0 pr-sm-5 mr-sm-5">
                                <div class="experiences-container d-flex my-0 experiences-container-philosophy-pc">
                                    <?php
                                        $showatfirst = -1;
                                        $args = array('post_type' => 'experiences','post_status' => 'publish','posts_per_page' => $showatfirst,'order' => 'ASC','category_name' => 'nurture');
                                        $loop = new WP_Query( $args );
                                        while ( $loop->have_posts() ) : $loop->the_post();
                                    ?>
                                    <ul class="p-0 img-main mr-3 mb-3 mb-lg-4 mb-sm-4">
                                    <div class="position-relative">
                                        <?php if(has_post_thumbnail()){ ?>
                                        <a href="<?php the_permalink(); ?>" class="d-block">
                                            <li class="bg-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>"> </li>
                                            <div class="slider-bg-shade"></div>
                                            <p class="image-text image-text-philosophy position-absolute"><?php the_title(); ?></p>
                                        </a>
                                        <?php }else {?>
                                            <a href="<?php the_permalink(); ?>" class="d-block">
                                            <li class="bg-image theme bg-philosophy-color-3"> </li>
                                            <div class="slider-bg-shade"></div>
                                            <p class="image-text image-text-philosophy position-absolute"><?php the_title(); ?></p>
                                        </a>
                                        <?php }
                                        ?>
                                    </div>
                                    </ul>
                                    <?php
                                        endwhile;
                                        wp_reset_query();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="residential_banner theme bg-philosophy-color-4">
            <div class="py-sm-5 r_precinct_orange o_precinct_orange position-relative">
                    <div class="container py-lg-5">
                        <div class="row flex-column flex-sm-row py-5 philosophy-custom-p-l-r">
                            <div class="col-12 col-sm-6">
                                <div class="text-center text-sm-left py-4 common-svg-width margin-0-auto position-relative workplace-svg">
                                    <?php include "img/Expresss_icon.svg"; ?>
                                </div>
                                <div class="text-center text-sm-left theme color-white-color nature-nurtured-title office_big font-family-nexa-light"><?php echo the_field('philosophy_section_freedom_of_expression_title');?>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 p-0">
                                <div class="r_precinct_orange_main o_precinct_orange_main h-100 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                    <div class="d-flex flex-column cust_width">
                                        <div class="m-sm-0 margin-0-auto content text-center text-sm-left"><div class="pt-5 pt-sm-5 small-title theme color-white-color"><?php the_field('philosophy_section_freedom_of_expression_content'); ?></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="eme residential_banner green_urbanism theme bg-leisure-entertainment-spaces">
            <div class="py-sm-5 r_precinct_orange o_precinct_orange position-relative">
                <div class="container py-lg-5">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="py-5 py-sm-0 social-animate pr-sm-5">
                                <div class="d-flex flex-wrap align-content-center">
                                    <?php
                                        if( have_rows('philosophy_section_philosophy_express_repeater') ):
                                        while( have_rows('philosophy_section_philosophy_express_repeater') ) : the_row();
                                        $svg_name = get_sub_field('philosophy_section_philosophy_express_svg_name');
                                        $text = get_sub_field('philosophy_section_philosophy_express_text');
                                        
                                    ?>
                                    <div class="col-6 d-flex flex-column green_urbanism-mt">
                                        <div class="custom-align animate_1 common-height-expression-svg d-flex justify-content-center align-items-end">
                                            <?php include "img/$svg_name.svg"; ?>
                                        </div>
                                        <p class="text-center pt-2 pt-sm-3 theme color-philosophy-color-2"><?php echo $text ?></p>
                                    </div>
                                    <?php
                                        endwhile;
                                        endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="experiences mb-5 pb-1 ml-0 pr-sm-5 mr-sm-5">
                                <div class="experiences-container d-flex my-0 experiences-container-philosophy-pc">
                                    <?php
                                        $showatfirst = -1;
                                        $args = array('post_type' => 'experiences','post_status' => 'publish','posts_per_page' => $showatfirst,'order' => 'ASC','category_name' => 'express');
                                        $loop = new WP_Query( $args );
                                        while ( $loop->have_posts() ) : $loop->the_post();
                                    ?>
                                    <ul class="p-0 img-main mr-3 mb-3 mb-lg-4 mb-sm-4">
                                    <div class="position-relative">
                                        <?php if(has_post_thumbnail()){ ?>
                                        <a href="<?php the_permalink(); ?>" class="d-block">
                                            <li class="bg-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>"> </li>
                                            <div class="slider-bg-shade"></div>
                                            <p class="image-text image-text-philosophy position-absolute"><?php the_title(); ?></p>
                                        </a>
                                        <?php }else {?>
                                            <a href="<?php the_permalink(); ?>" class="d-block">
                                            <li class="bg-image theme bg-philosophy-color-4"> </li>
                                            <div class="slider-bg-shade"></div>
                                            <p class="image-text image-text-philosophy position-absolute"><?php the_title(); ?></p>
                                        </a>
                                        <?php }
                                        ?>
                                    </div>
                                    </ul>
                                    <?php
                                        endwhile;
                                        wp_reset_query();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="residential_banner theme bg-workplace-evolution-section">
            <div class="py-sm-5 r_precinct_orange o_precinct_orange position-relative">
                    <div class="container py-lg-5">
                        <div class="row flex-column flex-sm-row py-5 philosophy-custom-p-l-r">
                            <div class="col-12 col-sm-6">
                                <div class="text-center text-sm-left py-4 common-svg-width margin-0-auto position-relative workplace-svg">
                                    <?php include "img/Inspire_icon.svg"; ?>
                                </div>
                                <div class="text-center text-sm-left theme color-white-color nature-nurtured-title office_big font-family-nexa-light"><?php echo the_field('philosophy_section_inspiration_by_design_title');?>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 p-0">
                                <div class="r_precinct_orange_main o_precinct_orange_main h-100 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                    <div class="d-flex flex-column cust_width">
                                        <div class="m-sm-0 margin-0-auto content text-center text-sm-left"><div class="pt-5 pt-sm-5 small-title theme color-white-color"><?php the_field('philosophy_section_inspiration_by_design_content'); ?></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="eme residential_banner green_urbanism theme bg-leisure-entertainment-spaces">
            <div class="py-sm-5 r_precinct_orange o_precinct_orange position-relative">
                <div class="container py-lg-5">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="py-5 py-sm-0 social-animate">
                                <div class="d-flex flex-wrap align-content-center">
                                    <div class="py-5 py-sm-0 social-animate pr-sm-5">
                                        <div class="d-flex flex-wrap align-content-center">
                                            <?php
                                                if( have_rows('philosophy_section_inspiration_repeater') ):
                                                while( have_rows('philosophy_section_inspiration_repeater') ) : the_row();
                                                $svg_name = get_sub_field('philosophy_section_inspiration_svg_name');
                                                $text = get_sub_field('philosophy_section_inspiration_text');
                                            ?>
                                            <div class="col-6 d-flex flex-column green_urbanism-mt">
                                                <div class="custom-align animate_1 common-height-expression-svg d-flex justify-content-center align-items-end">
                                                    <?php include "img/$svg_name.svg"; ?>
                                                </div>
                                                <p class="text-center pt-2 pt-sm-3 theme color-philosophy-color-2"><?php echo $text ?></p>
                                            </div>
                                            <?php
                                                endwhile;
                                                endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="experiences mb-5 pb-1 ml-0 pr-sm-5 mr-sm-5">
                                <div class="experiences-container d-flex my-0 experiences-container-philosophy-pc">
                                    <?php
                                        $showatfirst = -1;
                                        $args = array('post_type' => 'experiences','post_status' => 'publish','posts_per_page' => $showatfirst,'order' => 'ASC','category_name' => 'inspire');
                                        $loop = new WP_Query( $args );
                                        while ( $loop->have_posts() ) : $loop->the_post();
                                    ?>
                                    <ul class="p-0 img-main mr-3 mb-3 mb-lg-4 mb-sm-4">
                                    <div class="position-relative">
                                        <?php if(has_post_thumbnail()){ ?>
                                        <a href="<?php the_permalink(); ?>" class="d-block">
                                            <li class="bg-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>"> </li>
                                            <div class="slider-bg-shade"></div>
                                            <p class="image-text image-text-philosophy position-absolute"><?php the_title(); ?></p>
                                        </a>
                                        <?php }else {?>
                                            <a href="<?php the_permalink(); ?>" class="d-block">
                                            <li class="bg-image theme bg-workplace-evolution-section"> </li>
                                            <div class="slider-bg-shade"></div>
                                            <p class="image-text image-text-philosophy position-absolute"><?php the_title(); ?></p>
                                        </a>
                                        <?php }
                                        ?>
                                    </div>
                                    </ul>
                                    <?php
                                        endwhile;
                                        wp_reset_query();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="residential_banner theme bg-unique-living-color">
            <div class="py-sm-5 r_precinct_orange o_precinct_orange position-relative">
                    <div class="container py-lg-5">
                        <div class="row flex-column flex-sm-row py-5 philosophy-custom-p-l-r">
                            <div class="col-12 col-sm-6">
                                <div class="text-center text-sm-left py-4 common-svg-width margin-0-auto position-relative workplace-svg">
                                    <?php include "img/Belong_icon.svg"; ?>
                                </div>
                                <div class="text-center text-sm-left theme color-white-color nature-nurtured-title office_big font-family-nexa-light"><?php echo the_field('philosophy_section_powering_text');?>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 p-0">
                                <div class="r_precinct_orange_main o_precinct_orange_main h-100 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                    <div class="d-flex flex-column cust_width">
                                        <div class="m-sm-0 margin-0-auto content text-center text-sm-left"><div class="pt-5 pt-sm-5 small-title theme color-white-color"><?php the_field('philosophy_section_powering_content'); ?></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="eme residential_banner green_urbanism theme bg-leisure-entertainment-spaces">
            <div class="py-sm-3 r_precinct_orange o_precinct_orange position-relative">
                <div class="container py-lg-5">
                    <div class="row">
                        <div class="col-12" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                            <div class="py-5 py-sm-0 experiences pb-1 ml-0 px-sm-5 mx-sm-5">
                                <div class="experiences-container d-flex my-0 experiences-container-philosophy-pc">
                                    <?php
                                        $showatfirst = -1;
                                        $args = array('post_type' => 'experiences','post_status' => 'publish','posts_per_page' => $showatfirst,'order' => 'ASC');
                                        $loop = new WP_Query( $args );
                                        while ( $loop->have_posts() ) : $loop->the_post();
                                    ?>
                                    <ul class="p-0 img-main mr-3 mb-3 mb-lg-4 mb-sm-4">
                                    <div class="position-relative">
                                        <?php if(has_post_thumbnail()){ ?>
                                        <a href="<?php the_permalink(); ?>" class="d-block">
                                            <li class="bg-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>"> </li>
                                            <div class="slider-bg-shade"></div>
                                            <p class="image-text image-text-philosophy position-absolute"><?php the_title(); ?></p>
                                        </a>
                                        <?php }else {?>
                                            <a href="<?php the_permalink(); ?>" class="d-block">
                                            <li class="bg-image theme bg-unique-living-color"> </li>
                                            <div class="slider-bg-shade"></div>
                                            <p class="image-text image-text-philosophy position-absolute"><?php the_title(); ?></p>
                                        </a>
                                        <?php }
                                        ?>
                                    </div>
                                    </ul>
                                    <?php
                                        endwhile;
                                        wp_reset_query();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="residential_banner theme bg-section-residential-color">
            <div class="r_precinct_orange o_precinct_orange position-relative">
                <div class="container py-lg-5 main-container">
                    <div class="py-5 row flex-sm-row-reverse">
                        <div class="col-12 col-sm-6">
                            <div class="h-100 d-flex justify-content-center workplace-svg align-items-center">
                                <div class="custom-philosopy-width d-flex justify-content-center align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/KTC-LOGO01.gif">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 p-0">
                            <div class="pl-sm-5 r_precinct_orange_main o_precinct_orange_main py-sm-5 h-100 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                <div class="d-flex flex-column cust_width">
                                    <div class="sub_title sub_title_philosopy text-center text-sm-left"><p class="font-family-nexa-light m-0 office_big theme color-black-color hide-br-pc"><?php the_field('philosophy_section_the_logo_philosophy_title'); ?></p></div>
                                    <div class="m-sm-0 margin-0-auto content text-center text-sm-left"><div class="small-title py-4 theme color-philosophy-color-1"><?php the_field('philosophy_section_the_logo_philosophy_content'); ?></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>
<?php
// End the loop.
endwhile;
get_footer();
?>