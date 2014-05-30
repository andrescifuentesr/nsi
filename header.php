<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package nsi
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">

		<div class="site-header--top">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
			</div><!--

		--><div class="nav-social">
				<div class="bt-newsletter">
					<a href="#">Newsletter</a>
				</div><!--
				--><?php get_template_part( 'menu', 'social' ); ?>
				<!-- #social menu -->
			</div>
		</div><!-- .site-header--top -->

		<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'nsi' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'nsi' ); ?></a>


			<?php $walker = new Menu_With_Description; ?>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'walker' => $walker ) ); ?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
