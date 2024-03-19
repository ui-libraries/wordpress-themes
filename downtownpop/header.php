
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">


<html lang="en" dir="ltr">

<head profile="http://www.w3.org/1999/xhtml/vocab">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Mobile -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="user-scalable=no; width=device-width; initial-scale=1; minimal-ui" />
  <meta name="mobile-web-app-capable" content="yes">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes" />
  <title><?php echo get_bloginfo(); ?></title>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css"/>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/mobile.css"/>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/tablet-desktop.css"/>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

  <script>jQuery(document).ready(function () { initialize(); });</script>
  
<!--Site Specific - Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-6RTZC1GSFQ"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-6RTZC1GSFQ'); </script>
<!--Combined Analytics - Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-DWD47TCY4T"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-DWD47TCY4T'); </script>

<style>
@font-face {
  font-family: 'headline';
       url('<?php echo get_bloginfo('stylesheet_directory'); ?>/fonts/headline/HEADOH_.ttf')  format('truetype'), /* Safari, Android, iOS */
	font-weight: normal;
	font-style: normal;
}

@font-face {
	font-family: 'icomoon';
	src:url('<?php echo get_bloginfo('stylesheet_directory'); ?>/fonts/icomoon/fonts/icomoon.eot?-ocs76f');
	src:url('<?php echo get_bloginfo('stylesheet_directory'); ?>/fonts/icomoon/fonts/icomoon.eot?#iefix-ocs76f') format('embedded-opentype'),
		url('<?php echo get_bloginfo('stylesheet_directory'); ?>/fonts/icomoon/fonts/icomoon.woff?-ocs76f') format('woff'),
		url('<?php echo get_bloginfo('stylesheet_directory'); ?>/fonts/icomoon/fonts/icomoon.ttf?-ocs76f') format('truetype'),
		url('<?php echo get_bloginfo('stylesheet_directory'); ?>/fonts/icomoon.svg?-ocs76f#icomoon') format('svg');
	font-weight: normal;
	font-style: normal;
}

</style>
<?php wp_head(); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDw3_P1gUhLBKZc60R4Y9DAsA9ct0EtTQQ"></script>

</head>
<!-- class="html not-front node-type-author navbar-is-static-top" -->
<body <?php body_class(); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
  </div>
<header id="navbar" role="banner" class="navbar navbar-static-top navbar-default">
  <div class="container-fluid">
		<div class="navbar-header">
		<!-- show back button is mobile -->

		  <button class="navbar-toggle pull-left back" onclick="goBack()">
		  <span class="sr-only">Go back</span>&#60;</button>

		  <!--spot for logo-->

		  <a class="name navbar-brand" href="<?php echo home_url('/'); ?>" title="Home"><?php echo get_bloginfo(); ?></a>

		  <!-- show title in nav bar if mobile -->

		  <h1 class="mobile-title"><?php echo get_bloginfo(); ?></h1>


		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>

		</div>

    <div class="navbar-collapse collapse">
			<nav role="navigation">

        <div class="menu-main-container">
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', array( 'container_class' => 'menu nav navbar-nav') ) ); ?>

		</div>

			</nav>

		</div>

  </div>
</header>

<!-- Hidden Search Bar -->
<div id="searchbar" class="clearfix">

  <?php get_search_form(); ?>

</div>

<script>
  $(function(){
  var $searchbar  = $('#searchbar');

  $('#searchtoggl').on('click', function(e){
    e.preventDefault();

    if($(this).attr('id') == 'searchtoggl') {


      $searchbar.slideToggle(300, function(){
        // callback after search bar animation
      });
    }
  });

  $('#searchform').submit(function(e){
    //e.preventDefault(); // stop form submission
  });
});

</script>
