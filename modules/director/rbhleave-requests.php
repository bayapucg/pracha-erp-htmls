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
			<div class="min-height-200px">
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30 pl-5">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue">RBH Leave Requests</h4>
						</div>
					</div>
					
							<section>
                                <div class="row  table-responsive">
                                       <table class="table table-bordered">
										<thead>
											<tr>
												<th>Region</th>
												<th>Employee ID</th>
												<th>Name</th>
												<th>Department</th>
												<th>Leave Type </th>
												<th>Start Date & End Date </th>
												<th>Action </th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>South</td>
												<td>Pt0001</td>
												<td>Naga prakash</td>
												<td>RBH</td>
												<td>Casual</td>
												<td>30-07-2019 & 31-07-2019</td>
												<td>
													<button class="btn btn-sm btn-success">Accept</button>
													<button class="btn btn-sm btn-danger">Reject</button>
												</td>
											</tr>
											<tr>
												<td>Central</td>
												<td>Pt0002</td>
												<td>Naga prakash</td>
												<td>RBH</td>
												<td>Comp off</td>
												<td>1-08-2019 & 04-08-2019</td>
												<td>
													<button class="btn btn-sm btn-success">Accept</button>
													<button class="btn btn-sm btn-danger">Reject</button>
												</td>
											</tr>
											<tr>
												<td>North</td>
												<td>Pt0006</td>
												<td>Naga prakash</td>
												<td>RBH</td>
												<td>Earned</td>
												<td>02-08-2019 & 02-08-2019</td>
												<td>
													<button class="btn btn-sm btn-success">Accept</button>
													<button class="btn btn-sm btn-danger">Reject</button>
												</td>
											</tr>
											<tr>
												<td>East</td>
												<td>Pt0009</td>
												<td>Naga prakash</td>
												<td>RBH</td>
												<td>Sick</td>
												<td>30-07-2019 & 30-07-2019</td>
												<td>
													<button class="btn btn-sm btn-success">Accept</button>
													<button class="btn btn-sm btn-danger">Reject</button>
												</td>
											</tr>
											<tr>
												<td>west</td>
												<td>Pt0004</td>
												<td>Naga prakash</td>
												<td>RBH</td>
												<td>Casual</td>
												<td>30-07-2019 & 31-07-2019</td>
												<td>
													<button class="btn btn-sm btn-success">Accept</button>
													<button class="btn btn-sm btn-danger">Reject</button>
												</td>
											</tr>
										</tbody>
									</table>
                                </div>
                            </section>
				</div>
				
			</div>
			<?php include('footer.php'); ?>
		</div>
	</div>
	<?php include('script.php'); ?>
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