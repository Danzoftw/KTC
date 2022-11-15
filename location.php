<?php
/*
 * Template Name: Location Template
*/
    get_header();
    // Start the loop.
    while ( have_posts() ) :
    the_post();
?>
<section id="js-scroll" data-scroll-container class="second_sec overhidden position-fixed1 position-relative" data-section-name="banner_main" data-index="#4">
    <section class="main_scroller position-relative location_section">
        <div class="bg_3d_image_wrapper">
            <div class="bg_3d_image_wrapper_inner">
                <div class="bg_3d_image_1 bg_3d_image_inner d-none d-sm-block" style="background-image: url('<?php the_field('location_section_pc_image'); ?>')">
                    <div class="overlay_offwhite position-absolute"></div>
                </div>
                <div class="bg_3d_image_1 bg_3d_image_inner d-block d-sm-none" style="background-image: url('<?php the_field('location_section_mobile_image'); ?>')">
                    <div class="overlay_offwhite position-absolute"></div>
                </div>
            </div>
        </div>
    <section class="residential_banner theme bg-section-residential-color bg-sm-leisure-entertainment-spaces">
 
        <div class="pt-sm-5 r_precinct_orange o_precinct_orange position-relative">
            <div class="w-50 position-absolute theme bg-workplace-evolution-section left d-none d-sm-block"></div>
                <div class="main-container container pt-lg-5">
                    <div class="row">
                        <div class="col-12 p-0 theme bg-sm-transparent">
                            <div class="py-5 h-100 d-flex align-items-center theme bg-transparent" data-aos="fade-up" data-aos-delay="300" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                <div class="w-100 d-flex flex-column margin-0-auto m-sm-0">
                                    <div class="main_title main_title_location text-center theme color-philosophy-color-1 color-sm-black-color m-0 residential_medium font-family-Nexa-Bold"><?php the_field('location_section_title'); ?></div>
                                    <div class="mt-2 mb-4 location_border margin-0-auto"></div>
                                    <div class="sub_title sub_title_location text-center theme color-philosophy-color-2 color-sm-philosophy-color-1 location_medium font-family-roboto font-weight-300 hide-br-mobile margin-0-auto custom_location_width"><?php echo the_field('location_section_content'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map master-plan theme bg-section-residential-color bg-sm-leisure-entertainment-spaces">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="location-map location_map_1">
                        <div class="school-svg">
                            <?php include 'img/location_map.svg' ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="location-svg-section theme bg-section-residential-color bg-sm-leisure-entertainment-spaces">
        <div class="container py-5">
            <div class="col-12">
                <div class="py-5 social-animate">
                    <div class="d-flex flex-wrap align-content-center">
                        <?php
                            $cust_delay = 100;
                            if( have_rows('location_section_svg_repeater') ):
                            while( have_rows('location_section_svg_repeater') ) : the_row();
                            $svg_name = get_sub_field('location_section_svg_name');
                            $text = get_sub_field('location_section_svg_text');
                        ?>
                        <div class="py-3 col-6 col-sm-3 d-flex flex-column green_urbanism-mt" data-aos="fade-up" data-aos-delay="<?php echo $cust_delay; ?>" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                            <div class="margin-0-auto custom-align animate_1 common-height d-flex justify-content-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $svg_name?>.svg">
                            </div>
                            <p class="hide-br-mobile location-icon-text text-center pt-2 theme color-philosophy-color-2"><?php echo $text ?></p>
                        </div>
                        <?php
                            $cust_delay = $cust_delay + 100;
                            endwhile;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="master-plan theme bg-section-residential-color bg-sm-location-color-1">
        <div class="container">
            <div class="row py-sm-5">
                <div class="col-12 py-sm-5">
                    <div class="master-plan-title">
                        <p class="m-0 theme color-location-color-2 pl-3 office_big font-family-nexa-light">Masterplan</p>
                    </div>
                    <div class="masterplan-main">
                        <?php include 'img/Master_plan_interactive.svg' ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    // End the loop.
    endwhile;
    get_footer();
    ?>
</section>


<script>
//https://codepen.io/GreenSock/pen/eYJrQEg
</script>
