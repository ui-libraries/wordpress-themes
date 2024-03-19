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
				echo "<script src='".get_bloginfo('stylesheet_directory')."/js/mini_tour.js'></script>";
				echo do_shortcode('[pods name="person" template="single person" id="'.$id.'"]'); 
			?>
				
				<div class="view-stories">
				
				<?php
				
					echo do_shortcode('[pods name="story" template="story on author" where="related_person.ID='.$id.'" orderby="CAST(chapter.meta_value AS SIGNED)"]');
				
				?>
				
				
				</div>
				
			<?php	

				endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .wrap -->

<?php get_footer();
