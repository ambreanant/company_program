$(document).ready(function() {
	
	// Area Chart
	
  //   Morris.Area({
		// element: 'area-charts',
		// data: [
		// 	{ y: '2006', a: 100, b: 90 },
		// 	{ y: '2007', a: 75,  b: 65 },
		// 	{ y: '2008', a: 50,  b: 40 },
		// 	{ y: '2009', a: 75,  b: 65 },
		// 	{ y: '2010', a: 50,  b: 40 },
		// 	{ y: '2011', a: 75,  b: 65 },
		// 	{ y: '2012', a: 100, b: 90 }
		// ],
		// xkey: 'y',
		// ykeys: ['a', 'b'],
		// labels: ['Total Invoice', 'Pending Invoice'],
		// lineColors: ['#00c5fb','#0253cc'],
		// lineWidth: '3px',
		// resize: true,
		// redraw: true
  //   });

	// // Bar Chart
	
	// Morris.Bar({
	// 	element: 'bar-charts',
	// 	data: [
	// 		{ y: '2006', a: 100, b: 90 },
	// 		{ y: '2007', a: 75,  b: 65 },
	// 		{ y: '2008', a: 50,  b: 40 },
	// 		{ y: '2009', a: 75,  b: 65 },
	// 		{ y: '2010', a: 50,  b: 40 },
	// 		{ y: '2011', a: 75,  b: 65 },
	// 		{ y: '2012', a: 100, b: 90 }
	// 	],
	// 	xkey: 'y',
	// 	ykeys: ['a', 'b'],
	// 	labels: ['Total Income', 'Total Outcome'],
	// 	lineColors: ['#00c5fb','#0253cc'],
	// 	lineWidth: '3px',
	// 	barColors: ['#00c5fb','#0253cc'],
	// 	resize: true,
	// 	redraw: true
	// });

// 	//Bar stacked
// 	var data = [
//       { y: '2014', a: 50, b: 90},
//       { y: '2015', a: 65,  b: 75},
//       { y: '2016', a: 50,  b: 50},
//       { y: '2017', a: 75,  b: 60},
//       { y: '2018', a: 80,  b: 65},
//       { y: '2019', a: 90,  b: 70},
//       { y: '2020', a: 100, b: 75},
//       { y: '2021', a: 115, b: 75},
//       { y: '2022', a: 120, b: 85},
//       { y: '2023', a: 145, b: 85},
//       { y: '2024', a: 160, b: 95}
//     ],
//     config = {
//       data: data,
//       xkey: 'y',
//       ykeys: ['a', 'b'],
//       labels: ['Total Income', 'Total Outcome'],
//       fillOpacity: 0.6,
//       hideHover: 'auto',
//       behaveLikeLine: true,
//       resize: true,
//       pointFillColors:['#ffffff'],
//       pointStrokeColors: ['black'],
//       lineColors:['gray','red']
//   };
// config.element = 'stacked';
// config.stacked = true;
// Morris.Bar(config);

	
	// // Line Chart
	
	// Morris.Line({
	// 	element: 'line-charts',
	// 	data: [
	// 		{ y: '2006', a: 50, b: 90 },
	// 		{ y: '2007', a: 75,  b: 65 },
	// 		{ y: '2008', a: 50,  b: 40 },
	// 		{ y: '2009', a: 75,  b: 65 },
	// 		{ y: '2010', a: 50,  b: 40 },
	// 		{ y: '2011', a: 75,  b: 65 },
	// 		{ y: '2012', a: 100, b: 50 }
	// 	],
	// 	xkey: 'y',
	// 	ykeys: ['a', 'b'],
	// 	labels: ['Total Sales', 'Total Revenue'],
	// 	lineColors: ['#00c5fb','#0253cc'],
	// 	lineWidth: '3px',
	// 	resize: true,
	// 	redraw: true
	// });
	
	// // Donut Chart
		
	// Morris.Donut({
	// 	element: 'pie-charts',
	// 	colors: [
	// 		'#00c5fb',
	// 		'#0253cc',
	// 		'#80e3ff',
	// 		'#81b3fe'
	// 	],
	// 	data: [
	// 		{label: "Employees", value: 30},
	// 		{label: "Clients", value: 15},
	// 		{label: "Projects", value: 45},
	// 		{label: "Tasks", value: 10}
	// 	],
	// 	resize: true,
	// 	redraw: true
	// });
		
});