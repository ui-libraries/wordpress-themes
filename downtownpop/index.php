
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
<link type="text/css" rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/bootstrap.min.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/mobile.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/tablet-desktop.css"/>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
  <script>jQuery(document).ready(function () { initialize(); });</script>
  
<style>
<!--@font-face {
  font-family: 'headline';
       src:url('<?php //echo get_bloginfo('stylesheet_directory'); ?>/fonts/headline/HEADOH_.TTF')  format('truetype'); /* Safari, Android, iOS */
	font-weight: normal;
	font-style: normal;
}

@font-face {
	font-family: 'icomoon';
	src:url('<?php echo bloginfo('template_directory'); ?>/fonts/icomoon/fonts/icomoon.eot?-ocs76f');
	src:url('<?php echo bloginfo('template_directory'); ?>/fonts/icomoon/fonts/icomoon.eot?#iefix-ocs76f') format('embedded-opentype'),
		url('<?php echo bloginfo('template_directory'); ?>/fonts/icomoon/fonts/icomoon.woff?-ocs76f') format('woff'),
		url('<?php echo bloginfo('template_directory'); ?>/fonts/icomoon/fonts/icomoon.ttf?-ocs76f') format('truetype'),
		url('<?php echo bloginfo('template_directory'); ?>/fonts/icomoon/fonts/icomoon.svg?-ocs76f#icomoon') format('svg');
	font-weight: normal;
	font-style: normal;
}-->
</style>
<?php wp_head(); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDw3_P1gUhLBKZc60R4Y9DAsA9ct0EtTQQ"></script>

</head>

<body class="html front node-type-author navbar-is-static-top" >
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
  </div>


<header id="navbar" role="banner" class="navbar navbar-static-top navbar-default">
  <div class="container-fluid">
		<div class="navbar-header">
		<!-- show back button is mobile -->

		  		  <!--<a class="logo navbar-btn pull-left" href="/cityoflit/" title="Home">
			<img src="<?php echo bloginfo('template_directory'); ?>/images/city-of-lit-white-placeicon.png" alt="Home" />
		  </a>-->
<a class="name navbar-brand" href="<?php bloginfo( ‘url’ ); ?>" title="<?php bloginfo( ‘name’ ); ?>"><?php bloginfo( ‘name’ ); ?></a>







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

			<?php
				$args = array('menu_class' => 'menu nav navbar-nav');
				wp_nav_menu($args);
			?>

			</nav>

		</div>

  </div>
</header>


<div class="splash-logo">
<img src="<?php echo bloginfo('template_directory'); ?>/images/architecture-buildings-business-771881.jpg"/>
</div>
<div class="scrim"></div>

	<div class="splash-layer">
		<div class="splash-layer-content">
			<div class="splash-logo"></div>
			<div class="splash-group">
				<h1>Explore</h1>
				<span class="splash-desc">[Put subtitle text here]</span>
					<div class="splash-buttons">
						<a href="people">People</a>
						<a href="tour">Map</a>
					</div>
			</div>

		</div>

	</div>


<script>
	function goBack() {
    window.history.back();
}
</script>

</body>
</html>
