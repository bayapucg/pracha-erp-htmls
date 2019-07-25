<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?>
	<link rel="stylesheet" type="text/css" href="vendors/styles/bootstrapValidator.css">
	
	
</head>
<body>
	<?php include('header.php'); ?>
	<?php include('sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 blog-detail mx-3 py-4">
		<div class="row">
		<div class="col-md-12">
			<button type="submit" class="btn btn-primary pull-right mt-2" name="signup" value="Sign up" data-toggle="modal" data-target="#bd-example-modal-lg">Apply for leave</button>
		</div>		
		</div>
		<br>
		<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel"><b>Leave Form</b></h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<div class="col-md-12 col-sm-12">
											<div class="form-group row">
											<label class="col-sm-12 col-md-2 col-form-label"><b>From Date</b></label>
											<div class="col-sm-12 col-md-10">
											<input class="form-control date-picker" placeholder="Select Date" type="text">
											</div>
											</div>
											
											<div class="form-group row">
											<label class="col-sm-12 col-md-2 col-form-label"><b>To Date</b></label>
											<div class="col-sm-12 col-md-10">
											<input class="form-control date-picker" placeholder="Select Date" type="text">
											</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label"><b>Leave Type</b></label>
												<div class="col-sm-12 col-md-10">
													<select class="custom-select col-12">
														<option selected="">Choose...</option>
														<option value="1">Sick</option>
														<option value="2">Casual</option>
													</select>
												</div>
											</div>
											<div class="form-group">
											<label><b>Reason for Leave</b></label>
											<textarea class="form-control"></textarea>
											</div>
											</div>
											<div class="form-group col-md-12">
												<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Apply</button>
											</div>
											
										</div>
										
				
									</div>
								</div>
							</div>	
			<div class="table-responsive">			
		<table class="table table-striped">
		  <thead>
			<tr>
			  <th scope="col">S.N0</th>
			  <th scope="col">start date</th>
			  <th scope="col">end date</th>
			  <th scope="col">reason</th>
			  <th scope="col">leave type</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <th scope="row">1</th>
			  <th scope="row">start date</th>
			  <th scope="row">end date</th>
			  <th scope="row">Suffering from fever</th>
			  <th scope="row">Sick Leave</th>
			</tr>
			<tr>
			  <th scope="row">2</th>
			  <th scope="row">start date</th>
			  <th scope="row">end date</th>
			  <th scope="row">Suffering from fever</th>
			  <th scope="row">Sick Leave</th>
			</tr>
			<tr>
			  <th scope="row">3</th>
			  <th scope="row">start date</th>
			  <th scope="row">end date</th>
			  <th scope="row">Suffering from fever</th>
			  <th scope="row">Sick Leave</th>
			</tr>
		  </tbody>
		</table>					
		</div>
		</div>
		</div>
	</div>
	<?php include('script.php'); ?>
	<script src="http://localhost/form-valditions/dist/js/bootstrapValidator.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
    $('#defaultForm').bootstrapValidator({
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
        $('#defaultForm').bootstrapValidator('validate');
    });
    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });
});
</script>
</body>
</html>