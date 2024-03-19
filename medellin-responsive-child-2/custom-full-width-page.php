<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Full Content Template
 *
Template Name:  Custom Full Width Page (no sidebar)
 *
 * @file           custom-full-width-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/full-width-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>
<div id="content-outer">

<!-- 
Beginning of image hotspot from 
https://www.jqueryscript.net/other/jQuery-Plugin-Responsive-Image-Hotspot.html 
-->


<div id="hotspotImg" class="responsive-hotspot-wrap">

<img src="https://dsps.lib.uiowa.edu/medellin/wp-content/uploads/sites/69/2021/08/MetroMap_Redesign_v1-e1629302563533.png" data-width="1000" data-height="969" class="img-responsive">

    <div class="hot-spot" x="" y="" style="top: 5.6%; left: 45%; width: 4%; height: 4%;">
      <a href="https://medellin.lib.uiowa.edu/metro-stations/caribe/"><div class="circle"></div></a>
      <div class="tooltip">
        <div class="img-row">
            <!-- <img src="1.jpg"> -->
        </div>
        <div class="text-row">
          <h4>Title 1</h4>
          <p>More Description</p>
        </div>
      </div>
    </div>

    <div class="hot-spot" x="" y="" style="top: 17.6%; left: 58.2%; width: 4%; height: 4%;">
	<a href="https://medellin.lib.uiowa.edu/#"><div class="circle"></div></a>
      <div class="tooltip">
        <div class="img-row">
            <!-- <img src="2.jpg"> -->
        </div>
        <div class="text-row">
          <h4>Title 2</h4>
          <p>More Description</p>
        </div>
      </div>
    </div>

	<div class="hot-spot" x="" y="" style="top: 38.8%; left: 64.9%; width: 4%; height: 4%;">
	<a href="https://medellin.lib.uiowa.edu/metro-stations/prado/"><div class="circle"></div></a>
      <div class="tooltip">
        <div class="img-row">
            <!-- <img src="2.jpg"> -->
        </div>
        <div class="text-row">
          <h4>Title 2</h4>
          <p>More Description</p>
        </div>
      </div>
    </div>

	<div class="hot-spot" x="" y="" style="top: 66.8%; left: 1.55%; width: 4%; height: 4%;">
	<a href="https://medellin.lib.uiowa.edu/metro-stations/#"><div class="circle"></div></a>
      <div class="tooltip">
        <div class="img-row">
            <!-- <img src="2.jpg"> -->
        </div>
        <div class="text-row">
          <h4>Title 2</h4>
          <p>More Description</p>
        </div>
      </div>
    </div>

	<div class="hot-spot" x="" y="" style="top: 66.8%; left: 32.2%; width: 4%; height: 4%;">
	<a href="https://medellin.lib.uiowa.edu/metro-stations/estadio/"><div class="circle"></div></a>
      <div class="tooltip">
        <div class="img-row">
            <!-- <img src="2.jpg"> -->
        </div>
        <div class="text-row">
          <h4>Title 2</h4>
          <p>More Description</p>
        </div>
      </div>
    </div>

	<div class="hot-spot" x="" y="" style="top: 76.47058823529412%; left: 64.8%; width: 4%; height: 4%;">
	<a href="https://medellin.lib.uiowa.edu/metro-stations/alpujarra/"><div class="circle"></div></a>
      <div class="tooltip">
        <div class="img-row">
            <!-- <img src="2.jpg"> -->
        </div>
        <div class="text-row">
          <h4>Title 2</h4>
          <p>More Description</p>
        </div>
      </div>
    </div>

	<div class="hot-spot" x="" y="" style="top: 89.2%; left: 64.8%; width: 4%; height: 4%;">
	<a href="https://medellin.lib.uiowa.edu/metro-stations/exposiciones/"><div class="circle"></div></a>
      <div class="tooltip">
        <div class="img-row">
            <!-- <img src="2.jpg"> -->
        </div>
        <div class="text-row">
          <h4>Title 2</h4>
          <p>More Description</p>
        </div>
      </div>
    </div>

</div><!-- end of hotspot -->




<div id="content-full" class="grid col-940">

	<?php if ( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'loop-header', get_post_type() ); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>

				<?php get_template_part( 'post-meta', get_post_type() ); ?>

				<div class="post-entry">
					<?php responsive_page_featured_image(); ?>
					<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>
					<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
				</div>
				<!-- end of .post-entry -->

				<?php get_template_part( 'post-data', get_post_type() ); ?>

				<?php responsive_entry_bottom(); ?>
			</div><!-- end of #post-<?php the_ID(); ?> -->
			<?php responsive_entry_after(); ?>

			<?php responsive_comments_before(); ?>
			<?php comments_template( '', true ); ?>
			<?php responsive_comments_after(); ?>

		<?php
		endwhile;

		get_template_part( 'loop-nav', get_post_type() );

	else :

		get_template_part( 'loop-no-posts', get_post_type() );

	endif;
	?>

</div><!-- end of #content-full -->
</div>
<?php get_footer(); ?>