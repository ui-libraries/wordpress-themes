	
	//sizing and arrangement
	console.log("timeslider loaded!")
	var container = {'width':800, 'height':350, 'padding':20};
	var plot = {'width':400, 'height':250, 'aisle':100}
	var width = 700;
	var height = 300;
	var margin = {'top':50, 'side':10, 'bottom':30};
	
	var startYear = 1921;
	var endYear = 2019;
	
	//play button vars
	
	var playButton = d3.select("#play-button");
	var moving = false;
	
	//time slider
	var slider = d3.sliderHorizontal()
		.min(startYear)
		.max(endYear)
		.step(2)
		.ticks(0)
		.width(container.width-300)
		.displayValue(false)
		.on('onchange', val => { 	//redraw the plot with new filter when the time slider moves.
			updatePlot(val);
			d3.select("#currentValue").text(val);
			});
		
	d3.select("#slider")
		.append("svg")
		.attr("width", container.width)
		.attr("height", 100)
		.append('g')
		.attr('transform', 'translate(30,30)')
		.call(slider);
		
	d3.select("#man").append("svg").attr("width", 20).attr("height",20).append("circle").attr("cx",10).attr('cy',10).attr('r',10).attr('fill','silver');
	d3.select("#dem").append("svg").attr("width", 20).attr("height",20).append("circle").attr("cx",10).attr('cy',10).attr('r',10).attr('fill',' #4b7888 ');
	d3.select("#gop").append("svg").attr("width", 20).attr("height",20).append("circle").attr("cx",10).attr('cy',10).attr('r',10).attr('fill','#7b2413');
	
	
	
	
	//plot scaffolding
  
  	var housePlot = d3.select("#house").append("svg").attr("width", plot.width).attr("height", plot.height).attr("id", "house-container");
	var houseGroup = housePlot.append("g").attr("width", plot.width).attr("height", plot.height).attr("id", "houseGroup").attr('transform', 'translate(0, 50)');
	var senatePlot = d3.select("#senate").append("svg").attr("width", plot.width).attr("height", plot.height).attr("id", "senate-container");
	var senateGroup = senatePlot.append("g").attr("width", plot.width).attr("height", plot.height).attr("id", "senateGroup").attr('transform', 'translate(0, 50)');

	var circlePadding = 30
		chamberPadding = 20
		displayRows = 10
		radius = 10;
		
	var senate;	
	var house;	
	

	//load data and call plotter
	d3.csv("/hardwon-data/senate.csv").then(function(senateData) {
	d3.csv("/hardwon-data/house.csv").then(function(houseData) {
		senate = senateData;
		house = houseData;
		
		//set initial state as filtered on the first year in the range and draw plot
		var initSenate = filterData(senate, startYear);
		var initHouse = filterData(house, startYear);
		
		drawPlot(initSenate, senateGroup);
		drawPlot(initHouse, houseGroup);
		
		playButton.on("click", function() {
			var button = d3.select(this);
				if (button.text() == "Pause") {
					moving = false;
					console.log(moving);
					clearInterval(timer);
					button.text("Play");
				} else {
					moving = true;
					console.log(moving);
					timer = setInterval(step, 500);
					button.text("Pause");
				}
		});
				
											 
	});
	}); //end main loop


	function filterData(data, year) {
		return _.sortBy(_.sortBy(_.filter(data, {"SessionStartYear":year.toString()}), 'Party'), 'Gender');
	}

	/* fxn drawPlot
	*/
	function drawPlot(data, group) {

	
		var circles = group.selectAll("circle")
			.data(data)
			.enter()
			.append("circle")
				.attr("cx", function (d, i) { return Math.floor(i/displayRows) * circlePadding + chamberPadding; })
				.attr("cy", function (d, i) { return Math.floor(i%displayRows * circlePadding); }) 			
				.attr("r", function (d) { return radius; })
				.attr("fill", function (d) { if (d.Gender == "M")
												return "silver";
											 else if (d.Party == "Democrat") return " #4b7888 ";
											 else return "#7b2413"; });
		
		//Names lists
		var senatewomen = _.filter(data, {'Gender': 'F', 'Chamber' : 'Senate'});
		d3.select('ul#senatenames')
			.selectAll('name')
			.data(senatewomen)
			.enter()
			.append('li')
				.attr('class', 'name')
				.text(function(d) { return d.Name + ', ' + d.HomeCounty; });
				
		var housewomen = _.filter(data, {'Gender': 'F', 'Chamber' : 'House'});
		d3.select('ul#housenames')
			.selectAll('name')
			.data(housewomen)
			.enter()
			.append('li')
				.attr('class', 'name')
				.text(function(d) { return d.Name + ', ' + d.HomeCounty; });
				

	
	}
	
	//fxn update plot on change
	function updatePlot(year) {
		senateGroup.selectAll("circle").remove();
		houseGroup.selectAll("circle").remove();
		d3.selectAll(".name").remove();
		var updatedSenate = filterData(senate, year);
		var updatedHouse = filterData(house, year);
		drawPlot(updatedSenate, senateGroup, "#senatenames");
		drawPlot(updatedHouse, houseGroup, "#housenames");
		
	}
	
	//move slider on play
	function step() {
		let currentYear = slider.value();
		var newYear;
		if (currentYear >= endYear) {
			newYear = startYear;
		} else {
			newYear = currentYear + 2;
		}
		slider.value(newYear);
		d3.select('#currentValue').text(newYear);
		updatePlot(newYear);
	
	}

