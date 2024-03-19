<?php
/**
 * Template Name: hubsubmissions_page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content-cover' );
		}
	}

	?>

	!--hi--//

	<div class="hubsubmissions-page-single">
	<div class="hubsubmissions-page-main-icon">
	[if story_or_teaching_material="Teaching Material"]
	<h2><strong><img src="https://dsps.lib.uiowa.edu/healthstoryhub/wp-content/uploads/sites/97/2023/05/Teaching-Material-icon-general.jpg" alt="teaching material icon" style="width:142px;height:142px">
</strong></h2>
[else]
<img src="https://dsps.lib.uiowa.edu/healthstoryhub/wp-content/uploads/sites/97/2023/05/Health-Story-icon-general.jpg" alt="health story icon" style="width:142px;height:142px">
[/if]	
		<br /><br />
		<img src="" />
	</div>
	<div class="post_content">
	<p><strong><i>{@story_title}{@title_if_teaching_material}</i></strong></p>
		<a href="https://healthstoryhub.lib.uiowa.edu/submissions/{@slug}"><p>See Full Hub Listing</p></a>	
	
		<p><strong>Summary:</strong>{@summary}</p>
	
	</div>
</div>


	!--bye--//

</main><!-- #site-content -->


<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
