<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lawyer
 */

?>

	</div><!-- #content -->
	<!-- Footer-->
	<footer id="Footer" class="clearfix">
			<div class="widgets_wrapper">
					<div class="container">
							<!-- One Third (1/3) Column -->
							<div class="column one-third">
									<!-- Text Area -->
									<aside class="widget widget_text">
											<h4>Bibendum auctor</h4>
											<div class="textwidget">
													Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.
											</div>
									</aside>
							</div>
							<!-- One Third (1/3) Column -->
							<div class="column one-third">
									<!-- Text Area -->
									<aside class="widget widget_text">
											<h4>Aliquam erat</h4>
											<div class="textwidget">
													Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet.
											</div>
									</aside>
							</div>
							<!-- One Third (1/3) Column -->
							<div class="column one-third">
									<!-- Text Area -->
									<aside class="widget widget_text">
											<h4> Nullam wisi</h4>
											<div class="textwidget">
													Nullam viverra consectetuer. Quisque cursus et, porttitor risus. Aliquam sem. In hendrerit nulla quam nunc, accumsan congue. Lorem ipsum primis in nibh vel risus. Sed vel lectus.
											</div>
									</aside>
							</div>
					</div>
			</div>
			<!-- Footer copyright-->
			<div class="footer_copy">
					<div class="container">
							<div class="column one">
									<a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
									<div class="copyright">
											&copy; <a target="_blank" rel="nofollow" href="//www.rommelfowler.com">2018 Rommel Fowler Design </a>
									</div>

							</div>
					</div>
			</div>
	</footer>
</div>

<!-- JS -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-2.1.4.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/js/mfn.menu.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.plugins.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/animations/animations.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/js/plugins/jquery.themepunch.tools.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/plugins/jquery.themepunch.revolution.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/plugins/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/plugins/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/plugins/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/plugins/extensions/revolution.extension.migration.min.js"></script>

<script>
	var tpj = jQuery;
	tpj.noConflict();
	var revapi1;
	tpj(document).ready(function() {
			if (tpj("#rev_slider").revolution == undefined) {
					revslider_showDoubleJqueryError("#rev_slider");
			} else {
					revapi1 = tpj("#rev_slider").show().revolution({
							sliderType: "standard",
							sliderLayout: "fullwidth",
							dottedOverlay: "none",
							delay: 9000,
							navigation: {
									keyboardNavigation: "off",
									keyboard_direction: "horizontal",
									mouseScrollNavigation: "off",
									onHoverStop: "on",
									touch: {
											touchenabled: "on",
											swipe_threshold: 0.7,
											swipe_min_touches: 1,
											swipe_direction: "horizontal",
											drag_block_vertical: false
									}
							},
							gridwidth: 1180,
							gridheight: 570,
							lazyType: "none",
							shadow: 0,
							spinner: "spinner3",
							stopLoop: "off",
							stopAfterLoops: -1,
							stopAtSlide: -1,
							shuffle: "off",
							autoHeight: "off",
							disableProgressBar: "on",
							hideThumbsOnMobile: "off",
							hideSliderAtLimit: 0,
							hideCaptionAtLimit: 0,
							hideAllCaptionAtLilmit: 0,
							startWithSlide: 0,
							debugMode: false,
							fallbacks: {
									simplifyAll: "off",
									nextSlideOnWindowFocus: "off",
									disableFocusListener: "off",
							}
					});
			}
	});
</script>

<script>
	jQuery(window).load(function() {
			var retina = window.devicePixelRatio > 1 ? true : false;
			if (retina) {
					var retinaEl = jQuery("#logo img.logo-main");
					var retinaLogoW = retinaEl.width();
					var retinaLogoH = retinaEl.height();
					retinaEl.attr("src", "wp-content/themes/lawyer-theme/img/logo.png").width(retinaLogoW).height(retinaLogoH);
					var stickyEl = jQuery("#logo img.logo-sticky");
					var stickyLogoW = stickyEl.width();
					var stickyLogoH = stickyEl.height();
					stickyEl.attr("src", "wp-content/themes/lawyer-theme/img/logo.png").width(stickyLogoW).height(stickyLogoH);
			}
	});
</script>

</body>

</html>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
