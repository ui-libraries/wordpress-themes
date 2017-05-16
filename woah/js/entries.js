let isMap = false
let csv_list = []

if (jQuery("#" + "woahmap").length !== 0) {
	isMap = true
	var map = new google.maps.Map(document.getElementById('woahmap'), {
	  zoom: 3,
	  center: {lat: 41.6627, lng:-91.5549}
	})        
}

//looks for an empty div on the page with a class of woahdata
if (jQuery("." + "woahdata").length !== 0) {
 	
 	//this api call expires on june 10, 2017
	var url = 'http://woah.lib.uiowa.edu/gravityformsapi/forms/1/entries/?api_key=132c7caf8a&signature=fOMr7WeICw9SEuWbaBclbk3hNW4%3D&expires=1497074736&paging[page_size]=500'
    jQuery.getJSON(url, function(result) {

    	results = result.response.entries
    	
    	//counter for row labels
    	var i = 1    	

      	_.forEach(results, function(person) {
      		//only load this code on the map page
	      	if (person.is_starred == 1 && isMap == true) {
	      		//numbers inside the person objects refer to Gravity Form element ids
	      		let location = {}
	      		location.lat = _.toNumber(person['4'])
	      		location.lng = _.toNumber(person['5'])
	      		
	      		//firtname lastname
	      		//position
	      		//affiliation
	      		//research interests
	      		var contentString = '<strong>' + person["12.3"] + ' ' + person["12.6"] + '</strong><br />' + person["3"] + '<br />' + person["6"] + '<br />' + person["7"]

		        var infowindow = new google.maps.InfoWindow({
		          content: contentString
		        })

	      		var marker = new google.maps.Marker({
		          position: location,
		          map: map
		        })

		        marker.addListener('click', function() {
		          infowindow.open(map, marker);
		        })

		        //otherwise load in data on any other page with the woahdata class		      	
	      	} else if (person.is_starred) {
	      		var csv_person = {}
	      		csv_person.firstname = person["12.3"]
	      		csv_person.lastname = person["12.6"]
	      		csv_person.position = person["3"]
	      		csv_person.affiliation = person["6"]
	      		csv_person.latitude = person["4"]
	      		csv_person.longitude = person["5"]
	      		csv_person.interests = person["7"]
	      		csv_person.loc = person["8"]
	      		csv_person.pleiades = person["9"]
	      		csv_person.website = person["10"]
	      		csv_person.publications = person["11"]

	      		csv_list.push(csv_person)

	      		jQuery('#entry-table').append('<tr class="entryrow"><th>'+i+'</th><td data-title="First Name">'+person["12.3"]+'</td><td data-title="Last Name">'+person["12.6"]+'</td><td data-title="Position">'+person["3"]+'</td><td data-title="Affiliation">'+person["6"]+'</td><td data-title="Latitude">'+person["4"]+'</td><td data-title="Longitude">'+person["5"]+'</td><td data-title="Research Interests">'+person["7"]+'</td><td data-title="LOC ids">'+person["8"]+'</td><td data-title="Pleiades ids">'+person["9"]+'</td><td data-title="Website">'+person["10"]+'</td><td data-title="Publications">'+person["11"]+'</td></tr>')
		      	
		      	i++
	      	}

      	})
    })   

}

//button with id of download in the wp page
jQuery("#download").click(function() {
	var csv_string = JSON.stringify(csv_list)
	
    var json = jQuery.parseJSON(csv_string)
    var csv = JSON2CSV(json)

    var uri = 'data:text/csv;charset=utf-8,' + escape(csv)
    var downloadLink = document.getElementById("download")
	downloadLink.href = uri
	downloadLink.download = "woah_list.csv"
})

function JSON2CSV(objArray) {
	var labels = true
	var quotes = true
    var array = typeof objArray != 'object' ? JSON.parse(objArray) : objArray

    var str = ''
    var line = ''

    if (labels) {
        var head = array[0]
        if (quotes) {
            for (var index in array[0]) {
                var value = index + ""
                line += '"' + value.replace(/"/g, '""') + '",'
            }
        } else {
            for (var index in array[0]) {
                line += index + ','
            }
        }

        line = line.slice(0, -1)
        str += line + '\r\n'
    }

    for (var i = 0; i < array.length; i++) {
        var line = ''

        if (quotes) {
            for (var index in array[i]) {
                var value = array[i][index] + ""
                line += '"' + value.replace(/"/g, '""') + '",'
            }
        } else {
            for (var index in array[i]) {
                line += array[i][index] + ','
            }
        }

        line = line.slice(0, -1)
        str += line + '\r\n'
    }

    return str    
}
