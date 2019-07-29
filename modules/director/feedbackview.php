<!DOCTYPE html>
<html>
   <head>
      <?php include('head.php'); ?>
	  <link rel="stylesheet" type="text/css" href="../../src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="../../src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/media/css/responsive.dataTables.css">
   </head>
   								
								
<style>
.checked {
color: orange;
}
</style>
   <body>
      <?php include('header.php'); ?>
      <?php include('sidebar.php'); ?>
      <div class="main-container">
         <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
            <div class="row clearfix">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
                  <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
				   <div class="row">
                     <h4 class="weight-500 mb-20 text-primary">
                     East Region Team
                     <h4>
					
					 <div class="col-md-12 col-sm-12">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

							</div>
							</div>
                     <div class="notification-list mx-h-450 customscroll">
                        <ul>
                           <li>
                              <a href="#">
                                 <img src="../../vendors/images/photo2.jpg" alt="">
                                 <h3 class="clearfix">Naga Prakash</h3>
                                 <p>Manager-Business Development</p>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <img src="../../vendors/images/img.jpg" alt="">
                                 <h3 class="clearfix">Rita Vasantha</h3>
                                 <p>Manager-HR</p>
                              </a>
                           </li>
						  
                        </ul>
						 <a href="#" class="card-link text-primary mt-4 font-14">View Team Members</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- basic table  Start -->
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
               <div class="clearfix mb-20">
                  <div class="pull-left">
                     <h4 class="weight-500 text-blue">Overview</h4>
                  </div>
               </div>
			   <div class="row">
					<div class="col-md-6 col-sm-12">
					<form>
					<div class="form-group">
					<label>Select Month</label>
					<input class="form-control month-picker" placeholder="Select Month" type="text">
					</div>

					</form>
					</div>
					</div>
			<div class="row table-responsive">
               <table class="table data-table">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Good Things</th>
                        <th scope="col">Bad Things</th>
                        <th scope="col">Rating</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <th scope="row">1</th>
                        <td>Supportive</td>
                        <td>xxx</td>
                        <td><span class="badge badge-primary">8</span></td>
                     </tr>
                     <tr>
                        <th scope="row">2</th>
                        <td>Supportive </td>
                        <td>xxx</td>
                        <td><span class="badge badge-primary">8</span></td>
                     </tr>
                    
                     <tr>
                        <th scope="row">3</th>
                        <td>Supportive </td>
                        <td>xxx</td>
                        <td><span class="badge badge-primary">8</span></td>
                     </tr>
                  </tbody>
               </table>
			   </div>
            </div>
            <!-- basic table  End -->
            <?php include('footer.php'); ?>
         </div>
      </div>
      <?php include('script.php'); ?>
      <script src="src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
      <script src="src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
      <script type="text/javascript">
         Highcharts.chart('areaspline-chart', {
         	chart: {
         		type: 'areaspline'
         	},
         	title: {
         		text: ''
         	},
         	legend: {
         		layout: 'vertical',
         		align: 'left',
         		verticalAlign: 'top',
         		x: 70,
         		y: 20,
         		floating: true,
         		borderWidth: 1,
         		backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
         	},
         	xAxis: {
         		categories: [
         			'Monday',
         			'Tuesday',
         			'Wednesday',
         			'Thursday',
         			'Friday',
         			'Saturday',
         			'Sunday'
         		],
         		plotBands: [{
         			from: 4.5,
         			to: 6.5,
         		}],
         		gridLineDashStyle: 'longdash',
                       gridLineWidth: 1,
                       crosshair: true
         	},
         	yAxis: {
         		title: {
         			text: ''
         		},
         		gridLineDashStyle: 'longdash',
         	},
         	tooltip: {
         		shared: true,
         		valueSuffix: ' units'
         	},
         	credits: {
         		enabled: false
         	},
         	plotOptions: {
         		areaspline: {
         			fillOpacity: 0.6
         		}
         	},
         	series: [{
         		name: 'John',
         		data: [0, 5, 8, 6, 3, 10, 8],
         		color: '#f5956c'
         	}, {
         		name: 'Jane',
         		data: [0, 3, 6, 3, 7, 5, 9],
         		color: '#f56767'
         	}, {
         		name: 'Johnny',
         		data: [0, 2, 5, 3, 2, 4, 0],
         		color: '#a683eb'
         	}, {
         		name: 'Daniel',
         		data: [0, 4, 7, 3, 0, 7, 4],
         		color: '#41ccba'
         	}]
         });
         
         
         // Device Usage chart
         Highcharts.chart('device-usage', {
         	chart: {
         		type: 'pie'
         	},
         	title: {
         		text: ''
         	},
         	subtitle: {
         		text: ''
         	},
         	credits: {
         		enabled: false
         	},
         	plotOptions: {
         		series: {
         			dataLabels: {
         				enabled: false,
         				format: '{point.name}: {point.y:.1f}%'
         			}
         		},
         		pie: {
         			innerSize: 127,
         			depth: 45
         		}
         	},
         
         	tooltip: {
         		headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
         		pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
         	},
         	series: [{
         		name: 'Brands',
         		colorByPoint: true,
         		data: [{
         			name: 'IE',
         			y: 10,
         			color: '#ecc72f'
         		}, {
         			name: 'Chrome',
         			y: 40,
         			color: '#46be8a'
         		}, {
         			name: 'Firefox',
         			y: 30,
         			color: '#f2a654'
         		}, {
         			name: 'Safari',
         			y: 10,
         			color: '#62a8ea'
         		}, {
         			name: 'Opera',
         			y: 10,
         			color: '#e14e50'
         		}]
         	}]
         });
         
         // gauge chart
         Highcharts.chart('ram', {
         
         	chart: {
         		type: 'gauge',
         		plotBackgroundColor: null,
         		plotBackgroundImage: null,
         		plotBorderWidth: 0,
         		plotShadow: false
         	},
         	title: {
         		text: ''
         	},
         	credits: {
         		enabled: false
         	},
         	pane: {
         		startAngle: -150,
         		endAngle: 150,
         		background: [{
         			borderWidth: 0,
         			outerRadius: '109%'
         		}, {
         			borderWidth: 0,
         			outerRadius: '107%'
         		}, {
         		}, {
         			backgroundColor: '#fff',
         			borderWidth: 0,
         			outerRadius: '105%',
         			innerRadius: '103%'
         		}]
         	},
         
         	yAxis: {
         		min: 0,
         		max: 200,
         
         		minorTickInterval: 'auto',
         		minorTickWidth: 1,
         		minorTickLength: 10,
         		minorTickPosition: 'inside',
         		minorTickColor: '#666',
         
         		tickPixelInterval: 30,
         		tickWidth: 2,
         		tickPosition: 'inside',
         		tickLength: 10,
         		tickColor: '#666',
         		labels: {
         			step: 2,
         			rotation: 'auto'
         		},
         		title: {
         			text: 'RAM'
         		},
         		plotBands: [{
         			from: 0,
         			to: 120,
         			color: '#55BF3B'
         		}, {
         			from: 120,
         			to: 160,
         			color: '#DDDF0D'
         		}, {
         			from: 160,
         			to: 200,
         			color: '#DF5353'
         		}]
         	},
         
         	series: [{
         		name: 'Speed',
         		data: [80],
         		tooltip: {
         			valueSuffix: '%'
         		}
         	}]
         });
         Highcharts.chart('cpu', {
         
         	chart: {
         		type: 'gauge',
         		plotBackgroundColor: null,
         		plotBackgroundImage: null,
         		plotBorderWidth: 0,
         		plotShadow: false
         	},
         	title: {
         		text: ''
         	},
         	credits: {
         		enabled: false
         	},
         	pane: {
         		startAngle: -150,
         		endAngle: 150,
         		background: [{
         			borderWidth: 0,
         			outerRadius: '109%'
         		}, {
         			borderWidth: 0,
         			outerRadius: '107%'
         		}, {
         		}, {
         			backgroundColor: '#fff',
         			borderWidth: 0,
         			outerRadius: '105%',
         			innerRadius: '103%'
         		}]
         	},
         
         	yAxis: {
         		min: 0,
         		max: 200,
         
         		minorTickInterval: 'auto',
         		minorTickWidth: 1,
         		minorTickLength: 10,
         		minorTickPosition: 'inside',
         		minorTickColor: '#666',
         
         		tickPixelInterval: 30,
         		tickWidth: 2,
         		tickPosition: 'inside',
         		tickLength: 10,
         		tickColor: '#666',
         		labels: {
         			step: 2,
         			rotation: 'auto'
         		},
         		title: {
         			text: 'CPU'
         		},
         		plotBands: [{
         			from: 0,
         			to: 120,
         			color: '#55BF3B'
         		}, {
         			from: 120,
         			to: 160,
         			color: '#DDDF0D'
         		}, {
         			from: 160,
         			to: 200,
         			color: '#DF5353'
         		}]
         	},
         
         	series: [{
         		name: 'Speed',
         		data: [120],
         		tooltip: {
         			valueSuffix: ' %'
         		}
         	}]
         });
      </script>
	  
	    <script src="../../src/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="../../src/plugins/datatables/media/js/dataTables.bootstrap4.js"></script>
	<script src="../../src/plugins/datatables/media/js/dataTables.responsive.js"></script>
	<script src="../../src/plugins/datatables/media/js/responsive.bootstrap4.js"></script>
	<!-- buttons for Export datatable -->
	<script src="../../src/plugins/datatables/media/js/button/dataTables.buttons.js"></script>
	<script src="../../src/plugins/datatables/media/js/button/buttons.bootstrap4.js"></script>
	<script src="../../src/plugins/datatables/media/js/button/buttons.print.js"></script>
	<script src="../../src/plugins/datatables/media/js/button/buttons.html5.js"></script>
	<script src="../../src/plugins/datatables/media/js/button/buttons.flash.js"></script>
	<script src="../../src/plugins/datatables/media/js/button/pdfmake.min.js"></script>
	<script src="../../src/plugins/datatables/media/js/button/vfs_fonts.js"></script>
	<script>
		$('document').ready(function(){
			$('.data-table').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END of TOTAL_ entries",
					searchPlaceholder: "Search"
				},
			});
			$('.data-table-export').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END of TOTAL_ entries",
					searchPlaceholder: "Search"
				},
				dom: 'Bfrtip',
				buttons: [
				'copy', 'csv', 'pdf', 'print'
				]
			});
			var table = $('.select-row').DataTable();
			$('.select-row tbody').on('click', 'tr', function () {
				if ($(this).hasClass('selected')) {
					$(this).removeClass('selected');
				}
				else {
					table.$('tr.selected').removeClass('selected');
					$(this).addClass('selected');
				}
			});
			var multipletable = $('.multiple-select-row').DataTable();
			$('.multiple-select-row tbody').on('click', 'tr', function () {
				$(this).toggleClass('selected');
			});
		});
	</script>
	  
   </body>
</html>