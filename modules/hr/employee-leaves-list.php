<!DOCTYPE html>
<html>
	<?php include('head.php'); ?>
<head>

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
					
					
						<div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!-- Custom Tabs -->
                        <form>
						 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Employee Leave Request</legend>
						
                            <section>
                                <div class="row">
                                    <div class="col-md-12">
                                       <table class="data-table   table-bordered ">
										<thead>
											<tr>
												<th>Employee ID</th>
												<th>Name</th>
												<th>Department</th>
												<th>Sick </th>
												<th>Casual </th>
												<th>Paid </th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Pt0001</td>
												<td>Bayapureddy</td>
												<td>IT</td>
												<td>8(12)</td>
												<td>6(7)</td>
												<td>10(10)</td>
											</tr>
											<tr>
												<td>Pt0001</td>
												<td>Bayapureddy</td>
												<td>IT</td>
												<td>8(12)</td>
												<td>6(7)</td>
												<td>10(10)</td>
											</tr>
											
											<tr>
												<td>Pt0001</td>
												<td>Bayapureddy</td>
												<td>IT</td>
												<td>8(12)</td>
												<td>6(7)</td>
												<td>10(10)</td>
											</tr>
											<tr>
												<td>Pt0001</td>
												<td>Bayapureddy</td>
												<td>IT</td>
												<td>8(12)</td>
												<td>6(7)</td>
												<td>10(10)</td>
											</tr><tr>
												<td>Pt0001</td>
												<td>Bayapureddy</td>
												<td>IT</td>
												<td>8(12)</td>
												<td>6(7)</td>
												<td>10(10)</td>
											</tr>
											<tr>
												<td>Pt0001</td>
												<td>Bayapureddy</td>
												<td>IT</td>
												<td>8(12)</td>
												<td>6(7)</td>
												<td>10(10)</td>
											</tr>
											<tr>
												<td>Pt0001</td>
												<td>Bayapureddy</td>
												<td>IT</td>
												<td>8(12)</td>
												<td>6(7)</td>
												<td>10(10)</td>
											</tr>
										</tbody>
									</table>
                                    </div>
                                    
                                  
                                </div>
                            </section>
							</fieldset>
							 
							
                        </div>
						
                        </form>
                        <!-- nav-tabs-custom -->
                    </div>
                </div>
            </div>
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