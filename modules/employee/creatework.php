<!DOCTYPE html>
<html>
   <head>
      <?php include('head.php'); ?>
      <link rel="stylesheet" type="text/css" href="../../src/plugins/datatables/media/css/jquery.dataTables.css">
      <link rel="stylesheet" type="text/css" href="../../src/plugins/datatables/media/css/dataTables.bootstrap4.css">
      <link rel="stylesheet" type="text/css" href="../src/plugins/datatables/media/css/responsive.dataTables.css">
	  	<link rel="stylesheet" type="text/css" href="vendors/styles/bootstrapValidator.css">

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
                                 <a class="nav-link active" data-toggle="tab" href="#creatework" role="tab" aria-selected="true">Create Work</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#workslist" role="tab" aria-selected="false">Work List</a>
                              </li>
							  <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#myworks" role="tab" aria-selected="false">My Works</a>
                              </li>
                           </ul>
                           <div class="tab-content">
                              <div class="tab-pane fade show active" id="creatework" role="tabpanel">
                                 <div class="pd-20">
                                    <div class="clearfix mb-20">
                                       <div class="pull-left">
                                          <h5 class="text-blue">Create Work</h5>
                                       </div>
                                    </div>
                                     <form id="creatework" method="post" action="creatework.php">
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
                                                <button type="submit" class="btn btn-primary" name="assign" value="Assign">Create</button>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="workslist" role="tabpanel">
                                 <div class="pd-20">
                                    <!-- data table  Start -->
                                    <div class="clearfix mb-20">
                                       <div class="pull-left">
                                          <h5 class="text-blue">Work List</h5>
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
                                             			<td>
											<a href="#" data-toggle="modal" data-target="#small-modal" type="button">
														<button class="btn btn-sm btn-primary">Comment</button>
											</a>
													
												
											</td>
                                          </tr>
                                          <tr>
                                             <th scope="row">2</th>
                                             <td>Hospil</td>
                                             <td>21-07-2019</td>
                                             <td>26-07-2019</td>
                                             <td>Testing</td>
                                             <td>Arya</td>
                                             			<td>
											<a href="#" data-toggle="modal" data-target="#small-modal" type="button">
														<button class="btn btn-sm btn-primary">Comment</button>
											</a>											
											</td>
                                          </tr>
                                          <tr>
                                             <th scope="row">3</th>
                                             <td>Clinic</td>
                                             <td>22-07-2019</td>
                                             <td>27-07-2019</td>
                                             <td>Testing</td>
                                             <td>Keerthi</td>
                                             			<td>
											<a href="#" data-toggle="modal" data-target="#small-modal" type="button">
														<button class="btn btn-sm btn-primary">Comment</button>
											</a>
													
												
											</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <!-- data table  End -->
                                 </div>
                              </div>  
							  <div class="tab-pane fade" id="myworks" role="tabpanel">
                                 <div class="pd-20">
                                    <!-- data table  Start -->
                                    <div class="clearfix mb-20">
                                       <div class="pull-left">
                                          <h5 class="text-blue">My Works</h5>
                                       </div>
                                    </div>
                                    <table class="table data-table-export">
                                       <thead>
                                          <tr>
                                             <th scope="col">#</th>
                                             <th scope="col">Subject of the Work </th>
                                             <th scope="col">Start Date</th>
                                             <th scope="col">End Date</th>
                                             <th scope="col">File</th> 
											 <th scope="col">Comments</th>
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
											<a href="#" data-toggle="modal" data-target="#small-modal" type="button">
														<button class="btn btn-sm btn-primary">Comment</button>
											</a>
													
													
											</td>
                                         
                                          </tr>
                                          <tr>
                                             <th scope="row">2</th>
                                             <td>Hospil</td>
                                             <td>21-07-2019</td>
                                             <td>26-07-2019</td>
											 <td><a href="#" class="text-primary">Download File <i class="icon-copy fa fa-file-pdf-o" aria-hidden="true"></i></a></td> 
															<td>
											<a href="#" data-toggle="modal" data-target="#small-modal" type="button">
														<button class="btn btn-sm btn-primary">Comment</button>
											</a>
													
												
											</td>
                                          </tr>
                                          <tr>
                                             <th scope="row">3</th>
                                             <td>Clinic</td>
                                             <td>22-07-2019</td>
                                             <td>27-07-2019</td>
											 <td><a href="#" class="text-primary">Download File <i class="icon-copy fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
												<td>
											<a href="#" data-toggle="modal" data-target="#small-modal" type="button">
														<button class="btn btn-sm btn-primary">Comment</button>
											</a>
													
												
											</td>		
                                               
                                                      </tr>
                                       </tbody>
                                    </table>
                                    <!-- data table  End -->
                                 </div>
                              </div>
							  
							<div>
							<div class="modal fade" id="small-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel">Comment</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<textarea class="form-control" rows="4" id="comment" placeholder="Enter Comments"></textarea>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										</div>
									</div>
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
	  
	  	<script src="D:\xampp\htdocs\pracha-erp-htmls\vendors\scripts"></script>

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
	  
	  <script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('creatework').bootstrapValidator({
//        live: 'disabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstName: {
                group: '.col-lg-4',
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    }
                }
            },
            lastName: {
                group: '.col-lg-4',
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    }
                }
            },
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    },
                    remote: {
                        type: 'POST',
                        url: 'remote.php',
                        message: 'The username is not available'
                    },
                    different: {
                        field: 'password,confirmPassword',
                        message: 'The username and password cannot be the same as each other'
                    }
                }
            },
            email: {
                validators: {
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'The password and its confirm are not the same'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and cannot be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            birthday: {
                validators: {
                    date: {
                        format: 'YYYY/MM/DD',
                        message: 'The birthday is not valid'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            'languages[]': {
                validators: {
                    notEmpty: {
                        message: 'Please specify at least one language you can speak'
                    }
                }
            },
            'programs[]': {
                validators: {
                    choice: {
                        min: 2,
                        max: 4,
                        message: 'Please choose 2 - 4 programming languages you are good at'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }
        }
    });

    // Validate the form manually
    $('#validateBtn').click(function() {
        $('creatework').bootstrapValidator('validate');
    });

    $('#resetBtn').click(function() {
        $('creatework').data('bootstrapValidator').resetForm(true);
    });
});
</script>
   </body>
</html>