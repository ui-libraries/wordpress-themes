<?php /* Template Name: 5PS */ ?>
<?php get_header(); ?>




<div class="page-full-width"><?php
	mh_newsdesk_before_page_content();
	while (have_posts()) : the_post();
		get_template_part('content', 'page');
		comments_template();
	endwhile; ?>
</div>


<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-1.8.2.min.js"></script>

<!-- Include jQuery Popup Overlay -->
<script src="https://cdn.rawgit.com/vast-engineering/jquery-popup-overlay/1.7.13/jquery.popupoverlay.js"></script>
<!-- Add content to the popup -->
<div id="my_popup">
	<video id="my-video">
			<source src="https://dsps.lib.uiowa.edu/videonews/wp-content/uploads/sites/21/2017/02/texting-with-social.m4v" type="video/mp4">
			Your browser does not support HTML5 video.
		</video>
</div>

<script>
//custom popup for PSA's, including timeout, and display only once per user
	$(document).ready(function() {
		if(localStorage.getItem('popState5PS') != 'shown'){

		$('#my_popup').popup({
				opacity:.9,
				transitiion: 'all 0.3s',
				autoopen: true,
				escape: false,
				blur:false,
				detach:true,
				onopen: function(){

					$('#my-video')[0].play()				}
		});
		localStorage.setItem('popState5PS','shown')
	} else {
		$('#my_popup').hide();
	}
		setTimeout(function(){
		$('#my_popup').popup('hide')
	}, 32500);
	});
</script>


<?php get_footer(); ?>
