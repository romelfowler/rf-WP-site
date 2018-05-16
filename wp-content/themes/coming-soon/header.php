<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Coming_Soon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<!-- Stylesheets
		============================================= -->
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700,800,900|Poppins:700" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/style.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/dark.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/font-icons.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/animate.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/magnific-popup.css" type="text/css" />

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/responsive.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

		<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory')?>/css/addons/settings.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory')?>/css/addons/layers.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory')?>/css/addons/navigation.css">

		<!-- ADD-ONS CSS FILES -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory')?>/css/addons/revolution.addon.particles.css">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107534595-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-107534595-1');
		</script>

		<!-- Document Title
		============================================= -->
		<title>WP - Coming Soon</title>
	<?php wp_head(); ?>
</head>

<body class="stretched" <?php body_class(); ?>>

<div id="page" class="site">


	<div id="content" class="site-content">
