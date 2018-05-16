<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lawyer
 */

?>
<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- Basic Page Needs -->
	<title>Lawyer</title>
	<meta name="description" content="rommel fowler design - lawyer template">
	<meta name="author" content="rommel fowler design - lawyer template">
	<link rel="profile" href="http://gmpg.org/xfn/11">



	    <!-- Mobile Specific Metas -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	    <!-- Favicons -->
	    <link rel="shortcut icon" href="">

	    <!-- FONTS -->
	    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
	    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>

	    <!-- CSS -->
	    <link rel='stylesheet' href='<?php bloginfo('stylesheet_directory'); ?>/css/global.css'>
	    <link rel='stylesheet' href='<?php bloginfo('stylesheet_directory'); ?>/css/addon/structure.css'>
	    <link rel='stylesheet' href='<?php bloginfo('stylesheet_directory'); ?>/css/addon/lawyer.css'>
	    <link rel='stylesheet' href='<?php bloginfo('stylesheet_directory'); ?>/css/addon/custom.css'>

	    <!-- Revolution Slider -->
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/addon/settings.css">
	<?php wp_head(); ?>
</head>

<body class="template-slider color-brown layout-full-width header-classic sticky-header sticky-white subheader-title-left" <?php body_class(); ?>>
	  
