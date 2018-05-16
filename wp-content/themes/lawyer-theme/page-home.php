<?php
/**
* Template Name: Home
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lawyer
 */

get_header(); ?>

<!-- Main Theme Wrapper -->
<div id="Wrapper">
    <!-- Header Wrapper -->
    <div id="Header_wrapper">
        <!-- Header -->
        <header id="Header">
            <!-- Header Top -  Info Area -->
            <div id="Action_bar">
                <div class="container">
                    <div class="column one">
                        <!-- Header - contact info area1-->
                        <ul class="contact_details">
                            <li class="slogan">
                                <?php the_field('top_nav_lawyer_text'); ?>
                            </li>
                            <li class="phone">
                                <i class="icon-phone"></i><a href="tel:+7754196311">
                                  <?php the_field('top_nav_lawyer_phone'); ?></a>
                            </li>
                            <li class="mail">
                                <i class="icon-mail-line"></i><a href="mailto:info@rommelfowler.com">
                                  <?php the_field('top_nav_lawyer_email'); ?></a>
                            </li>
                        </ul>
                        <!--Social info area-->
                        <ul class="social">
                            <li class="skype">
                                <a href="#" title="Skype"><i class="icon-skype"></i></a>
                            </li>
                            <li class="facebook">
                                <a href="#" title="Facebook"><i class="icon-facebook"></i></a>
                            </li>
                            <li class="googleplus">
                                <a href="#" title="Google+"><i class="icon-gplus"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#" title="Twitter"><i class="icon-twitter"></i></a>
                            </li>
                            <li class="vimeo">
                                <a href="#" title="Vimeo"><i class="icon-vimeo"></i></a>
                            </li>
                            <li class="youtube">
                                <a href="#" title="YouTube"><i class="icon-play"></i></a>
                            </li>
                            <li class="flickr">
                                <a href="#" title="Flickr"><i class="icon-flickr"></i></a>
                            </li>
                            <li class="linkedin">
                                <a href="#" title="LinkedIn"><i class="icon-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Header -  Logo and Menu area -->
            <div id="Top_bar">
                <div class="container">
                    <div class="column one">
                        <div class="top_bar_left clearfix">
                            <!-- Logo-->
                            <div class="logo">
                                <a id="logo" href="//www.rommelfowler.com" title="Lawyer">
                                  <img class="logo-main scale-with-grid" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="Lawyer" />
                                  <img class="logo-sticky scale-with-grid" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo@2x.png" alt="Lawyer">
                                </a>
                            </div>
                            <!-- Main menu-->
                            <div class="menu_wrapper">
                                <nav id="menu">
                                    <ul id="menu-main-menu" class="menu">
                                        <li class="current_page_item">
                                            <a href="#"><span>Home</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span>About us</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span>What we offer</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span>Our specialists</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span>Contact us</span></a>
                                        </li>
                                    </ul>
                                </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
                            </div>
                            <!-- Header Searchform area-->
                            <div class="search_wrapper">
                                <form method="get" id="searchform" action="#">
                                    <i class="icon_search icon-search"></i><a href="#" class="icon_close"><i class="icon-cancel"></i></a>
                                    <input type="text" class="field" name="s" id="s" placeholder="Enter your search" />
                                    <input type="submit" class="submit flv_disp_none" value="" />
                                </form>
                            </div>
                        </div>
                        <div class="top_bar_right">
                            <div class="top_bar_right_wrapper">
                                <a id="search_button" href="#"><i class="icon-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Revolution slider area-->
            <div class="mfn-main-slider">
                <div id="rev_slider_wrapper" class="rev_slider_wrapper fullwidthbanner-container sections_style_1">
                    <div id="rev_slider" class="rev_slider fullwidthabanner tp-overflow-hidden" data-version="5.0.4.1">
                        <ul>
                            <li data-index="rs-1" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slide-lawyer-bg.jpg" alt="" width="1920" height="570" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                <div class="tp-caption tp-resizeme" id="slide-1-layer-1" data-x="center" data-hoffset="0" data-y="bottom" data-voffset="-10" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="y:50px;opacity:0;s:500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 5;">
                                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slide-lawyer-1.png" alt="" width="1022" height="95" data-no-retina>
                                </div>
                                <div class="tp-caption tp-resizeme" id="slide-1-layer-2" data-x="center" data-hoffset="-293" data-y="bottom" data-voffset="26" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="x:left;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="800" data-responsive_offset="on" style="z-index: 6;">
                                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slide-lawyer-2.png" alt="" width="249" height="214" data-no-retina>
                                </div>
                                <div class="tp-caption tp-resizeme" id="slide-1-layer-3" data-x="center" data-hoffset="-148" data-y="bottom" data-voffset="23" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="x:right;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="1100" data-responsive_offset="on" style="z-index: 7;">
                                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slide-lawyer-3.png" alt="" width="59" height="196" data-no-retina>
                                </div>
                                <div class="tp-caption tp-resizeme" id="slide-1-layer-4" data-x="center" data-hoffset="284" data-y="bottom" data-voffset="17" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="y:-50px;opacity:0;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="1400" data-responsive_offset="on" style="z-index: 8;">
                                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slide-lawyer-4.png" alt="" width="187" height="266" data-no-retina>
                                </div>
                                <div class="tp-caption tp-resizeme" id="slide-1-layer-5" data-x="center" data-hoffset="35" data-y="bottom" data-voffset="-14" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="opacity:0;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="2000" data-responsive_offset="on" style="z-index: 9;">
                                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slide-lawyer-5.png" alt="" width="276" height="404" data-no-retina>
                                </div>


                                <div class="tp-caption mfnrs_lawyer tp-resizeme" id="slide-1-layer-6" data-x="center" data-hoffset="0" data-y="center" data-voffset="-200" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="y:-50px;opacity:0;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="2300" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 10; min-width: auto; min-height: auto; white-space: nowrap; max-width: auto; max-height: auto; font-size: 46px; line-height: 46px; color: rgba(255, 255, 255, 1.00);font-family:'Patua One';border-color:rgba(255, 255, 255, 1.00);">
                                  <?php bloginfo('description') ?>

                                </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom flv_viz_hid"></div>
                    </div>
                </div>
            </div>
        </header>
    </div>


        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section" style="padding-top:50px; padding-bottom:20px; background-color:#333; background-image:url(/wp-content/themes/lawyer-theme/img/slide-lawyer-bg.jpg); background-repeat:no-repeat; background-position:center top; ">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- Page Title-->
                                    <!-- One full width row-->
                                    <div class="column one column_fancy_heading ">
                                        <div class="fancy_heading fancy_heading_icon">
                                            <h2 class="title">We offer you more than just
												<br>
												a typical law firm</h2>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_list ">
                                        <div class="list_item lists_2 clearfix">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="fadeInLeft">
                                                <div class="list_left list_image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/home_lawyer_list_1.png" alt="Legal help" class="scale-with-grid" />
                                                </div>
                                                <div class="list_right">
                                                    <h4>Legal help</h4>
                                                    <div class="desc">
                                                        Vitae adipiscing turpis. Aenean ligula nibh in, molestie id viverra a, dapibus at dolor.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_list ">
                                        <div class="list_item lists_2 clearfix">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="fadeInDown">
                                                <div class="list_left list_image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/home_lawyer_list_2.png" alt="Fiscal advising" class="scale-with-grid" />
                                                </div>
                                                <div class="list_right">
                                                    <h4>Fiscal advising</h4>
                                                    <div class="desc">
                                                        Vitae adipiscing turpis. Aenean ligula nibh in, molestie id viverra a, dapibus at dolor.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_list ">
                                        <div class="list_item lists_2 clearfix">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="fadeInRight">
                                                <div class="list_left list_image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/home_lawyer_list_3.png" alt="Qualified protection" class="scale-with-grid" />
                                                </div>
                                                <div class="list_right">
                                                    <h4>Qualified protection</h4>
                                                    <div class="desc">
                                                        Vitae adipiscing turpis. Aenean ligula nibh in, molestie id viverra a, dapibus at dolor.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page devider -->
                                    <!-- One full width row-->
                                    <div class="column one column_divider ">
                                        <hr class="no_line" />
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_list ">
                                        <div class="list_item lists_2 clearfix">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="fadeInLeft">
                                                <div class="list_left list_image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/home_lawyer_4.png" alt="Financial advising" class="scale-with-grid" />
                                                </div>
                                                <div class="list_right">
                                                    <h4>Financial advising</h4>
                                                    <div class="desc">
                                                        Vitae adipiscing turpis. Aenean ligula nibh in, molestie id viverra a, dapibus at dolor.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_list ">
                                        <div class="list_item lists_2 clearfix">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="fadeInUp">
                                                <div class="list_left list_image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/home_lawyer_5.png" alt="Vindication" class="scale-with-grid" />
                                                </div>
                                                <div class="list_right">
                                                    <h4>Vindication</h4>
                                                    <div class="desc">
                                                        Vitae adipiscing turpis. Aenean ligula nibh in, molestie id viverra a, dapibus at dolor.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_list ">
                                        <div class="list_item lists_2 clearfix">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="fadeInRight">
                                                <div class="list_left list_image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/home_lawyer_6.png" alt="10 years of experience" class="scale-with-grid" />
                                                </div>
                                                <div class="list_right">
                                                    <h4>10 years of experience</h4>
                                                    <div class="desc">
                                                        Vitae adipiscing turpis. Aenean ligula nibh in, molestie id viverra a, dapibus at dolor.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section sections_style_3">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One Second (1/2) Column -->
                                    <div class="column one-second column_column ">
                                        <div class="column_attr animate" data-anim-type="zoomInLeft">
                                            <h2 class="hrmargin_b_30">About us</h2>
                                            <div class="image_frame no_link scale-with-grid alignleft no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="<?php bloginfo('stylesheet_directory'); ?>/img/home_lawyer_about.png" alt="">
                                                </div>
                                            </div>

                                            <div class="big">
                                                <p style="font-weight: bold;">
                                                    Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum ac eros tristique dignissim. Donec aliquam velit vitae mi dictum.
                                                </p>
                                            </div>
                                            <p>
                                                Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum ac eros tristique dignissim. Donec aliquam velit vitae mi dictum. Vitae adipc aliquam velit vitae mi dictum.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- One Second (1/2) Column -->
                                    <div class="column one-second column_column ">
                                        <div class="column_attr animate" data-anim-type="zoomInRight">
                                            <h2 class="hrmargin_b_30">Popular information</h2>
                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second" style="margin-bottom: 0;">
                                                <ul class="list_idea">
                                                    <li>
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                                    </li>
                                                    <li>
                                                        Aliquam tincidunt cons ectetuer mauris eu risus
                                                    </li>
                                                    <li>
                                                        Vestibulum auctor dapibus conneque
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second" style="margin-bottom: 0;">
                                                <ul class="list_idea">
                                                    <li>
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                                    </li>
                                                    <li>
                                                        Aliquam tincidunt cons ectetuer mauris eu risus
                                                    </li>
                                                    <li>
                                                        Vestibulum auctor dapibus conneque
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page devider -->
                                    <!-- One full width row-->
                                    <div class="column one column_divider ">
                                        <hr class="no_line" />
                                    </div>
                                    <!-- Three Fourth (3/4) Column -->
                                    <div class="column three-fourth column_column ">
                                        <div class="column_attr ">
                                            <h2 style="margin-bottom: 0;">Latest questions and answers</h2>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fourth column_column ">
                                        <div class="column_attr ">
                                            <h2 style="margin-bottom: 0;">Specialist</h2>
                                        </div>
                                    </div>
                                    <!-- Three Fourth (3/4) Column -->
                                    <div class="column three-fourth column_faq ">
                                        <div class="faq">
                                            <div class="mfn-acc faq_wrapper open1st">
                                                <div class="question">
                                                    <div class="title">
                                                        <span class="num">1</span><i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i>Sed est elit, posuere ac semper at, hendrerit a neque
                                                    </div>
                                                    <div class="answer">
                                                        <div class="big">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce velit tortor, dictum in gravida nec, aliquet non lorem.
                                                            </p>
                                                        </div>
                                                        <p>
                                                            Donec vestibulum justo a diam ultricies pellentesque. Quisque mattis diam vel lacus tincidunt elementum. Sed vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum ac eros tristique dignissim. Donec aliquam velit vitae mi dictum.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="question">
                                                    <div class="title">
                                                        <span class="num">2</span><i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i>Sed est elit, posuere ac semper at, hendrerit a neque
                                                    </div>
                                                    <div class="answer">
                                                        <div class="big">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce velit tortor, dictum in gravida nec, aliquet non lorem.
                                                            </p>
                                                        </div>
                                                        <p>
                                                            Donec vestibulum justo a diam ultricies pellentesque. Quisque mattis diam vel lacus tincidunt elementum. Sed vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum ac eros tristique dignissim. Donec aliquam velit vitae mi dictum.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="question">
                                                    <div class="title">
                                                        <span class="num">3</span><i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i>Sed est elit, posuere ac semper at, hendrerit a neque
                                                    </div>
                                                    <div class="answer">
                                                        <div class="big">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce velit tortor, dictum in gravida nec, aliquet non lorem.
                                                            </p>
                                                        </div>
                                                        <p>
                                                            Donec vestibulum justo a diam ultricies pellentesque. Quisque mattis diam vel lacus tincidunt elementum. Sed vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum ac eros tristique dignissim. Donec aliquam velit vitae mi dictum.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="question">
                                                    <div class="title">
                                                        <span class="num">4</span><i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i>Sed est elit, posuere ac semper at, hendrerit a neque
                                                    </div>
                                                    <div class="answer">
                                                        <div class="big">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce velit tortor, dictum in gravida nec, aliquet non lorem.
                                                            </p>
                                                        </div>
                                                        <p>
                                                            Donec vestibulum justo a diam ultricies pellentesque. Quisque mattis diam vel lacus tincidunt elementum. Sed vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum ac eros tristique dignissim. Donec aliquam velit vitae mi dictum.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="question">
                                                    <div class="title">
                                                        <span class="num">5</span><i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i>Sed est elit, posuere ac semper at, hendrerit a neque
                                                    </div>
                                                    <div class="answer">
                                                        <div class="big">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce velit tortor, dictum in gravida nec, aliquet non lorem.
                                                            </p>
                                                        </div>
                                                        <p>
                                                            Donec vestibulum justo a diam ultricies pellentesque. Quisque mattis diam vel lacus tincidunt elementum. Sed vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum ac eros tristique dignissim. Donec aliquam velit vitae mi dictum.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fourth column_our_team ">
                                        <!-- Team Member Area -->
                                        <div class="team team_vertical">
                                            <div class="image_frame no_link scale-with-grid">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="<?php bloginfo('stylesheet_directory'); ?>/img/home_lawyer_specialist.jpg" alt="lawyer" />
                                                </div>
                                            </div>
                                            <div class="desc_wrapper">
                                                <h4 class="black">Lawyer Name</h4>
                                                <p class="subtitle">
                                                    Lawyer
                                                </p>
                                                <hr class="hr_color" />
                                                <div class="desc">
                                                    Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor.
                                                </div>
                                                <div class="links">
                                                    <a href="mailto:info@rommelfowler.com" class="icon_bar icon_bar_small"><span class="t"><i class="icon-mail"></i></span><span class="b"><i class="icon-mail"></i></span></a><a target="_blank" href="http://facebook.com/" class="icon_bar icon_bar_small"><span class="t"><i class="icon-facebook"></i></span><span class="b"><i class="icon-facebook"></i></span></a><a target="_blank" href="http://twitter.com/" class="icon_bar icon_bar_small"><span class="t"><i class="icon-twitter"></i></span><span class="b"><i class="icon-twitter"></i></span></a><a target="_blank" href="http://www.linkedin.com/" class="icon_bar icon_bar_small"><span class="t"><i class="icon-linkedin"></i></span><span class="b"><i class="icon-linkedin"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section" style="padding-top:60px; padding-bottom:20px; background-color:whitesmoke; background-image:url(content/lawyer/images/home_lawyer_section.jpg); background-repeat:no-repeat; background-position:center top; ">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- Page Title-->
                                    <!-- One full width row-->
                                    <div class="column one column_fancy_heading ">
                                        <div class="fancy_heading fancy_heading_icon">
                                            <h2 class="title black">Choose your monthly plan</h2>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fourth column_pricing_item ">
                                        <div class="pricing-box pricing-box-box">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="fadeInDown">
                                                <div class="plan-header">
                                                    <h2>Basic</h2>
                                                    <div class="price">
                                                        <sup class="currency">$</sup><span>12</span><sup class="period">/ monthly</sup>
                                                    </div>
                                                    <hr class="hr_color" />
                                                    <div class="big">
                                                        <p class="subtitle">
                                                            Vitae adipiscing turpis. Aenean ligula nibh, molestie id vivide.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="plan-inside">
                                                    <ul>
                                                        <li>
                                                            <strong>5 cases</strong> at least
                                                        </li>
                                                        <li>
                                                            <strong>Unlimited</strong> meetings
                                                        </li>
                                                        <li>
                                                            <strong> 30 hours</strong> in court
                                                        </li>
                                                        <li>
                                                            Professional vindication
                                                        </li>
                                                        <li>
                                                            <strong>10</strong> customers at time
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="plan-footer">
                                                    <a href="#" class="button button_left button_theme button_js"><span class="button_label">Sign up now</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fourth column_pricing_item ">
                                        <div class="pricing-box pricing-box-featured pricing-box-box">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="bounceInDown">
                                                <div class="plan-header">
                                                    <h2>Standard</h2>
                                                    <div class="price">
                                                        <sup class="currency">$</sup><span>29</span><sup class="period">/ monthly</sup>
                                                    </div>
                                                    <hr class="hr_color" />
                                                    <div class="big">
                                                        <p class="subtitle">
                                                            Vitae adipiscing turpis. Aenean ligula nibh, molestie id vivide.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="plan-inside">
                                                    <ul>
                                                        <li>
                                                            <strong>5 cases</strong> at least
                                                        </li>
                                                        <li>
                                                            <strong>Unlimited</strong> meetings
                                                        </li>
                                                        <li>
                                                            <strong> 30 hours</strong> in court
                                                        </li>
                                                        <li>
                                                            Professional vindication
                                                        </li>
                                                        <li>
                                                            <strong>10</strong> customers at time
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="plan-footer">
                                                    <a href="#" class="button button_left button_theme button_js"><span class="button_label">Sign up now</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fourth column_pricing_item ">
                                        <div class="pricing-box pricing-box-box">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="fadeInDown">
                                                <div class="plan-header">
                                                    <h2>Business</h2>
                                                    <div class="price">
                                                        <sup class="currency">$</sup><span>39</span><sup class="period">/ monthly</sup>
                                                    </div>
                                                    <hr class="hr_color" />
                                                    <div class="big">
                                                        <p class="subtitle">
                                                            Vitae adipiscing turpis. Aenean ligula nibh, molestie id vivide.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="plan-inside">
                                                    <ul>
                                                        <li>
                                                            <strong>5 cases</strong> at least
                                                        </li>
                                                        <li>
                                                            <strong>Unlimited</strong> meetings
                                                        </li>
                                                        <li>
                                                            <strong> 30 hours</strong> in court
                                                        </li>
                                                        <li>
                                                            Professional vindication
                                                        </li>
                                                        <li>
                                                            <strong>10</strong> customers at time
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="plan-footer">
                                                    <a href="#" class="button button_left button_theme button_js"><span class="button_label">Sign up now</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fourth column_pricing_item ">
                                        <div class="pricing-box pricing-box-box">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="fadeInDown">
                                                <div class="plan-header">
                                                    <h2>Professional</h2>
                                                    <div class="price">
                                                        <sup class="currency">$</sup><span>49</span><sup class="period">/ monthly</sup>
                                                    </div>
                                                    <hr class="hr_color" />
                                                    <div class="big">
                                                        <p class="subtitle">
                                                            Vitae adipiscing turpis. Aenean ligula nibh, molestie id vivide.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="plan-inside">
                                                    <ul>
                                                        <li>
                                                            <strong>5 cases</strong> at least
                                                        </li>
                                                        <li>
                                                            <strong>Unlimited</strong> meetings
                                                        </li>
                                                        <li>
                                                            <strong> 30 hours</strong> in court
                                                        </li>
                                                        <li>
                                                            Professional vindication
                                                        </li>
                                                        <li>
                                                            <strong>10</strong> customers at time
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="plan-footer">
                                                    <a href="#" class="button button_left button_theme button_js"><span class="button_label">Sign up now</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section the_content no_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
get_footer(); ?>
