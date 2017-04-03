<?php
/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive
 * @author         Ethan DeGross
 * @license        GNU General Public License v2 or later
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
	<html class="no-js ie9" <?php language_attributes(); ?>>
	 <![endif]-->
	<!--[if gt IE 9]>

	<!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<link rel="stylesheet" href="./wp-content/scripts/owl-carousel-2/assets/owl.carousel.css">
        <!-- andrew -->
		<script type='text/javascript' src='./wp-content/scripts/owl-carousel-2/owl.carousel.min.js'></script>
		<script type='text/javascript' src='./wp-content/scripts/custom/owl.carousel.2.js'></script>
		<script type='text/javascript' src='./wp-content/scripts/custom/main.js'></script>
		<link href="https://fonts.googleapis.com/css?family=Lobster|Roboto:400,700" rel="stylesheet">


		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/manifest.json">
		<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="theme-color" content="#ffffff">
		<meta name="msapplication-config" content="<?php echo get_stylesheet_directory_uri(); ?>/browserconfig.xml"/>




		<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/all-ie-only.css" />

		<![endif]-->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-61639511-12', 'auto');
		  ga('send', 'pageview');

		</script>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">

<?php responsive_header(); // before header hook ?>
	<div class="skip-container cf">
		<a class="skip-link screen-reader-text focusable" href="#content"><?php _e( '&darr; Skip to Main Content', 'responsive' ); ?></a>
	</div><!-- .skip-container -->
	<div id="header">

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

			<div id="logo">
				<a href="<?php echo home_url( '/' ); ?>"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
			</div><!-- end of #logo -->

		<?php endif; // header image was removed ?>

		<?php if ( !get_header_image() ) : ?>

			<div id="logo">
				<span class="site-name"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<span class="site-description"><?php bloginfo( 'description' ); ?></span>
			</div><!-- end of #logo -->

		<?php endif; // header image was removed (again) ?>

		<?php get_sidebar( 'top' ); ?>
		<?php wp_nav_menu( array(
			'container'       => 'div',
			'container_class' => 'main-nav',
			'fallback_cb'     => 'responsive_fallback_menu',
			'theme_location'  => 'header-menu'
		) ); ?>

		<?php if ( has_nav_menu( 'sub-header-menu', 'responsive' ) ) {
			wp_nav_menu( array(
				'container'      => '',
				'menu_class'     => 'sub-header-menu',
				'theme_location' => 'sub-header-menu'
			) );
		} ?>

		<?php responsive_header_bottom(); // after header content hook ?>

	</div><!-- end of #header -->
<?php responsive_header_end(); // after header container hook ?>

<?php responsive_wrapper(); // before wrapper container hook ?>
	<div id="wrapper" class="clearfix">
<?php responsive_wrapper_top(); // before wrapper content hook ?>
<?php responsive_in_wrapper(); // wrapper hook ?>
<script>//custom scripts
$(document).ready(function(){




	//more scripts below

	$('div.jumbotron-item a').removeAttr("href");//removes the link from the jumbotron

	$('#mail-image').mouseover(function(){
		$('this').css({'display':'none'});
	})


 $('#large-media-header a').mouseover(function(){
	 $('#large-media-header span').toggleClass('rollover-color');
 })
 $('#large-media-header a').mouseout(function(){
	$('#large-media-header span').toggleClass('rollover-color');
 })

$('.ideal-project-wrapper').hover(function(){
    $(this).find('.project-image').css({'filter':'alpha(opacity=50)', 'zoom':'1', 'opacity':'.6'});
    }, function(){
    $(this).find('.project-image').css({'filter':'alpha(opacity=50)', 'zoom':'1', 'opacity':'1'});
});


$('.ideal-project-wrapper:nth-child(1)').hover(function(){
	$(this).find('.project-info, .short-description p').css({'color':'yellow'});
	}, function(){
	$(this).find('.project-info, .short-description p').css({'color':'white'});

})

//for homepage collaborators and instructors rollover, need to differentiate between the two, and make the image appear over the existing image, rather than replace.
$('#fifth-section .person-image.Collaborator img').hover(function(){
	originalImage = $(this).attr('src');
	$(this).attr('src', './wp-content/uploads/sites/33/2017/02/IDEAL_Website_Collaborator_09NEW.png')
}, function(){
	$(this).attr('src', originalImage)
})

$('#fifth-section .person-image.Instructor img').hover(function(){
	originalImage = $(this).attr('src');
	$(this).attr('src', './wp-content/uploads/sites/33/2017/02/IDEAL_Website_Instructor_08NEW.png')
}, function(){
	$(this).attr('src', originalImage)
})

$('.page-id-4 .person-image.Director img').hover(function(){
	originalImage = $(this).attr('src');
	$(this).attr('src', './wp-content/uploads/sites/33/2017/03/directorNew.png')
}, function(){
	$(this).attr('src', originalImage)
})
$('.person-image.operationsDirector img').hover(function(){
	originalImage = $(this).attr('src');
	$(this).attr('src', './wp-content/uploads/sites/33/2017/03/operationDirectorNew.png')
}, function(){
	$(this).attr('src', originalImage)
})
$('.person-image.projectCoordinator img').hover(function(){
	originalImage = $(this).attr('src');
	$(this).attr('src', './wp-content/uploads/sites/33/2017/03/projectCoordinatorNew.png')
}, function(){
	$(this).attr('src', originalImage)
})
 //combo of Sam and Ethan's header customizations below
 function idealHeaderScroll() {
 	var ideal_height = $(window).scrollTop();
 	if(ideal_height === 0){//if the user scrolls back to the top of the page
 	$('#header img').stop().animate({width : '50%'}, 50);
	$('#header').stop().animate({height : '120px', backgroundColor : 'transparent'}, 50);
 }

  else if(ideal_height > 0){//if there is any scrolling
 	 $('#header img').stop().animate({width : '40%'}, 300);
 	 $('#header').stop().animate({height : '120px', backgroundColor : 'black'}, 300);
  }
 }

 var width = $(window).width(), height = $(window).height(); //detemines size of screen on load
 if (width >= 1100) {
 //code below stops onScroll from firing on every pixel scrolled, and makes it check every 300 milleseconds "scrolled" true/false
 var didScroll = false;
 window.onscroll = doThisStuffOnScroll;

 function doThisStuffOnScroll() {
     didScroll = true;
 }

 setInterval(function() {
     if(didScroll) {
         didScroll = false;
 				idealHeaderScroll();
     }
 }, 1000);
 }//end of if screen width greater than _____
 //end of header customizations


});//end document ready

</script>
