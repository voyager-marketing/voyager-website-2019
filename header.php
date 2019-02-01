<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="p:domain_verify" content="8d9fb56fab867619d6ec439518e9a443"/>
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<!-- FRONT - Single Page Template -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/dzsparallaxer/dzsparallaxer.css">

	<!-- FRONT - Hero #19 -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/fancybox/jquery.fancybox.css">

	<!-- FRONT - Contact Us -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/font-awesome/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/animate.css/animate.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/hs-megamenu/src/hs.megamenu.css">

	<!-- CSS Front Template -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/theme.css">

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

<!-- ========== HEADER ========== -->
<header id="header" class="u-header u-header--sticky-top-md">
  <div class="u-header__section">
    <div id="logoAndNav" class="container">
      <!-- Nav -->
      <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
        <!-- Logo -->
        <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="/" aria-label="Front">
        	<img src="<?php echo get_template_directory_uri() ?>/images/new-voyager-horizontal-thin.png" alt="">
          <!-- <span class="u-header__navbar-brand-text">Voyager Marketing</span> -->
        </a>
        <!-- End Logo -->

        <!-- Responsive Toggle Button -->
        <button type="button" class="navbar-toggler btn u-hamburger"
                aria-label="Toggle navigation"
                aria-expanded="false"
                aria-controls="navBar"
                data-toggle="collapse"
                data-target="#navBar">
          <span id="hamburgerTrigger" class="u-hamburger__box">
            <span class="u-hamburger__inner"></span>
          </span>
        </button>
        <!-- End Responsive Toggle Button -->

        <!-- Navigation -->
        <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
          <ul class="navbar-nav u-header__navbar-nav">
            <!-- Home -->
            <li class="nav-item u-header__nav-item"
                data-event="hover"
                data-animation-in="slideInUp"
                data-animation-out="fadeOut"
                data-position="left">
              <a href="/" class="nav-link u-header__nav-link">Home</a>
            </li>
            <!-- End Home -->


            <!-- Web -->
            <li class="nav-item u-header__nav-item"
                data-event="hover"
                data-animation-in="slideInUp"
                data-animation-out="fadeOut"
                data-position="left">
              <a href="/web/" class="nav-link u-header__nav-link">Web</a>
            </li>
            <!-- End Web -->

            <!-- Blog -->
            <li class="nav-item u-header__nav-item"
                data-event="hover"
                data-animation-in="slideInUp"
                data-animation-out="fadeOut"
                data-position="left">
              <a href="/blog/" class="nav-link u-header__nav-link">Blog</a>
            </li>
            <!-- End Blog -->

            <!-- Contact Us -->
            <li class="nav-item u-header__nav-item"
                data-event="hover"
                data-animation-in="slideInUp"
                data-animation-out="fadeOut"
                data-position="left">
              <a href="/contact-us/" class="nav-link u-header__nav-link">Contact Us</a>
            </li>
            <!-- End Contact Us -->


            <!-- Button -->
            <li class="nav-item u-header__nav-last-item">
              <a class="btn btn-sm btn-primary transition-3d-hover" href="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/" target="_blank">
                Buy Now
              </a>
            </li>
            <!-- End Button -->
          </ul>
        </div>
        <!-- End Navigation -->
      </nav>
      <!-- End Nav -->
    </div>
  </div>
</header>
<!-- ========== END HEADER ========== -->

	<div id="content" class="site-content">
