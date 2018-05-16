<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rommel_Fowler_Theme
 */
$home_page_image = get_field('home_page_image');
$data_img_alt = get_field('data_img_alt');
$data_img_code = get_field('data_img_code');
get_header();
?>
<div class="slideshow">

	<div class="slides slides--images">
		<div class=" slide slide--current">
			<!-- HEADER IMAGE -->

			<div class="slide__img pieces"
			style="background-image: url(<?php echo $home_page_image[url];?>)"
			data-img-alt="url(<?php echo $data_img_alt[url]; ?>)"
			data-img-code="url(<?php echo $data_img_code[url];?>)" alt="<?php $home_page_image[alt]?>"></div>

		</div>
		<!-- OVERLAY BANNER -->
		<div class="slide"><div class="slide__img" style="background: rgba(35, 35, 35, 0);"></div></div>
		<div class="slide"><div class="slide__img" style="background: rgba(35, 35, 35, 0);"></div></div>

	</div>

	<div class="slides slides--titles">
		<!-- Slide 1 -->
		<div class="slide slide--current"></div>
		<!-- Slide 2 -->
<div class="slide">
<div class="main" style="width:100%" >
	<div class="message">Please view this demo on a desktop to see the grid.</div>

	<?php $postQuery = new WP_Query( array( 'post_type' => 'portfolio', 'orderby' => 'post_id', 'order' => 'DESC' ) );
						if($postQuery->have_posts() ) : while($postQuery->have_posts() ) : $postQuery->the_post();
						$grid_layout = get_field('grid_layout');
						$folio_title = get_field('folio_title');
						$folio_title_grid = get_field('folio_title_grid');
						$folio_name = get_field('folio_name');
						$folio_name_grid = get_field('folio_name_grid');
						$folio_text = get_field('folio_text');
						$folio_text_grid = get_field('folio_text_grid');
						$previous_btn_grid_area = get_field('previous_btn_grid_area');
						$next_btn_grid_area = get_field('next_btn_grid_area');
						$grid_current = get_field('grid_current');
						?>


	<!-- GRID 1 -->
	<?php if(!empty($grid_current)):  ?>
	<div class="grid <?php echo $grid_current;?> <?php echo $grid_layout; ?> ">
	<?php else:  ?>
		<div class="grid <?php echo $grid_layout; ?> ">
		<?php endif; ?>
		<?php if(have_rows('grid_item_image')):while(have_rows('grid_item_image')):the_row();
			$grid_image = get_sub_field('grid_image');
			$grid_item_data_delay = get_sub_field('grid_item_data_delay');
			$grid_item_area = get_sub_field('grid_item_area');
		?>
		<?php if(!empty($grid_image)): ?>
			<div class="grid__item" data-delay="<?php echo $grid_item_data_delay; ?>" data-direction="ttb" style="background-image: url(<?php echo $grid_image[url]; ?>); grid-area: <?php echo $grid_item_area?>"></div>
		<?php endif; ?>

		<?php endwhile; endif; ?>
		<!-- Navigation -->
		<div class="grid__item grid__item--nav grid__item--nav-prev" data-direction="ttb" style="grid-area: <?php echo $previous_btn_grid_area?>">
			<svg class="icon icon--nav-arrow"><use xlink:href="#icon-nav-arrow"></use></svg>
		</div>
		<div class="grid__item grid__item--nav grid__item--nav-next" data-direction="ttb" style="grid-area: <?php echo $next_btn_grid_area?>">
			<svg class="icon icon--nav-arrow"><use xlink:href="#icon-nav-arrow"></use></svg>
		</div>
		<!-- information -->
		<h2 class="grid__item grid__item--name" style="grid-area: <?php echo $folio_name_grid ?>"><?php echo $folio_name ?></h2>
		<h3 class="grid__item grid__item--title" style="grid-area: <?php echo $folio_title_grid ?>"><?php echo $folio_title ?></h3>
		<p class="grid__item grid__item--text" style="grid-area: <?php echo $folio_text_grid ?>">
				<?php echo $folio_text ?>
		</p>
	</div>

	<?php endwhile; endif; wp_reset_query();?>


	<!-- GRID-2 -->
	<!-- <div class="grid grid--layout-2">
		<div class="grid__item" data-delay="350" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/7.jpg);grid-area: 17 / 1 / 24 / 5; "></div>
		<div class="grid__item" data-delay="20" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/website/app.jpg);grid-area: 22 / 6 / 28 / 10;"></div>
		<div class="grid__item" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/website/revsldr-parallax.png);grid-area: 14 / 5 / 22 / 10;"></div>
		<div class="grid__item" data-delay="400" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/13.jpg);grid-area: 17 / 10 / 26 / 15;"></div>
		<div class="grid__item" data-delay="70" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/15.jpg);grid-area: 1 / 10 / 17 / 15;"></div>
		<div class="grid__item" data-delay="350" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/17.jpg);grid-area: 11 / 15 / 24 / 20;"></div> -->
		<!-- <div class="grid__item" data-delay="200" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/19.jpg);grid-area: 5 / 15 / 11 / 18;"></div> -->
		<!-- <div class="grid__item" data-delay="500"  data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/website/dora.jpg);grid-area: 1 / 15 / 11 / 23;"></div>
		<div class="grid__item" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/website/blue-diamond-air.jpg);grid-area: 20 / 20 / 27 / 24;"></div>
		<div class="grid__item" data-delay="20" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/2.jpg);grid-area: 24 / 15 / 29 / 20;"></div>
		<div class="grid__item" data-delay="450" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/4.jpg);grid-area: 4 / 23 / 11 / 27;"></div>
		<div class="grid__item" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/6.jpg);grid-area: 11 / 20 / 20	/ 30;"></div>
		<div class="grid__item" data-delay="650" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/8.jpg);grid-area: 25 / 24 / 29 / 28; "></div>
		<div class="grid__item grid__item--nav grid__item--nav-prev" data-delay="100" data-direction="ttb" style="grid-area: 9 / 5 / 14 / 10;">
			<svg class="icon icon--nav-arrow"><use xlink:href="#icon-nav-arrow"></use></svg>
		</div>
		<div class="grid__item grid__item--nav grid__item--nav-next" data-direction="ttb" style="grid-area: 20 / 24 / 25 / 30;">
			<svg class="icon icon--nav-arrow"><use xlink:href="#icon-nav-arrow"></use></svg>
		</div>
		<h2 class="grid__item grid__item--name" style="grid-area: 16 / 9 / 30 / 16;">Web<br/>site</h2>
		<h3 class="grid__item grid__item--title" style="grid-area: 1 / 27 / 11 / 29;">Wordpress Using </h3>
		<p class="grid__item grid__item--text" style="grid-area: 1 / 5 / 9 / 10; align-items: flex-end; text-align: right;">
			These are some websites I have built in the past that are both live and custom template design in Wordpress
		</p>
	</div> -->
	<!-- GRID-4 -->
	<!-- <div class="grid grid--layout-3">
		<div class="grid__item" data-direction="ttb" style=""></div>
		<div class="grid__item" data-delay="200" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/1.jpg);grid-area: 6 / 1 / 14 / 5;"></div>
		<div class="grid__item" data-delay="400" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/2.jpg);grid-area: 3 / 5 / 14 / 10;"></div>
		<div class="grid__item" data-delay="300" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/3.jpg);grid-area: 14 / 1 / 21 / 5;"></div>
		<div class="grid__item" data-delay="140" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/4.jpg);grid-area: 19 / 10 / 28 / 20;"></div>
		<div class="grid__item" data-delay="600" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/5.jpg);grid-area: 1 / 10 / 11 / 18;"></div>
		<div class="grid__item" data-delay="350" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/6.jpg);grid-area: 11 / 10 / 19 / 15;"></div>
		<div class="grid__item" data-delay="500" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/7.jpg);grid-area: 11 / 15 / 19 / 20;"></div>
		<div class="grid__item" data-delay="50" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/8.jpg); grid-area: 1 / 18 / 6 / 23;"></div>
		<div class="grid__item" data-delay="250" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/9.jpg);grid-area: 20 / 20 / 27 / 24;"></div>
		<div class="grid__item" data-delay="300" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/10.jpg);grid-area: 20 / 28 / 25 / 30;"></div>
		<div class="grid__item" data-delay="100" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/11.jpg);grid-area: 4 / 23 / 11 / 27; "></div>
		<div class="grid__item" data-delay="40" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/12.jpg); grid-area: 11 / 20 / 20	/ 30;"></div>
		<div class="grid__item" data-delay="40" data-direction="ttb" style="background-image: url(wp-content/themes/rommelfowlertheme/assets/img/test/12.jpg); grid-area: 20 / 24 / 26 / 28;"></div>

		<div class="grid__item grid__item--nav grid__item--nav-prev" data-direction="ttb" style="grid-area: 14 / 5 / 19 / 10; ">
			<svg class="icon icon--nav-arrow"><use xlink:href="#icon-nav-arrow"></use></svg>
		</div>
		<div class="grid__item grid__item--nav grid__item--nav-next" data-delay="40" data-direction="ttb" style="grid-area: 6 / 18 / 11 / 23; ">
			<svg class="icon icon--nav-arrow"><use xlink:href="#icon-nav-arrow"></use></svg>
		</div>
		<h2 class="grid__item grid__item--name" style="grid-area: 15 / 16 / 30 / 23;">Oyo<br/> Expo <br/>2019</h2>
		<h3 class="grid__item grid__item--title" style="grid-area: 1 / 27 / 11 / 29;">Paris</h3>
		<p class="grid__item grid__item--text" style="grid-area: 19 / 5 / 30 / 10; text-align: right;">Dignified teacakes air one's dirty linen off t'shop scouser quid pezzy little taking the mick</p>
	</div> -->
</div>
			<a onclick="PlaySound()" class="item-down menu-link" data-target="technologies">
				<i class="fa fa-angle-down" aria-hidden="true"></i>
				<figcaption>Technologies</figcaption>
			</a>
		</div>


		<!-- Slide 3 -->
		<div class="slide">
			<div class="inner-slide">
					<h1>Let us start something new!</h1>
					<h2>
						<span>C:</span> 775 419 6311 <br><br>
						<span>E:</span> info@rommelfowler.com
					</h2>
			</div>
		</div>

	</div>

		<div class="slidenav">
				<button onclick="PlaySound()" class="slidenav__item--prev "><i class="fa fa-angle-left" aria-hidden="true"></i></button>
				<button onclick="PlaySound()" class="slidenav__item--next "><i class="fa fa-angle-right" aria-hidden="true"></i></button>

		</div>
</div>
<!-- Slideshow -->
<div class="content-bottom">
	<div class="switch mode mode-design">
		<a class="x switch-item switch-item-current">X</a>
		<a class="switch-item"><span class="mode mode-design" data-switch data-glitch>Blogosphere</span></a>

	</div>
	<div class="link-wrap">
		<a class="contact-link mode mode-design" data-switch data-glitch>Work with me</a>
	</div>
</div>
</div>
<!-- /inner-content-->
<!-- ====================================
This starts the container for the menu section.
@Package data-content(container)
@Package inner-data-content(inside container)
@Package scroller - hooks an overflow
@NOTE - Still in development
TODO
1. Find section data-content
2. Find DIV inside data-content
3. Find nav ID
4. Place nav ID onto data-content div
5. load the ID.html
==================================== -->

<section class="data-content" ></section>
<!-- data-content - END -->

</div>
<!-- /content -->



<?php
get_footer();
