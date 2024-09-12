<?php
/**
 * The Header template file
 */ ?>
<!DOCTYPE html>
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">	
	
	<!--Site Specific - Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZKC4KDYHWD"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-ZKC4KDYHWD'); </script>
	<!--Combined Analytics - Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-DWD47TCY4T"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-DWD47TCY4T'); </script>
	
	<?php wp_head(); ?>
</head>
    <body <?php body_class(); ?>>
       <!--header start-->
        <div class="overlay-nav">
            <header>
                <?php $contact_phone_check = get_theme_mod('contact_telephone_setting');
						$contact_email_check = get_theme_mod( 'contact_email_setting' );
						$facebook_check = get_theme_mod('facebook_setting');
						$twitter_check = get_theme_mod( 'twitter_setting' );
						$rss_check = get_theme_mod( 'rss_setting' );
						$pinterest_check = get_theme_mod( 'pinterest_setting' );
						$youtube_check = get_theme_mod( 'youtube_setting' );
                 if(!empty($facebook_check) || !empty($twitter_check) || !empty($rss_check) || !empty($pinterest_check) || !empty($youtube_check)|| !empty($contact_phone_check)|| !empty($contact_email_check)) { ?>
                <div class="col-md-12 top-header">
                    <div class="container less-padding">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 location-part">
							<?php if(!empty($contact_phone_check)) { ?>
                                <p><i class="fa fa-phone"></i><?php echo esc_attr($contact_phone_check); ?></p><?php } ?>
                               <?php if(!empty($contact_email_check)) { ?>
                                <p><i class="fa fa-envelope"></i><?php echo esc_attr($contact_email_check); ?></p><?php } ?>
                            </div>
                            <div class="col-md-6 col-sm-6 social-part">
                                <ul>
                                   	<?php if(!empty($facebook_check)) { ?>
									<li > <a href="<?php echo esc_url($facebook_check); ?>" > <i class="fa fa-facebook"></i> </a> </li>
								<?php }
								if(!empty($twitter_check)) { ?>
									<li> <a href="<?php echo esc_url($twitter_check); ?>" > <i class="fa fa-twitter"></i> </a> </li>
								<?php }
								if(!empty($youtube_check)) { ?>
									<li> <a href="<?php esc_url($youtube_check); ?>"> <i class="fa fa-youtube"></i> </a> </li>
								<?php }
								if(!empty($rss_check)) {  ?>
									<li> <a href="<?php echo esc_url($rss_check); ?>"> <i class="fa fa-rss"></i> </a> </li>
								<?php }
								if(!empty($pinterest_check)) {  ?>
									<li> <a href="<?php echo  esc_url($pinterest_check); ?>"> <i class="fa fa-pinterest"></i> </a></li>
								<?php } ?>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
               <!--<div class="blur-slider"></div>-->
                <div class="bottom-header col-md-12">
					<div id="red-line-header"></div>
                    <div class="container less-padding ">
                        <div class="logo-section">
                          <?php if(has_custom_logo()){
   		                   		the_custom_logo();
						}  
							if (display_header_text()) { ?>		  
                                  <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<h2 class="site-title"><?php bloginfo( 'name' ); ?></h2>
								<span class="site-description"><?php bloginfo( 'description' ); ?></span>
							</a>
							<?php } ?>
						</div>
					<?php
					if (has_nav_menu('primary')) {
						$eminent_defaults = array(
						'theme_location' => 'primary',
						'container' => 'nav',
						'container_class' => 'header-navigation ',
						'echo' => true,
						'items_wrap' => '<ul id="%1$s" class="%2$s" >%3$s</ul>',
						'depth' => 0,
					);
						wp_nav_menu($eminent_defaults);
					}
					if (get_header_image()) { ?>
                <div class="custom-header-img">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="<?php the_title_attribute(); ?>">
                    </a>
                </div>
                <?php } ?>
                <div class="menu-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
	</header>
</div>
<!--header end-->