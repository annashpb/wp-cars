<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->
	<link href="https://fonts.googleapis.com/css?family=Spartan:200,600&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site container">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-header__container" id="site-header__container">
				<img src="<?php echo get_field('logo', 'option')['sizes']['thumbnail']; ?>" alt="<?php echo get_field('logo', 'option')['alt']; ?>">
				<?php if (has_nav_menu('header-menu')) : ?>
					<div class="navigation-top">
						<div class="wrap">
							<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
						</div><!-- .wrap -->
					</div><!-- .navigation-top -->
				<?php endif; ?>
			</div>
		</header><!-- #masthead -->

		<div class="site-content-contain">
			<div id="content" class="site-content">