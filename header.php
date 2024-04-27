<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package frondendie
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header id="masthead" class="header">
		<div class="header__content">
			<div class="menu__toggle"></div>
			<div class="header__logo">
				<!-- <?php the_custom_logo(); ?> -->
				<a href="/">by deesse media</a>
			</div><!-- .site-branding -->

			<div class="header__center">longread about the history of Antiqua</div>

			<div class="header__nav">
				<nav id="site-navigation" class="nav">
					<?php
					wp_nav_menu(
						array(
							'menu' => 'menu-1',
							'container'       => '',
							'menu_class'      => 'menu',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>

		</div>
	</header><!-- #masthead -->