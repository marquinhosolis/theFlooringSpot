<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js" as="script">
	<link rel="stylesheet" href="https://use.typekit.net/cbn4qex.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="https://unpkg.com/transition-style" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css" integrity="sha512-c7jR/kCnu09ZrAKsWXsI/x9HCO9kkpHw4Ftqhofqs+I2hNxalK5RGwo/IAhW3iqCHIw55wBSSCFlm8JP0sw2Zw==" crossorigin="anonymous" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/lib/hamburgers.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.min.css">
	<?php wp_head(); ?>
</head>

<body>
	<header>
		<div class="logoHeader">
			<a href="<?php echo site_url(); ?>">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_theFlooringSpot.svg" alt="The Flooring Spot Logo" width="145">
			</a>
		</div>
		<div class="navDesktop">
			<?php wp_nav_menu('main-menu'); ?>
			<div class="buttonsDesktopMenu">
				<a href="<?php echo site_url('/contact-us/'); ?>" class="btn">Find your store</a><br>
				<a href="<?php echo site_url('/contact-us/'); ?>" class="btn">Get a Free Estimate</a><br>
				<a href="tel:407.406.6778"><span>Call us </span>407.406.6778</a>
			</div>
		</div>
		<div class="hamburger hamburger--squeeze">
			<div class="hamburger-box">
				<div class="hamburger-inner"></div>
			</div>
		</div>
	</header>
	<div class="navMobile">
		<div class="mainNav">
			<?php wp_nav_menu('main-menu'); ?>
			<div class="buttonsMobileMenu">
				<a href="<?php echo site_url('/contact-us/'); ?>" class="btn">Find your store</a><br>
				<a href="<?php echo site_url('/contact-us/'); ?>" class="btn">Get a Free Estimate</a><br>
				<a href="tel:407.406.6778"><span>Call us </span>407.406.6778</a>
			</div>
		</div>
	</div>