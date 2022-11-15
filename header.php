<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
	<title>
		<?php wp_title(''); ?>
	</title>
	<?php wp_head();?>
</head>
<script type="text/javascript">
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>

<body <?php body_class('overhidden'); ?>>
<section class="loader-animation loader-animation-on">
	<img src="<?php echo get_template_directory_uri(); ?>/img/loading_animation.gif">
</section>
<?php 
$cookie_name = "1";
if(!isset($_COOKIE[$cookie_name])){ 
?>
	<div class="vh-100 disclaimer position-fixed left right theme bg-white-color">
		<div class="py-5 py-sm-0 height-sm-100 d-flex align-items-center">
			<div class="mx-2 px-2 mx-sm-4 px-sm-5 sub-disclaimer-container">
				<div class="residential_medium opacity-50 title text-center theme color-black">
					<?php the_field('disclaimer_title',14);?>
				</div>
				<div class="py-4 residential_very_small opacity-50 content text-center  theme color-black">
					<?php the_field('disclaimer_content',14);?>
				</div>
				<div class="pb-5 pb-sm-0 disclaimer-button-main d-flex justify-content-center">
					<div class="residential_very_small py-2 px-4 d-inline-block disclaimer-buttom button">
						<?php the_field('disclaimer_button',14);?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }else{} ?> 
<header class="header position-fixed w-100 header_minus100">
	<nav class="navbar navbar-expand-lg navbar-light px-3 py-0 position-relative theme bg-white-color z-index-100">
		<a class="m-0 py-3 pl-0 pl-sm-3 navbar-brand" href="<?php echo get_home_url(); ?>"><?php include 'img/KTC_logo_colour.svg' ?></a>
		<button class="navbar-toggler p-0" type="button" data-toggle="" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<div class="form-inline my-2 my-lg-0">
					<div class="contact-btn mr-3">
						<p class="mb-0 px-3"><?php the_field('contact_name',14)?></p>
					</div>
				<div class="menu-btn d-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/open-menu.png">
				</div>
			</div>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav margin-0-auto w-100 justify-content-center">
				<div class="m-witdh-620 w-100 margin-0-auto justify-content-center position-relative">
					<?php
						wp_nav_menu(array(
						'theme_location'=> 'primary two',
						'container' => false,
						'item_spacing' => 'discard',
						'menu_class' => 'pt-4 pl-0 list-items d-flex list-style-none width-header justify-content-around'));
					?>
					<div class="custom-hide precinct-hover-border position-absolute">
						<div class="precinct-hover position-relative">
							<?php
							if( have_rows('precinct_repeater',14) ):
							while( have_rows('precinct_repeater',14) ) : the_row();
								$residential_name = get_sub_field('residential_name');
								$residential_content = get_sub_field('residential_section_content');
								$residential_page_link = get_sub_field('residential_page_link');
								$residential_live_button = get_sub_field('residential_section_button_text');
								$office_name = get_sub_field('office_name');
								$office_section_content = get_sub_field('office_section_content');
								$office_page_link = get_sub_field('office_page_link');
								$office_live_button = get_sub_field('office_section_button_text');
								$leisure_name = get_sub_field('leisure_name');
								$leisure_section_content = get_sub_field('leisure_section_content');
								$leisure_live_button = get_sub_field('leisure_section_button_text');
								$leisure_page_link = get_sub_field('leisure_page_link');
							?>
							<div class="residential px-4 p-tb-2-5 position-relative">
								<div class="px-sm-2">
									<div class="row">
										<div class="col-sm-9">
											<div class="contents">
												<div class="title"><p class="m-0"><?php echo $residential_name; ?></p></div>
												<div class="text"><?php echo $residential_content; ?></div>
											</div>
										</div>
										<div class="col-sm-3 p-0 d-flex justify-content-end">
											<div class="live-btn text-right d-flex align-items-center">
												<button class="px-4 py-2"><?php echo $residential_live_button; ?></button>
											</div>
										</div>
									</div>
								</div>
								<a href="<?php echo $residential_page_link; ?>" class="position-absolute tlbr"></a>
							</div>
							<div class="residential office px-4 p-tb-2-5 position-relative">
								<div class="px-sm-2">
									<div class="row">
										<div class="col-sm-9">
											<div class="contents">
												<div class="title"><p class="m-0"><?php echo $office_name; ?></p></div>
												<div class="text"><?php echo $office_section_content; ?></div>
											</div>
										</div>
										<div class="col-sm-3 p-0 d-flex justify-content-end">
											<div class="live-btn text-right d-flex align-items-center">
												<button class="px-4 py-2"><?php echo $office_live_button; ?></button>
											</div>
										</div>
									</div>
								</div>
								<a href="<?php echo $office_page_link; ?>" class="position-absolute tlbr" ></a>
							</div>
							<div class="residential leisure px-4 p-tb-2-5 position-relative">
								<div class="px-sm-2">
									<div class="row">
										<div class="col-sm-9">
											<div class="contents">
												<div class="title"><p class="m-0"><?php echo $leisure_name; ?></p></div>
												<div class="text"><?php echo $leisure_section_content ?></div>
											</div>
										</div>
										<div class="col-sm-3 p-0 d-flex justify-content-end">
											<div class="live-btn text-right d-flex align-items-center">
												<button class="px-4 py-2"><?php echo $leisure_live_button; ?></button>
											</div>
										</div>
									</div>
								</div>
								<a href="<?php echo $leisure_page_link; ?>" class="position-absolute tlbr" ></a>
							</div>
						<?php
							endwhile;
							endif;
						?>
						</div>
					</div>
				</div>
			</ul>
			<div class="py-4 form-inline my-2 my-lg-0 d-flex justify-content-center">
				<div class="contact-btn mr-3">
					<p class="mb-0 px-3"><?php the_field('contact_name',14)?></p>
				</div>
			</div>
		</div>
	</nav>
	<contact class="position-fixed top left right vh-100 contact-slide">
			<div class="contact-footer">
				<section class="pt-5 pt-sm-0 main-section section-class vh-sm-100">
					<div class="pt-5 pt-sm-0 container h-100">
						<div class="row h-100">
							<div class="col-12 col-sm-6 d-flex align-items-center justify-content-center">
								<div class="sub-section contact-left d-flex flex-column theme bg-workplace-evolution-section">
									<div class="ktc">
										<a class="m-0 py-3 navbar-brand" href="<?php echo get_home_url(); ?>"><?php include 'img/KTC_logo_colour_contact.svg' ?></a>
									</div>
									<div class="py-5 py-sm-0 address w-100 theme color-white-color font-family-roboto font-weight-300">
									<?php $address = the_field('contact_form_address',14); echo $address?>
									</div>
									<div class="contact contact-widtdh">
										<div class="justify-content-between d-flex sales-enquires-main mt-sm-5">
											<div class="p-0 col-4">
												<p class="opacity-60 pl-sm-0 mb-0"><?php the_field('sales_enquiries',14); ?></p>
											</div>
											<div class="col-8">
												<div class="sales-enquiries other-enquiries d-flex">
													<a href="tel:<?php the_field('mobile_1',14); ?>" data-rel="external" class="d-flex">
														<div class="call-img">
															<?php include 'img/call.svg' ?>
														</div>
														<div class="mob-no pl-2">
															<p><?php  the_field('mobile_1',14); ?></p>
														</div>
													</a>
												</div>
											</div>
										</div>
										<div class="justify-content-between d-flex other-enquiries-main sales-enquires-main">
											<div class="p-0 col-4">
												<p class="opacity-60 pl-sm-0 mb-0"><?php the_field('other_enquiries',14); ?></p>
											</div>
											<div class="col-8">
												<div class="other-enquiries d-flex">
													<a href="tel:<?php the_field('mobile_2',14); ?>" data-rel="external" class="d-flex">
														<div class="call-img">
															<?php include 'img/call.svg' ?>
														</div>
														<div class="mob-no pl-2">
															<p><?php the_field('mobile_2',14); ?></p>
														</div>
													</a>
												</div>
											</div>
										</div>
										<div class="justify-content-between d-flex other-enquiries-main sales-enquires-main">
											<div class="p-0 col-4">
												<p class="opacity-60 pl-sm-0 mb-0"><?php the_field('email_placeholder',14); ?></p>
											</div>
											<div class="col-8">
												<div class="other-enquiries d-flex">
													<a href="tel:<?php the_field('mobile_1',14); ?>" data-rel="external" class="d-flex">
														<div class="call-img">
																<?php include 'img/call.svg' ?>
														</div>
														<div class="mob-no pl-2">
																<p class="word-break"><?php the_field('email',14); ?></p>
														</div>
													</a>
												</div>
											</div>
										</div>
										<div class="social mt-5">
											<ul class="p-0 d-flex justify-content-around text-left footer-social-style">
												<li><a href="<?php  the_field('facebook',14);  ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg"></a></li>
												<li><a href="<?php the_field('youtube',14);  ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/yt.svg"></a></li>
												<li><a href="<?php  the_field('instagram',14); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg"></a></li>
												<li><a href="<?php the_field('linkedin',14);  ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/Linkedin.svg"></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 d-flex align-items-center justify-content-center">
								<div class="contact-form contact-form">
									<?php echo FrmFormsController::show_form(1, $key = '', $title=true, $description=true); ?>
								</div>
							</div>
							<div class="close-section d-none d-sm-block contact-bg position-absolute top bottom right w-50 theme bg-contact-form-bg">
							</div>
					</div>
				</section>
			</div>
		</contact>
</header>

<div class="side-content-pc position-fixed">
	<div class="close-btn position-absolute">
		<img src="<?php echo get_template_directory_uri(); ?>/img/Close_button.svg">
	</div>
	<?php
		wp_nav_menu(array(
		'theme_location'=> 'primary',
		'container' => false,
		'item_spacing' => 'discard',
		'menu_class' => 'list-items pt-5 mt-5'));
	?>
</div>
<div class="flex-column justify-content-between side-content-mobile position-fixed d-none">
	<div class="first-main">
		<div class="close-btn home-btn position-absolute">
			<img src="<?php echo get_template_directory_uri(); ?>/img/home.svg">
		</div>
		<div class="close-btn position-absolute">
			<img src="<?php echo get_template_directory_uri(); ?>/img/Close_button.svg">
		</div>
		<div class="list-items-main">
			<?php
				wp_nav_menu(array(
				'theme_location'=> 'primary',
				'container' => false,
				'item_spacing' => 'discard',
				'menu_class' => 'list-items pt-5 mt-5 pl-0'));
			?>
		</div>
	</div>
	<div class="menu-footer py-3">
		<div class="px-3">
			<div class="row px-2">
				<div class="col-6">
					<div class="sales-enquires-main mt-sm-5">
						<p class="mb-0 mt-4"><?php the_field('sales_enquiries',14); ?></p>
						<div class=" mb-4 mt-sm-2 sales-enquiries other-enquiries d-flex">
							<a href="tel:<?php $mobile_1 = the_field('mobile_1',14); ?>" data-rel="external" class="d-flex">
								<div class="call-img mr-2">
									<img src="<?php echo get_template_directory_uri(); ?>/img/call.svg">
								</div>
								<div class="mob-no d-flex align-items-center">
									<p class="m-0"><?php $mobile_1 = get_field('mobile_1',14); echo $mobile_1?></p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="other-enquiries-main sales-enquires-main mt-sm-5">
						<p class="mb-0 mt-4"><?php the_field('other_enquiries',14); ?></p>
						<div class="mt-sm-2 other-enquiries d-flex">
							<a href="tel:<?php $mobile_2 = the_field('mobile_2',14); ?>" data-rel="external"class="d-flex">
								<div class="call-img mr-2">
									<img src="<?php echo get_template_directory_uri(); ?>/img/call.svg">
								</div>
								<div class="mob-no d-flex align-items-center">
									<p class="m-0"><?php $mobile_2 = get_field('mobile_2',14); echo $mobile_2?></p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="post-box">
			<div class="px-3">
				<div class="row px-2">
					<div class="col-3">
						<div class="address-image d-flex justify-content-start">
							<img src="<?php echo get_template_directory_uri(); ?>/img/mailbox.png">
						</div>
					</div>
					<div class="col-9">
						<div class="address">
							<p>
							<?php $address = the_field('address',14); echo $address?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social mt-3">
			<ul class="px-3 d-flex justify-content-around">
				<li><a href="<?php  the_field('facebook'); ?>" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/fbm.svg"></a></li>
				<li><a href="<?php  the_field('youtube'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/ytm.svg"></a></li>
				<li><a href="<?php  the_field('instagram'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagramm.svg"></a></li>
				<li><a href="<?php  the_field('linkedin'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/Linkedinm.svg"></a></li>
			</ul>
		</div>
	</div>
</div>
