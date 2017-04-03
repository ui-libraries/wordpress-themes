<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Full Content Template
 *
Template Name:  people (no sidebar)
 *
 * @file           people.php
 * @package        Responsive
 * @author         Ethan DeGross
 * @license        GNU General Public License v2 or later
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/full-width-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content-full" class="grid col-940" >
<h1>People</h1>
	<div id="people">
		<h3 class="people-header">Collaborators</h3>
		<div id="people-collaborator-section">
	<?php
	echo do_shortcode('[pods name="person" template="People list (with image)" where="person_syndication.slug=\'people-page-collaborator\'" orderby="person_last_name"]');
	 ?>
 </div>
 <h3 class="people-header">Instructors</h3>
 <div id="people-instructor-section">
	 <?php
	 echo do_shortcode('[pods name="person" limit="-1" template="People list (with image)" where="person_syndication.slug=\'people-page-instructors\'" orderby="person_last_name"]');
		?>
	</div>
	 </div>


	<?php if ( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'loop-header', get_post_type() ); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>

				<?php get_template_part( 'post-meta', get_post_type() ); ?>

				<div class="post-entry">
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

<?php get_footer(); ?>
