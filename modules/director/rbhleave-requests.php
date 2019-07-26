<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/responsive.dataTables.css">
</head>
<body>
	<?php include('header.php'); ?>
	<?php include('sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue">RBH Leave Requests</h4>
						</div>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Region</th>
								<th scope="col">Name</th>
								<th scope="col">Leave Start Date</th>
								<th scope="col">Leave End Date</th>
								<th scope="col">Reason of Leave</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>South</td>
								<td>Naga Prakash</td>
								<td>28-07-2019</td>
								<td>29-07-2019</td>
								<td>Sick</td>
								<td>
                                    <div class="dropdown">
										<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                         <i class="fa fa-ellipsis-h"></i>
                                        </a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Accept</a>
											<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i>Reject</a>
											<a class="dropdown-item" href="#"><i class="fa fa-trash"></i>Comment</a>
										</div>
                                    </div>
                                </td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>South</td>
								<td>Naga Prakash</td>
								<td>28-07-2019</td>
								<td>29-07-2019</td>
								<td>Sick</td>
								<td>
                                    <div class="dropdown">
										<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                         <i class="fa fa-ellipsis-h"></i>
                                        </a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Accept</a>
											<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i>Reject</a>
											<a class="dropdown-item" href="#"><i class="fa fa-trash"></i>Comment</a>
										</div>
                                    </div>
                                </td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>South</td>
								<td>Naga Prakash</td>
								<td>28-07-2019</td>
								<td>29-07-2019</td>
								<td>Sick</td>
								<td>
                                    <div class="dropdown">
										<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                         <i class="fa fa-ellipsis-h"></i>
                                        </a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Accept</a>
											<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i>Reject</a>
											<a class="dropdown-item" href="#"><i class="fa fa-trash"></i>Comment</a>
										</div>
                                    </div>
                                </td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>South</td>
								<td>Naga Prakash</td>
								<td>28-07-2019</td>
								<td>29-07-2019</td>
								<td>Sick</td>
								<td>
                                    <div class="dropdown">
										<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                         <i class="fa fa-ellipsis-h"></i>
                                        </a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Accept</a>
											<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i>Reject</a>
											<a class="dropdown-item" href="#"><i class="fa fa-trash"></i>Comment</a>
										</div>
                                    </div>
                                </td>
							</tr>
						</tbody>
					</table>
				</div>
				
			</div>
			<?php include('footer.php'); ?>
		</div>
	</div>
	<?php include('script.php'); ?>
	<script src="src/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/media/js/dataTables.bootstrap4.js"></script>
	<script src="src/plugins/datatables/media/js/dataTables.responsive.js"></script>
	<script src="src/plugins/datatables/media/js/responsive.bootstrap4.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/media/js/button/dataTables.buttons.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.bootstrap4.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.print.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.html5.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.flash.js"></script>
	<script src="src/plugins/datatables/media/js/button/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/media/js/button/vfs_fonts.js"></script>
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
					"info": "_START_-_END_ of _TOTAL_ entries",
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
					"info": "_START_-_END_ of _TOTAL_ entries",
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