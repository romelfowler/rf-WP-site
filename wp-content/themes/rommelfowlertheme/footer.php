<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rommel_Fowler_Theme
 */

?>
<!-- DO NOT DELETE -->
<div class="loading"></div>

<?php wp_footer(); ?>



	<!-- SCRIPT -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/plugin/pageChanger.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/anime.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/charming.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/main.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/revealer.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/folio-grid.js"></script>
	<script>
	//This plays sound
	function PlaySound(melody) {
			// alert("On Press of "+melody);
			var path = "<?php bloginfo('template_directory')?>/assets/audio/click";
			var sound = new Audio(path + ".mp3");
			sound.play();
	}
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
	var docWidth = $('body').width(),
			$images = $('#imgs'),
			slidesWidth = $images.width();

	$(window).on('resize', function(){
		docWidth = $('body').width();
		slidesWidth = $('#imgs').width();
	})

	$(document).mousemove(function(e) {
		var mouseX = e.pageX,
				offset = mouseX / docWidth * slidesWidth - mouseX / 2;

		$images.css({
			'-webkit-transform': 'translate3d(' + -offset + 'px,0,0)',
							'transform': 'translate3d(' + -offset + 'px,0,0)'
		});
	});
	})
	</script>
	<script>
{
	const DOM = {};
	DOM.body = document.body;
	DOM.gridElems = Array.from(document.querySelectorAll('.grid'));

	imagesLoaded(DOM.body, {background: true} , () => {
		DOM.body.classList.remove('loading');
		new Slideshow(DOM.gridElems, {
			hasTilt: true,
			tilt: {maxTranslationX: 25, maxTranslationY: 25}
		});
	});
}
</script>
</body>

</html>


</body>
</html>
