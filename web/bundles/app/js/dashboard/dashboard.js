/*
Name: 			Dashboard - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version: 	1.5.2
*/

(function($) {

	'use strict';

	$('#salesSelector').themePluginMultiSelect().on('change', function() {
		var rel = $(this).val();
		$('#salesSelectorItems .chart').removeClass('chart-active').addClass('chart-hidden');
		$('#salesSelectorItems .chart[data-sales-rel="' + rel + '"]').addClass('chart-active').removeClass('chart-hidden');
	});

	$('#salesSelector').trigger('change');

	$('#salesSelectorWrapper').addClass('ready');

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