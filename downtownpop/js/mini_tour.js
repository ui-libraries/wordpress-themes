//multipoint unlinked/nopopup tour view for writer pages

  //set base variables
  var MapStart = new google.maps.LatLng(40.724347, -73.997720);

  var map;

  function initialize() {
    var mapOptions = {
      zoom: 13,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: MapStart
    };

	var bounds = new google.maps.LatLngBounds();

    map = new google.maps.Map(document.getElementById("map"),
            mapOptions);

	//set markers
	//foreach here to get all points.
	$("#map_list ul li").each(function() {
		var latitude = $(this).children(".marker_lat").text();
		var longitude = $(this).children(".marker_long").text();
		var anchor = $(this).children(".anchor").text();
		console.log(anchor);
		var marker = new google.maps.Marker({
		position: new google.maps.LatLng(latitude, longitude),
		map: map,
		url: anchor,
		});
		bounds.extend(marker.position);
		google.maps.event.addListener(marker, 'click', function() {
    window.location.href = this.url;
});
	});
	
	

	//adjust map to fit all markers




  }



