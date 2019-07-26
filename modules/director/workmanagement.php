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
                        <h4 class="weight-500 mb-20 text-primary">Work Management</h4>
                        <div class="tab">
                           <ul class="nav nav-tabs customtab" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#assignwork" role="tab" aria-selected="true">Assign Work</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#workstatus" role="tab" aria-selected="false">Work Status</a>
                              </li>
                           </ul>
                           <div class="tab-content">
                              <div class="tab-pane fade show active" id="assignwork" role="tabpanel">
                                 <div class="pd-20">
                                    <div class="clearfix mb-20">
                                       <div class="pull-left">
                                          <h5 class="text-blue">Assign Work</h5>
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
                                                <label>Select Region</label>
                                                <select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
                                                   <option value="AK">Select Region</option>
                                                   <option value="AK">East</option>
                                                   <option value="AK">West</option>
                                                   <option value="AK">North</option>
                                                   <option value="AK">South</option>
                                                   <option value="AK">Central</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-md-3 col-sm-12">
                                             <div class="form-group">
                                                <label>Select Department</label>
                                                <select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
                                                   <option value="AK">Select Department</option>
                                                   <option value="AK">IT</option>
                                                   <option value="AK">Sales</option>
                                                   <option value="AK">HR</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-md-3 col-sm-12">
                                             <div class="form-group">
                                                <label>Select Employee</label>
                                                <select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
                                                   <option value="AK">Select Employee</option>
                                                   <option value="AK">Reddamma</option>
                                                   <option value="AK">Rita</option>
                                                   <option value="AK">Chakkani</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-md-3 col-sm-12">
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
                                                <button type="submit" class="btn btn-primary" name="assign" value="Assign">Assign</button>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="workstatus" role="tabpanel">
                                 <div class="pd-20">
                                    <!-- data table  Start -->
                                    <div class="clearfix mb-20">
                                       <div class="pull-left">
                                          <h5 class="text-blue">Work Status</h5>
                                       </div>
                                    </div>
                                    <table class="table data-table-export">
                                       <thead>
                                          <tr>
                                             <th scope="col">#</th>
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
                                             <td>27-07-2019</td>
                                             <td>Testing</td>
                                             <td>Keerthi</td>
                                             <td>Completed</td>
                                          </tr>
                                       </tbody>
                                    </table>
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