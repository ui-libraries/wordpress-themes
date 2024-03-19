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
				
				echo do_shortcode('[pods name="story" template="single story" id="'.$id.'"]'); 



				endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .wrap -->

<?php get_footer(); ?>

