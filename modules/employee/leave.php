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
                        <h4 class="weight-500 mb-20 text-primary">Leave & Time-Off Management</h4>
                        <div class="tab">
                           <ul class="nav nav-tabs customtab" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#ApplyForLeave" role="tab" aria-selected="true">Apply For Leave</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#Time-Off" role="tab" aria-selected="false">Time-Off</a>
                              </li>
							  <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#WorkFromHome" role="tab" aria-selected="false">Work From Home</a>
                              </li>
							  <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#MyLeaves" role="tab" aria-selected="false">My Leaves</a>
                              </li>
                           </ul>
                           <div class="tab-content">
                              <div class="tab-pane fade show active" id="ApplyForLeave" role="tabpanel">
                                 <div class="pd-20">
                                    <div class="clearfix mb-20">
                                       <div class="pull-left">
                                          <h5 class="text-blue">Apply For Leave</h5>
                                       </div>
                                    </div>
                                    <form>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Start Date</label>
									<input class="form-control date-picker" placeholder="Select Date" type="text">
								</div>

							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>End Date</label>
									<input class="form-control date-picker" placeholder="Select Date" type="text">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
							<label>Type Of Leave</label>
									<select class="selectpicker form-control" data-style="btn-outline-primary">
										<optgroup label="Select Type" data-max-options="2">
											<option>Select Type</option>
											<option>Casual Leave - 7</option>
											<option>Sick Leave - 3</option>
											<option>Work from home - 2</option>
											<option>Earned Leave - 4</option>
											<option>Compensation Off - NA</option>
											<option>Maternity Leave - 30</option>
											<option>Other</option>
										</optgroup>
										
									</select>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
							<label>Work Sharing Partner</label>
									<select class="selectpicker form-control" data-style="btn-outline-primary">
										<optgroup label="Select Type" data-max-options="2">
											<option>Select Employee</option>
											<option>Anu</option>
											<option>Arya</option>
											<option>Work from home - 2</option>
											<option>Earned Leave - 4</option>
											<option>Compensation Off - NA</option>
											<option>Maternity Leave - 30</option>
										</optgroup>
										
									</select>
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
                                <button type="submit" class="btn btn-primary" name="Apply" value="Apply">Apply</button>
                              
                            </div>
                        </div>
						</div>

						
					</form>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="Time-Off" role="tabpanel">
                                 <div class="pd-20">
                                    <!-- data table  Start -->
                                    <div class="clearfix mb-20">
                                       <div class="pull-left">
                                          <h5 class="text-blue">Time-Off</h5>
                                       </div>
                                    </div>
                                    <form>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Start Date and time</label>
									<input class="form-control datetimepicker" placeholder="Choose Date and time" type="text">
								</div>

							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>End Date and time</label>
									<input class="form-control datetimepicker" placeholder="Choose Date and time" type="text">
								</div>
							</div>
						
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
							<label>Work Sharing Partner</label>
									<select class="selectpicker form-control" data-style="btn-outline-primary">
										<optgroup label="Select Type" data-max-options="2">
											<option>Select Employee</option>
											<option>Anu</option>
											<option>Arya</option>
											<option>Work from home - 2</option>
											<option>Earned Leave - 4</option>
											<option>Compensation Off - NA</option>
											<option>Maternity Leave - 30</option>
										</optgroup>
										
									</select>
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
                                <button type="submit" class="btn btn-primary" name="Apply" value="Apply">Apply</button>
                              
                            </div>
                        </div>
						</div>

						
					</form>
                                    <!-- data table  End -->
                                 </div>
                              </div>  
							  <div class="tab-pane fade" id="WorkFromHome" role="tabpanel">
                                 <div class="pd-20">
                                    <!-- data table  Start -->
                                    <div class="clearfix mb-20">
                                       <div class="pull-left">
                                          <h5 class="text-blue">Work From Home</h5>
                                       </div>
                                    </div>
                                    <form>
                                       <div class="row">
                                           <div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>Work from home Start Date</label>
													<input class="form-control datetimepicker" placeholder=" Date From" type="text">
												</div>
                                          </div>
                                          <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
													<label>Work from home Leave End Date</label>
													<input class="form-control datetimepicker" placeholder=" Date To" type="text">
												</div>
                                          </div>
										  
										      <div class="col-md-12 col-sm-12">
                                             <div class="form-group">
                                                <label> Reason</label>
                                                <textarea type="text" class="form-control"  rows="4"> Reason For Work From Home</textarea>
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
                                    <!-- data table  End -->
                                 </div>
								 </div>
                              <div class="tab-pane fade" id="MyLeaves" role="tabpanel">
                                 <div class="pd-20">
                                    <!-- data table  Start -->
                                    <div class="clearfix mb-20">
                                       <div class="pull-left">
                                          <h5 class="text-blue">My Remaining Leaves</h5>
                                       </div>
                                    </div>
					
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Leave Types</th>
								<th scope="col">Carry Forward</th>
								<th scope="col">Total</th>
								<th scope="col">leave Taken</th>
								<th scope="col">Leave Balance</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">Sick Leaves</th>
								<td>24(3 years)</td>
								<td>24</td>
								<td>1</td>
								<td>7(per one year)</td>
							</tr>
							<tr>
								<th scope="row">Casual Leaves</th>
								<td>No carry forward</td>
								<td>7</td>
								<td>5</td>
								<td>2(per one year)</td>
							</tr>
							<tr>
								<th scope="row">Paid Leaves</th>
								<td>42( 2 years)</td>
								<td>2</td>
								<td>2</td>
								<td>21(per one year)</td>
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
				
                                    <!-- data table  End -->
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