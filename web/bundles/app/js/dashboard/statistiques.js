/*
Name: 			Dashboard - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version: 	1.5.2
*/

(function($) {

	'use strict';
	/*
	 Chartist: Line Chart - With Area
	 */
	new Chartist.Line('#ChartistLineChartWithArea', {
		labels: [1, 2, 3, 4, 5, 6, 7, 8],
		series: [
			{
				name: 'Fibonacci sequence',
				data: [1, 2, 3, 5, 8, 13]
			}
		]
	}, {
		showArea: true,
		axisY: {
			onlyInteger: true
		}
	});

	var $chart = $('#ChartistLineChartWithArea');

	var $toolTip = $chart
		.append('<div class="tooltip"></div>')
		.find('.tooltip')
		.hide();

	$chart.on('mouseenter', '.ct-point', function() {
		var $point = $(this),
			value = $point.attr('ct:value'),
			seriesName = $point.parent().attr('ct:series-name');
		$toolTip.html(seriesName + '<br>' + value).show();
	});

	$chart.on('mouseleave', '.ct-point', function() {
		$toolTip.hide();
	});

	$chart.on('mousemove', function(event) {
		$toolTip.css({
			left: (event.offsetX || event.originalEvent.layerX) - $toolTip.width() / 2 - 10,
			top: (event.offsetY || event.originalEvent.layerY) - $toolTip.height() - 40
		});
	});


	$.each(morrisBarData, function( index, value ) {
		Morris.Bar({
			resize: true,
			element: 'morrisBar'+index.substr(1,index.length,index),
			data: value,
			xkey: 'y',
			ykeys: ['atelier', 'tuto','webinair'],
			labels: ['Ateliers', 'Tutos', 'Webinaire'],
			hideHover: true,
			barColors: ['#e36159','#0088cc','#2baab1'],
			postUnits: ' €'
		});
	});

}).apply(this, [jQuery]);