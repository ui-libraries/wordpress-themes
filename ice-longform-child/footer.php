<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Longform
 * @since Longform 1.0
 */
?>

		</div><!-- #main -->

		<div class="site-footer-wrapper">
			<div class="site-footer-container container">
				<footer id="colophon" class="site-footer row" role="contentinfo">
					<?php get_sidebar( 'footer' ); ?>
				</footer><!-- #colophon -->
			</div>
			<div class="site-info col-sm-12 col-md-12 col-lg-12">
				<div class="site-info-content">
					<div class="copyright">
						<?php echo get_theme_mod('longform_copyright', ''); ?> 
						<?php _e( 'Created by', 'longform' ); ?> <a href="https://cohhe.com/" target="_blank">Cohhe</a>. 
						<?php _e( 'Proudly powered by', 'longform' ); ?> <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'longform' ) ); ?>" target="_blank"><?php _e( 'WordPress', 'longform' ); ?></a>
					</div>
					<div class="footer-menu">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer',
									'menu_class'     => 'footer-menu',
									'depth'          => 1
								)
							);
						?>
					</div>
				</div>
				<?php
				$show_scroll_to_top = get_theme_mod('longform_scrolltotop', false);

				if ( $show_scroll_to_top ) {
				?>
					<a class="scroll-to-top" href="#"><?php _e( 'Top', 'longform' ); ?></a>
				<?php
				}
				?>
				<div class="clearfix"></div>
			</div><!-- .site-info -->
			<div class="clearfix"></div>
		</div>
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>

<!-- OSC Brand footer -->
		
<footer class="footer">
    <div class="footer__container footer__container--flex">
        <div class="footer__links footer__links--contact">

            <div class="logo logo--footer">
                <a href="https://www.uiowa.edu">
                    <div class="element-invisible">The University of Iowa</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="logo-icon" aria-labelledby="logo-footer" role="img" viewBox="0 0 311.6 90.2">
                        <path class="st0" d="M40 18.8h-7.3v52.4H40v19H0v-19h7.3V18.8H0V0h40V18.8z" />
                        <path class="st0" d="M93.8 90.2h-29c-10.5 0-17.4-6.9-17.4-18.2V18.2C47.4 7 54.4 0 64.8 0h29c10.5 0 17.4 7 17.4 18.2V72C111.2 83.2 104.2 90.2 93.8 90.2zM85.6 71.2V18.8H73v52.4H85.6z" />
                        <path class="st0" d="M122.6 18.8h-6.4V0h38v18.9H147l6.5 43.4L167 0h19.2l14.4 62.3 5.2-43.4h-6.6V0h37.5v18.9h-6.2l-11.3 71.4h-30.6l-11.8-53.2 -12.1 53.1h-29.4L122.6 18.8z" />
                        <path class="st0" d="M230.1 71.2h6.9L250.7 0h41l13.5 71.2h6.4v19H281l-2.9-22h-15.2l-2.7 22h-30L230.1 71.2 230.1 71.2zM276.5 51.7l-5.8-36.4 -6 36.4H276.5z" />
                        <image src="../../images/uiowa-primary.png">
                            <title id="logo-footer">University of Iowa</title>
                        </image>
                    </svg>
                </a>
            </div>

            <p>Iowa City, Iowa 52242<br>
                <a href="tel:319-335-3500"><i class="fas fa-phone"></i> 319-335-3500</a><br />
            </p>

            <div class="footer__links footer__links--icon">
                <nav role="navigation">
                    <ul class="menu">

                        <li class="menu-item">
                            <a href="https://uiowa.edu/"><i class="fab fa-facebook-square"></i><span class="link-text">Facebook</span></a>
                        </li>

                        <li class="menu-item">
                            <a href="https://uiowa.edu/"><i class="fab fa-twitter-square"></i><span class="link-text">Twitter</span></a>
                        </li>

                        <li class="menu-item">
                            <a href="https://uiowa.edu/"><i class="fab fa-instagram"></i><span class="link-text">Instagram</span></a>
                        </li>

                        <li class="menu-item">
                            <a href="https://uiowa.edu/"><i class="fab fa-snapchat"></i><span class="link-text">Snapchat</span></a>
                        </li>

                        <li class="menu-item">
                            <a href="https://uiowa.edu/"><i class="fab fa-youtube"></i><span class="link-text">Youtube</span></a>
                        </li>

                        <li class="menu-item">
                            <a href="https://uiowa.edu/"><i class="fab fa-linkedin"></i><span class="link-text">LinkedIn</span></a>
                        </li>

                        <li class="menu-item">
                            <a href="https://uiowa.edu/"><i class="fab fa-pinterest"></i><span class="link-text">Pinterest</span></a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="socket">
                <ul class="socket__menu">
                    <li>© 2021 The University of Iowa</li>
                    <li>
                        <a href="https://uiowa.edu/privacy">Privacy Notice</a>
                    </li>
                    <li>
                        <a href="https://opsmanual.uiowa.edu/community-policies/nondiscrimination-statement">Nondiscrimination Statement</a>
                    </li>
                    <li>
                        <a href="https://uiowa.edu/accessibility">Accessibility</a>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</footer>
		<!-- End OSC Brand -->
</html>