<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VTDigger
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- animation -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/animate.css" />
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/bootstrap.min.css" />
	<!-- et line icon -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/et-line-icons.css" />
	<!-- font-awesome icon -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/font-awesome.min.css" />
	<!-- themify icon -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/themify-icons.css">
	<!-- swiper carousel -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/swiper.min.css">
	<!-- justified gallery  -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/justified-gallery.min.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/magnific-popup.css" />
	<!-- revolution slider -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory')?>/assets/revolution/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory')?>/assets/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory')?>/assets/revolution/css/navigation.css">
	<!-- bootsnav -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/bootsnav.css">
	<!-- style -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/style.css" />
	<!-- responsive css -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/responsive.css" />
	<!--[if IE]>
			<script src="assets/js/html5shiv.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
			<!-- start header -->
			<header>
				<!-- start navigation -->
				<nav class="navbar navbar-default bootsnav bg-transparent navbar-scroll-top nav-box-width header-light">
						<div class="container-fluid nav-header-container">
								<div class="row">
										<!-- start logo -->
										<div class="col-md-2 col-xs-5 ">
												<a href="#" title="VTDigger" class="logo width-150px ">
													<img src="<?php bloginfo('stylesheet_directory')?>/assets/images/logo/logo.png" data-at2x="<?php bloginfo('stylesheet_directory')?>/assets/images/logo/logo@2x.png" class="margin-fifteen-top  logo-dark default" alt="VTDigger" >
													<img src="<?php bloginfo('stylesheet_directory')?>/assets/images/logo/logo.png" data-at2x="<?php bloginfo('stylesheet_directory')?>/assets/images/logo/logo@2x.png" alt="VTDigger" class="margin-fifteen-top logo-light" >
												</a>
										</div>
										<!-- end logo -->
										<div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
												<button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
														<span class="sr-only">toggle navigation</span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
												</button>

										<div class="col-md-2 col-xs-5 width-auto">
												<div class="header-searchbar">
														<a href="#search-header" class="header-search-form text-white"><i class="fa fa-search search-button"></i></a>
														<!-- search input-->
														<form id="search-header" method="post" action="search-result.html" name="search-header" class="mfp-hide search-form-result">
																<div class="search-form position-relative">
																		<button type="submit" class="fa fa-search close-search search-button"></button>
																		<input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
																</div>
														</form>
												</div>
												<div class="header-social-icon xs-display-none">
														<a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
														<a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
														<a href="https://dribbble.com/" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a>
												</div>
										</div>
								</div>
						</div>
				</nav>
				<!-- end navigation -->
			</header>
