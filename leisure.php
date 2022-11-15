<?php
/*
 * Template Name: Leisure Template
*/
get_header();
// Start the loop.
while ( have_posts() ) :
  the_post();
?>

<section class="main_wrapper">
	<div class="bg_color_inner theme bg-color-inner"></div>

	<div class="text_container_inner">
		<?php include 'img/Leisure_text.svg' ?>
	</div>

</section>


<section class="section_banner position-fixed sec_fixed" data-section-name="banner" data-index="#1"></section>

<section class="section_banner position-fixed sec_fixed" data-section-name="banner1" data-index="#2"></section>


<section id="js-scroll" data-scroll-container class="second_sec overhidden position-fixed1 position-relative section_banner" data-section-name="banner_main" data-index="#4">

<section class="main_scroller position-relative">

    <section class="residential_banner theme bg-leisure-color">
        <div class="bg_top position-relative">
            <div class="bg_3d_image_wrapper">
                <div class="bg_3d_image_wrapper_inner">
                    <div>
                        <div class="bg_3d_image bg_3d_image_inner" style="background-image: url('<?php the_field('leisure_section_image'); ?>')">
                            <div class="overlay_offwhite position-absolute"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="r_precinct_orange o_precinct_orange l_precinct_orange position-relative">
            <div class="w-50 h-100 position-absolute theme bg-leisure-color left d-none d-sm-block"></div>
                <div class="container py-sm-0 main-container">
                    <div class="row py-sm-5">
                        <div class="col-12 col-sm-6 p-0 theme bg-leisure-color bg-sm-transparent">
                            <div class="r_precinct_orange_main o_precinct_orange_main pt-5 pt-sm-0 py-sm-5 h-100 d-flex align-items-center theme bg-transparent" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                <div class="d-flex flex-column cust_width_leisure_curated">
                                    <div class="main_title text-center text-sm-left"><p class="m-0 residential_medium theme color-white"><?php the_field('leisure_section_curated_experiences_title'); ?></p></div>
                                    <div class="mt-2 mb-5 r_precinct_orange_border ml-sm-0"></div>
                                    <div class="sub_title text-center text-sm-left"><p class="m-0 residential_big theme color-white"><?php the_field('leisure_section_curated_experiences_sub_title'); ?></p></div>
                                    <div class="content text-center text-sm-left"><div class="office_medium py-4 theme color-white"><?php the_field('leisure_section_curated_experiences_content'); ?></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-5 pb-sm-0 col-12 col-sm-6 p-0">
                            <div class="py-5 r_precinct_orange_sub curate_svg">
                                <?php $svg_name = get_field('leisure_section_curated_svg_name'); include "img/$svg_name.svg"; ?>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        $counter=0;
        if( have_rows('leisure_content_reptater') ):
        while( have_rows('leisure_content_reptater') ) : the_row();
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $count=0;
        if($counter%2==0){
    ?>
    <section id="fixed_elements_<?php echo $count?>" class="projects_list office_element_<?php echo $count?> position-relative">
        <div class="theme bg-white-color bg-sm-leisure-entertainment-spaces content_wrapper">
            <div class="overflow-leisure r_precinct_orange o_precinct_orange position-relative theme bg-white-color bg-sm-leisure-entertainment-spaces" data-scroll data-scroll-sticky data-scroll-target="#fixed_elements_<?php echo $count?>">
                <div class="row">
                    <div class="col-12 col-sm-6 p-0">
                        <div class="lady_svg">
                            <?php include "img/Leisure_EntertainmentSpaces_visual_masked.svg"; ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 d-flex flex-column justify-content-center pb-sm-4 position-relative theme bg-leisure-entertainment-spaces">
                        <div class="py-5 leisure-right custom-padding-left pl-sm-4" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                            <div class="leisure_big font-weight-300 theme color-sm-leisure-color color-black font-family-nexa-light text-center text-sm-left py-4">
                                <?php echo $title; ?>
                            </div>
                            <div class="pb-5 pb-sm-0 pt-3 theme color-black opacity-60 leisure_small text-center text-sm-left ml-sm-0 custom-leisure-width">
                                <?php echo $content; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php
        $counter++;
        $count++;
        }
        else{
            ?>
    <section id="fixed_elements_<?php echo $count?>" class="projects_list office_element_<?php echo $count?> position-relative">
        <div class="theme bg-white-color bg-sm-leisure-entertainment-spaces content_wrapper">
            <div class="overflow-leisure r_precinct_orange o_precinct_orange position-relative theme bg-white-color bg-sm-leisure-entertainment-spaces" data-scroll data-scroll-sticky data-scroll-target="#fixed_elements_<?php echo $count?>">
                <div class="row flex-row-reverse">
                    <div class="col-12 col-sm-6 p-0">
                        <div class="dns_svg">
                            <?php include "img/dns.svg"; ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 d-flex flex-column justify-content-center pb-sm-4 position-relative theme bg-section-residential-color">
                        <div class="py-5 leisure-left custom-padding-right" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                            <div class="leisure_big font-weight-300 theme color-sm-leisure-color color-black font-family-nexa-light text-center text-sm-left py-4">
                                <?php echo $title; ?>
                            </div>
                            <div class="pt-3 theme color-black opacity-60 leisure_small text-center text-sm-left ml-sm-0 custom-leisure-width">
                                <?php echo $content; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php
            $counter++;
            }
            endwhile;
            endif;
        ?>
    <section id="fixed_elements_2" class="projects_list">
        <div class="content_wrapper theme bg-section-residential-color bg-sm-unique-living-section" data-scroll-section>
            <div class="py-sm-5 r_precinct_orange position-relative">
                <div class="container py-5">
                    <div class="py-sm-5 row flex-sm-row">
                        <div class="col-12 col-sm-6 p-0 d-flex align-items-center">
                            <div class="pl-sm-0 hospatility_svg m-sm-0">
                                <?php include "img/Leisure_precinct_Hospitality_visual.svg"; ?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 p-0">
                            <div class="leisure-right custom-padding-right" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                <div class="leisure_big font-weight-300 theme color-leisure-color font-family-nexa-light text-center text-sm-left py-4">
                                    <?php the_field('hospitality_and_events_title'); ?>
                                </div>
                                <div class="theme color-black opacity-60 leisure-small text-center text-sm-left ml-sm-0 custom-leisure-width">
                                <?php the_field('hospitality_and_events_content'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fixed_elements_5" class="projects_list">
        <div class="theme bg-white-color bg-sm-section-residential-color content_wrapper" data-scroll-section>
            <div class="overflow-leisure r_precinct_orange o_precinct_orange position-relative theme bg-sm-section-residential-color" data-scroll data-scroll-sticky data-scroll-target="#fixed_elements_5">
                <div class="row flex-row-reverse">
                    <div class="col-12 col-sm-6 p-0">
                        <div class="commspaces">
                            <?php include "img/commspaces.svg"; ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 d-flex flex-column justify-content-center pb-sm-4 position-relative">
                        <div class="py-5 leisure-left custom-padding-right">
                            <div class="leisure_big font-weight-300 theme color-sm-leisure-color color-black font-family-nexa-light text-center text-sm-left py-4">
                                <?php the_field('leisure_section_community_spaces_title'); ?>
                            </div>
                            <div class="pb-5 pb-sm-0 pt-3 theme color-black opacity-60 leisure_small text-center text-sm-left ml-sm-0 custom-leisure-width">
                                <?php the_field('leisure_section_community_spaces_content'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
   

    <?php
    // End the loop.
    get_footer();
    ?>
</section>
</section>
<?php
  endwhile;
?>

<script>
//https://codepen.io/GreenSock/pen/eYJrQEg
</script>
