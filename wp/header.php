<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="robots" content="noindex, nofollow" />
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
	<?php wp_head(); ?>
	
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slicknav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
	<script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr.js"></script>
</head>
<body <?php body_class(); ?>>
	
	<div id="pre-loaders">
		<div class="sk-circle">
			<div class="sk-circle1 sk-child"></div>
			<div class="sk-circle2 sk-child"></div>
			<div class="sk-circle3 sk-child"></div>
			<div class="sk-circle4 sk-child"></div>
			<div class="sk-circle5 sk-child"></div>
			<div class="sk-circle6 sk-child"></div>
			<div class="sk-circle7 sk-child"></div>
			<div class="sk-circle8 sk-child"></div>
			<div class="sk-circle9 sk-child"></div>
			<div class="sk-circle10 sk-child"></div>
			<div class="sk-circle11 sk-child"></div>
			<div class="sk-circle12 sk-child"></div>
		</div>
	</div><!--close #pre-loaders-->
	
	<div id="page-content">
	
		<div id="header-anchor-js"></div>
		<div id="header-js" class="header">
			<div class="row">
				<div class="small-12 medium-3 large-2 columns header__logo">
					<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/header__logo.png" alt="" /></a>
				</div>
				<div class="small-12 medium-9 column header__menu">
					<div id="header__menu-js">
						<?php wp_nav_menu( array( 'menu' => 'Header Menu', 'container' => false ) ); ?>
					</div>
					<span class="header__phone">1-877-733-0921</span>
				</div>
			</div>
		</div><!--close .header-->
