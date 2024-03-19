

  //set base variables
  var MapStart = new google.maps.LatLng(41.664723,-91.534548);

  var markers;
  var map;
    var infowindow = new google.maps.InfoWindow({
		maxWidth: 650});
	var selectedMarker;

  function initialize() {
    markers = new Array();
    var mapOptions = {
      zoom: 15,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: MapStart,
	  mapTypeControl: false,
    fullscreenControl: false, 
	styles:[
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
 
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  }
]
    };

	var bounds = new google.maps.LatLngBounds();

    map = new google.maps.Map(document.getElementById("map"),
            mapOptions);



//initialize lightbox

$(document).ready(function(){

   google.maps.event.addListener(infowindow, 'domready', function() {



		 $("a[rel^='lightframe']").click(function(){
		    Lightbox.start(this, true, true, true, true);
			// Direct call instead of trigger
		    return false;
	     });


	});
});



//get all view li results.
    $("#map_list ul li").each(function(index) {

        //for each one, create and place a marker.
        var marker = new google.maps.Marker({
        position: new google.maps.LatLng($(this).children(".marker_long").text(), $(this).children(".marker_lat").text()),
		map: map,
		icon: "https://mt.google.com/vt/icon?psize=20&font=fonts/Roboto-Regular.ttf&color=ff330000&name=icons/spotlight/spotlight-waypoint-b.png&ax=44&ay=48&scale=1&text=%E2%80%A2",
        //animation: google.maps.Animation.DROP,
        title: $(this).children(".marker_title").text(),
        brief: $("div.infoWindow",this).html(),
		id: $(this).children(".marker_id").text(),
        });

        //shift the map to fit all the markers.
		//extend the bounds to include each marker's position
        bounds.extend(marker.position);

        google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(marker.brief);
    //open the window when selected
		infowindow.open(map, marker);
		marker.setZIndex(9999);

			//when a marker is clicked on, match it to its marker and scroll to there.
			//ADD .current TO LI ON MARKER CLICK
			var markerId = marker.id;
			var current = document.getElementById(markerId);
			//scroll to marker.id

			//add class .current
			$("li.current").removeClass("current");
			$(current).addClass("current");

			$("#map_list").animate({ scrollTop: $(".current").position() .top },'1000');


			//Set icon

			if (selectedMarker) {
				selectedMarker.setIcon("https://mt.google.com/vt/icon?psize=20&font=fonts/Roboto-Regular.ttf&color=ff330000&name=icons/spotlight/spotlight-waypoint-b.png&ax=44&ay=48&scale=1&text=%E2%80%A2");
			}
			marker.setIcon("https://mt.google.com/vt/icon?psize=20&font=fonts/Roboto-Regular.ttf&color=ff330000&name=icons/spotlight/spotlight-waypoint-a.png&ax=44&ay=48&scale=1&text=%E2%80%A2");
			selectedMarker = marker;
			infowindow.open(map,marker);



        });


        markers.push(marker);




    });

	var selectFirstItem = map.addListener('bounds_changed', function() {
    // 3 seconds after the center of the map has changed, pan back to the
    // marker.
		$("#map_list ul li:first-child").click();

	 });

	map.fitBounds(bounds);

	window.setTimeout(function() {
      google.maps.event.removeListener(selectFirstItem);
    }, 1000);
  }

//function break

$(document).ready(function(){


  $("#map_list ul li").click(function(){



        marker = markers[this.id];
        markerContent = $("div.infoWindow",this).html();
        varLong = $("div.marker_long",this).html();
        varLat = $("div.marker_lat",this).html();
		currentPosition = new google.maps.LatLng(varLong, varLat);
    map.setZoom(16);
        map.panTo(currentPosition);
        infowindow.setContent(markerContent);
		infowindow.position=currentPosition;
        infowindow.open(map,marker);


		// add a class
		$("li.current").removeClass("current selected");
		$(this).addClass('current selected');

		// trigger click to Lightbox Frame
		//$(this).find('a.list-link')[0].click();
		//$("#lightboxFrame").fadeIn(1000);



	 if (selectedMarker) {
            selectedMarker.setIcon("https://mt.google.com/vt/icon?psize=20&font=fonts/Roboto-Regular.ttf&color=ff330000&name=icons/spotlight/spotlight-waypoint-b.png&ax=44&ay=48&scale=1&text=%E2%80%A2");
        }
      marker.setIcon("https://mt.google.com/vt/icon?psize=20&font=fonts/Roboto-Regular.ttf&color=ff330000&name=icons/spotlight/spotlight-waypoint-a.png&ax=44&ay=48&scale=1&text=%E2%80%A2");
        selectedMarker = marker;

  });





});




$().ready(function () {

      $("#map_list li").each(function(n) {
            $(this).attr("id", "" + n);
      });





});
