<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?>
		<link rel="stylesheet" type="text/css" href="../../src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="../../src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/media/css/responsive.dataTables.css">
</head>
<body>
	<?php include('header.php'); ?>
	<?php include('sidebar.php'); ?>
			<div class="main-container">
			<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
						<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
						<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue mb-30">Payroll</h4>
						</div>
						
					</div>
					<form>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Select Region</label>
									<select class="selectpicker form-control" data-style="btn-outline-primary">
										<optgroup label="Select Region" data-max-options="2">
											<option>East Region</option>
											<option>West Region</option>
											<option>North Region</option>
											<option>South Region</option>
											<option>Central</option>
										</optgroup>
									</select>
								</div>
							</div>
						<div class="form-group col-md-6" style="margin-top:30px">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit" class="btn btn-primary" name="view" value="View">View</button>
                            </div>
                        </div>
						</div>

						
					</form>
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="pd-20">
                                    <!-- basic table  Start -->
                                    <div class="clearfix mb-20">
                                       <div class="pull-left">
                                          <h4 class="text-blue">Payroll Details</h4>
                                       </div>
                                    </div>
                                    <table class="table data-table-export">
                                       <thead>
                                          <tr>
                                             <th scope="col">#</th>
                                             <th scope="col">Employee Name</th>
                                             <th scope="col">Account number</th>
                                             <th scope="col">Ifsc code</th>
                                             <th scope="col">Bank Name</th>
                                             <th scope="col">Phone Number</th>
                                             <th scope="col">Salary</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <th scope="row">1</th>
                                             <td>Keerthi</td>
                                             <td>345456654646</td>
                                             <td>KKBK0007889</td>
                                             <td>Kotak Mahindra bank</td>
                                             <td>9874522212</td>
                                             <td>10000</td>
                                          </tr>
                                          <tr>
                                             <th scope="row">2</th>
                                             <td>Keerthi</td>
                                             <td>345456654646</td>
                                             <td>KKBK0007889</td>
                                             <td>Kotak Mahindra bank</td>
                                             <td>9874522212</td>
                                             <td>10000</td>
                                          </tr>
                                          <tr>
                                             <th scope="row">3</th>
                                              <td>Keerthi</td>
                                             <td>345456654646</td>
                                             <td>KKBK0007889</td>
                                             <td>Kotak Mahindra bank</td>
                                             <td>9874522212</td>
                                             <td>10000</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <!-- basic table  End -->
                                 </div>
					
				</div>
				
				
	<?php include('footer.php'); ?>
	</div>
	</div>
	<?php include('script.php'); ?>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
	
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