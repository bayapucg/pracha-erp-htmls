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
               <div class="row clearfix">
                  <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                     <div class="pd-20 bg-white border-radius-4 box-shadow">
                        <h4 class="weight-500 mb-20 text-primary">Leave Form</h4>
							<div class="tab">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item">
										<a class="nav-link active text-blue" data-toggle="tab" href="#home" role="tab" aria-selected="true">Apply for leave / Work from Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Late / Early permission</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#contact" role="tab" aria-selected="false">My Leaves</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="home" role="tabpanel">
										<div class="pd-20">
											<form>
                                       <div class="row">
                                          <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
                                                <label>Leave Reason</label>
                                                <input type="text" class="form-control" placeholder="Reason For Leave">
                                             </div>
                                          </div>
                                          <div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>Leave Start Date</label>
													<input class="form-control datetimepicker" placeholder="Choose Leave Date From" type="text">
												</div>
                                          </div>
                                          <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
													<label>Leave End Date</label>
													<input class="form-control datetimepicker" placeholder="Choose Leave Date To" type="text">
												</div>
                                          </div>
										  <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
                                                <label>Work Sharing Partner</label>
                                                <input type="text" class="form-control" placeholder="Enter Work Sharing Partner">
                                             </div>
                                          </div>
                                          <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
                                               <label class="col-sm-12 col-md-2 col-form-label">Type Of Leave</label>
										<div class="col-sm-12 col-md-10">
											<select class="custom-select col-12">
												<option selected="">Choose...</option>
												<option value="1">Casual Leave</option>
												<option value="2">Sick Leave</option>
									
											</select>
										</div>
                                             </div>
                                          </div>
										  <br>
										  <br>
                                     <div class="form-group col-md-12">
                                             <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary" name="assign" value="Assign">Apply For Leave</button>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
										</div>
									</div>
									<div class="tab-pane fade" id="profile" role="tabpanel">
										<div class="pd-20">
											<form>
                                       <div class="row">
                                          <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
                                                <label>Reason For Late</label>
                                                <input type="text" class="form-control" placeholder="Reason For Late">
                                             </div>
                                          </div>
										  <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
                                                <label>Reason For Early Leaving</label>
                                                <input type="text" class="form-control" placeholder="Enter Reason For Early Leaving">
                                             </div>
                                          </div>
                                          <div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>Office Entry Time</label>
														<input class="form-control time-picker-default" placeholder="time" type="text">
												</div>
                                          </div>
                                          <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
													<label>Office Leaving Time</label>
														<input class="form-control time-picker-default" placeholder="time" type="text">
												</div>
                                          </div>
										 
                                         
                                     <div class="form-group col-md-12">
                                             <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary" name="assign" value="Assign">Submit</button>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
										</div>
									</div>
									<div class="tab-pane fade" id="contact" role="tabpanel">
										<div class="pd-20">
											
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