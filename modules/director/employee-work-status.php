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
                        <h4 class="weight-500 mb-20 text-primary">Employee Work Status</h4>
                           
                                    <!-- data table  Start -->
                                   
									<div class="row table-responsive">
                                    <table class="table data-table">
                                       <thead>
                                          <tr>
                                             <th scope="col">#</th>
                                             <th scope="col">Subject of the Work </th>
                                             <th scope="col">Start Date</th>
                                             <th scope="col">End Date</th>
                                             <th scope="col">Department Name</th>
                                             <th scope="col">Employee Id</th>
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
                                             <td>PT0012</td>
                                             <td>Anupama</td>
                                             <td>Completed</td>
                                          </tr>
                                          <tr>
                                             <th scope="row">2</th>
                                             <td>Hospil</td>
                                             <td>21-07-2019</td>
                                             <td>26-07-2019</td>
                                             <td>Testing</td>
                                             <td>PT0014</td>
                                             <td>Arya</td>
                                             <td>In Progress</td>
                                          </tr>
                                          <tr>
                                             <th scope="row">3</th>
                                             <td>Clinic</td>
                                             <td>22-07-2019</td>
                                             <td>27-07-2019</td>
                                             <td>Development</td>
                                             <td>PT0021</td>
                                             <td>Keerthi</td>
                                             <td>Assigned</td>
                                          </tr>
                                       </tbody>
                                    </table>
									</div>
                                    <!-- data table  End -->
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