<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rommel_Fowler_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title>Rommel Fowler </title>
	<meta name="description" content="Rommel Fowler website is a portfolio that showcases all the design and
	development jobs Rommel Fowler has worked on in his years as a developer and application designer." />
	<meta name="keywords" content="template, page layout, concept, developer, designer, portfolio, effect, animation, css, javascript" />
	<meta name="author" content="Rommel Fowler" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway:500" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/folio-grid.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/scroll-style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/style.css" />
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/modernizr.js"></script>
	<?php wp_head(); ?>
	<script>document.documentElement.className = 'js';</script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107534595-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-107534595-1');
		</script>
</head>
<svg class="hidden">
		<symbol id="icon-menu" viewBox="0 0 24 24">
			<title>menu</title>
			<path d="M23.8,6H0.1V3h23.7C23.8,3,23.8,6,23.8,6z M23.8,10.5H0.1v3h23.7C23.8,13.5,23.8,10.5,23.8,10.5z M24,18H10v3h14V18z"/>
		</symbol>
		<symbol id="icon-menu-alt" viewBox="0 0 24 24">
			<title>menu alt</title>
			<path d="M10.4,6H0V3h10.4C10.4,3,10.4,6,10.4,6z M10.4,10.5H0v3h10.4C10.4,13.5,10.4,10.5,10.4,10.5z M15.1,18H9v3h6.1V18z M23.4,6H13V3h10.4C23.4,3,23.4,6,23.4,6z M23.4,10.5H13v3h10.4C23.4,13.5,23.4,10.5,23.4,10.5z M23.5,18h-6.1v3h6.1V18z"/>
		</symbol>
		<symbol id="icon-arrow" viewBox="0 0 24 24">
			<title>arrow</title>
			<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
		</symbol>
		<symbol id="icon-drop" viewBox="0 0 24 24">
			<title>drop</title>
			<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
		</symbol>
		<symbol id="icon-nav-arrow" viewBox="0 0 24 17">
			<title>nav arrow</title>
			<polygon points="14.1333333 2.61666667 18.9333333 7.41666667 0 7.41666667 0 10.0833333 18.9333333 10.0833333 14.1333333 14.8833333 16 16.75 24 8.75 16 0.75"></polygon>
		</symbol>
	</svg>
<body  <?php body_class(); ?> class="demo-3" >
		<div class=" overlay overlay--hidden"></div>
			<div class="content">
				<div class="inner-content ">

					<div class="content-top">
						<span class="title">
							<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo/logo.png" class="inner-title mode " data-switch data-glitch>
						</span>
						<div class="controls">
							<button id="hamburger" class="btn menu-btn mode mode-design" data-switch>
								<svg class="icon menu-icon"><use xlink:href="#icon-menu"></use></svg>
								<svg class="icon menu-icon-alt"><use xlink:href="#icon-menu-alt"></use></svg>
							</button>
						</div>
						<!-- end of controls -->
					</div>

					<div class="menu">
						<ul class="inner-menu">
							<!-- <li class="menu-item"><a href="#" data-target="contact"  class="menu-link" data-switch>Give Me A Buzz!</a></li> -->
						</ul>
					</div>
					<div class="menu-code">
						<ul class="inner-menu">
							<li class="menu-item"><a data-target="business-of-design"  class="menu-link" data-switch>The business of design: book series</a>
								<ul class="sub-menu">
									<li class="menu-item"><a data-target="getting-dressed-for-the-dance" class="menu-link" data-switch>Getting dressed for the dance: Finding a dance partner</a>
									<li class="menu-item"><a data-target="top-10-best-practice" class="menu-link" data-switch>The top 10 business practice</a>
									<li class="menu-item"><a data-target="give-for-the-sake-of-giving" class="menu-link" data-switch>Marketing: Give for the sake of giving</a>
								</ul>
							</li>
							<li class="menu-item"><a data-target="always-a-programmer" class="menu-link" data-switch>Always a programmer</a></li>
								<li class="menu-item"><a data-target="dos-and-donts" class="menu-link" data-switch>My take on the do's and dont's</a></li>
								<li class="menu-item"><a data-target="centering-divs" class="menu-link" data-switch>Centering DIVs</a></li>
								<li class="menu-item"><a data-target="css-grid-layouts" class="menu-link" data-switch>CSS Grid Layouts</a></li>

						</ul>
					</div>
