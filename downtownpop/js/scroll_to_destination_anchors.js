(function($) {
Drupal.behaviors.scrolltoanchors = {
  attach: function(context, settings) {
    $(document).ready(function(){
      function validateSelector(a) {
				// does the href value have a #something at the end
				var pattern = /#[a-z0-9A-Z-_]+/g;
        return pattern.test(a);


      }
      function scrollToDestination(a,b) {		
				console.log("a "+ a + " b " + b);
        if (a > b) {
          destination = b;
        } else {
          destination = a;
        }
        $('html,body').animate({ scrollTop: destination }, 700, 'swing');
      }
      $('a[href*="#"]', context).click(function(event) {
       
        var hrefValue = $(this).attr('href');
        //var strippedHref = hrefValue.replace('#','');
				var splitHref = hrefValue.split('#');


        var heightDifference = $(document).height() - $(window).height();


				console.log("height "+ heightDifference);


        if (validateSelector(hrefValue)) {


					 // have a url with a #something


					 if ($(this.hash).length > 0) {


						 // don't do browser default
             event.preventDefault();


						 //found ID of hash					 
							var linkOffset = $(this.hash).offset().top - 60;
							console.log("linkOffset1 "+ linkOffset);
							scrollToDestination(linkOffset, heightDifference);


          	} else if ($('a[name=' + splitHref[1] + ']').length > 0) {
    					
							// don't do browser default
              event.preventDefault();


							//found a name=""	
							var linkOffset = $('a[name=' + splitHref[1] + ']').offset().top - 60;
							console.log("linkOffset2 "+ linkOffset);
							scrollToDestination(linkOffset, heightDifference);
          	}


					// no anchor on current page found (link is probably broken or on another page)  so do browser default action


				}
      });
    });
  }
};
}(jQuery));