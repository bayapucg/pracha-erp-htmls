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
			 <form id="defaultForm" method="post" action="form-validation.php">
                        <h4 class="py-2"><b>Feedback Form</b></h4>
						<div class="row">					  
							<div class="col-md-12">
							<div class="form-group row">
							<label class="col-sm-12 col-md-12 col-form-label">Names</label>
							<div class="col-sm-12 col-md-12">
								<input class="form-control" type="text" placeholder="names">
							</div>
						</div>
									<h6 class="py-2"><b>Feedback</b></h6>
									<div class="py-2">
											<label class=" radio-inline py-1 m-1">
											  <input type="radio" name="optradio" active">Poor
											</label>
											<label class="radio-inline py-1 m-1">
											  <input type="radio" name="optradio">Average
											</label>
											<label class="radio-inline py-1 m-1">
											  <input type="radio" name="optradio">Good
											</label>
											<label class="radio-inline py-1 m-1">
											  <input type="radio" name="optradio">Extreme
											</label>
									</div>	
								</div>
							<div class="col-md-12">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
                            </div>
                        </div>
                        </div>
                    </form>
			
			
			
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