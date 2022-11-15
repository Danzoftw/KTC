<?php
/*
 * Template Name: Office Template
*/
get_header();
// Start the loop.
while ( have_posts() ) :
  the_post();
?>

<section class="main_wrapper">
	<div class="bg_color_inner theme bg-color-inner"></div>

	<div class="text_container_inner">
		<?php include 'img/Office_text.svg' ?>
	</div>

</section>


<section class="section_banner position-fixed sec_fixed" data-section-name="banner" data-index="#1"></section>

<section class="section_banner position-fixed sec_fixed" data-section-name="banner1" data-index="#2"></section>


<section id="js-scroll" data-scroll-container class="second_sec overhidden position-fixed1 position-relative section_banner" data-section-name="banner_main" data-index="#4">


<section class="main_scroller">

    <section class="residential_banner theme bg-workplace-evolution-section" >
        <div class="bg_top position-relative">
            <div class="bg_3d_image_wrapper">
                <div class="bg_3d_image_wrapper_inner">
                    <div>
                        <div class="bg_3d_image bg_3d_image_inner d-none d-sm-block" style="background-image: url('<?php the_field('office_page_pc_image'); ?>')">
                          <div class="overlay_offwhite position-absolute"></div>
                        </div>
                        <div class="bg_3d_image bg_3d_image_inner d-block d-sm-none " style="background-image: url('<?php the_field('office_page_mobile_image'); ?>')">
                            <div class="overlay_offwhite position-absolute"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="r_precinct_orange o_precinct_orange">
            <div class="w-50 position-absolute theme bg-workplace-evolution-section left d-none d-sm-block"></div>
                <div class="main-container container py-lg-5">
                    <div class="row py-sm-5">
                        <div class="col-12 col-sm-6 p-0 theme bg-workplace-evolution-section bg-sm-transparent">
                            <div class="pt-5 pt-sm-0 r_precinct_orange_main o_precinct_orange_main py-sm-5 h-100 d-flex align-items-center theme bg-transparent"  data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                <div class="d-flex flex-column cust_width">
                                    <div class="main_title text-center text-sm-left"><p class="m-0 residential_medium theme color-white"><?php the_field('work_evolution_section_title'); ?></p></div>
                                    <div class="mt-2 mb-5 r_precinct_orange_border ml-sm-0"></div>
                                    <div class="sub_title text-center text-sm-left"><p class="m-0 office_big theme color-white"><?php the_field('work_evolution_section_sub_title'); ?></p></div>
                                    <div class="m-sm-0 margin-0-auto content text-center text-sm-left"><div class="office_medium py-4 theme color-white"><?php the_field('work_evolution_section_content'); ?></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 p-0">
                            <div class="pb-b pb-sm-0 pl-sm-5 common-svg-width margin-0-auto py-sm-5 d-flex justify-content-center workplace-svg">
                                <?php $svg_name = get_field('work_evolution_section_pc_svg_name'); include "img/$svg_name.svg"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fixed_elements_1" class="projects_list">
        <div class="content_wrapper theme bg-unique-living-section" >
            <div class="py-lg-5 r_precinct_orange position-relative">
                <div class="container py-5">
                <div class="row py-5">
                    <div class="col-12 col-sm-6 p-0 d-flex align-items-center">
                    <div class="r_precinct_orange_main vario_r_precinct_orange_main cust_width theme bg-unique-living-section bg-sm-unique-living-section m-0"  data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                        <div class="main_title vario_main_title text-center text-sm-left ml-sm-0"><p class="theme color-employee-centric-design-title m-0 office_big"><?php the_field('employee_centric_design_section_title'); ?></p></div>
                        <div class="content vario_main_content text-center text-sm-left"><div class="residential_small py-4 opacity-60 theme-color-black"><?php the_field('employee_centric_design_section_content'); ?></div></div>
                    </div>
                    </div>
                    <div class="col-12 col-sm-6 p-0 d-flex justify-content-center align-items-center">
                        <div class="pl-sm-5 employee-centric-design employee_centric_design_svg common-svg-width margin-0-auto">
                            <?php $svg_name = get_field('employee_centric_design_section_svg_name'); include "img/$svg_name.svg"; ?>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="office-parallax" >
        <div class="block">
        <div class="main-img img-parallax" data-speed="-1" style="background-image: url(<?php the_field('design_impacts_people_section_main_image'); ?>);">
        </div>
        </div>
    </section>

    <section id="fixed_elements_2" class="projects_list">
        <div class="py-sm-5 content_wrapper theme bg-leisure-entertainment-spaces" >
            <div class="r_precinct_orange position-relative">
                <div class="container py-sm-5">
                    <div class="row py-sm-5 flex-column-reverse flex-sm-row px-sm-6">
                        <div class="col-12 col-sm-6 p-0 d-flex align-items-center">
                            <div class="r_precinct_orange_main vario_r_precinct_orange_main zenith_residences_main py-sm-5 cust_width theme bg-leisure-entertainment-spaces m-0"  data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                <div class="main_title vario_main_title text-center text-sm-left ml-sm-0"><p class="m-0 office_big theme color-employee-centric-design-title"><?php the_field('design_impacts_people_section_title'); ?></p></div>
                                <div class="content vario_main_content text-center text-sm-left"><div class="residential_small pt-4 theme color-black opacity-60"><?php the_field('design_impacts_people_section_content'); ?></div></div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 p-0">
                            <div class="pl-sm-5 common-svg-width-glass margin-0-auto life_without_barriers_svg employee_impacts_design_svg zenith_residences_svg d-flex justify-content-center">
                                <?php $svg_name = get_field('design_impacts_people_section_svg_name'); include "img/$svg_name.svg"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fixed_elements_3" class="projects_list office_element_3">
        <div class="pb-5 pb-sm-0 theme bg-leisure-entertainment-spaces bg-sm-section-residential-color content_wrapper overflow-ex" >
            <div class="pt-5 pt-sm-0 mx-3 mx-sm-0 r_precinct_orange o_precinct_orange position-relative">
                <div class="">
                    <div class="row ">
                        <div class="col-12 col-sm-6">
                            <div class="fixed_elements_3">
                                    <div class="slick_sub_holder">
                                    <?php
                                        if( have_rows('internal_street_section_repeater') ):
                                        while( have_rows('internal_street_section_repeater') ) : the_row();
                                        $image = get_sub_field('internal_street_section_image');
                                    ?>
                                        <img class="img-fluid" src="<?php echo  $image; ?>">
                                    <?php
                                        endwhile;
                                        endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 d-flex flex-column justify-content-center pb-sm-4 position-relative office-right" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                            <div class="tab-content internal_street_pl" id="ueberTabB">
                                <div class="slick_holder">
                                    <div class="tab-pane fade active show" id="panel_b_1" role="tabpanel" aria-labelledby="first-1">
                                        <div class="internal-street">
                                            <div class="pt-4 pt-sm-0 theme color-workplace-evolution-section fontw-300-custom text-center text-sm-left m-0"><?php echo the_field('internal_street_section_content'); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="fixed_elements_internal_street" class="projects_list office_element_4">
        <div class="content_wrapper theme bg-workplace-evolution-section py-5">
            <div class="container">
                <div class="row pt-sm-5">
                    <div class="pt-sm-5 col-12">
                        <div class="pt-sm-5 internal-street-drawing margin-0-auto">
                            <?php include "img/internal-street.svg"; ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <p class="internal-street-text d-flex justify-content-center font-family-Nexa-Bold theme color-white"><?php echo the_field('internal_street_section_animation_text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="fixed_elements_4" class="projects_list office_element_4">
        <div class="hov-image">
            <div class="image-container" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                <div class="main-img position-relative d-none d-sm-block" style="background-image: url(<?php the_field('open_green_spaces_section_pc_image'); ?>);">
                    <div class="position-absolute green-spaces-text" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100"><?php the_field('open_green_spaces_section_pc_image_text'); ?></div>
                </div>
                <div class="main-img position-relative d-block d-sm-none" style="background-image: url(<?php the_field('open_green_spaces_section_mobile_image'); ?>);">
                    <div class="position-absolute green-spaces-text" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100"><?php the_field('open_green_spaces_section_mobile_image_text'); ?></div>
                </div>
            </div>
        </div>
        <div class="py-5 py-sm-0 pb-sm-0 content_wrapper theme bg-sm-white-color bg-section-residential-color">
            <div class="r_precinct_orange o_precinct_orange position-relative mx-3 mx-sm-0 overflow-ex">
                <div class="">
                    <div class="row flex-column-reverse flex-sm-row">
                        <div class="office-left col-12 col-sm-6 d-flex flex-column justify-content-center position-relative" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                            <div class="tab-content" id="ueberTabB">
                                <div class="slick_holder">
                                    <div class="tab-pane fade active show" id="panel_b_1" role="tabpanel" aria-labelledby="first-<?php echo $image_number; ?>">
                                        <div class="internal-street d-sm-none d-block">
                                            <div class="pt-4 m-sm-0 pt-sm-0 theme color-workplace-evolution-section fontw-300-custom text-center text-sm-left m-0"><?php the_field('common_spaces_section_content_mobile'); ?></div>
                                        </div>
                                        <div class="internal-street d-none d-sm-block">
                                            <div class="pt-4 m-sm-0 pt-sm-0 theme color-workplace-evolution-section fontw-300-custom text-center text-sm-left m-0"><?php the_field('common_spaces_section_content_pc'); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="fixed_elements_4">
                                <div class="slick_sub_holder">
                                    <?php
                                        if( have_rows('common_spaces_section_repeater') ):
                                        while( have_rows('common_spaces_section_repeater') ) : the_row();
                                        $image = get_sub_field('common_spaces_section_image');
                                    ?>
                                    <img class="img-fluid" src="<?php echo  $image; ?>" alt="">
                                    <?php
                                        endwhile;
                                        endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fixed_elements_5" class="projects_list office_element_5">
        <div class="py-sm-4 r_precinct_orange o_precinct_orange clients_work_section position-relative theme bg-sm-section-residential-color bg-white-color">
            <div class="container py-sm-5">
                <div class="row pt-sm-5">
                    <div class="col-12 col-sm-3">
                        <div class="py-5 py-sm-0 clients-title text-center text-sm-left font-family-xbold theme color-workplace-evolution-section" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100"><?php the_field('clients_who_work_here_section_title'); ?>
                        <div class="mt-3 ml-sm-0 clients-border"></div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-9 d-none d-sm-block" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                        <div class="row">
                            <?php
                                if( have_rows('clients_who_work_here_section_repeater') ):
                                while( have_rows('clients_who_work_here_section_repeater') ) : the_row();
                                $svg_name = get_sub_field('svg_name');
                            ?>
                            <div class="col-4 col-sm-3 d-flex align-items-center">
                                    <div class="clients-work pb-5">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $svg_name?>.svg">
                                    </div>
                                </div>
                            <?php
                                endwhile;
                                endif;
                            ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-9 d-block d-sm-none" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                        <div class="row justify-content-center pb-5 pb-sm-0">
                        <?php $svg_mobile_name = get_field('clients_who_work_here_section_mobile_svg_name'); ?>
                            <img class="d-none d-sm-block" src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $svg_mobile_name?>.svg">
                            <img class="d-block d-sm-none" src="<?php echo get_template_directory_uri(); ?>/img/<?php the_field('clients_who_work_here_mobile_svg_name'); ?>.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_wrapper theme bg-workplace-evolution-section">
            <div class="container py-5">
                <div class="row py-5">
                    <div class="col-12">
                        <div class="office-spaces-main" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                            <div class="office-spaces ml-sm-0 font-family-roboto theme color-white font-weight-300 office_big text-center text-sm-left"><?php the_field('office_spaces_section_title');?></div>
                            <div class="office-spaces-button text-center text-sm-left py-4">
                                <?php $link = get_field('office_spaces_section_button_link'); $link_text = $link['title']; $link_url = $link['url']; ?>
                                <a class="theme color-workplace-evolution-section color-hover-white-color font-family-roboto"><div class="cursor-pointer button px-4 py-1 d-inline-block theme bg-white-color bg-hover-explore-offices-color office-notify"><?php echo $link_text; ?></div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="notify-form position-fixed top left right vh-100 theme bg-workplace-evolution-section contact-slide contact-slide-residential contact-slide-office">
            <div class="container vh-100 pt-5 pt-sm-0">
                <div class="row vh-100 pt-5 pt-sm-0 position-relative">
                    <div class="col-12 col-sm-6 d-flex align-items-center vh-sm-100 justify-content-end">
                        <div class="pinnacle-main pt-5 pt-sm-0">
                            <div class="pinnacle-image pinnacle-image-office margin-0-auto">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/Office_precinct_designImpact_visual.svg" class="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 margin-0-auto d-flex align-items-center vh-sm-100">
                        <div class="pinnacle-main w-100">
                            <div class="pinnacle-form pt-5 pt-sm-0">
                                <p class="my-2 residential_small font-weght-bold theme color-white-color">Explore Available Office Spaces</p>
                                <?php echo FrmFormsController::show_form(5, $key = '', $title=true, $description=true); ?>
                            </div>
                        </div>
                    </div>
                    <div class="right notify-close-menu position-absolute">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cancel.png" class="">
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
