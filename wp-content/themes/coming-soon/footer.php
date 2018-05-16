<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Coming_Soon
 */

?>

	</div><!-- #content -->


</div><!-- #page -->

<?php wp_footer(); ?>


	<!-- External JavaScripts
	============================================= -->
	<script src="<?php bloginfo('template_directory')?>/js/jquery.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?php bloginfo('template_directory')?>/js/functions.js"></script>

	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="<?php bloginfo('template_directory')?>/js/revslider/jquery.themepunch.tools.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/revslider/jquery.themepunch.revolution.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/revslider/revolution.addon.particles.min.js"></script>

	<script src="<?php bloginfo('template_directory')?>/js/revslider/revolution.extension.actions.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/revslider/revolution.extension.carousel.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/revslider/revolution.extension.kenburn.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/revslider/revolution.extension.layeranimation.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/revslider/revolution.extension.migration.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/revslider/revolution.extension.navigation.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/revslider/revolution.extension.parallax.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/revslider/revolution.extension.slideanims.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/revslider/revolution.extension.video.min.js"></script>

	<!-- ADD-ONS JS FILES -->

		<script>


			var revapi54,
			tpj=jQuery;
					tpj(document).ready(function() {
			if(tpj("#rev_slider_54_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_54_1");
			}else{
				revapi54 = tpj("#rev_slider_54_1").show().revolution({
					sliderType:"standard",
					jsFileLocation:"js/revslider/",
					sliderLayout:"fullscreen",
					dottedOverlay:"10px",
					delay:9000,
					particles: {startSlide: "first", endSlide: "last", zIndex: "1",
						particles: {
							number: {value: 20}, color: {value: "#333"},
							shape: {
								type: "circle", stroke: {width: 0, color: "#ffffff", opacity: .5},
								image: {src: ""}
							},
							opacity: {
								value: 0.6,
								random: false,
								min: 0.25,
								anim: {
									enable: false,
									speed: 3,
									opacity_min: 0,
									sync: false
								}
							},
							size: {
								value: 20,
								random: true,
								min: 1,
								anim: {
									enable: false,
									speed: 1,
									size_min: 1,
									sync: false}},
							line_linked: {enable: true, distance: 200, color: "#000000", opacity: 0.2, width: 1},
							move: {enable: true, speed: 3, direction: "none", random: true, min_speed: 3, straight: false, out_mode: "out"}},
						interactivity: {
							events: {onhover: {enable: true, mode: "bubble"}, onclick: {enable: false, mode: "repulse"}},
							modes: {grab: {distance: 400, line_linked: {opacity: 0.5}}, bubble: {distance: 400, size: 150, opacity: 1}, repulse: {distance: 200}}
						}
					},
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						 mouseScrollReverse:"default",
						onHoverStop:"off",
						arrows: {
							style:"gyges",
							enable:true,
							hide_onmobile:false,
							hide_onleave:false,
							tmp:'',
							left: {
								h_align:"center",
								v_align:"bottom",
								h_offset:-20,
								v_offset:250
							},
							right: {
								h_align:"center",
								v_align:"bottom",
								h_offset:20,
								v_offset:250
							}
						}
					},
					responsiveLevels:[1240,1024,778,480],
					visibilityLevels:[1240,1024,778,480],
					gridwidth:[1240,1024,778,480],
					gridheight:[1240,1024,778,480],
					lazyType:"none",
					shadow:0,
					spinner:"off",
					stopLoop:"on",
					stopAfterLoops:0,
					stopAtSlide:1,
					shuffle:"off",
					autoHeight:"off",
					fullScreenAutoWidth:"off",
					fullScreenAlignForce:"on",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "0",
					disableProgressBar:"on",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
			}

			RsParticlesAddOn(revapi54);
		});	/*ready*/
		</script>

	</body>
	</html>
