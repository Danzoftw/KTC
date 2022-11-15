<?php
get_header();
?>

<section class="pt-5 experiences-section news-section theme bg-unique-living-section">
    <section class="pt-5 first-section">
        <div class="pt-5 container">
            <div class="row">
                <div class="col-12 col-sm-8">
                    <?php
                    while ( have_posts() ) : the_post();
                    ?>
                    <div class="py-3 previous-post-main d-flex author-details">
                        <div class="arrows d-flex">
                            <?php
                                if ( is_attachment() ) :
                                    previous_post_link( '%link', __( '<span class="meta-nav">Published in</span>', 'news' ) );
                                else :
                                    previous_post_link( '%link', __( '<span class="meta-nav mr-5 previous-post"></span>', 'news' ) );
                                    next_post_link( '%link', __( '<span class="meta-nav next-post"></span>', 'news' ) );
                                endif;
                            ?>
                        </div>
                        <div class="right-social">
                            <div class="share-button position-relative ml-4">
                                <img class="" src="<?php echo get_template_directory_uri(); ?>/img/share.png"/>
                                <div class="social social-news position-absolute">
                                    <?php dynamic_sidebar( 'Sidebar-1' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-section-1">
                        <div class="col-12 col-sm-8 pl-sm-0 margin-0-auto m-sm-0">
                            <div class="text-center text-sm-left news-title title office_big font-family-nexa-light theme color-black-color">
                                <?php the_field('news_section_title');?>
                            </div>
                        </div>
                        <div class="col-4"></div>
                        <?php if( get_field('news_section_content') ) { ?>
                            <div class="news-content opacity-60 py-4 content residential_medium font-family-roboto font-weight-300 text-center text-sm-left">
                                <?php the_field('news_section_content');?>
                            </div>
                        <?php } else{?>
                        <div></div>
                        <?php } ?>
                        <div class="py-4 profile d-flex">
                            <div class="image">
                                <?php
                                    $get_author_id = get_the_author_meta('ID');
                                    $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
                                    if(has_post_thumbnail()){
                                        the_post_thumbnail();
                                    } else {
                                        echo '<img src="'.$get_author_gravatar.'" alt="'.get_the_title().'" />';
                                    }
                                ?>
                            </div>
                            <div class="author d-flex flex-wrap flex-column px-4 justify-content-center">
                                <div class="author-name residnetial_small font-family-Nexa-Bold theme color-black-color">
                                    <span><?php the_author_meta('first_name');?></span>
                                    <span><?php the_author_meta('last_name');?></span>
                                </div>
                                <div class="date theme color-location-color-2 team_small font-family-roboto font-weight-300"><?php echo get_the_date('F Y'); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    ?>
                    <div class="image-section">
                        <div class="image py-4">
                            <img class="img-fluid" src="<?php the_field('news_section_main_image');?>">
                        </div>
                    </div>
                    <div class="content-section">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="text-center text-sm-left related-stories font-family-Nexa-Bold theme color-black-color experiences_32">
                        <?php the_field('news_section_related_stories',910); ?>
                        <div class="margin-0-auto m-sm-0 mt-2 mb-4 related-stories-line"></div>
                    </div>
                    <?php 
                        $args = array('post_type' => 'news','post_status' => 'publish','posts_per_page' => 3,'order' => 'ASC', 'offset' => 1);
                        $my_query = new WP_Query( $args ); 
                        if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
                    ?>
                        <div class="related-stories-main pb-4 pt-3">
                            <a class="related-stories-image d-block" href="<?php the_permalink(); ?>">
                                <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>">
                            </a>
                            <div class="related-stories-content p-3 theme bg-white-color">
                                <div class="related-stories-date d-flex">
                                    <div class="date team_small theme color-black-color pr-2"><?php echo get_the_date('F Y'); ?></div>
                                    <div class="tags team_small theme color-black-color pl-2"><?php echo the_tags('','','<br>'); ?></div>
                                </div>
                                <div class="py-sm-4 related-stories-title experiences_32 font-family-Nexa-Bold theme color-black-color"><?php the_title();?></div>
                                <div class="related-content theme color-location-color-2 font-family-roboto font-weight-100"><?php the_excerpt();?></div>
                                <a class="d-block" href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow-blue.png"/></a>
                            </div>
                        </div>
                    <?php 
                        endwhile; else:
                        wp_reset_postdata();
                    ?>
                    <p>No posts found</p>
                    <?php endif; ?>
                </div>
                <div class="col-12">
                    <div class="py-3 previous-post-main d-flex">
                        <?php
                            if ( is_attachment() ) :
                                previous_post_link( '%link', __( '<span class="meta-nav">Published in</span>', 'news' ) );
                            else :
                                previous_post_link( '%link', __( '<span class="meta-nav mr-5 previous-post"></span>', 'news' ) );
                                next_post_link( '%link', __( '<span class="meta-nav next-post"></span>', 'news' ) );
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="more-events-section theme bg-unique-living-section py-5">
        <div class="container">
            <div class="row">
                <div class="w-100 text-center text-sm-left pl-3 py-4 Latest-news experiences_32 theme color-location-color-2"><?php the_field('news_section_slider_title',910); ?></div>
                    <div class="col-12 d-flex expeciences-slick">
                        <?php 
                            $args = array('post_type' => 'news','post_status' => 'publish','posts_per_page' => 4,'order' => 'DESC');
                            $loop = new WP_Query( $args ); 
                            while ( $loop->have_posts() ) : $loop->the_post();
                        ?>
                        <div class="main-post-image">
                            <div class="imgwrap mr-1 mr-sm-4 position-relative theme bg-experiences-color-3">
                                <a class="image-main d-block" href="<?php the_permalink(); ?>" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                                </a>
                                <?php if ( has_post_thumbnail() ) { ?>
                                <div class="img-opacity position-absolute w-100 h-100 top left"></div>
                                <?php } else {?>
                                <div class="img-opacity-1 position-absolute w-100 h-100 top left"></div>
                                <?php } ?>
                                <div class="w-100 px-2 top-50 transform-translateY-50 main-title position-absolute top left">
                                <div class="post-date theme color-experiences-color-2 experiences_small_date font-weight-100">
                                    <?php echo get_the_date('F Y'); ?>
                                </div>
                                <div class="py-2 post-title">
                                    <a class="outline-none theme color-experiences-color-2 experiences_32 font-family-Nexa-Bold" href="<?php the_permalink();?>">
                                        <?php the_title();?>
                                    </a>
                                </div>
                                <div class="post-excerpt theme color-experiences-color-2 experiences_small font-family-roboto font-weight-300">
                                    <?php the_excerpt();?>
                                </div>
                                <div class="deco-none">
                                    <a href="<?php the_permalink(); ?>" class="outline-none">
                                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png"/>
                                    </a>
                                </div>
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
    </section>
</section>
<?php
get_footer(); ?>