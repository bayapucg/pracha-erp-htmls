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
                        <h4 class="weight-500 mb-20 text-primary">Recruiting</h4>
                        <div class="tab">
                           <ul class="nav nav-tabs customtab" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#create-requirement" role="tab" aria-selected="true">Create Requirement</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#requirement-status" role="tab" aria-selected="false">Status of Requirement</a>
                              </li>
                           </ul>
                           <div class="tab-content">
                              <div class="tab-pane fade show active" id="create-requirement" role="tabpanel">
                                 <div class="pd-20">
                                    <div class="clearfix mb-20">
                                       <div class="pull-left">
                                          <h5 class="text-blue">Create Requirement</h5>
                                       </div>
                                    </div>
                                    <form>
                                       <div class="row">
                                          <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
                                                <label>Select Department</label>
                                                <select class="selectpicker form-control" data-style="btn-outline-primary">
                                                   <optgroup label="Select Department" data-max-options="2">
                                                      <option>Select Department</option>
                                                      <option>IT</option>
                                                      <option>Sales</option>
                                                      <option>HR</option>
                                                   </optgroup>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
                                                <label>Select Designation</label>
                                                <select class="selectpicker form-control" data-style="btn-outline-primary">
                                                   <optgroup label="Select Designation" data-max-options="2">
                                                      <option>Select Designation</option>
                                                      <option>Developer</option>
                                                      <option>UI Developer</option>
                                                      <option>Quality Assurance</option>
                                                   </optgroup>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
                                                <label>Experience</label>
                                                <input type="number" class="form-control" placeholder="Enter Experience">
                                             </div>
                                          </div> 
										  <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
                                                <label>Duration of Requirement</label>
                                                <input type="text" class="form-control" placeholder="Enter Duration of Requirement">
                                             </div>
                                          </div>
                                          <div class="form-group col-md-12">
                                             <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary" name="create" value="create">Create Requirement</button>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="requirement-status" role="tabpanel">
                                 <div class="pd-20">
                                    <!-- data table  Start -->
                                    <div class="clearfix mb-20">
                                       <div class="pull-left">
                                          <h5 class="text-blue">Status of Requirement</h5>
                                       </div>
                                    </div>
                                    <div class="row table-responsive">
                                       <table class="table data-table">
                                          <thead>
                                             <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Department</th>
                                                <th scope="col">Designation</th>
                                                <th scope="col">Experience</th>
                                                <th scope="col">Duration of Requirement</th>
                                                <th scope="col">Staus</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <th scope="row">1</th>
                                                <td>IT</td>
                                                <td>Quality Assurance</td>
                                                <td>0-1 year</td>
                                                <td>20 days</td>
                                                <td>Pending</td>
                                             </tr>
                                             <tr>
                                                <th scope="row">2</th>
                                                <td>Sales</td>
                                                <td>BDE</td>
                                                <td>4</td>
                                                <td>10 days</td>
                                                <td>Accepted</td>
                                             </tr>
                                             <tr>
                                                <th scope="row">3</th>
                                                <td>IT</td>
                                                <td>Developer</td>
                                                <td>5</td>
                                                <td>15 days</td>
                                                <td>Pending</td>
                                             </tr>
                                          </tbody>
                                       </table>
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