<?php
/*
 * Template Name: Team Template
*/
get_header();
// Start the loop.
while ( have_posts() ) :
  the_post();
?>


<section id="js-scroll" data-scroll-container class="second_sec overhidden position-fixed1 position-relative" data-section-name="banner_main" data-index="#4">


<section class="main_scroller position-relative location_section team_section">

    <section class="residential_banner theme bg-section-residential-color bg-sm-location-color-1">
        <div class="py-sm-5 r_precinct_orange o_precinct_orange position-relative">
            <div class="w-50 position-absolute theme bg-workplace-evolution-section left d-none d-sm-block"></div>
                <div class="container py-lg-5">
                    <div class="row pt-5">
                        <div class="col-12 p-0 theme bg-sm-transparent">
                            <div class="py-5 h-100 d-flex align-items-center theme bg-transparent" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                <div class="d-flex flex-column cust_width">
                                    <div class="main_title main_title_location text-center theme color-philosophy-color-1 color-sm-black-color m-0 residential_medium font-family-Nexa-Bold"><?php the_field('team_section_title'); ?></div>
                                    <div class="mt-2 mb-5 location_border margin-0-auto"></div>
                                    <div class="sub_title sub_title_location text-center theme color-philosophy-color-2 color-sm-philosophy-color-1 team_medium font-family-roboto font-weight-300 hide-br-mobile margin-0-auto custom_location_width"><?php echo the_field('team_section_content'); ?></div>
                                    <div class="main-svg margin-0-auto pt-5 team-svg">
                                        <?php include 'img/Team_main_visual.svg' ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="residential_banner theme bg-leisure-entertainment-spaces cycle-svg">
        <div class="py-sm-5 r_precinct_orange o_precinct_orange position-relative">
                <div class="container py-lg-5">
                    <div class="flex-column-reverse flex-sm-row py-5 row">
                        <div class="col-12 col-sm-7 pr-sm-0 pt-5 pt-sm-0">
                            <div class="pr-md-5 r_precinct_orange_main o_precinct_orange_main py-sm-5 h-100 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                <div class="pr-sm-5 d-flex flex-column">
                                    <div class="opacity-60 pr-sm-5 m-sm-0 margin-0-auto text-center text-sm-left residential_small theme color-black-color"><?php the_field('team_section_karle_infra_content'); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-5">
                            <div class="pb-sm-0 common-svg-width margin-0-auto py-sm-5 position-relative d-flex justify-content-center workplace-svg">
                                <?php include "img/Karle_infra_logo.svg"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="theme bg-white-color team-display-section">
        <div class="py-5 py-sm-5 r_precinct_orange o_precinct_orange position-relative team-svg-section">
                <div class="container py-lg-5">
                    <div class="office-left col-12">
                            <?php
                                if( have_rows('team_section_display_team_repeater') ):
                                while( have_rows('team_section_display_team_repeater') ) : the_row();
                                    $team_section_main_title = get_sub_field('team_section_main_title');
                                    if( have_rows('team_section_image_repeater') ):
                            
                            ?>
                                    
                                    <div class="row">
                                    <div class="col-12 p-0 d-flex justify-content-center justify-content-sm-start">
                                        <div class="px-3 font-family-Nexa-Bold team-section-title d-inline theme bg-workplace-evolution-section color-white-color">
                                            <?php echo $team_section_main_title; ?>
                                        </div>
                                    </div>
                            <?php
                                    while( have_rows('team_section_image_repeater') ) : the_row();
                                    $team_section_image_name = get_sub_field('team_section_image_name');
                                    $team_section_image_title = get_sub_field('team_section_image_title');
                                    $team_section_image_content = get_sub_field('team_section_image_content');
                            ?>
                                    
                                    <div class="py-3 px-0 col-sm-3 col-12">
                                        <div class="margin-0-auto m-sm-0 py-4 team-main-image-container d-flex align-items-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $team_section_image_name?>.svg">
                                        </div>
                                        <div class="text-center text-sm-left team_small team-section-content font-family-roboto font-weght-bold"><?php echo $team_section_image_title ?></div>
                                        <div class="text-center text-sm-left team_medium_2 team-section-content font-family-roboto font-weight-300"><?php echo $team_section_image_content ?></div>
                                    </div>

                                    <?php
                                        endwhile;
                                        endif;
                                    ?>
                                        <div class="custom-team-margin team-line w-100">
                                        </div>
                                    </div>
                            <?php
                                endwhile;
                                endif;
                            ?>
                        
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
</section>

<script>
//https://codepen.io/GreenSock/pen/eYJrQEg
</script>
