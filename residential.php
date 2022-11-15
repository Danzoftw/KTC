<?php
/*
 * Template Name: Residential Template
*/
get_header();
// Start the loop.
while ( have_posts() ) :
  the_post();
?>

<section class="main_wrapper">
	<div class="bg_color_inner theme bg-color-inner"></div>

	<div class="text_container_inner">
		<?php include 'img/Residential_text.svg' ?>
	</div>

</section>

<section class="section_banner position-fixed sec_fixed" data-section-name="banner" data-index="#1"></section>

<section class="section_banner position-fixed sec_fixed" data-section-name="banner1" data-index="#2"></section>

<section id="js-scroll" class="second_sec overhidden position-fixed1 position-relative section_banner" data-section-name="banner_main" data-index="#4">

<section class="main_scroller position-relative">

  <section class="residential_banner theme bg-unique-living-section" data-scroll-section>
    <div class="bg_top position-relative">
  		<div class="bg_3d_image_wrapper">
  			<div class="bg_3d_image_wrapper_inner">
  				<div>
  					<div class="bg_3d_image bg_3d_image_inner d-none d-sm-block" style="background-image: url('<?php the_field('residential_page_pc_image'); ?>')">
              <div class="overlay_offwhite position-absolute"></div>
  					</div>
  					<div class="bg_3d_image bg_3d_image_inner d-block d-sm-none" style="background-image: url('<?php the_field('residential_page_mobile_image'); ?>')">
              <div class="overlay_offwhite position-absolute"></div>
  					</div>
  				</div>
  			</div>
  		</div>
    </div>
    <div class="r_precinct_orange position-relative py-0 py-sm-5">
      <div class="w-50 h-100 position-absolute theme bg-unique-living-color left top d-none d-sm-block"></div>
        <div class="container py-0 py-sm-3">
          <div class="row py-sm-5">
          <div class="col-12 col-sm-6 p-0 theme bg-unique-living-color bg-sm-transparent">
            <div class="r_precinct_orange_main py-5 py-sm-0 h-100 d-flex align-items-center theme bg-transparent" data-scroll-section data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
              <div class="d-flex flex-column cust_width">
                <div class="main_title text-center text-sm-left"><p class="m-0 residential_medium theme color-white"><?php the_field('residential_page_title'); ?></p></div>
                <div class="mt-2 mb-4 r_precinct_orange_border ml-sm-0"></div>
                <div class="sub_title text-center text-sm-left"><p class="my-sm-4 m-0 residential_big theme color-white hide-br-mobile py-3 py-sm-0"><?php the_field('residential_page_sub_title'); ?></p></div>
                <div class="unuqie_content_with ml-sm-0 font-family-roboto text-center text-sm-left office_medium theme color-white"><?php the_field('residential_page_content'); ?></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 p-0">
            <div class="pl-lg-5 py-5 py-sm-0 r_precinct_orange_sub position-relative" data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="350">
              <div class="r_precinct_orange_slick cust_width">
                <?php
                  if( have_rows('unique_living_repeater') ):
                  while( have_rows('unique_living_repeater') ) : the_row();
                  $svg_name = get_sub_field('svg_name');
                  $title = get_sub_field('title');
                  $content = get_sub_field('content');
                ?>
                <div class="content-main">
                  <div class="image margin-0-auto m-sm-0 d-flex align-items-end">
                    <?php include "img/$svg_name.svg"; ?>
                  </div>
                  <div class="">
                    <div class="title pb-4">
                      <p class="m-0 text-center text-sm-left residential_big"><?php echo $title; ?></p>
                    </div>
                    <div class="content text-center text-sm-left residential_small opacity-60 pb-sm-2">
                      <?php echo $content; ?>
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
        </div>
      </div>
    </div>
  </section>

  <section id="fixed_elements_1" class="projects_list">
    <div class="single_list_container" data-scroll-section>

          <div class="bg_image bg_image_1 position-relative d-none d-sm-block" data-scroll data-scroll-sticky data-scroll-target="#fixed_elements_1" style="background-image: url('<?php the_field('life_without_barriers_section_pc_image'); ?>')">
          </div>
  
          <div class="bg_image bg_image_mobile_1 position-relative d-block d-sm-none" data-scroll data-scroll-sticky data-scroll-target="#fixed_elements_1" style="background-image: url('<?php the_field('life_without_barriers_section_mobile_image'); ?>')">
          </div>

    </div>
    <div class="content_wrapper theme bg-section-residential-color position-relative" data-scroll-section>
      <div class="r_precinct_orange position-relative py-0 py-sm-5">
        <div class="container py-0 py-sm-5">
          <div class="row">
            <div class="col-12 col-sm-6 p-0 d-flex align-items-center" data-scroll data-scroll-delay="0.2" data-scroll-speed="2">
              <div class="r_precinct_orange_main vario_r_precinct_orange_main cust_width py-5 py-sm-0 theme bg-leisure-entertainment-spaces bg-sm-section-residential-color" data-scroll-section data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                <div class="pt-4 pt-sm-0 main_title vario_main_title text-center text-sm-left ml-sm-0"><p class="m-0 residential_big theme color-life-without-barriers-title-color"><?php the_field('life_without_barriers_section_title'); ?></p></div>
                <div class="content vario_main_content text-center text-sm-left residential-last"><div class="smart-living-common-width residential_small py-4 theme color-life-without-barriers-content-color"><?php the_field('life_without_barriers_section_content'); ?></div></div>
                <div class="link_url d-none d-sm-block p-0">
                  <?php $link = get_field('life_without_barriers_link'); $link_text = $link['title']; $link_url = $link['url']; ?>
                  <a href="<?php echo $link_url; ?>" target="_blank"><div class="button px-4 py-1 d-inline-block theme bg-white-color"><?php echo $link_text; ?></div></a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 p-0" data-scroll data-scroll-delay="0.8" data-scroll-speed="1.5">
              <div class="life_without_barriers_svg my-5" data-scroll-section data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                <div class="px-3">
                  <div class="row">
                    <div class="flex-sm-column w-100">
                    <?php
                    if( have_rows('life_without_barriers_repeater') ):
                    while( have_rows('life_without_barriers_repeater') ) : the_row();
                    $svg_name = get_sub_field('svg_name');
                    ?>
                    <div class="col-12 d-flex custom_w_m cust_residential_bottom">
                      <div class="image pr-4 d-flex align-items-center justify-content-center">
                        
                      <?php include "img/$svg_name.svg" ?>
                      </div>
                      <div class="main_title">
                        <div class="title"><p class="mb-2 vario_medium mb-sm-0 theme color-life-without-barriers-title-color"><?php echo get_sub_field('title'); ?></p></div>
                        <div class="content"><p class="m-0 vario_small theme color-life-without-barriers-svg-color"><?php echo get_sub_field('description'); ?></p></div>
                      </div>
                    </div>
                    <?php
                      endwhile;
                      endif;
                    ?>
                    <div class="link_url d-sm-none text-center">
                      <?php $link = get_field('life_without_barriers_link'); $link_text = $link['title']; $link_url = $link['url']; ?>
                      <a href="<?php echo $link_url; ?>" target="_blank"><div class="button px-4 py-1 d-inline-block theme bg-white-color"><?php echo $link_text; ?></div></a>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sub-img-position vario-homes position-absolute p-4 theme bg-leisure-entertainment-spaces bg-sm-section-residential-color">
          <img src="<?php the_field('life_without_barriers_image_link'); ?>" class="d-flex justify-content-center margin-0-auto">
        </div>
      </div>
    </div>
  </section>

  <section id="fixed_elements_2" class="projects_list">
    <div class="single_list_container" data-scroll-section>

        <div class="bg_image bg_image_2 position-relative d-none d-sm-block" data-scroll data-scroll-sticky data-scroll-target="#fixed_elements_2" style="background-image: url('<?php the_field('world_class_for_the_top_brass_section_pc_image'); ?>')">
        </div>

        <div class="bg_image bg_image_mobile_2 position-relative d-block d-sm-none" data-scroll data-scroll-sticky data-scroll-target="#fixed_elements_2" style="background-image: url('<?php the_field('world_class_for_the_top_brass_section_mobile_image'); ?>')">
        </div>

    </div>
    <div class="content_wrapper theme bg-unique-living-section position-relative" data-scroll-section>
      <div class="r_precinct_orange position-relative py-0 py-sm-5">
        <div class="container py-0 py-sm-5">
          <div class="row">
            <div class="col-12 col-sm-6 p-0" data-scroll data-scroll-delay="0.2" data-scroll-speed="2">
              <div class="r_precinct_orange_main vario_r_precinct_orange_main zenith_residences_main py-5 py-sm-0 cust_width theme bg-leisure-entertainment-spaces bg-sm-unique-living-section" data-scroll-section data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                <div class="pt-4 pt-sm-4 main_title vario_main_title text-center text-sm-left ml-sm-0"><p class="pt-5 pt-sm-0 px-3 px-sm-0 show-br m-0 residential_big theme color-world-class-title-color"><?php the_field('world-class_for_the_top-brass_section_title'); ?></p></div>
                <div class="content vario_main_content text-center text-sm-left residential-last"><div class="residential_small py-4 theme color-life-without-barriers-content-color"><?php the_field('world_class_for_the_top_brass_section_content'); ?></div></div>
                <div class="link_url d-none d-sm-block p-0">
                  <?php $link = get_field('world_class_for_the_top_brass_section_link'); $link_text = $link['title']; $link_url = $link['url']; ?>
                  <a href="<?php echo $link_url; ?>" target="_blank"><div class="button px-4 py-1 d-inline-block theme bg-white-color"><?php echo $link_text; ?></div></a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 p-0" data-scroll data-scroll-delay="0.8" data-scroll-speed="1.5">
              <div class="life_without_barriers_svg zenith_residences_svg py-5 py-sm-0 theme bg-section-residential-color bg-sm-leisure-entertainment-spaces" data-scroll-section data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                <div class="px-3">
                  <div class="row">
                    <?php
                      if( have_rows('world_class_for_the_top_brass_section_repeater') ):
                      while( have_rows('world_class_for_the_top_brass_section_repeater') ) : the_row();
                      $svg_name = get_sub_field('svg_name');
                      $title = get_sub_field('title');
                      $description = get_sub_field('description');
                    ?>
                    <div class="col-12 d-flex custom_w_m cust_residential_bottom">
                      <div class="image pr-4 d-flex align-items-center justify-content-center">
                        <?php include "img/$svg_name.svg"; ?>
                      </div>
                      <div class="main_title">
                        <div class="title"><p class="mb-2 mb-sm-0 vario_medium theme color-world-class-title-color"><?php echo $title; ?></p></div>
                        <div class="content"><p class="mb-2 mb-sm-0 vario_small theme color-life-without-barriers-svg-color"><?php echo $description; ?></p></div>
                      </div>
                    </div>
                    <?php
                      endwhile;
                      endif;
                    ?>
                    <div class="link_url d-sm-none w-100 d-flex justify-content-center">
                      <?php $link = get_field('world_class_for_the_top_brass_section_link'); $link_text = $link['title']; $link_url = $link['url']; ?>
                      <a href="<?php echo $link_url; ?>" target="_blank"><div class="button px-4 py-1 d-inline-block theme bg-white-color"><?php echo $link_text; ?></div></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sub-img-position sub-img-zenith-position position-absolute p-4 theme bg-unique-living-section">
          <img src="<?php the_field('world_class_for_the_top_brass_image_link'); ?>" class="d-flex justify-content-center margin-0-auto">
        </div>
      </div>
    </div>
  </section>

  <section id="fixed_elements_3" class="projects_list">
    <div class="single_list_container" data-scroll-section>

        <div class="bg_image bg_image_3 position-relative d-none d-sm-block" data-scroll data-scroll-sticky data-scroll-target="#fixed_elements_3" style="background-image: url('<?php the_field('your_anchor_for_the_journey_called_life_pc_image'); ?>')">
        </div>
  
        <div class="bg_image bg_image_mobile_3 position-relative d-block d-sm-none" data-scroll data-scroll-sticky data-scroll-target="#fixed_elements_3" style="background-image: url('<?php the_field('your_anchor_for_the_journey_called_life_mobile_image'); ?>')">
        </div>

    </div>
    <div class="content_wrapper theme bg-unique-living-section position-relative" data-scroll-section>
      <div class="r_precinct_orange position-relative py-0 py-sm-5">
        <div class="container py-0 py-sm-5">
          <div class="row">
            <div class="col-12 col-sm-6 p-0" data-scroll data-scroll-delay="0.2" data-scroll-speed="2">
              <div class="r_precinct_orange_main vario_r_precinct_orange_main zenith_residences_main cust_width the_harbour_club_main py-5 py-sm-0 theme leisure-entertainment-spaces bg-sm-unique-living-section" data-scroll-section data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                <div class="main_title vario_main_title text-center text-sm-left ml-sm-0"><p class="px-3 px-sm-0 m-0 residential_big theme color-black"><?php the_field('your_anchor_for_the_journey_called_life_section_title'); ?></p></div>
                <div class="content vario_main_content text-center text-sm-left residential-last"><div class="residential_small py-4 theme color-life-without-barriers-content-color"><?php the_field('your_anchor_for_the_journey_called_life_section_content'); ?></div></div>
                <div class="link_url d-none d-sm-block p-0">
                  <?php $link = get_field('your_anchor_for_the_journey_called_life_section_link'); $link_text = $link['title']; $link_url = $link['url']; ?>
                  <a href="<?php echo $link_url; ?>" target="_blank"><div class="button px-4 py-1 d-inline-block theme bg-white-color"><?php echo $link_text; ?></div></a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 p-0" data-scroll data-scroll-delay="0.8" data-scroll-speed="1.5">
              <div class="theme bg-section-residential-color bg-sm-leisure-entertainment-spaces life_without_barriers_svg zenith_residences_svg the_harbour_club py-5 py-sm-0" data-scroll-section data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                <div class="px-3">
                  <div class="row">
                    <?php
                      if( have_rows('your_anchor_for_the_journey_called_life_section_repeater') ):
                      while( have_rows('your_anchor_for_the_journey_called_life_section_repeater') ) : the_row();
                      $svg_name = get_sub_field('svg_name');
                      $anchor_title = get_sub_field('anchor_title');
                      $description = get_sub_field('description');
                    ?>
                    <div class="col-12 d-flex custom_w_m cust_residential_bottom">
                      <div class="image pr-4 d-flex align-items-center justify-content-center">
                        <?php include "img/$svg_name.svg"; ?>
                      </div>
                      <div class="main_title">
                        <div class="title"><p class="mb-2 mb-sm-0 vario_medium theme color-black"><?php echo $anchor_title; ?></p></div>
                        <div class="content"><p class="mb-2 mb-sm-0 vario_small theme color-life-without-barriers-svg-color"><?php echo $description ; ?></p></div>
                      </div>
                    </div>
                    <?php
                      endwhile;
                      endif;
                    ?>
                    <div class="link_url d-sm-none w-100 d-flex justify-content-center">
                      <?php $link = get_field('your_anchor_for_the_journey_called_life_section_link'); $link_text = $link['title']; $link_url = $link['url']; ?>
                      <a href="<?php echo $link_url; ?>" target="_blank"><div class="button px-4 py-1 d-inline-block theme bg-white-color"><?php echo $link_text; ?></div></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sub-img-position sub-img-harbour-position position-absolute px-4 px-sm-5 py-3 theme bg-unique-living-section">
          <img src="<?php the_field('your_anchor_for_the_journey_called_life_section_image_link');?>">
        </div>
      </div>
    </div>
  </section>

  <section id="fixed_elements_4" class="projects_list">
    <div class="single_list_container" data-scroll-section>

        <div class="bg_image bg_image_4 position-relative d-none d-sm-block" data-scroll data-scroll-sticky data-scroll-target="#fixed_elements_4" style="background-image: url('<?php the_field('smart_living_section_pc_image'); ?>')">
        </div>

        <div class="bg_image bg_image_mobile_4 position-relative d-block d-sm-none" data-scroll data-scroll-sticky data-scroll-target="#fixed_elements_4" style="background-image: url('<?php the_field('smart_living_section_mobile_image'); ?>')">
        </div>
    </div>
    <div class="content_wrapper theme bg-leisure-entertainment-spaces bg-sm-section-residential-color position-relative" data-scroll-section>
      <div class="r_precinct_orange position-relative py-0 py-sm-5">
        <div class="container py-0 py-sm-5">
          <div class="row">
            <div class="col-12 col-sm-6 p-0" data-scroll data-scroll-delay="0.2" data-scroll-speed="2">
              <div class="cust_width r_precinct_orange_main vario_r_precinct_orange_main zenith_residences_main the_harbour_club_main smart_living_main py-5 py-sm-0 theme bg-leisure-entertainment-spaces bg-sm-section-residential-color" data-scroll-section data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                <div class="main_title vario_main_title text-center text-sm-left ml-sm-0"><p class="m-0 residential_big theme color-life-without-barriers-title-color"><?php the_field('smart_living_section_title'); ?></p></div>
                <div class="content vario_main_content text-center text-sm-left residential-last"><div class="smart-living-common-width residential_small py-4 theme color-life-without-barriers-content-color"><?php the_field('smart_living_section_content'); ?></div></div>
                <div class="link_url d-none d-sm-block p-0">
                  <?php $link = get_field('smart_living_section_link'); $link_text = $link['title']; $link_url = $link['url']; ?>
                  <div class="cursor-pointer notify-me button px-4 py-1 d-inline-block theme bg-white-color"><?php echo $link_text; ?></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 pl-0" data-scroll data-scroll-delay="0.8" data-scroll-speed="1.5">
              <div class="theme bg-section-residential-color life_without_barriers_svg zenith_residences_svg the_harbour_club smart_living py-5 py-sm-0" data-scroll-section data-aos="fade-up" data-aos-delay="100" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                <div class="px-3">
                  <div class="row">
                    <?php
                      if( have_rows('smart_living_section_repeater') ):
                      while( have_rows('smart_living_section_repeater') ) : the_row();
                      $svg_name = get_sub_field('svg_name');
                      $title = get_sub_field('title');
                      $description = get_sub_field('description');
                    ?>
                    <div class="col-12 d-flex custom_w_m cust_residential_bottom">
                      <div class="image pr-4 d-flex align-items-center justify-content-center">
                        <?php include "img/$svg_name.svg"; ?>
                      </div>
                      <div class="main_title">
                        <div class="title"><p class="mb-2 mb-sm-0 vario_medium theme color-life-without-barriers-title-color"><?php echo $title; ?></p></div>
                        <div class="content"><p class="mb-2 mb-sm-0 vario_small theme color-life-without-barriers-svg-color"><?php echo $description ; ?></p></div>
                      </div>
                    </div>
                    <?php
                      endwhile;
                      endif;
                    ?>
                    <div class="link_url d-block d-sm-none p-0 m-0 residential_big theme color-world-class-title-color d-sm-none w-100 d-flex justify-content-center">
                      <?php $link = get_field('smart_living_section_link'); $link_text = $link['title']; $link_url = $link['url']; ?>
                      <a href="<?php echo $link_url; ?>" target="_blank"><div class="button px-4 py-0 py-sm-1 d-inline-block theme bg-white-color"><?php echo $link_text; ?></div></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sub-img-position sub-img-pinnacle-position position-absolute px-4 px-sm-5 py-3 theme bg-leisure-entertainment-spaces bg-sm-section-residential-color">
          <img src="<?php the_field('smart_living_section_image_link');?>" class="pt-2">
        </div>
      </div>
    </div>
    <div class="notify-form position-fixed top left right vh-100 theme bg-section-residential-color contact-slide contact-slide-residential">
      <div class="col-12 col-sm-6 margin-0-auto d-flex align-items-center justify-content-center h-100 position-relative">
        <div class="pinnacle-main">
          <div class="pinnacle-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Pinnacle_logo.png" class="">
          </div>
          <div class="pinnacle-form">
            <p class="my-2 residential_small font-weght-bold theme color-black-color">Notify Me about Pinnacle Homes</p>
            <?php echo FrmFormsController::show_form(4, $key = '', $title=true, $description=true); ?>
          </div>
        </div>
        <div class="right notify-close-menu position-absolute">
          <img src="<?php echo get_template_directory_uri(); ?>/img/cancel.png" class="">
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
