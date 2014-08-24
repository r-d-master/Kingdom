<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage Corporate WPExplorer Theme
 * @since Corporate 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="author" content="webvizion.co.uk">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php if ( get_theme_mod('wpex_custom_favicon') ) { ?>
		<link rel="shortcut icon" href="<?php echo get_theme_mod('wpex_custom_favicon'); ?>" />
	<?php } ?>
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="wrap" class="clr container">
		<div id="header-wrap" class="clr" style="
    background: url(http://anilahealthcare.co.uk/wp-content/uploads/2014/08/header1.jpg);
    margin-right: 3%;
">
<a href="http://anilahealthcare.co.uk/wp-content/uploads/2013/04/Full-List-of-Training-Courses.pdf" id="courses"></a>
			<header id="header" class="site-header clr" role="banner">
				<?php
				// Outputs the site logo
				// See functions/logo.php
				wpex_logo(); ?>
				<aside id="header-search" class="clr">
					<!--<?php get_search_form(); ?>
					<span class="fa fa-phone">&nbsp;&nbsp; <?php if (function_exists('contact_detail')) { contact_detail('phone'); } ?></span><br/>
					<span class="fa fa-envelope">&nbsp;&nbsp; <?php if (function_exists('contact_detail')) { contact_detail('email'); } ?></span><br/>
					<span class="fa fa-home">&nbsp;&nbsp; <?php if (function_exists('contact_detail')) { contact_detail('address'); } ?></span>-->
				</aside><!-- #header-search -->
			</header><!-- #header -->
		</div><!-- #header-wrap -->

		<div id="sidr-close"><a href="#sidr-close" class="toggle-sidr-close"></a></div>
		<div id="site-navigation-wrap">
			<a href="#sidr-main" id="navigation-toggle"><span class="fa fa-bars"></span><?php echo __( 'Menu', 'wpex' ); ?></a>
			<nav id="site-navigation" class="navigation main-navigation clr" role="navigation">
				<?php
				// Display main menu
				wp_nav_menu( array(
					'theme_location'	=> 'main_menu',
					'sort_column'		=> 'menu_order',
					'menu_class'		=> 'dropdown-menu sf-menu',
					'fallback_cb'		=> false
				) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- #site-navigation-wrap -->
		
		<div id="main" class="site-main clr">