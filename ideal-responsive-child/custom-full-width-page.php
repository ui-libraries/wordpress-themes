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
 * @author         Ethan DeGross
 * @license        GNU General Public License v2 or later
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/full-width-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content-full" class="grid col-940">
	<h1 class="videoText"><span>Work with Ideal</span></h1>
	<a href="./#about"><img id="landing-page-arrowDown"src="https://dsps.lib.uiowa.edu/ideal/wp-content/uploads/sites/33/2017/03/whitearrow.png"></a>
	<div class="owl-carousel featured-jumbotron">
	 <div id="embed-wrapper">
	<iframe id="existing-workWithIdeal" width="100%" src="https://www.youtube.com/embed/mUBm3cg116U?controls=0&rel=0&autoplay=1&disablekb=1&loop=1&modestbranding=1&disablekb=1&enablejsapi=1" frameborder="0" allowfullscreen>" frameborder="0" allowfullscreen></iframe>
<div id="myVideo">
</div>
</div></div>

<script>
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubeIframeAPIReady() {
	player = new YT.Player('existing-workWithIdeal', {
		events: {
			'onStateChange':
					 function(e){
							 if (e.data === YT.PlayerState.ENDED) {
									 player.playVideo();
							 }
					 }
				 	}
	});
}
</script>


<!--
<script>
			var tag = document.createElement('script');
			tag.src = "https://www.youtube.com/iframe_api";
			var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

			var player;
			function onYouTubeIframeAPIReady() {
				player = new YT.Player('myVideo', {
					videoId: 'pwx8RzYfTxs',
					events: {
						'onStateChange':
								 function(e){
										 if (e.data === YT.PlayerState.ENDED) {
												 player.playVideo();
										 }
								 },
						'onReady': onPlayerReady
					},

					height: "85%",
					width: "65%",
					playerVars: {
						'controls': 0,
						'showinfo': 0,
						'rel': 0,
						'enablejsapi' : 1
						}
				});
			}

			function onPlayerReady(event) {
							//  event.target.setLoop(true);
							event.target.playVideo();
						}

</script>
-->
<a name="about" class="ideal-anchor-offset"><h2 class="seo-friendly">About</h2></a>
<div id="first-section">
	<div id="first-section-heading">
	<span>About</span>
</div>
<div id="first-section-text">
	<p><strong>Iowa Digital Engagement and Learning (IDEAL)</strong> works with instructors to make classroom innovation easier and to improve outcomes for students. <strong>IDEAL</strong> projects ask students to engage with communities beyond the classroom by using digital technologies and creating work that endures beyond the end of the semester.</p><p>Supported by the Provost’s Office and housed in the Rhetoric Department, <strong>IDEAL</strong> promotes hands-on learning through innovative assignments. <strong>IDEAL</strong> has a set of <a href="./projects/">projects</a> that can be integrated into an existing syllabus. These projects grow out of collaborations with such partners as the Iowa Initiative for Sustainable Communities to create podcasts of community leaders in Muscatine, the DIY History project in the University of Iowa's Libraries to digitally transcribe archival texts, and the Latham Science Engagement Initiative to allow undergraduate fellows in STEM fields an opportunity to hone their communication skills through individually-designed public engagement projects.</p>  <p><strong>IDEAL</strong> also works directly with instructors to design projects for their classrooms. Contact us at <strong>ideal@uiowa.edu</strong> to set up a consultation or visit 108 English Philosophy Building (EPB) to meet with one of our media tutors.</p>
</div>
</div>

<a name="projects" class="ideal-anchor-offset-2"><h2 class="seo-friendly">Projects</h2></a>
<div id="projects-section">
<?php
echo do_shortcode('[pods name="project" template="Projects list (standard)" where="project_syndication.slug=\'projects\'"]');
 ?>
</div>
<!--
<div id="second-section">
		<div id="first-row-projects" class="row">
				<div id="p1" class="projects"><a href="http://s-lib018.lib.uiowa.edu/ethan_ideal/projects">
					<div id="second-section-heading" class="section-headings">
						<span>Projects</span>
					</div>
				</a></div>
			<div id="p2" class="projects">	<a href="http://s-lib018.lib.uiowa.edu/ethan_ideal/projects#show-what-you-know">
				</a></div>
			<div id="p3" class="projects">	<a href="http://s-lib018.lib.uiowa.edu/ethan_ideal/projects#archives-alive">
				</a></div>
				<div id="p4" class="projects"><a href="http://s-lib018.lib.uiowa.edu/ethan_ideal/projects#iowa-narratives-project">
				</a></div>
		</div>
		<div id="second-row-projects" class="row">
				<div id="p5" class="projects"><a href="http://s-lib018.lib.uiowa.edu/ethan_ideal/projects#rhetoric-in-knowledge-communities">
				</a></div>
				<div id="p6" class="projects"><a href="http://s-lib018.lib.uiowa.edu/ethan_ideal/projects#latham-science-communication-project">
				</a></div>
				<div id="p7" class="projects"><a href="http://s-lib018.lib.uiowa.edu/ethan_ideal/projects#campus-culture-project">
				</a></div>
			<div id="p8" class="projects"><a href="http://s-lib018.lib.uiowa.edu/ethan_ideal/projects#information-literacy">
				</a></div>
		</div>
</div>
-->
<a name="tech-check-out" class="ideal-anchor-offset-2"><h2 class="seo-friendly">Tech Check Out</h2></a>
<div id="third-section">
	<div id="left-ts">
		<div id="large-media-header"><a href="http://checkout.uiowa.edu/">Media Tutoring & Equipment <span>Checkout</span></a></div>
		<p><strong>IDEAL</strong> circulates digital equipment for the development of media projects such as podcasts or video essays. Equipment is available to students and instructors at the University of Iowa.</p>
<ul>
	<li>Audio Recorders</li>
	<li>Video Recorders</li>
	<li>Microphones</li>
	<li>Tri-pods</li>
	<li>Headphones</li>
</ul>
<p>Visit the <strong>IDEAL</strong> <a href="http://checkout.uiowa.edu/">Checkout Center</a> for a full list of equipment available or to make a reservation.</p>
<h4>Media Tutoring and Consultations:</h4>
<p><strong>IDEAL</strong> media tutors are available to provide technological and production support inside and outside the classroom. Consultants can come to your class to help students with technology in the classroom. Tutoring is also available for students to get help outside of class. <strong>IDEAL</strong> provides guidance and support on the use of digital equipment, as well as for planning, production, and post-production work. Consultants can help with anything from making a better PowerPoint to editing a video to creating a website—if it involves composing with digital media, then <strong>IDEAL</strong> can help. Email us at <strong>ideal@uiowa.edu</strong> to set up a consultation or inquire about a classroom visit.</p><p><strong>IDEAL’s</strong> media tutors reside in 210 EPB. Tutoring hours of operation are 10:00-7:00 Monday-Thursday and 10:00-5:00 Friday.</p>
	</div>
	<div id="right-ts">
		<a href="http://checkout.uiowa.edu/"><div id="first-image-ts"></div></a>
		<a href="http://checkout.uiowa.edu/"><div id="second-image-ts"></div></a>
		<a href="http://checkout.uiowa.edu/"><div id="third-image-ts"></div></a>
	</div>
</div>
<a name="student-work" class="ideal-anchor-offset"><h2 class="seo-friendly">Student Work</h2></a>
<div id="fourth-section">
	<div id="fourth-section-heading" class="section-headings">
	<span>Featured Student Works</span>
</div>
<div id="left-fs">
<div id="studentwork-section">
<?php
echo do_shortcode('[pods name="slide" template="Slide (standard)" where="slidesyndication.slug=\'homepage-studentwork\'"]');
 ?>
 <a href="http://ir.uiowa.edu/ideal/"><div id="additional-works-image"></div></a>
</div>
	<h5 style="clear:both;float:left;"></h5>
	<div id="third-row-student-work" class="row">
		<p><strong>IDEAL</strong> projects are designed to engage students with the world beyond the classroom and have relevance beyond a single semester. To facilitate this, <strong>IDEAL</strong> encourages students to share their work publicly via the University Libraries’ Iowa Research Online. This repository holds more than 20,000 full text works from the University of Iowa’s faculty, students, and staff. Undergraduates have the opportunity to display their work alongside other scholarship in a permanent repository.</p>
		<p>Browse all <strong>IDEAL</strong> student works available in the <a href="http://ir.uiowa.edu/ideal/">University of Iowa’s research repository</a></p>
		<h4>Release Forms</h4>
		<ul>
		<li><a href="https://uiowa.qualtrics.com/jfe/preview/SV_3kNDLnbgLXfuinr">Student release form</a></li>
		<li><a href="./wp-content/uploads/sites/33/2017/01/IDEAL-INTERVIEWEE-PERMISSION-AND-RELEASE-FORM.pdf">Interviewee release form</a></li>	</div>
	</ul>
</div>
<div id="right-fs"> <!--Right Fourth Section-->
<img src="./wp-content/uploads/sites/33/2017/02/IDEAL_Website_Laptop_v2_08.png">
</div>
</div> <!-- end of the fourth section -->
<a name="collaborators-and-instructors" class="ideal-anchor-offset"><h2 class="seo-friendly">Collaborators and Instructors</h2></a>
<div id="fifth-section"><!--AKA the fifth element -->
	<div id="fifth-section-heading" class="section-headings">
	<a href="./people"<span>Collaborators &amp; Instructors</span></a>
</div>
<!--
<div id="first-row-collaborators" class="row">
	<img class="collaborators" src="http://s-lib018.lib.uiowa.edu/ethan_ideal/wp-content/uploads/sites/33/2016/12/placeHolder.png"/>
	<img class="collaborators" src="http://s-lib018.lib.uiowa.edu/ethan_ideal/wp-content/uploads/sites/33/2016/12/placeHolder.png"/>
	<img class="collaborators" src="http://s-lib018.lib.uiowa.edu/ethan_ideal/wp-content/uploads/sites/33/2016/12/placeHolder.png"/>
	<img class="collaborators" src="http://s-lib018.lib.uiowa.edu/ethan_ideal/wp-content/uploads/sites/33/2016/12/placeHolder.png"/>
</div>
<div id="second-row-collaborators" class="row">
	<img class="collaborators" src="http://s-lib018.lib.uiowa.edu/ethan_ideal/wp-content/uploads/sites/33/2016/12/placeHolder.png"/>
	<img class="collaborators" src="http://s-lib018.lib.uiowa.edu/ethan_ideal/wp-content/uploads/sites/33/2016/12/placeHolder.png"/>
	<img class="collaborators" src="http://s-lib018.lib.uiowa.edu/ethan_ideal/wp-content/uploads/sites/33/2016/12/placeHolder.png"/>
	<img class="collaborators" src="http://s-lib018.lib.uiowa.edu/ethan_ideal/wp-content/uploads/sites/33/2016/12/placeHolder.png"/>
</div>
-->
<div id="collaborators">
<?php
echo do_shortcode('[pods name="person" template="People list (with image)" where="person_syndication.slug=\'home-page\'" orderby="person_sort_order"]');
 ?>
 </div>

</div>
<a name="testimonials" class="ideal-anchor-offset-2"><h2 class="seo-friendly">Testimonials</h2></a>
<div id="sixth-section">
	<div id="sixth-section-heading">
		<div id="large-testimonial-header"><span>Testimonials</span></div>
</div>
<div id ="first-row-testimonials">
	<div id ="first-row-testimonials-text">
	<p>“No other experience I have had at this university has so challenged me to combine creativity, conceptual knowledge, and methods of practical application. … What is more, I have been encouraged to think about social justice and how my actions in the public sphere can either improve or exacerbate current problems. As a biology major, I think that these experiences are as valuable as they are unusual, and that they would not have been possible without the <strong>IDEAL</strong> initiative.”</p>
<h4>-George Murray, Class of 2016</h4>
</div>
<img id="testimonial-first-row-bubble" src="./wp-content/uploads/sites/33/2016/12/IDEAL_Website_Testimonial_07.png"/>
</div>

<div id="second-row-testimonials">
	<img src="./wp-content/uploads/sites/33/2016/12/IDEAL_Website_Testimonial_06.png"/>
	<div id ="second-row-testimonials-text">
<p>“My students expressed very positive feelings about the consultation overall. I do feel like the most powerful intervention was largely an emotional one, in that I was asking the students to do something with technology (a podcast using Audacity) that was unfamiliar to most of them. Knowing that they had a particular person in their corner with whom they could consult as needed allowed my students to get over a lot of initial anxiety and to dive into the project energetically. It was my impression that, with this energetic buy-in, not all that many students needed much direct help from [the tutors]. It was as if just know[ing] that they had someone there in case of trouble allowed them the freedom to experiment on their own, with generally positive results.</p>
<p>
I will add that the effect of the <strong>IDEAL</strong> staff's presence was similar for me--knowing that the staff was there in case of technical disaster allowed me to create and follow through on an assignment using a technology with which I have not had that much experience. I might have been reluctant to pursue this without <strong>IDEAL's</strong> backing, as it would have taken me a lot of hours to get to the level of technical expertise I would need to be able to be everyone's technical consultant (to say nothing of the hours such consultations could have taken if I had been the only provider). All in all, my students judged this a very successful assignment, as did I, and <strong>IDEAL's</strong> consultation was vital to that success.”</p>
<h4>-Perry Howell, Lecturer, Rhetoric Department</h4>
</div>
</div><!-- end of second row of the sixth section-->
</div><!-- end of sixth section-->
<a name="contact" class="ideal-anchor-offset-2"><h2 class="seo-friendly">Contact</h2></a>
<div id="seven-and-a-half-section">
	<div id="work-with-us">
		<div id="large-media-header" style="text-align:center; font-size:6em;"><span>Work with IDEAL</span></div>
<p><strong>IDEAL</strong> will help you create sustainable and appropriate project-based digital assignments for students and interested community partners. If you are interested in collaborating, email us to set up a meeting!</p>
	</div>
<div id="staff">
<?php
echo do_shortcode('[pods name="person" template="People list (with image)" where="person_syndication.slug=\'home-page-staff\'" orderby="person_sort_order"]');
 ?>
 </div>
</div>
<div id="seventh-section">
	<a href="mailto:ideal@uiowa.edu?Subject=Work%20with%20Ideal" target="_top"><div id="mail-image"></div></a>
	<div id="contact-text">
	<h2 class="contact-heading">Contact us!</h2>
	<span>ideal@uiowa.edu</span>
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
