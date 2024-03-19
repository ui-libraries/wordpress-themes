<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post(); 
				
				$id = get_the_id();
				echo "<script src='".get_bloginfo('stylesheet_directory')."/js/mini_map.js'></script>";

				echo do_shortcode('[pods name="place" template="single place" id="'.$id.'"]'); 
				
			?>
			<legend class="panel-heading">
				<div class="panel-title fieldset-legend">Stories</div>
			</legend>
			
			<div class="panel-body">
				<fieldset  class="group-stories panel">
			
			<?php
				echo do_shortcode('[pods name="story" template="story on place" where="place_relation.ID='.$id.'" orderby="CAST(chapter.meta_value AS SIGNED)"]'); 
				
			?>
			
				</fieldset>
			</div>
			
			<?php


				endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .wrap -->

<?php get_footer(); ?>

