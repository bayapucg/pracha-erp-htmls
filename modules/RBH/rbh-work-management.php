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
                        <div class="row">
                        <div class="form-group col-md-6">
							<div>
								<div>
									<label style="line-height:25px" class=""><b>Start Date of the project</b></label>
								</div>
								<input type="date" name="work" placeholder="Title"/>
							</div>
                            <label class="mt-4"><b>Work assigned to rbh</b></label>
							<div>
								<label class="">Work Title</label>
								<input type="text" name="work" placeholder="Title"/>
							</div>
                            
                            <div class="py-4">
								<label class=""><b>Work Description</b></label>
                                <textarea value="" class="form-control" name="firstName" placeholder="" rows="1"></textarea>
                            </div>
                        </div>
						<div class="form-group col-md-6">
						<h6 class="py-2"><b>Work Status</b></h6>
							<div>
							  <input type="radio" checked="checked" name="radio">
							  <label class="checkcontainer">Completed
							  <span class="radiobtn"></span>
							</label></div>
							<div>
							  <input type="radio" name="radio">
							  <label class="checkcontainer">In-Process
							  <span class="radiobtn"></span>
							</label></div>
							<div>
							  <input type="radio" name="radio">
							  <label class="checkcontainer">Pending
							  <span class="radiobtn"></span>
							</label>
							</div>
							<div>
								<label style="line-height:25px" class=""><b>End Date of the project</b></label>
							</div>
							<div>
								<input type="date" name="work" placeholder="Title"/>
							</div>
                        </div>
						
                        <div class="form-group col-md-12">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Assign</button>
                              
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