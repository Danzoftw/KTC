<?php
    get_header();
?>

<section class="archive-experiences-section news-experiences-section experiences-section news-section">
    <section class="pt-5 experiences theme bg-location-color-1">
        <div class="vh-sm-100 r_precinct_orange o_precinct_orange position-relative">
            <!-- <div class="w-50 position-absolute theme bg-workplace-evolution-section left d-none d-sm-block"></div> -->
                <div class="main-container container">
                    <div class="vh-sm-100 row align-items-center">
                        <div class="col-12 col-sm-6 p-0">
                            <div class="pb-b pb-sm-0 pl-sm-5 common-svg-width margin-0-auto py-sm-5 position-relative d-flex justify-content-center workplace-svg"  data-aos="fade-up" data-aos-delay="300" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                <div class="archive-exp-svg">
                                    <?php include "img/News_main_visual.svg"; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 p-0 theme bg-sm-transparent">
                            <div class="py-5 py-sm-0 r_precinct_orange_main o_precinct_orange_main py-sm-5 h-100 d-flex align-items-center theme bg-transparent"  data-aos="fade-up" data-aos-delay="300" data-aos-easing="cubic-bezier(0.16, 1, 0.3, 1)" data-aos-duration="1000" data-aos-offset="100">
                                <div class="d-flex flex-column cust_width">
                                    <div class="sub_title text-center text-sm-left m-0 residential_medium theme color-black-color color-sm-workplace-evolution-section font-family-Nexa-Bold"><?php the_field('archive_news_title',908); ?></div>
                                    <div class="mt-2 mb-3 r_precinct_orange_border ml-sm-0 archive-exp-border news-exp-border"></div>
                                    <div class="remove-p-margin px-3 px-sm-0 m-sm-0 margin-0-auto text-center text-sm-left office_big py-4 theme color-black-color font-family-Nexa-Bold"><?php the_field('archive_news_content',908); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news-main theme bg-unique-living-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="py-5 top-stories-main">
                            <div class="py-sm-3 top-stories experiences_32 theme color-black-color font-family-Nexa-Bold">
                                <?php the_field('archive_news_top_stories',908);?>
                            </div>
                            <div class="mb-3 top-stories-border"></div>
                        </div>
                    </div>

                <div class="col-12">
                    <div class="row">
                        <?php
                            $args = array('post_type' => 'news','post_status' => 'publish','posts_per_page' => -1,'order' => 'ASC');
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                        ?>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="related-stories-main pb-30">
                                <a class="related-stories-image d-block theme bg-black-color" href="<?php the_field('news_section_url'); ?>" target="_blank">
                                    <div class="news-img-1" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
                                </a>
                                <div class="related-stories-content p-4 theme bg-white-color">
                                    <div class="justify-content-center justify-content-sm-start related-stories-date d-flex">
                                        <div class="date team_small theme color-black-color pr-2"><?php echo get_the_date('F Y'); ?></div>
                                        <div class="tags team_small theme color-black-color pl-2"><?php echo the_tags('','','<br>'); ?></div>
                                    </div>
                                    <div class="deco-none">
                                        <a href="<?php the_field('news_section_url'); ?>" target="_blank" class="d-block">
                                            <div class="text-center text-sm-left py-2 py-sm-4 related-stories-title experiences_32 font-family-Nexa-Bold theme color-black-color"><?php the_title();?></div>
                                        </a>
                                    </div>
                                    <a class="pt-sm-3 d-none d-sm-block" href="<?php the_field('news_section_url'); ?>" target="_blank"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow-blue.png"/></a>
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
        </div>
    </section>
</section>

<?php
	get_footer();
?>
