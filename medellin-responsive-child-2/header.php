<?php
/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

?>
	<!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
        crossorigin="anonymous">
		</script>
		
		<!--Site Specific - Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-XHH0YCQTLJ"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-XHH0YCQTLJ'); </script>
		<!--Combined Analytics - Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-DWD47TCY4T"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-DWD47TCY4T'); </script>
		
		<?php wp_head(); ?>
		
	</head>

<body <?php body_class(); ?>>

<?php responsive_container(); // before container hook ?>
  	
<div id="container" class="hfeed">

<?php responsive_header(); // before header hook ?>
	<div class="skip-container cf">
		<a class="skip-link screen-reader-text focusable" href="#content"><?php _e( '&darr; Skip to Main Content', 'responsive' ); ?></a>
	</div><!-- .skip-container -->
	<div id="header_section">
	<div id="header" role="banner">
		<div class="medellin-header">
			<a href="https://medellin.lib.uiowa.edu/" rel="home">
				<img alt="Medellin After Escobar" src="https://dsps.lib.uiowa.edu/medellin/wp-content/uploads/sites/69/2019/09/MedellinAfterEscobar_Logo.png" width="600" srcset="https://dsps.lib.uiowa.edu/medellin/wp-content/uploads/sites/69/2019/09/MedellinAfterEscobar_Logo.png 1777w, https://dsps.lib.uiowa.edu/medellin/wp-content/uploads/sites/69/2019/09/MedellinAfterEscobar_Logo-300x85.png 300w, https://dsps.lib.uiowa.edu/medellin/wp-content/uploads/sites/69/2019/09/MedellinAfterEscobar_Logo-768x219.png 768w, https://dsps.lib.uiowa.edu/medellin/wp-content/uploads/sites/69/2019/09/MedellinAfterEscobar_Logo-1024x292.png 1024w" sizes="100vw">
			</a>
		</div>
		<?php wp_nav_menu( array(
			'container'       => 'div',
			'container_class' => 'main-nav',
			'fallback_cb'     => 'responsive_fallback_menu',
			'theme_location'  => 'header-menu'
		) ); ?>
		<?php responsive_header_top(); // before header content hook ?>

		<?php if ( has_nav_menu( 'top-menu', 'responsive' ) ) {
			wp_nav_menu( array(
				'container'      => '',
				'fallback_cb'    => false,
				'menu_class'     => 'top-menu',
				'theme_location' => 'top-menu'
			) );
		} ?>

		<?php responsive_in_header(); // header hook ?>

		<?php if ( get_header_image() != '' ) : ?>

		<div id="content-outer">
		<div id="logo">
				<a href="<?php echo esc_url(home_url( '/' )); ?>"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php esc_attr(bloginfo( 'name' )); ?>"/></a>
		</div><!-- end of #logo -->
		</div>	

		<?php endif; // header image was removed ?>

		<?php if ( !get_header_image() ) : ?>
		<div id="content-outer">
			<div id="logo">
				<span class="site-name"><a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<span class="site-description"><?php bloginfo( 'description' ); ?></span>
			</div><!-- end of #logo -->
		</div>
		<?php endif; // header image was removed (again) ?>
		
		<?php get_sidebar( 'top' ); ?>


		<?php if ( has_nav_menu( 'sub-header-menu', 'responsive' ) ) {
			wp_nav_menu( array(
				'container'      => 'div',
				'container_class' => 'sub-nav',
				'menu_class'     => 'sub-header-menu',
				'theme_location' => 'sub-header-menu'
			) );
		} ?>

		<?php responsive_header_bottom(); // after header content hook ?>

	</div><!-- end of #header -->
	</div>
<?php responsive_header_end(); // after header container hook ?>

<?php responsive_wrapper(); // before wrapper container hook ?>

<?php 
if ( isset($responsive_options['site_layout_option']) && ($responsive_options['site_layout_option'] == 'full-width-layout') && (!( is_home() || is_front_page() ))) {
?>
	  <div id="content-outer" >
<?php } ?>	  

	<div id="wrapper" class="clearfix">
<?php responsive_wrapper_top(); // before wrapper content hook ?>
<?php responsive_in_wrapper(); // wrapper hook ?>
