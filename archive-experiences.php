<?php
    get_header();
?>

<section class="archive-experiences-section">
    <section class="experiences theme bg-location-color-1">
        <div class="py-sm-5 r_precinct_orange o_precinct_orange position-relative vh-sm-100">
            <div class="w-50 position-absolute theme bg-workplace-evolution-section left d-none d-sm-block"></div>
                <div class="pt-5 pt-sm-0 vh-sm-100 main-container container py-lg-5 d-flex align-items-center">
                    <div class="pt-5 pt-sm-0 row vh-sm-100 d-flex align-items-center">
                        <div class="col-12 col-sm-6 p-0">
                            <div class="pb-b pb-sm-0 pl-sm-5 common-svg-width margin-0-auto py-sm-5 position-relative d-flex justify-content-center workplace-svg"  data-aos="fade-up" data-aos-delay="300" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                <div class="archive-exp-svg">
                                    <?php include "img/Experience_main_visual.svg"; ?>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5 pt-sm-0 col-12 col-sm-6 p-0 theme bg-sm-transparent">
                            <div class="pt-5 pt-sm-0 r_precinct_orange_main o_precinct_orange_main py-sm-5 d-flex align-items-center theme bg-transparent"  data-aos="fade-up" data-aos-delay="300" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                <div class="pt-3 pt-sm-0 d-flex flex-column cust_width">
                                    <div class="sub_title text-center text-sm-left m-0 residential_medium theme color-black-color font-family-Nexa-Bold"><?php the_field('archive_experiences_title',875); ?></div>
                                    <div class="mt-2 mb-3 r_precinct_orange_border ml-sm-0 archive-exp-border"></div>
                                    <div class="px-3 px-sm-0 m-sm-0 margin-0-auto text-center text-sm-left office_big py-4 theme color-black-color font-family-Nexa-Bold"><?php the_field('archive_experiences_content',875); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="theme bg-unique-living-section single-post-main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 px-0 px-sm-1">
                    <div class="justify-content-lg-between px-3 py-5 filter-post d-sm-flex flex-wrap">
                        <div class="left-div d-md-flex justify-content-center">
                            <div class="pr-sm-4 date-text d-flex align-items-center font-family-roboto font-weight-300 theme color-black-color justify-content-center justify-content-md-start">Select by Quadrant</div>
                            <!-- <div class="py-sm-3 py-md-0 quadrant-list d-flex flex-wrap flex-sm-nowrap"> -->
                            <div class="py-sm-3 py-md-0 quadrant-list row">
                                <?php
                                $args = array(
                                    'taxonomy' => 'category',
                                    'order'   => 'DESC'
                                );

                                $cats = get_categories($args);

                                foreach($cats as $cat) {
                                    if( $cat->name == 'Nurture') {
                                        ?>
                                        <div id="<?php echo $cat->term_id; ?>" class="justify-content-center col-6 col-sm-3 py-3 py-sm-0 margin-0-auto d-flex align-items-center px-3 exp_category_single  <?php echo $cat->name; ?>">
                                            <?php include "img/nurture_button.svg"; ?>
                                        </div>
                                        <?php
                                    }
                                    else if( $cat->name == 'Express') {
                                    ?>
                                        <div id="<?php echo $cat->term_id; ?>" class="justify-content-center col-6 col-sm-3 py-3 py-sm-0 margin-0-auto d-flex align-items-center px-3 exp_category_single  <?php echo $cat->name; ?>">
                                            <?php include "img/express_button.svg"; ?>
                                        </div>
                                    <?php 
                                    }
                                    else if( $cat->name == 'Inspire') {
                                    ?>
                                    <div id="<?php echo $cat->term_id; ?>" class="justify-content-center col-6 col-sm-3 py-3 py-sm-0 margin-0-auto d-flex align-items-center px-3 exp_category_single  <?php echo $cat->name; ?>">
                                            <?php include "img/inspire_button.svg"; ?>
                                        </div>
                                    <?php 
                                        } 
                                    else if( $cat->name == 'Belong') {
                                    ?>
                                        <div id="<?php echo $cat->term_id; ?>" class="justify-content-center col-6 col-sm-3 py-3 py-sm-0 margin-0-auto d-flex align-items-center px-3 exp_category_single  <?php echo $cat->name; ?>">
                                            <?php include "img/Belong_button.svg"; ?>
                                        </div>
                                    <?php } ?>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                       <div class="right-div py-sm-4 py-lg-0">
                        <div class="date-main d-flex flex-wrap justify-content-center">
                                <p class="py-3 py-sm-0 text-center text-sm-left m-0 px-3 d-flex align-items-center">Select by Date</p> 
                                <!-- <div class="date-text d-sm-flex align-items-center font-family-roboto font-weight-300 theme color-black-color d-flex flex-wrap flex-sm-nowrap"> -->
                                <div class="date-text d-sm-flex align-items-center font-family-roboto font-weight-300 theme color-black-color d-flex">
                                    <div class="d-flex justify-content-center dropdown theme bg-white-color">
                                        <input name="startDate" id="startDate" class="py-2 experiences_small_date theme color-location-color-2 date-picker px-3" value="<?php echo get_the_date('F Y'); ?>" readonly/>
                                        <div class="content"></div>
                                    </div>
                                    <div class="display-all pl-sm-4 all d-flex justify-content-center">
                                        <button id="all" class="ml-2 ml-sm-0 py-2 px-sm-4 border-0 theme bg-white-color font-family-roboto color-location-color-2 experiences_small_date exp_category_single">ALL</button>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="main_exp_container pb-5 mb-5">

                    </div>

                </div>
            </div>
        </div>
    </section>

</section>

<?php
	get_footer();
?>
