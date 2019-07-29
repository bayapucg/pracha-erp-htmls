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
						
					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<h4 class="mb-20 text-primary">Reports</h4>
							<div class="tab">
								<ul class="nav nav-tabs customtab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#home2" role="tab" aria-selected="true">Create  Report</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#profile2" role="tab" aria-selected="false"> Report List</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#profile3" role="tab" aria-selected="false"> Manage Reports</a>
									</li>
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="home2" role="tabpanel">
										<div class="pd-20">
											<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
						<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue mb-30">Create Report</h4>
						</div>
						
					</div>
<form>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Name Of the Work Report</label>
									<input type="text" class="form-control" placeholder="Name Of the Work Report">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
							<label>Upload File</label>
							<input type="file" class="form-control-file form-control height-auto">
									</div>
							</div>

							  <div class="form-group col-md-12">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Confirm</button>
                              
                            </div>
                        </div>
						</div>

						
					</form>
				</div>
										</div>
									</div>
									<div class="tab-pane fade" id="profile2" role="tabpanel">
										<div class="pd-20">
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue">Reports List</h4>
						</div>
						
					</div>
					<table class="table data-table-export">
						<thead>
							<tr>
								<th scope="col">S.No</th>
								<th scope="col">Date</th>
								<th scope="col">Name of the Work Report </th>
								<th scope="col">Download Work Report</th>
								<th scope="col">Actions</th>
							
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>20-07-2019</td>
								<td>SVS</td>
								<td><a href="#" class="text-primary">Download File <i class="icon-copy fa fa-file-pdf-o" aria-hidden="true"></i></a></td>                                            
								<td>
                                                <div class="dropdown">
                                                   <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                   <i class="fa fa-ellipsis-h"></i>
                                                   </a>
                                                   <div class="dropdown-menu dropdown-menu-right">
                                                      <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
                                                      <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
                                                      <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
                                                   </div>
                                                </div>
                                </td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>22-07-2019</td>
								<td>Hospil</td>
									<td><a href="#" class="text-primary">Download File <i class="icon-copy fa fa-file-pdf-o" aria-hidden="true"></i></a></td>                                            
								<td>
                                                <div class="dropdown">
                                                   <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                   <i class="fa fa-ellipsis-h"></i>
                                                   </a>
                                                   <div class="dropdown-menu dropdown-menu-right">
                                                      <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
                                                      <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
                                                      <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
                                                   </div>
                                                </div>
                                </td>
								
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>25-07-2019</td>
								<td>clinic</td>
									<td><a href="#" class="text-primary">Download File <i class="icon-copy fa fa-file-pdf-o" aria-hidden="true"></i></a></td>                                            
								<td>
                                                <div class="dropdown">
                                                   <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                   <i class="fa fa-ellipsis-h"></i>
                                                   </a>
                                                   <div class="dropdown-menu dropdown-menu-right">
                                                      <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
                                                      <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
                                                      <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
                                                   </div>
                                                </div>
                                </td>
								
							</tr>
						</tbody>
					</table>
					<div class="collapse collapse-box" id="basic-table" >
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#basic-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#basic-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="basic-table-code">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
    </tr>
  </tbody>
</table>
							</code></pre>
						</div>
					</div>
				</div>
										</div>
									</div>
									<div class="tab-pane fade" id="profile3" role="tabpanel">
										<div class="pd-20">
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue">Manage Reports</h4>
						</div>
						
					</div>
					<table class="table data-table-export">
						<thead>
							<tr>
								<th scope="col">S.No</th>
								<th scope="col">Date</th>
								<th scope="col">Name of the Work Report </th>
								<th scope="col">Uploaded By</th>
								<th scope="col">Download Work Report</th>
								<th scope="col">Actions</th>
							
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>20-07-2019</td>
								<td>SVS</td>
								<td>Sushma</td>
								<td><a href="#" class="text-primary">Download File <i class="icon-copy fa fa-file-pdf-o" aria-hidden="true"></i></a></td>                                            
								<td>
                                                <div class="dropdown">
                                                   <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                   <i class="fa fa-ellipsis-h"></i>
                                                   </a>
                                                   <div class="dropdown-menu dropdown-menu-right">
                                                      <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
                                                      <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
                                                      <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
                                                   </div>
                                                </div>
                                </td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>22-07-2019</td>
								<td>Hospil</td>
								<td>Sireesha</td>
									<td><a href="#" class="text-primary">Download File <i class="icon-copy fa fa-file-pdf-o" aria-hidden="true"></i></a></td>                                            
								<td>
                                                <div class="dropdown">
                                                   <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                   <i class="fa fa-ellipsis-h"></i>
                                                   </a>
                                                   <div class="dropdown-menu dropdown-menu-right">
                                                      <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
                                                      <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
                                                      <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
                                                   </div>
                                                </div>
                                </td>
								
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>25-07-2019</td>
								<td>clinic</td>
								<td>Anupama</td>
									<td><a href="#" class="text-primary">Download File <i class="icon-copy fa fa-file-pdf-o" aria-hidden="true"></i></a></td>                                            
								<td>
                                                <div class="dropdown">
                                                   <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                   <i class="fa fa-ellipsis-h"></i>
                                                   </a>
                                                   <div class="dropdown-menu dropdown-menu-right">
                                                      <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
                                                      <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
                                                      <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
                                                   </div>
                                                </div>
                                </td>
								
							</tr>
						</tbody>
					</table>
					<div class="collapse collapse-box" id="basic-table" >
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#basic-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#basic-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="basic-table-code">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
    </tr>
  </tbody>
</table>
							</code></pre>
						</div>
					</div>
				</div>
										</div>
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