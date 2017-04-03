<?php /* Template Name: test */ ?>
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
			<source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
			<source src="http://www.w3schools.com/html/mov_bbb.ogg" type="video/ogg">
			Your browser does not support HTML5 video.
		</video>
</div>



<script>
ga('create', 'UA-XXXXX-Y', 'auto');
ga(function(tracker) {
  // Gets the client ID of the default tracker.
  var clientId = tracker.get('clientId');
	console.log(clientId);
	localStorage.setItem('clientId', clientId);
	var test = localStorage.getItem('clientId');
	console.log(test);
  // Gets a reference to the window object of the destionation iframe.
  var frameWindow = document.getElementById('destination-frame').contentWindow;

  // Sends the client ID to the window inside the destination frame.
  frameWindow.postMessage('clientId', '*');
});


</script>
<iframe id="destination-frame" src="https://uiowa.qualtrics.com/SE/?SID=SV_db43Cf2479CI1IF"></iframe>

<script>

	$(document).ready(function() {
		// Initialize the plugin
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
	});


	setTimeout(function(){
  $('#my_popup').popup('hide')
}, 10000);
</script>


<?php get_footer(); ?>
