<?php $mh_newsdesk_options = mh_newsdesk_theme_options(); ?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>


<script>

  var test1 = window.location.href.split("=")[1];

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78745955-2', 'auto');
  ga('send', 'pageview');

  ga('set', 'userId', test1);

  var clientId = 'SOME_DIMENSION_VALUE';
  ga('set', 'dimension1', clientId);


</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KVGVBW');</script>
<!-- End Google Tag Manager -->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVGVBW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php if (has_nav_menu('header_nav') || has_nav_menu('social_nav')) { ?>
	<div class="header-top">
		<div class="wrapper-inner clearfix">
			<?php if (has_nav_menu('header_nav')) { ?>
				<nav class="header-nav clearfix">
					<?php wp_nav_menu(array('theme_location' => 'header_nav', 'fallback_cb' => '')); ?>
				</nav>
			<?php } ?>
			<?php if (has_nav_menu('social_nav')) { ?>
				<nav class="social-nav clearfix">
					<?php wp_nav_menu(array('theme_location' => 'social_nav', 'link_before' => '<span class="fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-mh-social fa-stack-1x"></i></span><span class="screen-reader-text">', 'link_after' => '</span>')); ?>
				</nav>
			<?php } ?>
		</div>
	</div>
<?php } ?>
<div id="mh-wrapper">
<header class="mh-header">
	<div class="header-wrap clearfix">
		<?php is_active_sidebar('header-ad') ? $logo_class = ' header-logo' : $logo_class = ' header-logo-full'; ?>
		<div class="mh-col mh-1-3<?php echo $logo_class; ?>">
			<?php mh_newsdesk_logo(); ?>
		</div>
		<?php dynamic_sidebar('header-ad'); ?>
	</div>
	<div class="header-menu clearfix">
		<nav class="main-nav clearfix">
			<?php wp_nav_menu(array('theme_location' => 'main_nav')); ?>
		</nav>
		<div class="header-sub clearfix">
			<?php if ($mh_newsdesk_options['show_ticker']) { ?>
				<?php get_template_part('content', 'news-ticker'); ?>
			<?php } ?>
			<aside class="mh-col mh-1-3 header-search">
				<?php get_search_form(); ?>
			</aside>
		</div>
	</div>
</header>
