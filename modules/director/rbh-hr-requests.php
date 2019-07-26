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
               <div class="row clearfix">
                  <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                     <div class="pd-20 bg-white border-radius-4 box-shadow">
                        <h5 class="weight-500 mb-20 text-primary">RBH & HR Requests</h5>
                        <div class="tab">
                           <ul class="nav nav-tabs customtab" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#rbhrequests" role="tab" aria-selected="true">RBH Requests</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#hrrequests" role="tab" aria-selected="false">HR Requests</a>
                              </li>
                           </ul>
                           <div class="tab-content">
                              <div class="tab-pane fade show active" id="rbhrequests" role="tabpanel">
                                 <div class="pd-20">
                                    <!-- basic table  Start -->
                                    <div class="clearfix mb-20">
                                       <div class="pull-left">
                                          <h4 class="text-blue">RBH Requests</h4>
                                       </div>
                                    </div>
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th scope="col">#</th>
                                             <th scope="col">Region</th>
                                             <th scope="col">Name</th>
                                             <th scope="col">Age</th>
                                             <th scope="col">Date of Join</th>
                                             <th scope="col">Profile</th>
                                             <th scope="col">Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <th scope="row">1</th>
                                             <td>East</td>
                                             <td>Naga Prakash</td>
                                             <td>30</td>
                                             <td>29-07-2019</td>
                                             <td><a href="#" class="text-primary">Link</a></td>
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
                                             <td>East</td>
                                             <td>Naga Prakash</td>
                                             <td>30</td>
                                             <td>29-07-2019</td>
                                             <td><a href="#" class="text-primary">Link</a></td>
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
                                             <td>East</td>
                                             <td>Naga Prakash</td>
                                             <td>30</td>
                                             <td>29-07-2019</td>
                                             <td><a href="#" class="text-primary">Link</a></td>
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
                                    <!-- basic table  End -->
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="hrrequests" role="tabpanel">
                                 <div class="pd-20">
                                    <!-- basic table  Start -->
                                    <div class="clearfix mb-20">
                                       <div class="pull-left">
                                          <h4 class="text-blue">HR Requests</h4>
                                       </div>
                                    </div>
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th scope="col">#</th>
                                              <th scope="col">Region</th>
                                             <th scope="col">Name</th>
                                             <th scope="col">Age</th>
                                             <th scope="col">Date of Join</th>
                                             <th scope="col">Profile</th>
                                             <th scope="col">Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <th scope="row">1</th>
                                             <td>North</td>
                                             <td>Rita</td>
                                             <td>35</td>
                                             <td>29-07-2019</td>
                                             <td><a href="#" class="text-primary">Link</a></td>
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
                                             <td>North</td>
                                             <td>Rita</td>
                                             <td>35</td>
                                             <td>29-07-2019</td>
                                             <td><a href="#" class="text-primary">Link</a></td>
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
                                             <td>North</td>
                                             <td>Rita</td>
                                             <td>35</td>
                                             <td>29-07-2019</td>
                                             <td><a href="#" class="text-primary">Link</a></td>
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
                                    <!-- basic table  End -->
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