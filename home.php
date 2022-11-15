<?php
/*
 * Template Name: homepage Template
*/
get_header();
?>
<div class="scroll_bg"></div>


<section class="main_wrapper">
	<div class="bg_color theme bg-location-color-1"></div>
	<div class="img_container">
		<?php include('animation_images.php');?>
	</div>
	<div class="text_container">
		<?php include 'img/scrollsequence/the_text.svg' ?>
	</div>
</section>


<section class="section_banner position-fixed sec_fixed" data-section-name="banner" data-index="#1"></section>

<section class="section_banner position-fixed sec_fixed" data-section-name="banner1" data-index="#2"></section>

<!-- <section class="section_banner section_two position-fixed sec_fixed" data-section-name="banner2" data-index="#3"></section> -->

<section id="js-scroll" class="second_sec overhidden position-fixed1 position-relative section_banner" data-section-name="banner_main" data-index="#4">

<section class="shape-of-things pb-sm-0">
  <div class="bg_top position-relative">
		<div class="bg_top_set position-absolute theme bg-gray-smoke bg-sm-section-residential-color"></div>
		<div class="bg_3d_image_wrapper">
			<div class="bg_3d_image_wrapper_inner">
				<div">
					<div class="bg_3d_image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/aeriel.jpg')">
					</div>
				</div>
			</div>
		</div>

  </div>
    <div id="auto_scroll_point" class="section-class theme bg-gray-smoke bg-sm-section-residential-color">
	    <div class="container pt-5 pb-md-5">
	        <div class="row py-sm-5">
	            <div class="col-lg-6 col-md-7 col-sm-7 d-flex align-items-sm-center">
	                <div class="sot-left" data-aos="fade-up" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)">
	                    <div class="title pb-sm-4">
	                        <h3 class="position-relative big-title text-center text-sm-left mb-0"><?php the_field('shape_of_things_section__title'); ?></h3>
	                    </div>
	                    <div class="sot-border"></div>
	                    <div class="content pt-5">
	                        <div class="small-title text-center text-sm-left m-0"><?php the_field('shape_of_things_section_content'); ?></div>
	                    </div>
	                </div>
	            </div>
	            <div class="pb-5 pb-sm-0 col-lg-6 col-md-5 col-sm-5 mt-5 mt-sm-0 d-flex align-items-center">
	               <div class="image m-0 m-auto pb-5 pb-sm-0 o-visible">
	                    <div class="svg_wrapper o-visible">
	                      <?php include 'img/icecream.svg' ?>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div id="precinct_section"></div>
	    </div>
    </div>
</section>

<section class="precinct-section section-class pb-5 pb-sm-0 position-relative">
    <div class="row">
        <?php
            if( have_rows('precinct_repeater') ):
            while( have_rows('precinct_repeater') ) : the_row();
            $residential_image = get_sub_field('residential_image');
            $office_image = get_sub_field('office_image');
            $leisure_image = get_sub_field('leisure_image');
            $residential_name = get_sub_field('residential_name');
            $office_name = get_sub_field('office_name');
            $leisure_name = get_sub_field('leisure_name');
            $residential_title = get_sub_field('residential_section_title');
            $office_title = get_sub_field('office_section_title');
            $leisure_title = get_sub_field('leisure_section_title');
            $residential_content = get_sub_field('residential_section_content');
            $office_content = get_sub_field('office_section_content');
            $leisure_content = get_sub_field('leisure_section_content');
            $residential_live_button = get_sub_field('residential_section_button_text');
            $office_live_button = get_sub_field('office_section_button_text');
            $leisure_live_button = get_sub_field('leisure_section_button_text');
            $residential_link = get_sub_field('residential_section_link');
            $office_link = get_sub_field('office_section_link');
            $leisure_link = get_sub_field('leisure_section_link');
        ?>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="tab-content" id="ueberTabB">
                <div class="my-slick">
                    <div class="tab-pane fade active show" id="panel_b_first" role="tabpanel" aria-labelledby="first-tab">
                        <div class="img" style="background-image: url(<?php echo $residential_image ?>)"></div>
                    </div>
                    <div class="tab-pane fade" id="panel_b_second" role="tabpanel" aria-labelledby="second-tab">
                        <div class="img" style="background-image: url(<?php echo $office_image ?>)"></div>
                    </div>
                    <div class="tab-pane fade" id="panel_b_thrid" role="tabpanel" aria-labelledby="third-tab">
                        <div class="img" style="background-image: url(<?php echo $leisure_image ?>)"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="main-residential pt-4 pt-sm-5 mt-sm-3" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000"  data-aos-offset="100">
                <div class="sub-residential">
                    <ul class="m-0 m-auto m-md-0 nav nav-tabs position-relative" id="ueberTab" role="tablist">
                        <div class="position-absolute changing-color">
                        </div>
                        <li class="nav-item cust-width selected"><a class="text-center w-100 cust-width precinct-font nav-link common-a active res" id="first-tab" data-target="#panel_b_first" data-secondary="#residential" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="false" data-class="residential"><?php echo $residential_name ?></a></li>
                        <li class="nav-item cust-width"><a class="text-center w-100 cust-width precinct-font nav-link common-a offic_class" id="second-tab" data-target="#panel_b_second" data-secondary="#office" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="true" data-class="office"><?php echo $office_name ?></a></li>
                        <li class="nav-item cust-width"><a class="text-center w-100 cust-width precinct-font nav-link common-a leis" id="third-tab" data-target="#panel_b_thrid" data-secondary="#leisure" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false" data-class="leisure"><?php echo $leisure_name ?></a></li>
                    </ul>
                </div>
                <div class="residential-precinct-main">
                    <div class="tab-content h-100 w-100"  id="ueberTabA">
                        <div class="w-100 tab-pane fade active show" id="residential" role="tabpanel" aria-labelledby="first-tab">
                            <div class="residential-precinct mt-4 mt-md-0 mb-5 position-relative">
                                <div class="title mt-md-3 pt-lg-4">
                                    <h3 class="m-0 pt-4 text-center text-md-left big-title pt-lg-2 position-relative pb-4 mb-0"><?php echo $residential_title ?></h3>
                                </div>
                                <div class="line"></div>
                                <div class="content pt-sm-4 text-center text-md-left">
                                    <?php echo $residential_content ?>
                                </div>
                                <?php if($residential_live_button) { ?>
                                    <div class="live-btn pt-4 pt-sm-4 pt-md-3 pt-lg-4 justify-content-center justify-content-md-start">
                                        <a href="<?php echo $residential_link ?>" class="px-4 py-2"><?php echo $residential_live_button ?></a>
                                    </div>
                                <?php } else{ ?>

                                <?php } ?>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="office" role="tabpanel" aria-labelledby="second-tab">
                            <div class="office-precinct residential-precinct  mt-4 mt-md-0 mb-5 position-relative">
                                <div class="title mt-md-3 pt-lg-4">
                                    <h3 class="pt-4 text-center text-md-left big-title pt-lg-2 position-relative mb-0 pb-4"><?php echo $office_title ?></h3>
                                </div>
                                <div class="line office-line"></div>
                                <div class="content text-center text-md-left pt-md-4">
                                    <?php echo $office_content ?>
                                </div>
                                <?php if($office_live_button) { ?>
                                    <div class="live-btn live-btn-office pt-4 pt-sm-4 pt-md-3 pt-lg-4 justify-content-center justify-content-md-start">
                                        <a href="<?php echo $office_link ?>" class="px-4 py-2"><?php echo $office_live_button ?></a>
                                    </div>
                                <?php } else{ ?>

                                <?php } ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="leisure" role="tabpanel" aria-labelledby="third-tab">
                            <div class="leisure-precinct office-precinct residential-precinct  mt-4 mt-md-0 mb-5 position-relative">
                                <div class="title mt-md-3 pt-lg-4">
                                    <h3 class="pt-4 text-center text-md-left big-title pt-lg-2 position-relative mb-0 pb-4"><?php echo $leisure_title ?></h3>
                                </div>
                                <div class="line leisure-line"></div>
                                <div class="content text-center text-md-left pt-md-4">
                                    <?php echo $leisure_content ?>
                                </div>
                                <?php if($leisure_live_button) { ?>
                                    <div class="live-btn live-btn-leisure pt-4 pt-sm-4 pt-md-3 pt-lg-4 justify-content-center justify-content-md-start">
                                        <a href="<?php echo $leisure_link ?>" class="px-4 py-2 "><?php echo $leisure_live_button ?></a>
                                    </div>
                                <?php } else{ ?>

                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            endwhile;
            endif;
        ?>
    </div>
    <div class="precinct-svg-animation position-absolute residential">
        <?php include 'img/residential.svg' ?>
        <?php include 'img/KTC_web_visuals_roffice_1-01.svg' ?>
        <?php include 'img/KTC_web_visuals_leisure_1-01.svg' ?>
    </div>
    <div class="precinct-mobile position-absolute">
        <?php include 'img/residential_mobile.svg' ?>
        <?php include 'img/office_mobile.svg' ?>
        <?php include 'img/leisure_mobile.svg' ?>
    </div>

</section>

<section class="different-by-design section-class py-lg-5 pb-5 position-relative theme bg-section-residential-color">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <div class="d-b-d-main mt-lg-5 pt-5 mt-sm-0 pt-sm-0" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000"  data-aos-offset="100">
                    <div class="title pt-5 mt-sm-5 pb-sm-4">
                        <h3 class="text-center text-sm-left big-title mb-0"><?php the_field('different_by_design_title'); ?></h3>
                    </div>
                    <div class="sot-border"></div>
                    <div class="content m-sm-0 pt-5 pt-sm-4 small-title text-center text-sm-left mb-md-5 mb-lg-1">
                        <?php the_field('different_by_design_content'); ?>
                    </div>
                    <?php $dbd_btn = get_field('different_by_design_button_text')?>
                    <?php if($dbd_btn) { ?>
                        <div class="d-b-d-btn d-b-d-btn-main mt-5 mt-sm-4 pt-lg-4 text-center text-sm-left">
                            <a href="<?php the_field('different_by_design_button_link'); ?>" class="px-3 px-sm-2 px-md-3 py-2"><?php the_field('different_by_design_button_text'); ?></a>
                        </div>
                    <?php } else{ ?>

                    <?php } ?>
                </div>
            </div>
            <div class="pb-3 pb-sm-0 col-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="dbd_image mx-auto pt-5">
                    <div class="svg_wrapper">
                      <?php include 'img/KTC_web_visuals_philosophy_1-01.svg' ?>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>

<section class="social-club different-by-design section-class">
    <div class="container py-sm-5">
        <div class="row">
            <?php
                if( have_rows('social_hub_repeater') ):
                while( have_rows('social_hub_repeater') ) : the_row();
                $title = get_sub_field('social_hub_section_title');
                $content = get_sub_field('social_hub_section_content');
                $button_text = get_sub_field('social_hub_section_button_text');
                $link = get_sub_field('social_hub_section_button_link');
                $image_1_text = get_sub_field('animation_one_text');
                $image_2_text = get_sub_field('animation_two_text');
                $image_3_text = get_sub_field('animation_three_text');
                $image_4_text = get_sub_field('animation_four_text');
                $pin_image = get_sub_field('pin_image');
            ?>
            <div class="col-12 col-sm-6 col-lg-6 d-flex align-items-center">
                <div class="d-b-d-main mt-5 pt-5 mt-sm-0 pt-sm-0" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000">
                    <div class="title mt-sm-0 ml-sm-0 pb-sm-4">
                        <h3 class="text-center text-sm-left big-title mb-0"><?php echo $title?></h3>
                    </div>
                    <div class="cust-line"></div>
                    <div class="content m-sm-0 pt-5 pb-3 pt-sm-4 small-title text-center text-sm-left">
                        <?php echo $content?>
                    </div>
                    <?php if($button_text) { ?>
                        <div class="mt-md-1 d-b-d-btn b-b-d-btn-explore mt-5 mt-sm-4 pt-lg-2 text-center text-sm-left">
                            <a href="<?php echo $link?>" class="px-5 py-2 px-lg-3 position-relative"><?php echo $button_text ?>
                                <img src="<?php echo $pin_image ?>" class="position-absolute">
                            </a>
                        </div>
                    <?php } else{ ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
                <div class="banglores-social-hub-svg">
                    <div class="social-animate py-5 px-lg-5">
                        <div class="py-3 py-md-5 d-flex flex-wrap align-content-center">
                            <div class="text-center col-6 d-flex flex-column ">
                                <div class="animate_1 common-height d-flex justify-content-center">
                                    <?php include 'img/location_icon_1.svg' ?>
                                </div>
                                <p class="pt-3"><?php echo $image_1_text ?></p>
                            </div>
                            <div class="text-center col-6 d-flex flex-column align-self-end">
                                <div class="animate_2 common-height d-flex justify-content-center">
                                    <?php include 'img/location_icon_2.svg' ?>
                                </div>
                                <p class="pt-3"><?php echo $image_2_text ?></p>
                            </div>
                            <div class="mt-3 mt-md-5 pt-3 pt-md-4 text-center col-6">
                                <div class="animate_3 common-height d-flex justify-content-center">
                                    <?php include 'img/location_icon_3.svg' ?>
                                </div>
                                <p class="pt-3"><?php echo $image_3_text ?></p>
                            </div>
                            <div class="mt-3 mt-md-5 pt-3 pt-md-4 text-center col-6">
                                <div class="animate_4 common-height d-flex justify-content-center">
                                    <?php include 'img/location_icon_4.svg' ?>
                                </div>
                                <p class="pt-3"><?php echo $image_4_text ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                endif;
            ?>
        </div>
    </div>
</section>

<section class="office-parallax" >
    <div class="block home-page-block">
        <div class="main-img-home img-parallax" data-speed="-1" style="background-image: url(<?php the_field('image_section_image'); ?>);">
        </div>
    </div>
</section>
</div>

<?php
    get_footer();
?>
</section>
