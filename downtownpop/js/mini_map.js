	//single point maps for Place and Story

  //set base variables
  var MapStart = new google.maps.LatLng(40.724347, -73.997720);

  var map;

  function initialize() {
    var mapOptions = {
      zoom: 15,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: MapStart
    };

	var bounds = new google.maps.LatLngBounds();

    map = new google.maps.Map(document.getElementById("map"),
            mapOptions);

	//set marker		
	var latitude = $('.marker_lat').text();
	var longitude = $('.marker_long').text();
	
	var marker = new google.maps.Marker({
	position: new google.maps.LatLng(latitude, longitude),
	map: map,
	});

	//move the map to center on the marker
	var latLong = marker.getPosition();
	map.setCenter(latLong);



  }



