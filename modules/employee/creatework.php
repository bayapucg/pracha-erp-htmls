<!DOCTYPE html>
<html>
<<<<<<< HEAD
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
							<h5 class="weight-500 mb-20 text-primary">Work Management</h5>
							<div class="tab">
								<ul class="nav nav-tabs customtab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#home2" role="tab" aria-selected="true">Create Work</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#profile2" role="tab" aria-selected="false">Work List</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#profile3" role="tab" aria-selected="false">My Works</a>
									</li>
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="home2" role="tabpanel">
										<div class="pd-20">
											<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
						<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue mb-30">Create Work</h4>
						</div>
						
					</div>
					<form>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Subject of the Work</label>
									<input type="text" class="form-control" placeholder="Subject of the work">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Start Date and time</label>
									<input class="form-control datetimepicker" placeholder="Choose Date and time" type="text">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>End Date and time</label>
									<input class="form-control datetimepicker" placeholder="Choose Date and time" type="text">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
							<label>Select Department</label>
							<select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
									<option value="AK">Select Department</option>
							</select>
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Select Employee</label>
							<select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
									<option value="AK">Select Employee</option>
							</select>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
									<div class="form-group">
							<label>Upload File</label>
							<input type="file" class="form-control-file form-control height-auto">
									</div>
							</div>
							<div class="col-md-12 col-sm-12">
							<div class="form-group">
							<label>Comment</label>
							<textarea class="form-control" rows="5" id="comment"></textarea>						
							</div>
						</div>
							  <div class="form-group col-md-12">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit" class="btn btn-primary" name="Create" value="Create">Create</button>
                              
                            </div>
=======
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
                  <h5 class="weight-500 mb-20 text-primary">Work Management</h5>
                  <div class="tab">
                     <ul class="nav nav-tabs customtab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" data-toggle="tab" href="#home2" role="tab" aria-selected="true">Create Work</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#profile2" role="tab" aria-selected="false">Work List</a>
                        </li>
                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane fade show active" id="home2" role="tabpanel">
                           <div class="pd-20">
                              <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                                 <div class="clearfix">
                                    <div class="pull-left">
                                       <h4 class="text-blue mb-30">Create Work</h4>
                                    </div>
                                 </div>
                                 <form>
                                    <div class="row">
                                       <div class="col-md-6 col-sm-12">
                                          <div class="form-group">
                                             <label>Subject of the Work</label>
                                             <input type="text" class="form-control" placeholder="Subject of the work">
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-sm-12">
                                          <div class="form-group">
                                             <label>Start Date and time</label>
                                             <input class="form-control datetimepicker" placeholder="Choose Date and time" type="text">
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-sm-12">
                                          <div class="form-group">
                                             <label>End Date and time</label>
                                             <input class="form-control datetimepicker" placeholder="Choose Date and time" type="text">
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-sm-12">
                                          <div class="form-group">
                                             <label>Select Department</label>
                                             <select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
                                                <option value="AK">Select Department</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-sm-12">
                                          <div class="form-group">
                                             <label>Select Employee</label>
                                             <select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
                                                <option value="AK">Select Employee</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-6 col-sm-12">
                                          <div class="form-group">
                                             <label>Upload File</label>
                                             <input type="file" class="form-control-file form-control height-auto">
                                          </div>
                                       </div>
                                       <div class="col-md-12 col-sm-12">
                                          <div class="form-group">
                                             <label>Comment</label>
                                             <textarea class="form-control" rows="5" id="comment"></textarea>						
                                          </div>
                                       </div>
                                       <div class="form-group col-md-12">
                                          <div class="col-lg-9 col-lg-offset-3">
                                             <button type="submit" class="btn btn-primary" name="Create" value="Create">Create</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
>>>>>>> d0315ab3d8b86c2495cbee846ddca08af97bf977
                        </div>
                        <div class="tab-pane fade" id="profile2" role="tabpanel">
                           <div class="pd-20">
                              <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                                 <div class="clearfix mb-20">
                                    <div class="pull-left">
                                       <h4 class="text-blue">Basic Table</h4>
                                    </div>
                                 </div>
                                 <table class="table data-table-export">
                                    <thead>
                                       <tr>
                                          <th scope="col">S.No</th>
                                          <th scope="col">Subject of the Work </th>
                                          <th scope="col">Start Date</th>
                                          <th scope="col">End Date</th>
                                          <th scope="col">Department Name</th>
                                          <th scope="col">Employee Name</th>
                                          <th scope="col">Comments</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                          <td>@mdo</td>
                                          <td>@mdo</td>
                                          <td><span class="badge badge-primary">Primary</span></td>
                                       </tr>
                                       <tr>
                                          <th scope="row">2</th>
                                          <td>Jacob</td>
                                          <td>Thornton</td>
                                          <td>@fat</td>
                                          <td>@fat</td>
                                          <td>@fat</td>
                                          <td><span class="badge badge-secondary">Secondary</span></td>
                                       </tr>
                                       <tr>
                                          <th scope="row">3</th>
                                          <td>Larry</td>
                                          <td>the Bird</td>
                                          <td>@twitter</td>
                                          <td>@twitter</td>
                                          <td>@twitter</td>
                                          <td><span class="badge badge-success">Success</span></td>
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
							<h4 class="text-blue">Work List</h4>
						</div>
						
					</div>
					<table class="table data-table-export">
						<thead>
							<tr>
								<th scope="col">S.No</th>
								<th scope="col">Subject of the Work </th>
								<th scope="col">Start Date</th>
								<th scope="col">End Date</th>
								<th scope="col">Department Name</th>
								<th scope="col">Employee Name</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>SVS</td>
								<td>20-07-2019</td>
								<td>25-07-2019</td>
								<td>Testing</td>
								<td>Anupama</td>
								<td>Assigned</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Hospil</td>
								<td>21-07-2019</td>
								<td>26-07-2019</td>
								<td>Testing</td>
								<td>Arya</td>
								<td>Pending</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Clinic</td>
								<td>22-07-2019</td>
								<td>22-07-2019</td>
								<td>27-07-2019</td>
								<td>Keerthi</td>
								<td>Completed</td>
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
							<h4 class="text-blue">My Works</h4>
						</div>
						
					</div>
					<table class="table data-table-export">
						<thead>
							<tr>
								<th scope="col">S.No</th>
								<th scope="col">Subject of the Work </th>
								<th scope="col">Start Date</th>
								<th scope="col">End Date</th>
								<th scope="col">Files</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>SVS</td>
								<td>20-07-2019</td>
								<td>25-07-2019</td>
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
								<td>Hospil</td>
								<td>21-07-2019</td>
								<td>26-07-2019</td>
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
								<td>Clinic</td>
								<td>22-07-2019</td>
								<td>22-07-2019</td>
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
>>>>>>> 3662428371ef11b2bb0450d424c7877cb86ff437
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
<<<<<<< HEAD
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
=======
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
>>>>>>> d0315ab3d8b86c2495cbee846ddca08af97bf977
</html>