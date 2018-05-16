<?php
/**
 * Template Name: About Template
 *
 */
// VTD Header
$about_us_header_content = get_field('about_us_header_content');
$about_us_header_images	= get_field('about_us_header_images	');
$about_us_header_link = get_field('about_us_header_link	');
// VTD Journalism Trust Content
$vtd_journalism_trust_content = get_field('vtd_journalism_trust_content');
$vtd_underwriting_and_media_content = get_field('underwriting_and_media_content');
// Site policies
$vtd_site_policies_content = get_field('site_policies_content	');
$vtd_awards_content	= get_field('awards_content');
// Donate
$vtd_donate_content = get_field('vtd_donate_content');
$vtd_donate_link = get_field('vtd_donate_link');
get_header();
?>
<!-- start page title section -->
			<section class="wow fadeIn bg-theme-color-1 padding-35px-tb page-title-small top-space">
					<div class="container">
							<div class="row equalize">
									<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table">
											<div class="display-table-cell vertical-align-middle text-left xs-text-center">
													<!-- start page title -->
													<h1 class="alt-font text-white font-weight-600 no-margin-bottom text-uppercase">VTDigger</h1>
													<!-- end page title -->
											</div>
									</div>

							</div>
					</div>
			</section>
			<!-- end page title section -->
			<!-- start post content section -->
			<section>
					<div class="container">
							<div class="row">
									<main class="col-md-8 col-sm-12 col-xs-12 right-sidebar sm-margin-10px-bottom xs-margin-10px-bottom no-padding-left sm-no-padding-right">

											<!-- start post item -->
											<div class="col-md-12 col-sm-12 col-xs-12 blog-post-content margin-10px-bottom xs-margin-10px-bottom xs-text-center">
													<div class="swiper-full-screen swiper-container white-move">
															<div class="swiper-wrapper">
																	<div class="swiper-slide"><a href="#"><img src="http://placehold.it/900x550" alt=""></a></div>
															</div>
															<div class="swiper-pagination swiper-pagination-square swiper-pagination-white"></div>
															<div class="swiper-button-next swiper-button-black-highlight"></div>
															<div class="swiper-button-prev swiper-button-black-highlight"></div>
													</div>
													<div class="blog-text display-inline-block width-100">
															<div class="content padding-50px-tb xs-padding-20px-all">
																<p class="no-margin">

																<?php echo $about_us_header_content; ?>
															</p><br>

															</div>

													</div>
											</div>
											<!-- end post item -->


									</main>
									<aside class="col-md-4 col-sm-12 col-xs-12 pull-right">
										<div class="margin-45px-bottom xs-margin-25px-bottom">
												<div class="text-bg-theme-color-1 margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Ways To Support</span></div>
												<ul class="list-style-6 margin-50px-bottom text-small">
														<li><a href="#">Donate</li>
														<li><a href="#">Follow</li>
														<li><a href="#">Subscribe</li>
														<li><a href="#">Contact For More</li>

												</ul>
										</div>
										<!-- client carousel style 1 -->

												<div class="margin-45px-bottom xs-margin-25px-bottom ">
															<div class="text-bg-theme-color-1 margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Garantors</span></div>

																<div class="swiper-slider-clients-1 swiper-container white-move">
																		<div class="swiper-wrapper">
																				<!-- start slider item --><div class="swiper-slide text-left"><img src="http://placehold.it/900x350" alt=""></div><!-- end slider item -->
																				<!-- start slider item --><div class="swiper-slide text-left"><img src="http://placehold.it/900x350" alt=""></div><!-- end slider item -->
																				<!-- start slider item --><div class="swiper-slide text-left"><img src="http://placehold.it/900x350" alt=""></div><!-- end slider item -->
																				<!-- start slider item --><div class="swiper-slide text-left"><img src="http://placehold.it/900x350" alt=""></div><!-- end slider item -->
																				<!-- start slider item --><div class="swiper-slide text-left"><img src="http://placehold.it/900x350" alt=""></div><!-- end slider item -->
																				<!-- start slider item --><div class="swiper-slide text-left"><img src="http://placehold.it/900x350" alt=""></div><!-- end slider item -->
																				<!-- start slider item --><div class="swiper-slide text-left"><img src="http://placehold.it/900x350" alt=""></div><!-- end slider item -->
																				<!-- start slider item --><div class="swiper-slide text-left"><img src="http://placehold.it/900x350" alt=""></div><!-- end slider item -->
																		</div>
																</div>
												</div>
									</aside>
							</div>
					</div>




									<!-- start team slider style 01 -->
									<div class="bg-white wow fadeIn margin-50px-bottom">
											<div class="container">
												<div class="row">
														<div class="col-md-7 col-sm-12 col-xs-12 center-col text-center margin-100px-top xs-margin-40px-top margin-100px-bottom xs-margin-40px-bottom">
																<div class="position-relative overflow-hidden width-100">
																		<span class="text-black text-small text-outside-line-full alt-font font-weight-600 text-uppercase">The Team</span>
																</div>
														</div>
												</div>
													<div class="row">
															<div class="position-relative">
																	<div class="swiper-container black-move blog-slider swiper-six-slides swiper-pagination-bottom">
																			<div class="swiper-wrapper">

																				<?php $vtd_cptui_team_members = new WP_Query( array( 'post_type' => 'vtd_team', 'posts_per_page'=> '-1', 'orderby' => 'post_id', 'order'=>'ASC' ) ); ?>
																				<?php if($vtd_cptui_team_members->have_posts()): while($vtd_cptui_team_members->have_posts()): $vtd_cptui_team_members->the_post(); ?>
																					<?php $social_media_handle = get_field('vtd_social_media_handle');
																								 $social_media_link = get_field('vtd_social_media_link'); ?>
																					<!-- start team item -->
																					<div class="swiper-slide padding-15px-lr team-block text-left team-style-1 md-margin-40px-bottom wow fadeInUp">
																							<figure>
																									<div class="team-image xs-width-100">
																											<?php the_post_thumbnail(); ?>
																											<div class="overlay-content text-center">
																													<div class="display-table height-100 width-100">
																															<div class="vertical-align-middle display-table-cell icon-social-small">
																																	<a href="<?php echo $social_media_link ?>" class="text-white text-white-hover" target="_blank"><i class="fa fa-<?php echo $social_media_handle?>"></i></a>

																															</div>
																													</div>
																											</div>
																											<div class="team-overlay bg-theme-color-2 opacity8"></div>
																									</div>
																									<figcaption>
																											<div class="team-member-position margin-20px-top text-center">
																													<div class="text-small font-weight-500 text-black text-uppercase"><?php the_title(); ?></div>
																											</div>
																									</figcaption>
																							</figure>
																					</div>
																					<!-- end team item -->
																				<?php endwhile; endif; ?>

																			</div>
																			<br><br>
																			<div class="swiper-pagination swiper-pagination-four-slides"></div>
																	</div>
															</div>
													</div>
											</div>
									</div>
									<!-- end team slider style 01 -->

<div class="bg-very-light-gray wow fadeIn animated ">
<div class="container">
	<div class="row equalize sm-equalize-auto">

		<div class="col-md-8 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0.2s">
			<div class="display-table width-100 height-100 margin-five-top">
				<div class="display-table-cell sm-text-center sm-no-padding width-100">

					<h6 class="alt-font text-bg-theme-color-1">The Vermont Journalism Trust </h6>
					<?php echo $vtd_journalism_trust_content; ?>
				</div>
			</div>
		</div>

		<div class="col-md-4 col-sm-12 col-xs-12 text-left sm-margin-30px-bottom wow fadeInLeft">
			<div class="display-table width-100 height-100">

				<div class="bg-theme-color-1 vertical-align-middle padding-50px-all margin-45px-bottom xs-margin-25px-bottom width-100 height-100">
					<div class="text-white margin-10px-bottom alt-font text-uppercase font-weight-600 text-small">Documents</div>

					<ul class="no-padding pull-left list-style-none text-white text-small">

						<li class="margin-five-all"><i class="icon-document text-medium-gray icon-small"></i><a class="margin-fifteen-lr text-white" href="#">2016 IRS Form 990 </a></li>
						<li class="margin-five-all"><i class="icon-document text-medium-gray icon-small"></i><a class="margin-fifteen-lr text-white" href="#">2016 Annual Report </a></li>
						<li class="margin-five-all"><i class="icon-document text-medium-gray icon-small"></i><a class="margin-fifteen-lr text-white" href="#">2015 IRS Form 990 </a></li>
						<li class="margin-five-all"><i class="icon-document text-medium-gray icon-small"></i><a class="margin-fifteen-lr text-white" href="#">2015 Annual Report </a></li>
					</ul>

					<a href="#" class="btn btn-white btn-small text-extra-small btn-square margin-5px-top"> Read More</a>

				</div>

			</div>

		</div>
	</div>
</div>
<!-- <div class="separator-line-horrizontal-full bg-extra-light-gray margin-60px-tb height-2px width-100 center-col"></div> -->

</div>

<!-- Start team slider style 01 -->

<div class="wow fadeIn animated ">
<div class="container">
	<div class="row equalize sm-equalize-auto">

		<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0.2s">
			<div class="display-table width-100 height-100 margin-five-top">
				<div class="display-table-cell  sm-text-center sm-no-padding width-100">
					<span class="text-bg-theme-color-1 alt-font margin-10px-bottom display-inline-block text-medium"></span>
					<h6 class="alt-font text-bg-theme-color-1">Underwriting and Media  </h6>
					<?php echo $vtd_underwriting_and_media_content;  ?>

				</div>
			</div>
		</div>
	</div>
</div>
</div>

	<div class="separator-line-horrizontal-full  margin-50px-tb height-2px width-100 center-col"></div>

<div class="bg-very-light-gray ">
	<div class="row">
		<div class="container ">

		<div class=" sm-text-center sm-no-padding width-50 margin-five-top">
			<h6 class="alt-font text-bg-theme-color-1">Site Policies</h6>
			<?php echo $vtd_site_policies_content; ?>
		</div>
	</div>
	</div>

		<div class="row equalize xs-equalize-auto">
			<div class="container">
				<div class="col-md-7 wow fadeIn margin-40px-top sm-margin-40px-top">

				<!-- start features box item -->
				<div class="col-md-3 col-sm-6 col-xs-12 no-padding text-left last-paragraph-no-margin margin-70px-bottom sm-margin-40px-bottom xs-margin-30px-bottom wow fadeInUp">
					<i class="fa fa-comment icon-extra-medium margin-20px-bottom"></i>
					<p class="width-100 center-col xs-width-100">
						<a href="#">Policy Commitement</a>
					</p>
				</div>
				<!-- end features box item -->
				<!-- start features box item -->
				<div class="col-md-3 col-sm-6 col-xs-12 no-padding text-left last-paragraph-no-margin margin-70px-bottom sm-margin-40px-bottom xs-margin-30px-bottom wow fadeInDown" data-wow-delay="0.2s">
					<i class="fa fa-comment icon-extra-medium margin-20px-bottom"></i>
					<p class="width-100 center-col xs-width-100">
						<a href="#">Commentary Policy </a>
					</p>
				</div>
				<!-- end features box item -->
				<!-- start features box item -->
				<div class="col-md-3 col-sm-6 col-xs-12 no-padding text-left last-paragraph-no-margin margin-70px-bottom sm-margin-40px-bottom xs-margin-30px-bottom wow fadeInUp" data-wow-delay="0.4s">
					<i class="fa fa-file icon-extra-medium margin-20px-bottom"></i>
					<p class="width-100 center-col xs-width-100">
						<a href="#">Press Release Policy </a>
					</p>
				</div>
				<!-- end features box item -->
				<!-- start features box item -->
				<div class="col-md-3 col-sm-6 col-xs-12 no-padding text-left last-paragraph-no-margin sm-margin-40px-bottom xs-margin-30px-bottom wow fadeInDown">
					<i class="fa fa-sticky-note icon-extra-medium margin-20px-bottom"></i>
					<p class="width-100 center-col xs-width-100">
						<a href="#">Privacy Policy </a>
					</p>
				</div>
				<!-- end features box item -->

			</div>


			<div class="col-md-5 col-sm-12 col-xs-12 text-left sm-margin-30px-bottom wow fadeInRight">
				<div class="display-table width-100 height-100">

					<div class="bg-theme-color-1 vertical-align-middle padding-50px-all margin-45px-bottom xs-margin-25px-bottom width-100 height-100">
						<div class="text-white margin-10px-bottom alt-font text-uppercase font-weight-600 text-small">Awards </div>
							<?php echo $vtd_awards_content; ?>
					</div>
				</div>

			</div>
			</div>
			<!-- container -->

	</div>
</div>



<!-- end of the container -->

<!-- start testimonial slider style 02 section -->
<div class="wow fadeIn margin-five-top">
	<div class="container">
		<div class="row">
			<div class="display-table-cell sm-text-center sm-no-padding  width-100 ">
				<h6 class="alt-font text-bg-theme-color-1">Testimonials</h6>
			</div>
		</div>

		<div class="row">
				<div class="col-md-10 swiper-slider-second swiper-container white-move margin-50px-top xs-margin-10px-top">
					<?php $vtd_cptui_testimonials = new WP_Query( array( 'post_type' => 'testimonials', 'posts_per_page'=> '-1', 'orderby' => 'post_id', 'order'=>'ASC' ) ); ?>
					<?php if($vtd_cptui_testimonials->have_posts()): while($vtd_cptui_testimonials->have_posts()): $vtd_cptui_testimonials->the_post(); ?>
						<?php $testimonial_read_more_text = get_field('testimonial_read_more_text'); $testimonial_read_more_link = get_field('testimonial_read_more_link'); ?>
						<div class="swiper-wrapper">
								<!-- start testimonial item -->
								<div class="swiper-slide">
										<div class="col-md-10 col-sm-10 col-xs-12 left-col equalize sm-equalize-auto last-paragraph-no-margin">
												<div class="col-md-3 col-sm-3 col-xs-12 display-table">
														<div class="display-table-cell vertical-align-middle">
															<?php the_post_thumbnail('thumbnail', array('class' => 'width-150px xs-width-100px xs-margin-15px-bottom')); ?>
														</div>
												</div>
												<div class="col-md-8 col-sm-8 col-xs-12 text-left xs-text-center margin-10px-left xs-no-margin-left display-table">
														<div class="display-table-cell vertical-align-middle">
																<p class="text-extra-light-gray margin-15px-bottom">
																	<?php the_content(); ?>
																</p>
																<span class="text-black alt-font text-uppercase text-small margin-15px-top display-inline-block">-- <?php the_title(); ?> </span> <br>
																<a href="<?php echo $testimonial_read_more_link; ?>" class="text-black text-small margin-5px-top"><?php echo $testimonial_read_more_text; ?></a><i class=" margin-10px-lr text-black fa fa-angle-right"></i>

														</div>
												</div>
										</div>
								</div>
								<!-- end testimonial item -->
							<?php endwhile; endif; ?>


						</div>

					</div>
					<div class="col-md-2 col-sm-12 col-xs-12 text-left sm-margin-30px-bottom wow fadeInRight">
							<div class="text-center bg-theme-color-1 vertical-align-middle padding-10px-all margin-45px-bottom xs-margin-25px-bottom width-100 height-100">
								<a href="<?php echo $vtd_donate_link; ?>" class=" text-white text-theme-2-hover text-large margin-5px-top"><?php echo $vtd_donate_content; ?></a>
							</div>

					</div>

			</div>
			<!-- end of row -->



	</div>
	<!-- end of container -->
</div>
</section>



<?php
get_footer();
